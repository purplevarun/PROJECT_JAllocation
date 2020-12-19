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
        .yo{
            padding:10px;
            border-width:3px;
            border-radius:5px;
            height:25px;
        }
        form{
            font-size:20px;
        }
    </style>
  </head>
  <body>
    <form action="signup.php" method="post"> 
        <label for="email">enter email</label> <br>
        <input type="email" name="email" id="" class="yo"> <br>
        <label for="password">enter password</label> <br>
        <input type="password" name="pass" id="" class="yo"> <br>
        <label for="data">say something about college</label> <br>
        <input type="text" name="data" id="" class="yo">
        <button type="submit" style="border-radius:5px;background-color:black;color:white;">create account</button>
    </form>
    <?php
        if(count($_POST)!=0){
            // print_r($_POST);
            $email = $_POST['email'];
            $password=$_POST['pass'];
            $data=$_POST['data'];
            
            $servername = "remotemysql.com";
            $username = "RAa0VRKfym ";
            $password = "ssPGRWRQkX";

            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            
            $dbname = "login";
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            else {
                // echo"<h1>mai hu donn</h1>";
                $query="insert into login values('$email','$password','$data')";
                if ($conn->query($query) === TRUE) {
                     //echo "account created succesfully";
                    ?>
                    <script>
                        alert("account created succesfully");
                        window.location.href="index.php";
                    </script>
                    <?php
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
  <script src="indexpage.js">
      
  </script>
</html>
