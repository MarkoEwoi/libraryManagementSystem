<!DOCTYPE html>
<html lang="en">
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
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
  <ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br>
<center>   
  <img src="logo.jpg" width="250" height="250">  
  <h1 style="color:green">ADD BOOKS TO  THE LIBRARY</h1>
<form action="insert.php" method="post" class="center">
    <p>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title"><br><br>
    </p>
    <p>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author"><br><br>
    </p>
    <p>
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN"><br>
    </p>
    <input type="submit" value="ADD BooK" class="btn btn-primary" >
    <input type="reset" name="" class="btn btn-primary" ><br><br><br><br><br><br>
 <a href="welcome2.php">BACK</a>  
</form>
<br><br>

</center><br>
<div class="footer">

<br><br><p>&copy; 2020 Marko  and Husein<p>


</div>

</body>
</html>