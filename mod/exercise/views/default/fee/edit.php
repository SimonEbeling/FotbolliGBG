<?php
/**
 * football exercise editor
 *
 * @package exercise
 */

$toolsMenuItems = array('player1', 'player2', 'player3', 'ball', 'cone', 'goal', 'playerPath', 'ballPath', 'playerDribble', 'defendPath');
$archiveMenuItems = array ('save', 'remove', 'clear');
$fieldMenuItems = array ('fullField', 'halfField', 'emptyField');  

$url = $config->site->url;

$titel = elgg_echo('exercise:fee');

foreach($archiveMenuItems as $item){
	
	$img = elgg_view('output/img', array(
		'src' => "mod/exercise/graphics/fee/$item.png",
		'class' => "archiveImg",
		'width' => "32px"
	));
		
	$archiveMenu .= elgg_view('output/url', array(
	'href' => "#",
	'text' => $img,
	'id' => $item
));
}

foreach($fieldMenuItems as $item){
	
	$img = elgg_view('output/img', array(
		'src' => "mod/exercise/graphics/fee/$item.png",
		'class' => "fieldImg",
		'width' => "32px"
	));
		
	$archiveMenu .= elgg_view('output/url', array(
	'href' => "#",
	'text' => $img,
	'id' => $item
));
}  

foreach($toolsMenuItems as $item){
	
	$img = elgg_view('output/img', array(
		'src' => "mod/exercise/graphics/fee/$item.png",
		'class' => "toolsImg",
		'width' => "32px"
	));
		
	$toolsMenu .= elgg_view('output/url', array(
	'href' => "#",
	'text' => $img,
	'id' => $item
));
}

$ajaxImg = elgg_view('output/img', array(
	'src' => "mod/exercise/graphics/fee/ajax.gif",
	'class' => "ajaxImg",
	'width' => "64px"
));

echo "
<label>$titel</label>
<div id='fee_container'>
	<div id='fee_fieldMenu'>$fieldMenu</div>
	<div id='fee_archiveMenu'>$archiveMenu</div>	
	$ajaxImg
	<div id='fee_workspace'></div>
	<div id='fee_toolsMenu'>$toolsMenu</div>
	<div id='message'></div>
</div>
";