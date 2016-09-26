<!--
File: prog2.php
Author: Jesse Offei-Nkansah
Created:12.10.2014
Modified: 12.10.2014
Description: "Pig Latin" subtab of the "Programs" tab
Page contains a downloadable copy of the PigLatin.cc
	program.
*to be added to the "Programs" folder
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
		<h2><b>Pig Latin</b></h2>
		<form action="PigLatin.cc">
			PigLatin.cc<br><button><a id="load" href="PigLatin.cc" download>Download</a></button>
		</form>
	</div>
</body>
</html>