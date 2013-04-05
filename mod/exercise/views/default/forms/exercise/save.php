<?php
/**
 * Edit exercise form
 *
 * @package exercise
 */

$exercise = get_entity($vars['guid']);
$vars['entity'] = $exercise;

$user = elgg_get_logged_in_user_entity ();

$draft_warning = $vars['draft_warning'];
if ($draft_warning) {
	$draft_warning = '<span class="message warning">' . $draft_warning . '</span>';
}

$action_buttons = '';
$delete_link = '';
$preview_button = '';

if ($vars['guid']) {
	// add a delete button if editing
	$delete_url = "action/exercise/delete?guid={$vars['guid']}";
	$delete_link = elgg_view('output/confirmlink', array(
		'href' => $delete_url,
		'text' => elgg_echo('delete'),
		'class' => 'elgg-button elgg-button-delete float-alt'
	));
}

// published exercises do not get the preview button
if (!$vars['guid'] || ($exercise && $exercise->status != 'published')) {
	$preview_button = elgg_view('input/submit', array(
		'value' => elgg_echo('preview'),
		'name' => 'preview',
		'class' => 'mls',
	));
}

$save_button = elgg_view('input/submit', array(
	'value' => elgg_echo('save'),
	'name' => 'save',
));
$action_buttons = $save_button . $preview_button . $delete_link;

$title_label = elgg_echo('title');
$title_input = elgg_view('input/text', array(
	'name' => 'title',
	'id' => 'exercise_title',
	'value' => $vars['title']
));

$tags_label = elgg_echo('exercise:tags');
$tag_description = elgg_echo('exercise:tag_description');
$tag_example = elgg_echo('exercise:tag_example');
$tag_tooltip = elgg_echo('exercise:tag_tooltip');
$tags_input = elgg_view('input/tags', array(
	'name' => 'tags',
	'id' => 'exercise_tags',
	'value' => $vars['tags']
));

$reason_label = elgg_echo('exercise:reason');
$reason_description = elgg_echo('exercise:reason_description');
$reason_input = elgg_view('input/text', array(
	'name' => 'reason',
	'id' => 'exercise_reason',
	'value' => $vars['reason']
));

$execution_label = elgg_echo('exercise:execution');
$execution_description = elgg_echo('exercise:execution_description');
$execution_input = elgg_view('input/longtext', array(
	'name' => 'execution',
	'id' => 'exercise_execution',
	'value' => $vars['execution']
));

$body_label = elgg_echo('exercise:body');
$body_description = elgg_echo('exercise:description_description');
$body_input = elgg_view('input/longtext', array(
	'name' => 'description',
	'id' => 'exercise_description',
	'value' => $vars['description']
));

$fee = elgg_view('fee/edit', $vars);

$save_status = elgg_echo('exercise:save_status');
if ($vars['guid']) {
	$entity = get_entity($vars['guid']);
	$saved = date('F j, Y @ H:i', $entity->time_created);
} else {
	$saved = elgg_echo('exercise:never');
}

$status_label = elgg_echo('exercise:status');
$status_input = elgg_view('input/dropdown', array(
	'name' => 'status',
	'id' => 'exercise_status',
	'value' => $vars['status'],
	'options_values' => array(
		'draft' => elgg_echo('exercise:status:draft'),
		'published' => elgg_echo('exercise:status:published')
	)
));

$comments_label = elgg_echo('comments');
$comments_input = elgg_view('input/dropdown', array(
	'name' => 'comments_on',
	'id' => 'exercise_comments_on',
	'value' => $vars['comments_on'],
	'options_values' => array('On' => elgg_echo('on'), 'Off' => elgg_echo('off'))
));

$access_label = elgg_echo('access');
$access_input = elgg_view('input/access', array(
	'name' => 'access_id',
	'id' => 'exercise_access_id',
	'value' => $vars['access_id']
));

$categories_input = elgg_view('input/categories', $vars);

// hidden inputs
$container_guid_input = elgg_view('input/hidden', array('name' => 'container_guid', 'value' => elgg_get_page_owner_guid()));
$guid_input = elgg_view('input/hidden', array('name' => 'guid', 'value' => $vars['guid']));


echo <<<___HTML

$draft_warning

$categories_input

<div>
	<label for="exercise_title">$title_label</label>
	$title_input
</div>

<div>
	<label for="exercise_tags">$tags_label</label><span> - $tag_description</span> - <a href="#" title="$tag_tooltip">$tag_example</a>
	$tags_input
</div>

<div>
	<label for="exercise_reason">$reason_label</label> <span> - $reason_description</span>
	$reason_input
</div>

<div>
	<label for="exercise_execution">$execution_label</label> <span> - $execution_description</span>
	$execution_input
</div>

<div>
	<label for="exercise_description">$body_label</label> <span> - $body_description</span>
	$body_input
</div>

$fee

<div>
	<label for="exercise_comments_on">$comments_label</label>
	$comments_input
</div>

<div>
	<label for="exercise_access_id">$access_label</label>
	$access_input
</div>

<div>
	<label for="exercise_status">$status_label</label>
	$status_input
</div>

<div class="elgg-foot">
	<div class="elgg-subtext mbm">
	$save_status <span class="exercise-save-status-time">$saved</span>
	</div>

	$guid_input
	$container_guid_input

	$action_buttons
</div>

___HTML;
