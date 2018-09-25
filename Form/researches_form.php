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

/* first try

mail($myemail, $tema, $message_to_myemail, $from);

$conn = mysqli_connect("localhost", "root", "", "aptresearches_form");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `users`(`txtFirstName`, `txtLastName`, `email`, `txtTelephoneNumber`, `txtCompany`, `txtNatureOfBusiness`, `Country`, `titleOfResearche`) VALUES ('$txtFirstName', '$txtLastName', '$email', '$txtTelephoneNumber', '$txtCompany', '$txtNatureOfBusiness', '$Country', '$titleOfResearche') ";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);*/

/* second try

$mysqli = new mysqli ("localhost", "root", "", "aptresearches_form");
$mysqli->query ("SET NAMES 'utf8'");
$mysqli->query ("INSERT INTO `users`(`txtFirstName`, `txtLastName`, `email`, `txtTelephoneNumber`, `txtCompany`, `txtNatureOfBusiness`, `Country`, `titleOfResearche`) VALUES (`'$txtFirstName'`,`$txtLastName`,`$email`,`$txtTelephoneNumber`,`$txtCompany`,`$txtNatureOfBusiness`,`$Country`,`$titleOfResearche`)");

$mysqli->close();*/

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