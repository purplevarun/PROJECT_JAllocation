<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                color:white;
                background-color: black;
            }
            form{
                text-align: center;
                font-size: 23px;
                margin-top:200px;
                font-family: Arial, Helvetica, sans-serif;
            }
            #pass-btn{
                border:double;
                border-width: 4px;
                border-radius: 5px;
                border-color: gold;
                margin:20px;
            }
            .adminloginbtn{
                margin:20px;
                border:groove;
                border-width: 6px;
            }
        </style>
    <title>admin page</title>
  </head>
  <body>
    <form action="admin.php" method="post">
            <label for="adminpass">Enter master password</label> <br>
            <input type="password" name="adminpass" id="pass-btn"> <br>
            <button type="submit" class="btn btn-lg btn-success adminloginbtn">Log in as Admin</button>
    </form>
    <?php
            // print_r($_POST);
            if(count($_POST)>0){
                $pass = $_POST["adminpass"];
                if($pass!="helloworld"){ // this is the admin password //  unchangeble //  only can be changed in the script // Varun Kedia
                    // echo"<script>setTimeout(function(){history.go(-1)}, 1000);</script>";
                    die("<h1 style=color:red;text-align:center;>Wrong Password</h1>");
                }
                echo"<h1 style=color:green;text-align:center;>Login Succesfull</h1>";
                ?>
                <script>window.location.href="adminhelper.php";</script>
                <?php
            }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    include"topbar.php";
?>