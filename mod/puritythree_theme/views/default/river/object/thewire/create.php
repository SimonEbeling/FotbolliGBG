<?php
/**
 * File river view.
 */

 elgg_load_js('elgg.thewire');
 
$post = $vars['item']->getObjectEntity();
$excerpt = strip_tags($post->description);
$message = thewire_filter($excerpt);
$item = $vars['item'];
$owner = $post->getOwnerEntity();

$subject = $item->getSubjectEntity();
$object = $item->getObjectEntity();


if (!$post) {
	return true;
}

// make compatible with posts created with original Curverider plugin
$thread_id = $post->wire_thread;
if (!$thread_id) {
	$post->wire_thread = $post->guid;
}

$owner_icon = elgg_view_entity_icon($owner, 'small');

$menu = elgg_view_menu('entity', array(
	'entity' => $post,
	'handler' => 'thewire',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

// river item header
$timestamp = elgg_view_friendly_time($item->getPostedTime());

$subject_link = elgg_view('output/url', array(
	'href' => $subject->getURL(),
	'text' => $subject->name,
	'class' => 'elgg-river-subject',
	'is_trusted' => true,
));

$object_link = elgg_view('output/url', array(
	'href' => $object->getURL(),
	'text' => elgg_echo('thewire:wire'),
	'class' => 'elgg-river-object',
	'is_trusted' => true,
));

$summary = elgg_echo('river:create:object:thewire', array($subject_link, $object_link));


if ($message !== false) {
	$message = "<div class=\"elgg-river-message\">$message</div>";
}

$attachments = elgg_extract('attachments', $vars, false);
if ($attachments !== false) {
	$attachments = "<div class=\"elgg-river-attachments clearfix\">$attachments</div>";
}

$responses = elgg_view('river/elements/responses', $vars);
if ($responses) {
	$responses = "<div class=\"elgg-river-responses\">$responses</div>";
}

$group_string = '';
$object = $item->getObjectEntity();
$container = $object->getContainerEntity();
if ($container instanceof ElggGroup && $container->guid != elgg_get_page_owner_guid()) {
	$group_link = elgg_view('output/url', array(
		'href' => $container->getURL(),
		'text' => $container->name,
		'is_trusted' => true,
	));
	$group_string = elgg_echo('river:ingroup', array($group_link));
}

$body = <<<RIVER
$menu
<div class="elgg-river-summary">$summary $group_string <span class="elgg-river-timestamp">$timestamp</span></div>
$message
$attachments
$responses
RIVER;

echo elgg_view('page/components/image_block', array(
	'image' => $owner_icon,
	'body' => $body,
	'class' => 'elgg-river-item',
));

if ($post->reply) {
	echo "<div class=\"thewire-parent hidden\" id=\"thewire-previous-{$post->guid}\">";
	echo "</div>";
}

$form_vars = array('class' => 'thewire-form hidden', 'id' => 'wire-reply-'.$post->guid);
echo elgg_view_form('thewire/add', $form_vars, array('post' => $post));
echo elgg_view('input/urlshortener');