<?php
/**
 * football exercise viewer
 *
 * @package exercise
 */
 
 
$exercise = elgg_extract('entity', $vars, FALSE);
$guid = $exercise['guid'];

$ajaxImg = elgg_view('output/img', array(
	'src' => "mod/exercise/graphics/fee/ajax2.gif",
	'class' => "ajaxImgView",

));

echo $ajaxImg;
echo "<div id='fee_view_$guid' class='fee_view_container'></div>";
echo "<script>
	var view = new appViewer();
	view.init($guid);
</script>";