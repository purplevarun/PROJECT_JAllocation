<?php
    include"topbar.php";
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
      .details{
          text-align:left;
          /* background-color:red; */
          color:magenta;
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <?php
              $servername = "remotemysql.com";
              $username = "RAa0VRKfym";
              $password = "ssPGRWRQkX";
              $dbname = "RAa0VRKfym";
              $con = new mysqli($servername,$username,$password,$dbname);

        // echo"dev note :";print_r($_POST); // 
        session_start();
        // print_r($_SESSION);
        $name = $_SESSION["name"];
        $id = $_SESSION["id"];
        $alreadyquery = "select * from joblist";
        $alreadyresult=$con->query($alreadyquery);
        while($alreadyrow=$alreadyresult->fetch_assoc()){
              if($id==$alreadyrow["id"]){
                echo"<h1 style=color:red;text-align:center>You are already placed in $alreadyrow[city]</h1>";
                // print_r($alreadyrow);
                die();
              }
        }
        $city1=$_POST["loc1"];
        $city2=$_POST["loc2"];
        $city3=$_POST["loc3"];
        if($city1=="" || $city2=="" || $city3==""){
          echo'<script>history.go(-1)</script>';    
          die("<h1 style=text-align:center;color:red;>please select cities</h1>");
        }
        if($city1==$city2 || $city1==$city3 || $city2==$city3){

          echo'<script>history.go(-1)</script>';    
          die("<h1 style=text-align:center;color:red;>please select different city names</h1>");
        }      
        $cityarray=array($city1,$city2,$city3);
        // echo"city array=";print_r($cityarray);
        // echo"<br>dev note : okay up to here";
        
        if($con->connect_error)
          die("error = ".$con->connect_error);
        
        $placement=false;
        // echo"preffered cities are=";print_r($cityarray);
        foreach ($cityarray as $key => $cityvalue) { // the 3 preffered cities
            $query1="select * from vacancy";
            $query1result = $con->query($query1);    
            while($q1=$query1result->fetch_assoc()){
                
                // echo"<br> city = $q1[city] and value = $cityvalue";
                
                if($q1["city"]==$cityvalue && $q1["seats"]>0){
                        
                        
                        // echo"<br>$q1[city]";
                        $new_no_of_seats = $q1["seats"]-1;
                        $updatequery = "update vacancy set seats=$new_no_of_seats where city='$cityvalue'";
                        if($con->query($updatequery)){}
                        else die("problem in update".$con->error);
                        
                        $placement=true;
                        $insertjobquery = "insert into joblist values('$id','$name','$cityvalue')";
                        if($con->query($insertjobquery)){
                            echo"<br><h1 style=text-align:center;color:green>Congratulations you got placed in $cityvalue</h1>";
                            // echo"<br>seats before = $q1[seats]";
                            // echo"<br>seats now = $new_no_of_seats";  
                        }
                        else {die("here is error".$con->error);}
                        break 2;
                    
                }  
            }    
        } 
        


        if($placement==false){
            echo"<h1 style=color:red;text-align:center>Sorry no vacancy left at any location</h1>";
        }

        // echo"<h5 style=text-align:center;color:blue>Your preffered locations :</h5>";
        // foreach ($cityarray as $key => $value) {
        //       echo"<h6 style=text-align:center;color:blue>$value</h6>";
        // }
    ?>
    <div class="details">
        <p>Name : <?php echo"$name";?></p>
        <p>ID : <?php echo"$id";?></p>
    </div>
    <?php
        
        $displayquery="select * from joblist";
        $displayqueryresult=$con->query($displayquery);
        // echo"<div style=background-color:black;>";
        echo"<h1 style=text-align:center>List of Employees already placed</h1>";
        echo"<table class=table style=color:white>";
        echo"<tr><th>ID</th><th>Name</th><th>City</th></tr>";
        while($displayrow=$displayqueryresult->fetch_assoc()){
              echo"<tr><td>$displayrow[id]</td>";
              echo"<td>$displayrow[name]</td>";
              echo"<td>$displayrow[city]</td></tr>";
        }
        echo"</table>";
        // echo"</div>";
        
        
        
        
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
