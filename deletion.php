<?php 
$size=sizeof($_POST);
for($i=1; $i<=$size ; $i++,$j++)
{
	$j=1;
	$index="b".$j;
	if(isset($_POST[$index]))
		$b_id[$i]=$_POST[$index];
	else
		$i--;
		
}
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
for($k=1;$k<=$size;$k++)
{
$q = "delete from book where bookid=".$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<! DOCTYPE html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<h1>library Record Management</h1>
<p><?php
 
	 echo $size." record inserted";
 ?>
</p>
Go back to home Page
<a href="home.php">click here</a>
</body>
</html>