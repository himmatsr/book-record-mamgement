<?php
/*
name of database : BRM_DB
number of column : 4
column name are : bookid(auto_incrementing),title,prize,author
*/


$title = $_POST['title'];
$prize = $_POST['prize'];
$author = $_POST['author'];

$con = mysqli_connect('localhost','root');//locahost or you can write IP address , password :root(as mentioned in statment)
mysqli_select_db($con,'BRM_DB');//selecting database

$q = "INSERT INTO book (title,prize,author) values('$title',$prize,'$author')";//query
$status=mysqli_query($con,$q);//executing query
mysqli_close($con);//closing connection

?>
<! DOCTYPE html>
<html>
<head>
<title>insertion</title>
</head>
<body>
<h1>Book Record Management</h1>
<p><?php
 if($status==1)
	 echo "record inserted";
 else
	 echo "insertion failed";
 ?>
</p>
do you want to insert more record?
<a href="insertionform.php">click here</a>
</body>
</html>