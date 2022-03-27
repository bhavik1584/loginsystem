<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *
        {
          padding 0px;
          margin 0px;
          text-transform:capitalize;
        }

        .form{

            display:flex;
            align-items:center;
            text-align:center;
            justify-content:center;
            padding:5em;
        }
    </style>
</head>
<body>
    
    <div class="form" >
    <form action="/phpbasic/form.php" method="post">
        <table>
            <tr>
                <td>
                    email
                </td>
                <td>
                        <input type="email" id="email" name="email">
                </td>
            </tr>

            <tr>
                <td>
                    password
                </td>
                <td>
                        <input type="password" id="password" name="pass">
                </td>
            </tr>

            <tr>

                <td>
                        <input type="submit">
                </td>
            </tr>
        </table>
        </form>
    </div>
   
    <?php



        

       

        //create data base

        $sname="localhost";
        $uname="root";
        $pd="";
        $db="sapariya";

        $conn=mysqli_connect($sname,$uname,$pd,$db);

        //query for insert record

        
        if($_SERVER['REQUEST_METHOD']=='POST' )
        {
            $email=$_POST['email'];
            $password=$_POST['pass'];

            
            echo $email;
            $temp=NULL;


            $ir="INSERT INTO `hello`(`SR`,`EMAIL`,`PASSWORD`) VALUES('$temp','$email','$password')";


            mysqli_query($conn,$ir);


            
        }

        



        

    ?>
</body>
</html>