 <?php 
    require ("head.php");
  ?>
<body style="background-image: url(photos/Reports.jpg);">
	<div class="body">
<?php 
    require ("header.php");
?>
<div class="main-home">
<?php
session_start();
if (isset($_POST["submit"])) {
	$txtFirstName = htmlspecialchars($_POST["txtFirstName"]);
	$txtLastName = htmlspecialchars($_POST["txtLastName"]);
	$email = htmlspecialchars($_POST["email"]);
	$txtTelephoneNumber = htmlspecialchars($_POST["txtTelephoneNumber"]);
	$txtCompany = htmlspecialchars($_POST["txtCompany"]);
	$txtNatureOfBusiness = htmlspecialchars($_POST["txtNatureOfBusiness"]);
	$Country = htmlspecialchars($_POST["Country"]);
	$titleOfResearche = htmlspecialchars($_POST["titleOfResearche"]);

}

	$_SESSION["txtFirstName"] = $txtFirstName;
	$_SESSION["txtLastName"] = $txtLastName;
	$_SESSION["email"] = $email;
	$_SESSION["txtTelephoneNumber"] = $txtTelephoneNumber;
	$_SESSION["txtNatureOfBusiness"] = $txtNatureOfBusiness;
	$_SESSION["Country"] = $Country;
	$_SESSION["titleOfResearche"] = $titleOfResearche;


	
$con=mysqli_connect("localhost", "root", "", "aptresearches_form");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM users");
mysqli_query($con,"INSERT INTO users (id, txtFirstName, txtLastName, email, txtTelephoneNumber, txtCompany, txtNatureOfBusiness, Country, titleOfResearche) 
VALUES (NULL, '$txtFirstName', '$txtLastName', '$email', '$txtTelephoneNumber', '$txtCompany', '$txtNatureOfBusiness', '$Country', '$titleOfResearche')");

mysqli_close($con);

?>
<h1 style="color: green; text-align: center;"> New record created successfully!!! </h1>
<?php 
    require ("footer.php");
?>