<?php
/**
 * View for exercise objects
 *
 * @package exercise
 */

$full = elgg_extract('full_view', $vars, FALSE);
$exercise = elgg_extract('entity', $vars, FALSE);

if (!$exercise) {
	return TRUE;
}

$owner = $exercise->getOwnerEntity();
$container = $exercise->getContainerEntity();
$categories = elgg_view('output/categories', $vars);
$excerpt = $exercise->excerpt;
if (!$excerpt) {
	$excerpt = elgg_get_excerpt($exercise->description);
}

$owner_icon = elgg_view_entity_icon($owner, 'tiny');
$owner_link = elgg_view('output/url', array(
	'href' => "exercise/owner/$owner->username",
	'text' => $owner->name,
	'is_trusted' => true,
));
$author_text = elgg_echo('byline', array($owner_link));
$date = elgg_view_friendly_time($exercise->time_created);

// The "on" status changes for comments, so best to check for !Off
if ($exercise->comments_on != 'Off') {
	$comments_count = $exercise->countComments();
	//only display if there are commments
	if ($comments_count != 0) {
		$text = elgg_echo("comments") . " ($comments_count)";
		$comments_link = elgg_view('output/url', array(
			'href' => $exercise->getURL() . '#exercise-comments',
			'text' => $text,
			'is_trusted' => true,
		));
	} else {
		$comments_link = '';
	}
} else {
	$comments_link = '';
}

$metadata = elgg_view_menu('entity', array(
	'entity' => $vars['entity'],
	'handler' => 'exercise',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

$subtitle = "$author_text $date $comments_link $categories";

// do not show the metadata and controls in widget view
if (elgg_in_context('widgets')) {
	$metadata = '';
}

if ($full) {

	$tags_label = elgg_echo('exercise:tags');
	$reason_label = elgg_echo('exercise:reason');
	$execution_label = elgg_echo('exercise:execution');
	$body_label = elgg_echo('exercise:body');

	$body = "<h3>$tags_label</h3>";

	$body .= elgg_view('output/tags', array(
		'value' => $exercise->tags,
		'class' => 'exercise-tags',
	));
	
	$body .= "<h3>$reason_label</h3>";

	$body .= elgg_view('output/longtext', array(
		'value' => $exercise->reason,
		'class' => 'exercise-reason',
	));
	
	$body .= "<h3>$execution_label</h3>";
	
	$body .= elgg_view('output/longtext', array(
		'value' => $exercise->execution,
		'class' => 'exercise-execution',
	));	
	
	$body .= "<h3>$body_label</h3>";

	$body .= elgg_view('output/longtext', array(
		'value' => $exercise->description,
		'class' => 'exercise-body',
	));

	$params = array(
		'title' => false,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
	);
		
	$summary = elgg_view('object/elements/summary', $params);

	echo elgg_view('object/elements/full', array(
		'summary' => $summary,
		'icon' => $owner_icon,
		'body' => $body,
	));

} else {
	// brief view

	$params = array(
		'entity' => $exercise,
		'metadata' => $metadata,
		'subtitle' => $subtitle,
		'content' => $excerpt,
	);
	$params = $params + $vars;
	$list_body = elgg_view('object/elements/summary', $params);

	echo elgg_view_image_block($owner_icon, $list_body);
}
