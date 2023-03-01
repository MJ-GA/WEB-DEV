<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>WP Eatery - Table</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
echo '<link href="http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800" rel="stylesheet" type="text/css" />';
echo '<link href="css/style.css" rel="stylesheet" type="text/css">';
echo '</head>';
?>
<style>
table {
border-collapse: collapse;
width: 75%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;

}
th {
background-color: #CCCCCC;
color: #FF6600;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>

</head>


<body>
<div id="wrapper">
<?php include 'header.php';?>
<?php include 'menu.php';?>
<table>
    
<tr>
<th>Name</th>
<th>email</th>
<th>phone number</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "uci9urgsajlt7", "mohamedjouini", "dbholivx1htj4h");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT firstName,lastName,emailAddress,phoneNumber FROM mailingList";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["firstName"]. " " . $row["lastName"] . "</td><td>"
. $row["emailAddress"]. "</td>"."<td>" . $row["phoneNumber"]. "</td></tr>";
}
echo "</table>";
} else { echo "The table is empty !"; }
$conn->close();

?>
</table>

</div><!-- End Wrapper -->
</body>
<?php include 'footer.php'?>;
</html>