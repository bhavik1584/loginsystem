<?php




//connect to the data base


$servername='localhost';
$username='root';
$password="";


//connecting using mysqli

$conn=mysqli_connect($servername,$username,$password);



if(!$conn)
{
    die("sorry we are not connect");
}

else
{
    echo "connection sucessful";
}





?>