<?php
/**
 * exercise sidebar menu showing revisions
 *
 * @package exercise
 */

//If editing a post, show the previous revisions and drafts.
$exercise = elgg_extract('entity', $vars, FALSE);

if (elgg_instanceof($exercise, 'object', 'exercise') && $exercise->canEdit()) {
	$owner = $exercise->getOwnerEntity();
	$revisions = array();

	$auto_save_annotations = $exercise->getAnnotations('exercise_auto_save', 1);
	if ($auto_save_annotations) {
		$revisions[] = $auto_save_annotations[0];
	}

	// count(FALSE) == 1!  AHHH!!!
	$saved_revisions = $exercise->getAnnotations('exercise_revision', 10, 0, 'time_created DESC');
	if ($saved_revisions) {
		$revision_count = count($saved_revisions);
	} else {
		$revision_count = 0;
	}

	$revisions = array_merge($revisions, $saved_revisions);

	if ($revisions) {
		$title = elgg_echo('exercise:revisions');

		$n = count($revisions);
		$body = '<ul class="exercise-revisions">';

		$load_base_url = "exercise/edit/{$exercise->getGUID()}";

		// show the "published revision"
		if ($exercise->status == 'published') {
			$load = elgg_view('output/url', array(
				'href' => $load_base_url,
				'text' => elgg_echo('exercise:status:published'),
				'is_trusted' => true,
			));

			$time = "<span class='elgg-subtext'>"
				. elgg_view_friendly_time($exercise->time_created) . "</span>";

			$body .= "<li>$load : $time</li>";
		}

		foreach ($revisions as $revision) {
			$time = "<span class='elgg-subtext'>"
				. elgg_view_friendly_time($revision->time_created) . "</span>";

			if ($revision->name == 'exercise_auto_save') {
				$revision_lang = elgg_echo('exercise:auto_saved_revision');
			} else {
				$revision_lang = elgg_echo('exercise:revision') . " $n";
			}
			$load = elgg_view('output/url', array(
				'href' => "$load_base_url/$revision->id",
				'text' => $revision_lang,
				'is_trusted' => true,
			));

			$text = "$load: $time";
			$class = 'class="auto-saved"';

			$n--;

			$body .= "<li $class>$text</li>";
		}

		$body .= '</ul>';

		echo elgg_view_module('aside', $title, $body);
	}
}