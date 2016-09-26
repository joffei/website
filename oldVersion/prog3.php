<!--
File: prog3.php
Author: Jesse Offei-Nkansah
Created:12.10.2014
Modified: 12.10.2014
Description: "Expense Calc" subtab of the "Programs" tab
Page contains a downloadable copy of the ExpenseCalculator.cc 
	program
*to be put into the "Programs" folder
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
		<h2><b>Expense Calculator</b></h2>
		<p>You'll be needing two files for this program to run correctly.</p>
		<form>
			ExpenseCalc.cc<br><button><a id="load" href="ExpenseCalc.cc"download>Download</a></button>
		</form>
		<hr>
		<form>
			FinancialData.txt<br><button><a id="load" href="FinancialData.txt" download>Download</a></button>
		</form>
	</div>
</body>
</html>