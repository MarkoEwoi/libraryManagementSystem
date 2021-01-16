
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
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
        
    </style>
	<title></title>
</head>
<body>


 <ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br><center><img src="logo.jpg" width="150" height="150"> </center>
  <br><br><br>
<?php
// Include config file
require_once "config.php";
  
// Escape user inputs for security
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$author = mysqli_real_escape_string($link, $_REQUEST['author']);
$ISBN = mysqli_real_escape_string($link, $_REQUEST['ISBN']);
 
// Attempt insert query execution
if (isset($title,$author,$ISBN)) {
$sql = "INSERT INTO addbooks (title, author,ISBN) VALUES ('$title', '$author', '$ISBN')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.<br>";
} else{
    echo "ERROR: Could not able to execute $sql.<br> " . mysqli_error($link);
}
}
echo "<b> <br><br>Available books</b><br>";
//display available books
$sql = "SELECT id, title, author,ISBN FROM addbooks";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    echo " <b>ID</b>" . $row["id"]. "  <b>Title: </b>    " . $row["title"]. "   <b> Author:</b>     " . $row["author"]. "<b>   ISBN   </b>" . $row["ISBN"]. "<br>";
  }
} else {
  echo "0 results";
}


//display lended books
echo "<br><b>Lended books</b><br>";
$sql = "SELECT id, title, author,ISBN,username,Rdate FROM lendbooks";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

    echo "id " . $row["id"]. "  <b>Title: </b>    " . $row["title"]. "   <b> Author:</b>     " . $row["author"]. "<b>   ISBN   </b>" . $row["ISBN"]." <b> Lended to    </b>     " . $row["username"]."<b> Return Before </b>". $row["Rdate"]."<br>";
  }
} else {
  echo "0 results";
}


 
// Close connection
mysqli_close($link);
?>


  <br><br><center>
<a href="addbooks.php">Add another Book</a><br><br>
 <a href="welcome2.php">BACK</a>
</body>
</html>