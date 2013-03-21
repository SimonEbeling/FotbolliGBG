<?php
/**
 * the river-options
 *
 */

//$title = elgg_view_title(elgg_echo('river_addon:thewire'));

echo "<div class='river-options'>";
echo elgg_echo('thewire:add');
echo elgg_view('output/url', array("text" => elgg_echo('blog:add'), "href" => "blog/add/".  elgg_get_logged_in_user_guid(), 'class' => 'river-option-link'));
echo elgg_view('output/url', array("text" => elgg_echo('exercise:add'), "href" => "exercise/add/".  elgg_get_logged_in_user_guid(), 'class' => 'river-option-link'));
echo elgg_view_form('thewire/add', array('name' => 'elgg-wire'));
echo "</div>";


