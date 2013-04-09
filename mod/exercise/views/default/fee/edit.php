<?php
/**
 * football exercise editor
 *
 * @package exercise
 */

$toolsMenuItems = array('player1', 'player2', 'player3', 'goalie', 'ball', 'cone', 'goal', 'playerPath', 'ballPath', 'playerDribble', 'defendPath');
$archiveMenuItems = array ('save', 'remove', 'clear');
$fieldMenuItems = array ('fullField', 'halfField', 'emptyFullField', 'emptyHalfField');  

$url = $config->site->url;

$titel = elgg_echo('exercise:fee');

foreach($archiveMenuItems as $item){
	
	$img = elgg_view('output/img', array(
		'src' => "mod/exercise/graphics/fee/$item.png",
		'class' => "archiveImg"
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
		'class' => "fieldImg"
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
		'class' => "toolsImg"
	));
		
	$toolsMenu .= elgg_view('output/url', array(
	'href' => "#",
	'text' => $img,
	'id' => $item
));
}

$ajaxImg = elgg_view('output/img', array(
	'src' => "mod/exercise/graphics/fee/ajax2.gif",
	'class' => "ajaxImg",

));

echo "
<label>$titel</label>
<div id='fee_container'>
	<div id='fee_archiveMenu'>$archiveMenu</div>	
	$ajaxImg
	<div id='fee_workspace'></div>
	<div id='fee_toolsMenu'>$toolsMenu</div>
	<div id='message'></div>
</div>
";