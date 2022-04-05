<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "curd";

$conn = mysqli_connect($servername, $username, $password, $db);


$b=$_GET['rn'];




$delete="DELETE FROM `notes` WHERE  `sr`='$b'";

header("location:curd.php");

mysqli_query($conn,$delete);


?>