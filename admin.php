


<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
    <title></title>       
    <style type="text/css">
                        a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
          li a{
      text-decoration: none;
      padding: 16px 14px;
      color: white;
      display: inline-block;
      text-align: center;
    }
    li{
      float: left;
      border: 5px solid #223344;
    }
    ul{
      list-style-type: none;
      padding: 0;
      margin: 0;
      overflow: hidden;
      background-color:#223344;}
.active{
  background-color:green;
}

    .marko a:hover {
      background-color: #ddd;
    }
    body{
      background-color: #223344;
      color: white;

    }s
           body{ font: 14px sans-serif;
        background-color: #aaaa7f; }
        .wrapper{ width: 350px; padding: 20px;}
        .wrapper{ width: 350px; padding: 20px;}
             .center {
  text-align: center;
  border: 3px solid green;
}
.footer {
  background-color: white;
  padding: 10px;
  text-align: center;
  color:green;
  
}
   
    </style>
   
</head>
<body>
     <ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br>
      <div class="form-group">

<center><img src="logo.jpg" width="250" height="250"> 
    <h1 style="color:green"> ADMIN LOGIN </h1>
   
<form action="admin.php" method="post" class="center"><br>
Name: <input type="text" name="username" ><br><br>
Password: <input type="password" name="password" ><br><br>
<input type="submit" value="login" class="btn btn-primary">
<input type="reset" name="reset"><br><br><br><br>

<a href="index.php">BACK</a></center></form><br><br>
</div>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once "config.php";
 
// Attempt select query execution
$sql = "SELECT * FROM admin";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                //echo "<th>id</th>";
                //echo "<th>username</th>";
                //echo "<th>password</th>";
                //echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               // echo "<td>" . $row['id'] . "</td>";
               // echo "<td>" . $row['username'] . "</td>";
                //echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
            $uname= $row['username'] ;
            
            $pass=$row['password'];

        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


// define variables and set to empty values
$uname1 = $pass1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $uname = $_POST["name"];
          $pass1=$_POST["password"];
  
if ($uname==$uname1 && $pass==$pass1) {
 header("location: welcome2.php");

    # code...
} else {
    # code...
    echo "Authentication failure";
}


  }

?>
<div class="footer">

<br><br><p>&copy; 2020 Marko  and Husein<p>

</div>
</body>
</html>




