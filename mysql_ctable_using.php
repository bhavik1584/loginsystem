<?php

//connect data base jaruri tools


$sname='localhost';
$uname='root';
$password="";
$bdname='bhavik';



// connecting data base

$conn=mysqli_connect($sname,$uname,$password,$bdname);




//query for create table



$sql="CREATE TABLE `bhavik`.`em`(`SR` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL  , `salary` INT(5) NOT NULL  , `ph` INT(5) NOT NULL  ,  PRIMARY KEY (`sr`))";





$table=mysqli_query($conn,$sql);



if($table)
{
    echo"table create sucessfully";
}
else
{
    echo"table not created".mysqli_erorr();;
}
















?>