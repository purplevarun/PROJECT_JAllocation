<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>sign in page</title>
    <style>
      .yoyo{
        border-width:3px;
        border-style:double;
        border-radius:5px;
        padding:20px;
        /* width:20px; */
        height:20px;
      }
    </style>
  </head>
  <body>
    <!-- <h1>sign in page</h1> -->

    <!-- Optional JavaScript; choose one of the two! -->
    <div class="wrap" style="text-align:center">
    <form action="signin.php" method="post"> <br>
      <label for="email">enter email</label> <br>
      <input type="email" name="email" value="" class="yoyo"> <br>
      <label for="password">enter password</label> <br>
      <input type="password" name="password" id="" class="yoyo"> <br>
      <button type="submit" style="background-color:green;margin:10px;font-size:20px;border-radius:5px;border-style:double-line;">log in</button>
    </form>
    </div>
    <?php
      // echo"hello world";
      if(count($_POST)!=0){
        // print_r($_POST);
        $servername = "remotemysql.com";
        $username = "RAa0VRKfym";
        $password = "ssPGRWRQkX";
        $dbname = "RAa0VRKfym";

        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname="test";
        $con = new mysqli($servername,$username,$password,$dbname);
        if($con->connect_error)
          die("error = ".$con->connect_error);
        // echo "<h1>yas</h1>";
        $sql = "select * from login";
        if($result = $con->query($sql)){}
        else die("<h1>$con->error</h1>");
        $inputname = $_POST["email"];
        $inputpassword = $_POST["password"];
        // echo "$inputpassword"."       --       "."$inputname";
        $flag=0;
        if($result->num_rows >0){
          while($row = $result->fetch_assoc()) {
              // echo"id = ".$row["email"]." pass = ".$row["password"]."<br>";
              if($inputname==$row["email"] && $inputpassword==$row["password"]){
                // echo"<h1>exists</h1>";
                // go to next page from here
                session_start();
                $_SESSION["email"]=$inputname;
                $_SESSION["password"]=$inputpassword;
                ?>
                <script>
                  alert("login successful");
                  window.location.href="frontpage.php";
                </script>
                
                <?php
                
              }
          }
          
          ?>
            <script>
              alert("wrong email and password");
            </script>
          <?php
        }
        else {
          die("<h1>Not Registered</h1>");
        }
        $con->close();
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
</html>
