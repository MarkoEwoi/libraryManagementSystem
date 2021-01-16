<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
    <meta charset="UTF-8">
    <title>Welcome</title>
  
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
        
 .footer {
  background-color: white;
  padding: 10px;
  text-align: center;
  color:green;
  
}
.heading{color:green;
font-weight: bold;
 font-size: 200%;
}

.today {
  text-align: right;
} 

    </style>
</head>
<body>
     <ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br>
    <div class="page-header">    <p class="today"> <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br>

    
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our Library.<br></h1><br>
   
  <center>

     <img src="logo.jpg" width="250" height="250">
<form action="welcome.php" method="post">
<P> search books by :title :author or ISBN</P>
  
<p> <input type="text" name="search" width="500" >  <input type="submit" name="submit" value="search" placeholder="search"></p>



</form><br>
<br>

</center>
    </div>
    <p>
  <center> 
    </p>

   
    <?php 

// Include config file
require_once "config.php";
    
echo'<span class="heading">Search result:</span>'."<br>";
 if(empty(trim($_POST["search"]))){
        $search_err = "Nothing was searched.";
    } else{
        $search = $_POST['search'];

    }
    

    if(empty($search_err) ){

$sql = "select * from addbooks where title like '%$search%' OR author like '%$search%' OR ISBN like '%$search%'   ";

$result = $link->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
  echo $row["id"]."  ".$row["title"]." ". $row['author']. " ".$row['ISBN']. "<br>". "<br>";
}
} else {
  echo "0 records";
}
    }
echo"". "<br>". "<br>". "<br>". "<br>". "<br>";
echo'<span class="heading">AVAILABLE BOOKS:</span>'."<br>";
$sql = "SELECT id, title, author,ISBN FROM addbooks";
$result = mysqli_query($link, $sql);
echo "<table>";
            echo "<tr>";
                echo " <b><th>ID</th></b>";
                echo "<b><th>TITLE</th></b>";
                echo "<b><th>AUTHOR</th></b>";
                echo "<b><th>ISBN</th></b>";
            echo "</tr>";

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

 echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['ISBN'] . "</td>";
            echo "</tr>";
  }
   echo "</table>";
} else {
  echo "0 results";
}

//display lended books
$name=$_SESSION["username"];


echo "<br><b>Book Lended to me</b><br>";
$sql = "SELECT id, title, author,ISBN,username,Rdate FROM lendbooks WHERE username='$name'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
echo "<table>";
            echo "<tr>";
                echo " <b><th>ID</th></b>";
                echo "<b><th>TITLE</th></b>";
                echo "<b><th>AUTHOR</th></b>";
                echo "<b><th>ISBN</th></b>";

                echo "<b><th>LENDED TO</th></b>";

                echo "<b><th>RETURN TO</th></b>";
            echo "</tr>";
  while($row = mysqli_fetch_assoc($result)) {
 
 echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['ISBN'] . "</td>";

                echo "<td>" . $row['username'] . "</td>";

                echo "<td>" . $row['Rdate'] . "</td>";
            echo "</tr>";
  }

   echo "</table>";
} else {
  echo "0 results";
}


mysqli_close($link);
?><br><br><br>
</center><br>
<div class="footer">

<br><br><p>&copy; 2020 Marko  and Husein<p>
</div>
</body>
</html>