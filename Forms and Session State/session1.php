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


// define variables and set to empty values

$firstName = $email = $Profession = $lastName = $phone = $sport = $Birthday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();

$firstName=test_input($_POST["firstName"]);

$lastName = test_input($_POST["lastName"]);

$email = test_input($_POST["email"]);

$phone = test_input($_POST["phone"]);

$Birthday = test_input($_POST["Birthday"]);

$Profession = test_input($_POST["Profession"]);

$sport=test_input($_POST['sport']);

$_SESSION['firstName']=$firstName;

$_SESSION['lastName']=$lastName;

$_SESSION['email']=$email;

$_SESSION['phone']=$phone;

$_SESSION['Birthday']=$Birthday;

$_SESSION['Profession']=$Profession;

$_SESSION['sport']=$sport;

?>
<script type="text/javascript">
   window.location="session2.php";
</script>
<?php

exit();
}

function test_input($data) {

$data = trim($data);

$data = stripslashes($data);

$data = htmlspecialchars($data);

return $data;

}
?>



<form method="post">

First name: <input type="text" name="firstName" value="<?php echo $firstName;?>">

<br><br>

Last Name: <input type="text" name="lastName" value="<?php echo $lastName;?>">

<br><br>

Telephone Number: <input type="text" name="phone" value="<?php echo $phone;?>">

<br><br>

E-mail: <input type="text" name="email" value="<?php echo $email;?>">

<br><br>

Birth day:<input type="date" name="Birthday" value="<?php echo $Birthday;?>">

<br><br>

Profession:

<input type="radio" name="Profession" <?php if (isset($Profession) && $Profession=="Student") echo "checked";?> value="Student">Student

<input type="radio" name="Profession" <?php if (isset($Profession) && $Profession=="Doctor") echo "checked";?> value="Doctor">Doctor

<input type="radio" name="Profession" <?php if (isset($Profession) && $Profession=="Farmer") echo "checked";?> value="Farmer">Farmer

<input type="radio" name="Profession" <?php if (isset($Profession) && $Profession=="Engineer") echo "checked";?> value="Engineer">Engineer

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
<?php include 'footer.php' ; ?>
</body>

</html>