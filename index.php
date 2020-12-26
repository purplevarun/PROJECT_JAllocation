<?php
  include "topbar.php";
?>
<?php
    $servername = "remotemysql.com";
    $username = "RAa0VRKfym";
    $password = "ssPGRWRQkX";

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    
    $conn = new mysqli($servername, $username, $password);
    if($conn->connect_error){
        die("<h1>unsuccesful login</h1>");
    }
    else {
        //echo"<h1>login successful</h1>";
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Varun Kedia</title>
    <!-- <link rel="stylesheet" href="styled.css"> -->
    <style>
        body{
          color:white;
          background-color:black;
        }
        p{
            font-size:10px;
            margin:20px;
        }
        .creds{
            bottom:0px;
            text-align:center;
        }
    </style>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <h1 style="text-align:center;padding:30px">Job Location Allocation System</h1>
    
    <p style="text-align:center;padding:30px">
        <button type="button" class="btn btn-primary btn-lg" id="signin">Sign in</button>
    </p>
    <p style="text-align:center;padding:30px">
        <button type="button" class="btn btn-danger btn-lg" id="signup">Sign up</button>
    </p>
    <div class="creds">
    <p>Designed by - Sourav Kairi</p>
    <p>Developed by - Varun Kedia</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
  <!-- <script src="indexpage.js"></script> -->
  <script>
        window.onload = function() {
            if(!window.location.hash) {
            window.location = window.location + '#loaded';
            window.location.reload();
            }
        }
        document.querySelector("#signin").onclick=function() {
            // alert("signin");
            window.location.href="signin.php";
        }
        document.querySelector("#signup").onclick=function() {
            // alert("signup");
            window.location.href="signup.php";
        }
  </script>
</html>
