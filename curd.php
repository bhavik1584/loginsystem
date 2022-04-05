<?php

//data base connection


$servername = "localhost";
$username = "root";
$password = "";
$db = "curd";

$conn = mysqli_connect($servername, $username, $password, $db);

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
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHP CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Contect Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div class="container my-4">
    <form method="post" auction="/phpbasic/curd.php">
      <h1>Add A Note</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>

      <div class="mb-3 form-check">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a comment here" id="disc" name="disc" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Note Discription</label>
        </div>
        <button type="submit" class="btn btn-primary my-3">Add Note</button>
    </form>
  </div>


  <div>

    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">SR.NO</th>
          <th scope="col">TITLE</th>
          <th scope="col">DISCRIPTION</th>
          <th scope="col">AUCTION</th>
        </tr>
      </thead>
      <tbody>
        <?php


        //select query

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $title = $_POST['title'];
          $disc = $_POST['disc'];

          //insert query

          $insert = "INSERT INTO `notes`(`title`,`disc`) VALUES ('$title','$disc')";

          mysqli_query($conn, $insert);
        }


        $sql = "SELECT * FROM `notes`";


        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) 
        {

         $a=$row['sr'];


          echo
          "<tr>
      <th scope='row'>" . $row['sr'] . "</th>
      <td>" . $row['title'] . "</td>
      <td>" . $row['disc'] . "</td>
      <td>" . $row['tstamp'] . "</td>
      <td><a href='delete.php?rn=$a'>DELETE</a><td>
      
        </tr>";
        }
        



        ?>
  
      </tbody>
    </table>

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