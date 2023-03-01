<!DOCTYPE HTML>

<html>

<head>

<style>

.content{
margin-left:30%;

}

.column {

text-align:center;

float: left;

width: 50%;

}

/* Clear floats after the columns */

.row:after {

content: "";

display: table;

clear: both;

}

</style>

</head>

<body>
<?php
include 'header.php';
include 'menu.php';
?>
<div class='content'>
<?php


// define variables and set to empty values

$firstName = $email = $Profession = $lastName = $phone = $sport = $Birthday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$firstName=test_input($_POST["firstName"]);

$lastName = test_input($_POST["lastName"]);

$email = test_input($_POST["email"]);

$phone = test_input($_POST["phone"]);

$Birthday = test_input($_POST["Birthday"]);

$profession = test_input($_POST["profession"]);

$sport=test_input($_POST['sport']);

}

function test_input($data) {

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;

}

?>

<div class="row">

<div class="column">



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

First name: <input type="text" name="firstName" value="<?php echo $firstName;?>">

<br><br>

Last name: <input type="text" name="lastName" value="<?php echo $lastName;?>">

<br><br>

Phone: <input type="text" name="phone" value="<?php echo $phone;?>">

<br><br>

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

<br><br>

Birth date:<input type="date" name="Birthday" value="<?php echo $Birthday;?>">

<br><br>

profession:

<input type="radio" name="profession" <?php if (isset($profession) && $profession=="Student") echo "checked";?> value="Student">Student

<input type="radio" name="profession" <?php if (isset($profession) && $profession=="Doctor") echo "checked";?> value="Doctor">Doctor

<input type="radio" name="profession" <?php if (isset($profession) && $profession=="Farmer") echo "checked";?> value="Farmer">Farmer

<input type="radio" name="profession" <?php if (isset($profession) && $profession=="Engineer") echo "checked";?> value="Engineer">Engineer

<br><br>

<label for="sport">Choose a sport: </label>

<select name="sport" id="sport">

<option value="Hockey">Hockey</option>

<option value="Football">Football</option>

<option value="Carling">Carling</option>

<option value="Tennis">Tennis</option>

</select>

<br><br>

<input type="submit" name="submit" value="Submit">

</form>

</div>

<div class="column">

<?php

echo "<h2>Submitted Information</h2>";

echo "<label>First name : </label>";

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

echo "<label>Birthday: </label>";

echo $Birthday;

echo "<br>";

echo "<label>profession : </label>";

echo $profession;

echo "<br>";

echo "<label>Sport : </label>";

echo $sport;


?>

</div>

</div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>