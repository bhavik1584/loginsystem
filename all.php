<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="/phpbasic/all.php" method="post">

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
      <td> <input type="text" id="salary" name="salary"> </td>
    </tr>

    <tr>
        <td>
        <input type="submit">
        </td>
    </tr>

</table>

</form>

<?php

//making data base object

$servername="localhost";
$username="root";
$password="";
$db="bhavik1104";

//conn without db specified

$conn=mysqli_connect($servername,$username,$password);

$conndb=mysqli_connect($servername,$username,$password,$db);


//chack conn object work or not

if($conn)
{
    echo"connection done";
}
else
{
    echo"connection not done";
}


//create new data base query

/*$create_db="CREATE DATABASE bhavik1104";

mysqli_query($conn,$create_db);*/


//create table using code

/*$create_table="CREATE TABLE `bhavik1104`. `enum`(`sr` INT NOT NULL AUTO_INCREMENT,`name` VARCHAR(15) NOT NULL,`rollno` INT NOT NULL,`salary`INT NOT NULL,PRIMARY KEY(`sr`) ) ";

mysqli_query($conndb,$create_table);*/


//insert value from data base using post method



if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $salary=$_POST['salary'];


    //query for insert data into data base


    $insert="INSERT INTO `enum`(`name`,`rollno`,`salary`) VALUES ('$name','$roll',$salary)";


    mysqli_query($conndb,$insert);

}



//print colom of table



//select specific table


$select="SELECT * FROM `enum`";


$result=mysqli_query($conndb,$select);


$row=mysqli_num_rows($result);


while($rowp=mysqli_fetch_assoc($result))
{

    echo $rowp['sr'];
    echo "<br>";
    echo $rowp['name'];
    echo "<br>";
    echo $rowp['rollno'];
    echo "<br>";
    echo $rowp['salary'];
    echo "<br>";
    echo "<br>";


}



?>



</body>
</html>