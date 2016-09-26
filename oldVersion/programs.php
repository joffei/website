<!--
File: programs.php
Author: Jesse Offei-Nkansah
Created:12.10.2014
Modified: 12.10.2014
Description: first page of the "Programs" tab.
*to be index of the "Programs" folder
-->
<!DOCTYPE html>
<html>
<head>
	<?php include('metadata.php'); ?>
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('nav.php'); ?>
	<?php include('prognav.php'); ?>
	<div id="content">
		<h2><b>Programs</b></h2>
		<p>Okay, so I'm not <em>all</em> about the computers, but it is a big 
		part of me.  If you want to check out some of the stuff I've worked on 
		in the past, you'll need to download the source codes and run them on 
		your system's platform.</p>
		<p>If there is some technique you would like to see me try, go to the 
		<a href="more.php" target="_self">More!</a> tab and send me a message 
		describing it.</p>
		<dl>
			<dt>Number Guess</dt>
			<dd>- How fast can you guess the number (Java)</dd>
			<dt>Pig Latin</dt>
			<dd>- Translate your sentence to pig latin (C++)</dd>
			<dt>Expense Calculator</dt>
			<dd>- How much did this guy spend? (C++)</dd>
		</dl>
	</div>
</body>
</html>