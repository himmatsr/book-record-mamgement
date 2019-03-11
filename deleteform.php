<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'BRM_DB');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>

<html>
<head>
<title>
delete book record
</title>
<link rel = "stylesheet" href="./css/viewCSS.css"/>
</head>
<body>
<h1>Book record management</h1>
<form action="deletion.php" method="post">
<table id ="view_table">
<tr>
<th>Book_id</th>
<th>Title</th>
<th>Prize</th>
<th>Author</th>
<th>select to delete</th>
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
<td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i;?>"/></td>
</tr>
<?php
	}
?>
<tr>
<td colspan="5"><center><input type="submit" value="Delete"/></center></td>
</tr>
</table>
</form>
</body>
</html>