<!DOCTYPE HTML>

<html>

<head> <title> Lab8 </title> </head>
<style>
.content{
    margin-left:30%;
}
    </style>

<body>
<?php
include 'header.php'; 
include 'menu.php';
?>


<div class="content">
<?php

$firstName = $email = $Profession = $lastName = $phone = $sport = $Birthday="";

session_start();

$firstName=$_SESSION['firstName'];

$lastName = $_SESSION['lastName'];

$email = $_SESSION['email'];

$phone = $_SESSION['phone'];

$Birthday =$_SESSION['Birthday'];

$Profession = $_SESSION['Profession'];

$sport=$_SESSION['sport'];

echo "<h2>Submitted Information</h2>";

echo "<label>First name: </label>";

echo $firstName;

echo "<br>";

echo "<label>Last name : </label>";

echo $lastName;

echo "<br>";

echo "<label>Phone : </label>";

echo $phone;

echo "<br>";

echo "<label>Email Address: </label>";

echo $email;

echo "<br>";

echo "<label>Birth date: </label>";

echo $Birthday;

echo "<br>";

echo "<label>Profession : </label>";

echo $Profession;

echo "<br>";

echo "<label>Sport : </label>";

echo $sport;


?>
</div>
</body>
<?php include 'footer.php' ; ?>
</html>