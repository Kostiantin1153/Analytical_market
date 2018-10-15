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
	$title = htmlspecialchars($_POST["title"]);
	$cat = htmlspecialchars($_POST["cat"]);
	$textmini = htmlspecialchars($_POST["textmini"]);
	$text = ($_POST["text"]);
}

  
	$_SESSION["title"] = $title;
	$_SESSION["cat"] = $cat;
	$_SESSION["textmini"] = $textmini;
	$_SESSION["text"] = $text;
	
$con=mysqli_connect("localhost", "root", "", "aptresearches_form");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM news");
mysqli_query($con,"INSERT INTO news (`id`, `title`, `textmini`, `text`, `date`, `cat`) VALUES (NULL, '$title', '$textmini', '$text', CURRENT_DATE(), '$cat')");

mysqli_close($con);

//INSERT INTO `news` (`id`, `title`, `textmini`, `text`, `date`, `cat`) VALUES (NULL, 'dzx', 'sdvxcxcvbxv', 'zxvcvzbggdafv', '566165', 'gfrtdgffsd');


?>
<h1 style="color: green; text-align: center;"> Successfully!!! </h1>
<?php 
    require ("footer.php");
?>