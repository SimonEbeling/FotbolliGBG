<?php
/**
 * Serve up html for a post
 */
 
$guid = (int) get_input('guid');

$parent = thewire_get_parent($guid);
if ($parent) {
	echo elgg_view_entity($parent);
}

$form_vars = array('class' => 'thewire-form hidden', 'id' => 'wire-reply-'.$parent->guid);
echo elgg_view_form('thewire/add', $form_vars, array('post' => $parent));
echo elgg_view('input/urlshortener');