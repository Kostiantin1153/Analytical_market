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


	/*$message_to_email = "Здравствуйте! 
Вашей контактной формой было отправлено сообщение! 
Имя отправителя: $your_name 
E-mail: $email 
Текст сообщения: $message 
Конец";
}*/

print_r($_POST) ;

/*mail($myemail, $tema, $message_to_myemail, $from);*/

/*
$mysqli = new mysqli ("localhost", "root", "", "aptresearches_form")
$mysqli->query ("SET NAMES 'utf8'");
$mysqli->query ();
$mysqli->close();*/

?>