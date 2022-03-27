<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="/phpbasic/test2.php" method="post">

<table>
    <tr>
      <td>  enter name </td>
      <td> <input type="text" id="name" name="name"> </td>
    </tr>

    <tr>
      <td>  enter roll  </td>
      <td> <input type="text" id="roll" name="roll"> </td>
    </tr>

    <tr>
      <td>  enter salary  </td>
      <td> <input type="number" id="salary" name="salary"> </td>
    </tr>

    <tr>
        <td>
        <input type="submit">
        </td>
    </tr>

</table>

</form>



    
<?php

$servername="localhost";
$username="root";
$password="";
$db="sabkabapp";


//connection ogf data base

$conn=mysqli_connect($servername,$username,$password,$db);


// $mysql_create="CREATE DATABASE sabkabapp";


// $result=mysqli_query($conn,$mysql_create);



// $mysql_create_table="CREATE TABLE `sabkabapp`.`backtome`( `sr` INT(1) NOT NULL AUTO_INCREMENT ,`name` VARCHAR(15) NOT NULL ,`roll` VARCHAR(15) NOT NULL ,`salary` INT NOT NULL,PRIMARY KEY (`sr`))";



// mysqli_query($conn,$mysql_create_table);


if($_SERVER['REQUEST_METHOD']=='POST')
{

$name=$_POST['name'];
$roll=$_POST['roll'];
$salary=$_POST['salary'];


$iq="INSERT INTO `backtome`(`SR`,`NAME`,`ROLL`,`DOJ`) VALUES ('NULL','$roll','$name','$salary')";


mysqli_query($conn,$iq);

}


//  DELETE TABLE

//  

//delete specific data 

$delete="DELETE FROM `backtome` WHERE `backtome`.`SR`=15";


//update query

$update="UPDATE  `backtome` SET `NAME`='kartik' WHERE `backtome`.`SR`=9";

mysqli_query($conn,$update);



$aff=mysqli_affected_rows($conn);

echo $aff;



// mysqli_query($conn,$specific_data);





?>

</body>
</html>


