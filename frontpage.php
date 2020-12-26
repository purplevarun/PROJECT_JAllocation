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
    <style>
      body{
          color:white;
          background-color:black;
        }
      .fullwrap{
        font-size:20px;
        margin:10px;
        text-align:center;
      }
      form{
        text-align:center;
        margin:20px;
      }
      .yo{
          margin:10px;
          width:200px;
          height:40px;
          border-style:double;
          border-width:4px;
          border-radius:3px;
          border-color:black;
          padding-top:0px;
      }
      .details{
          text-align:left;
          /* background-color:red; */
          color:magenta;
      }
    </style>
    <title>frontpage</title>
  </head>
  <body>
      <div class="fullwrap">
    <!-- <h1>Hello, world!</h1> -->
    <?php
        session_start();
        if(count($_SESSION)==0){
          die('<h1 style="text-align:center">error</h1><script>alert("user not found");</script>');    
        }
        $inputname = $_SESSION["email"];
        $inputpassword = $_SESSION["password"];
        // print_r($_SESSION);
        $query = 'select * from login';  
        $servername = "remotemysql.com";
        $username = "RAa0VRKfym";
        $password = "ssPGRWRQkX";
        $dbname = "RAa0VRKfym";
        $con = new mysqli($servername,$username,$password,$dbname);
        if($con->connect_error)
          die("error = ".$con->connect_error);
        
        if($result = $con->query($query)){}
          else die("<h1>$con->error</h1>");
        
        if($result->num_rows>0){
            // echo"<h1>okay</h1>";
            while($row = $result->fetch_assoc()) {
              // echo"<h1>okay</h1>";
                if($inputname==$row["email"] && $inputpassword==$row["password"]){
                  // echo"<h1>$row[id]</h1>";
                  // echo"<h1>$row[name]</h1>";
                  $displayid = $row['id'];
                  $displayname = $row['name'];
                  
                }
            }
        }
        
        

    ?>
    <div class="details">
        <p>Name : <?php echo"$displayname";?></p>
        <p>ID : <?php echo"$displayid";?></p>
    </div>
    <h1>Enter placement details:</h1>
    <form action="analysis.php" method="post">
        <label for="loc1">Enter first preference</label> <br>
        <!-- <input type="text" name="loc1" id="" class="yo"> <br> -->
        <select name="loc1" class="yo" >
            <option value="Bangalore">Bangalore</option>
            <option value="Delhi">Delhi</option>
            <option value="Kolkata">Kolkata</option>
        </select> <br>
        <label for="loc2">Enter second preference</label> <br>
        <select name="loc2" class="yo">
            <option value="Kolkata">Kolkata</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Delhi">Delhi</option>
        </select> <br>
        <label for="loc3">Enter third preference</label> <br>
        <select name="loc3" class="yo">
            <option value="Delhi">Delhi</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Bangalore">Bangalore</option>
        </select> <br>
        <button type="submit" class="btn-lg btn-success">Submit</button>
    </form>
    <?php
      // print_r($_SESSION);
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>
