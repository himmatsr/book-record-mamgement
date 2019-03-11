<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');

$q="select * from book";
$result= mysqli_query($con,$q);
$num = mysqli_num_rows($result);
mysql_close($con);
?>

<!DOCTYPE html>

<html>
<head>
<title>
view book record
</title>
<link rel = "stylesheet" href="./css/viewCSS.css"/>
</head>
<body>
<h1>Book record management</h1>
<table id ="view_table">
<tr>
<th>Book_id</th>
<th>Title</th>
<th>Prize</th>
<th>Author</th>
</tr>
<?php
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
		
	
?>
<tr>
<td><?php echo $row['bookid']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['prize']; ?></td>
<td><?php echo $row['author']; ?></td>
</tr>
<?php
	}
?>
</table>
</body>
</html>