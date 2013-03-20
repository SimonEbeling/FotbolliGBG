<?php
/**
 * Edit exercise form
 *
 * @package exercise
 */

$exercise = get_entity($vars['guid']);
$vars['entity'] = $exercise;

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

$execution_label = elgg_echo('exercise:execution');
$execution_input = elgg_view('input/longtext', array(
	'name' => 'execution',
	'id' => 'exercise_execution',
	'value' => $vars['execution']
));

$body_label = elgg_echo('exercise:body');
$body_input = elgg_view('input/longtext', array(
	'name' => 'description',
	'id' => 'exercise_description',
	'value' => $vars['description']
));

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

$tags_label = elgg_echo('tags');
$tags_input = elgg_view('input/tags', array(
	'name' => 'tags',
	'id' => 'exercise_tags',
	'value' => $vars['tags']
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

<div>
	<label for="exercise_title">$title_label</label>
	$title_input
</div>

<div>
	<label for="exercise_execution">$execution_label</label>
	$execution_input
</div>

<div>
	<label for="exercise_description">$body_label</label>
	$body_input
</div>

<div>
	<label for="exercise_tags">$tags_label</label>
	$tags_input
</div>

$categories_input

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
