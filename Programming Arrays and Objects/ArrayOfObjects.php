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
        <?php include 'Employee.php';?>
        <?php include 'Supervisor.php';?>

        <div style="margin: auto;width: 50%;/* border: 3px solid green; */padding: 10px;text-align: center;’text-align:center’;">
        <?php

 $employee1= new Employee("1","Chris","Rogers");
 $employee2= new Employee("2","Matt","Prior");
 $employee3= new Employee("3","Cindy","Burnskill");
 $employee4= new Employee("4","Elizabeth","Ford");
 $employee5= new Employee("5","Doug","May");
 $employee6= new Employee("6","John","Hopkins");

 $employees1=array($employee1,$employee2,$employee3);
 $employees2=array($employee4,$employee5,$employee6);

 $supervisor1=new Supervisor("1","Adam","Phillip",$employees1);
 $supervisor2=new Supervisor("2","Nicolas","Jones",$employees2);
 
 $supervisorOne=$supervisor1->getEmployees();
 $supervisorTwo=$supervisor2->getEmployees();
 for ($i = 0; $i <= 2; $i++) {

    echo "Employee Id: " .  $supervisorOne[$i]->getEmployeeId(). ", Name : " .  $supervisorOne[$i]->getfirstName() ." " .   $supervisorOne[$i]->getlastName(). ",  Supervisor: " .  $supervisor1->getfirstName(). " ". $supervisor1->getlastName(). "</br>" ;

    
}

for ($i = 0; $i <= 2; $i++) {
echo "Employee Id: " .  $supervisorTwo[$i]->getEmployeeId(). ", Name : " .  $supervisorTwo[$i]->getfirstName() ." " .   $supervisorTwo[$i]->getlastName(). ",  Supervisor: " .  $supervisor2->getfirstName(). " ". $supervisor2->getlastName(). "</br>" ;
}

        ?>
        </div>
        <?php include 'Footer.php';?>
    </body>
</html>