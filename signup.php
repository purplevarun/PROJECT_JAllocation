<?php
  include "topbar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>sign up page</title>
    <style>
        body{
          /* margin:10px; */
          color:black;
          background-color:white;
        }
        .yo{
            border-width:3px;
            border-style:double;
            border-radius:5px;
            padding:20px;
            /* width:20px; */
            height:20px;
            /* margin:20px; */
        }
        form{
            font-size:20px;
            /* margin:10px; */
            
        }
    </style>
  </head>
  <body>
    <div class="wrap" style="text-align:center">
    <form action="signup.php" method="post"> 
        <label for="email">enter email</label> <br>
        <input type="email" name="email" id="" class="yo"> <br>
        <label for="password">enter password</label> <br>
        <input type="password" name="pass" id="" class="yo"> <br> <br>
        <!-- <label for="data">say something about college</label> <br>
        <input type="text" name="data" id="" class="yo"> <br> -->
        <button type="submit" style="height:40px;border-radius:5px;background-color:black;color:white;">create account</button>
    </form>
    </div>
    <?php
        if(count($_POST)!=0){
            //  print_r($_POST);
            $email = $_POST['email'];
            $password1=$_POST['pass'];
            // $data=$_POST['data'];
            
            $servername = "remotemysql.com";
            $username = "RAa0VRKfym";
            $password = "ssPGRWRQkX";
            $dbname = "RAa0VRKfym";

            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname="test";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            else {
                // echo"<h1>mai hu donn</h1>";
                if($email=="" || $password1==""){
                  die('<h1 style="text-align:center;color:red">Fields cannot be blank</h1>');
                }
                $query="insert into login values('$email','$password1')";
                if ($conn->query($query) === TRUE) {
                     //echo "account created succesfully";
                     echo '<h1 style="text-align:center;color:green">Account created successfully</h1>';
                     echo '<script>window.location.href="index.php";</script>';                  
                }
                else {
                    echo"error = $conn->error";
                    die();
                }
                $conn->close();
            }
            
        }
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
  <!-- <script src="indexpage.js"> -->
      
  </script>
</html>
