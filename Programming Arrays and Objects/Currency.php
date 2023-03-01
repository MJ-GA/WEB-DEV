<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
    </head>
    <body>
        
        <?php include 'Header.php';?>
        <?php include 'Menu.php';?>
        <div style="margin: auto;width: 50%;/* border: 3px solid green; */padding: 10px;text-align: center;’text-align:center’;">
      
<?php
echo '<html>';
echo '';
echo '<head>';
echo '';
echo '<title>Currency conversion</title>';
echo '';
echo '</head>';
echo '';
echo '<body>';
echo '';
echo '<form method="post" action="Currency.php">';
echo '';
echo '<label>Convert</label>';
echo '';
echo '<input type="text" name="amount_input"/>';
echo '';
echo '<select name="basecurr">';
echo '';
echo '<option value="CAD" selected>Canadian Dollar</option>';
echo '';
echo '<option value="NZD" >New Zealand Dollar</option>';
echo '';
echo '<option value="USD" >US Dollar</option>';
echo '';
echo '</select>';
echo '';
echo '<label>to</label>';
echo '';
echo '<select name="destcurr">';
echo '';
echo '<option value="CAD" >Canadian Dollar</option>';
echo '';
echo '<option value="NZD" selected>New Zealand Dollar</option>';
echo '';
echo '<option value="USD" >US Dollar</option>';
echo '';
echo '</select>';
echo '';
echo '<input type="submit" value="Do it!">';
echo '';
echo '</form>';
echo '';
echo '</body>';
echo '';
echo '</html>';
$currencies=array("CAD"=>"Canadian Dollar","NZD"=>"New Zealand Dollar","USD"=>"US Dollar");

$rates=array("CAD"=>0.97645,"NZD"=>1.20642,"USD"=>1.0);

$amount_input=$_POST["amount_input"];

$basecurr=$_POST["basecurr"];

$destcurr=$_POST["destcurr"];

$converted_output=($amount_input/$rates[$basecurr])*$rates[$destcurr];

echo "<p>".round($amount_input,2)." ".$currencies[$basecurr]." converts to ".round($converted_output,2)." ".$currencies[$destcurr]."</p>";
?>
 <?php include 'footer.php';?>
</body>
</html>