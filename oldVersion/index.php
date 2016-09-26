<!--
File: index.php
Author: Jesse Offei-Nkansah
Created:12.10.2014
Modified: 09.08.2016
Description: Welcome page of website
-->
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Jesse Offei-Nkansah</title>
		<?php include('metadata.php'); ?>
		<?php include('functions.php'); ?>
	</head>
	<body>
		<?php include('header.php'); ?>
			
			<?php include('nav.php'); ?>
			<div id="content">
			<p> I'm currently a junior at MTSU 
			double majoring in computer<br>science and computer engineering 
			technology.</p>
			
			<p>I'd like to know more about you.</p>
			<form id="form1" method="post" action="<?php echo htmlspecialchars("functions.php"); ?>">
				What's your name?<br><input type="text" name="name" value=""><br>
				Are you a<br>
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</form>
			<button onclick="newName()">Submit!</button>
			<p id="rename"></p>
			<div>
	</body>
</html>