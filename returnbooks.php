<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
<style type="text/css">

 .footer {
  background-color: white;
  padding: 10px;
  text-align: center;
  color:green;
  
}
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
             .center {
  text-align: center;
  border: 3px solid green;
}
   
    </style>
	<title></title>
</head>
<body>
	<ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br>     
<br><br><br><br>
<?php 
 
// Include config file
require_once "config.php";
//display books

//display lended books
echo "<br><b>Lended books</b><br>";
$sql = "SELECT id, title, author,ISBN,username,Rdate FROM lendbooks";
$result = mysqli_query($link, $sql);
echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>TITLE</th>   ";
                echo "<th>AUTHOR</th>  ";

                echo "<th>ISBN</th>   ";

                echo "<th>LENDED TO</th>  ";

                echo "<th>RETURN BEFORE</th>";
                echo "</tr>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
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
//
$bookid = $_POST["title"];
$username=$_POST["username"];
$ISBN=$_POST["ISBN"];

if (isset($bookid,$username)) {
  
$sql = "DELETE FROM lendbooks WHERE title='$bookid' AND username='$username' AND ISBN='$ISBN'";

if (mysqli_query($link, $sql)) {
  echo "<br><br><br>Record deleted successfully from<b> available books</b><br> ";
  header("refresh: 0"); 
    
} else {
  echo "<br><br><br>Error deleting record: " . mysqli_error($link);
}
}


mysqli_close($link);

?>
<br><br>

<h2>The USERNAME and ISBN and the TITLE  MUST be CORRECT!</h2>
<h>USERNAME<h4 style="color:red;">MUST</h4>BE REGISTERED</h>
<br>
<center>


  <center><img src="logo.jpg" width="250" height="250">
<h1>RETURN BOOKS</h1> </center>
  <form action="returnbooks.php" method="post" class="center">
  <p>
        <label for="username"> Username:</label>
        <input type="text" name="username" id="username">
    </p><br>
    <p>
        <label for="Rdate">Return Date:</label>
        <input type="date" name="Rdate" id="Rdate">
      </p>
   
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
    </p><br>
    <p>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author">
    </p><br>
    <p>
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN">
    </p><br>
  <input type="submit" value="Return book">
  <input type="reset" ><br><br><br>
<a href="welcome2.php">BACK</a></form>
<br><br> 
</center>
<br>
<div class="footer">

<br><br><p>&copy; 2020 Marko  and Husein<p>


</div>
</body>
</body>
</html>