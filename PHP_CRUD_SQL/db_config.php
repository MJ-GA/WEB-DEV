<?php

$server="localhost";
$userName="uci9urgsajlt7";
$password="mohamedjouini";
$dbname="dbholivx1htj4h";

$conn= mysqli_connect($server,$userName,$password,$dbname);

if(isset($_POST['submit'])){

    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['phoneNumber']) && !empty($_POST['emailAddress']) && !empty($_POST['username'])  && ($_POST['referrer']!="Select referer")){
      
       $firstName =$_POST['firstName'];
       $lastName =$_POST['lastName'];
       $phoneNumber =$_POST['phoneNumber'];
       $emailAddress =$_POST['emailAddress'];
       $username =$_POST['username'];
       $referrer =$_POST['referrer'];
        
       $query="insert into mailingList(_id,firstName,lastName,phoneNumber,emailAddress,username,referrer) values(NULL,'$firstName','$lastName','$phoneNumber','$emailAddress','$username','$referrer')";

       $run=mysqli_query($conn,$query) or die(mysqli_error($conn));

       if($run){
           echo "form submiutted successfully";
       } else {
           echo "form not submitted";
       }
    } else {
        echo "please fill out all fields";
    }
}
