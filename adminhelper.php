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
        a{
          text-decoration: none;
          color:goldenrod;
        }
        a:hover{
          text-decoration: none;
          color:red;
        }
        
    </style>
    <title>admin helper module</title>
  </head>
  <body>
        <!-- <h1>welcome to admin page</h1>
        <h2>// still in developement</h2> -->
        <h1 style="color:green;text-align:center">Welcome Admin</h1>
        <h2 style="text-align:left">What do you want to do?</h2>
        <a href="changevacancy.php"><h4>1. Change number of vacancies in all cities</h4></a>
        <a href="addcity.php"><h4>2. Add new city in database</h4></a>
        <a href="deleteuser.php"><h4>3. Remove Employee</h4></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
    include "topbar.php";
?>