<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8" name="viewport" 
        content= "width=device-width, initial-scale=0.9"> 
    <meta charset="UTF-8">
    <title>Welcome admin</title>
    
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
    </style>
</head>
<body>
	 <ul class="marko">
  <li > <a href="index.php"> HOME</a> </li>
  <li> <a href="contacts.html">CONTACTS</a> </li>
  <li> <a href="about.html">ABOUT</a> </li>
</ul><br>



  <center>
    <img src="logo.jpg" width="250" height="250"> 
    <p>Only you as an admin can add books to the database and also lend books to the students. When students return Books you should make it available by adding it to the database</p>
<a href="addbooks.php">Addbooks</a><br><br><br>
<a href="lendbooks.php">Lend books</a><br><br><br>
<a href="returnbooks.php">Return Books</a><br><br><br>
<a href="extend.php">Extend Return Date</a><br><br><br>
 <a href="index.php">LOGOUT</a>
</center><br><br><br><br>
<div class="footer">


<br><br><p>&copy; 2020 Marko  and Husein<p>
</div>
</body>
</html>