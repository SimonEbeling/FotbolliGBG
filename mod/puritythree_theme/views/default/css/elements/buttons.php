<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: 14px;
	font-weight: bold;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;

	width: auto;
	padding: 2px 4px;
	cursor: pointer;
	outline: none;
	
	-webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
	-moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
	box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
}
a.elgg-button {
	padding: 3px 6px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: white;
	text-shadow: 1px 1px 0px black;
	text-decoration: none;
	border: 1px solid #5B74A8;
	background: #5B74A8;
}

.elgg-button-submit:hover {
	border-color: #000000;
	text-decoration: none;
	color: white;
	background: #000000;
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #333;
	background: #ddd;
	border: 1px solid #999;
}
.elgg-button-cancel:hover {
	color: #444;
	background-color: #999;
	background-position: left 10px;
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	background: #ccc;
	border:1px solid #999;
	color: #333;
	padding: 2px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	text-shadow: 0 1px 0 white;
	cursor: pointer;
	
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: #ccc;
	color: #111;
	text-decoration: none;
	border: 1px solid #999;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	color: #bbb;
	text-decoration: none;
	border: 1px solid #333;
	background: #555;
	text-shadow: 1px 1px 0px black;
}
.elgg-button-delete:hover {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #5B74A8;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-moz-box-shadow: 0 0 5px #888;
	-webkit-box-shadow: 0 0 5px#888;
	box-shadow: 0 0 5px #888;
	background:#5B74A8;
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background-color:#000000;
	text-decoration:none;
	color:#ffffff;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	
	-webkit-border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-radius:4px 4px 0 0;
}

#filter_exercise li>label{
	display: block;
	background: #F7F7F7;
	color: #333;
	cursor: pointer;
	border: 1px solid #DDD;
	border-bottom: 1px solid #777;
	border-right: 1px solid #777;	
	padding: 4px 10px;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#1a000000',GradientType=0 ); /* IE6-9 */
}

#filter_exercise input[type="checkbox"]{
	display:none;
}

#filter_exercise li>label.selected{
	background: #FFF500;
	border: 1px solid #cfc700;
	border-bottom: 1px solid #fef63e;
	border-right: 1px solid #fef63e;
}
.filter_part{
	width: 47%;
	float:left;
	margin-left: 6%;
}

.filter_part:first-child{
	margin-left: 0;
}

#filter_exercise .elgg-button-submit{

}

.exercise_sort{
	float:right;
}

