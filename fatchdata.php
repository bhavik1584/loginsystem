<?php


$servername="localhost";
$username="root";
$password="";
$db="bhavik";


$conn=mysqli_connect($servername,$username,$password,$db);


//query for select db from the all db


$select="SELECT * FROM `em`";

$result=mysqli_query($conn,$select);


$my_db_row=mysqli_num_rows($result);

echo $my_db_row;


$show=mysqli_fetch_assoc($result);



while ($row = mysqli_fetch_assoc($result))
{
    echo $row['SR'] . $row['name'] .  $row['salary'] .$row['ph'];

}
    


?>



