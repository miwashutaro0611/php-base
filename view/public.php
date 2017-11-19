<?php

function html_header(){
	global $level,$css,$js,$title,$keywords,$description,$author;

	echo'
	<!DOCTYPE html>
	<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="'.$keywords.'">
		<meta name="description" content="'.$description.'">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="'.$author.'">
		<title>'.$title.'</title>
		<link rel="stylesheet" href="'.$level.'css/import.css" type="text/css" />
		'.$css.'
		<script type="text/javascript" src="'.$level.'js/jquery.js"></script>
		<script type="text/javascript" src="'.$level.'js/script.js"></script>
		'.$js.'
	</head>

<body>
	<div id="wrap">
	<header>

	</header>

';}

function html_nav(){
	global $level;
	echo'
	<nav>

	</nav>
	';}

function html_footer(){
	global $level;
	echo'
	<footer>

  </footer>
';}

?>
