<?php

include"conn.php";

$suc='<div class="alert alert-success" role="alert">
  Login sucessfully
</div>';

$erorr='<div class="alert alert-danger" role="alert">
Wrong username of password please chack and try again
</div>';

$already_exist='<div class="alert alert-danger" role="alert">
this user name already taken try another name
</div>';


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    

    $serch="SELECT * FROM `login`.`logindatabase` WHERE `username`='$username' AND `password`='$password'";
    $result= mysqli_query($conn,$serch);
    
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      echo $already_exist;
    }
    
     
    else if($password==$cpassword && $username!=NULL)
      {
        $hash=password_hash($password,PASSWORD_DEFAULT);
        $insert="INSERT INTO `logindatabase` (`username`,`password`) VALUES ('$username','$hash')";
        mysqli_query($conn,$insert);
        echo$suc;
        session_start();
        $_SESSION['username']=$username;
        header("location:welcome.php");
    

      }
    
    else
    {
        echo $erorr;
    }
}




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
     
      .container
      {
        width:50%;
        margin:auto;
      }
      .heading
      {
        text-align:center;
      }
    </style>
  </head>
  <body>
<h1 class="heading">Sing Up</h1>
  <div class="container">
<form method="post" auction="phpbasic/loginsystem/singup.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Sing Up</button>
</form>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>