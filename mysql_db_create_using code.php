<?php


//connection

$servername='localhost';
$username='root';
$password='';

$conn=mysqli_connect($servername,$username,$password);



//create data base

$dbcsql="CREATE DATABASE local200";

$newdbname=mysqli_query($conn,$dbcsql);



?>