<!--
File: more.php
Author: Jesse Offei-Nkansah
Created:12.10.2014
Modified: 12.26.2014
Description: Page gives the viewer the option to send  message to the
		     website author.
*to be index of "More" folder
-->
<!DOCTYPE html>
<html>
<head>
	<?php $page = 'form.php'; ?>
	<?php include('metadata.php'); ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $email = $site = $comment = $request = $txt = "";
	$nameErr = $emailErr = "";
	if($_POST["name"] != ""){
		$name = test_input($_POST["name"]);
	}else{
		$nameErr = "Name Required";
	}
	if($_POST["email"] != ""){
		$email = test_input($_POST["email"]);
	}else{
		$emailErr = "E-mail Address Required";
	}
	$site = test_input($_POST["site"]);
	$comment = test_input($_POST["comments"]);
	$holder = "";
	$str = $comment;
	if($_POST['resume'] == "on"){
		$request = "Yes";
	}else{
		$request= "No";
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
</head>
<body>
	<?php include('header.php'); ?>
	<?php include('nav.php'); ?>
	<h2><b>More!</b></h2>
	<div id="content">
		<?php if($name != "" && $email != ""){
			$myFile = fopen("messages.txt", "a");
			$txt = "From: $name\n";
			fwrite($myFile, $txt);
			$txt = "E-mail Address: $email\n";
			fwrite($myFile, $txt);
			if($site == "") $site =  "N/A";
			$txt = "Website: $site\n";
			fwrite($myFile, $txt);
			if($comment == "") $comment = "N/A";
			$txt = "Comments:\n$comment\n";
			fwrite($myFile, $txt);
			$txt = "Requested Resume: $request\n";
			fwrite($myFile, $txt);
			$txt = "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------\n";
			fwrite($myFile, $txt);
			$page = 'thanks.php'; 
		}
		?>
		<?php include($page); ?>
	</div>
</body>
</html>