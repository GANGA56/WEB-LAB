<html>
<head>
<title>Retrieve data</title>
</head>
<body bgcolor="Lightpink">
<form method="post" action="main.html">
<center>
<?php 
include_once 'conn1.php';
$sql="SELECT * FROM book";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<br><br>
<table border="2">
<tr>
<th>ID</th>
<th>TITLE</th>
<th>AUTHOR</th>
<th>PUBLISHER</th>
<th>QUANTITY</th>
<th>PRICE</th>
</tr>
<?php
$i=0;
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["BOOKID"];?></td>
<td><?php echo $row["TITLE"]; ?></td>
<td><?php echo $row["AUTHOR"]; ?></td>
<td><?php echo $row["PUBLISHER"]; ?></td>
<td><?php echo $row["QUANTITY"]; ?></td>
<td><?php echo $row["PRICE"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>


<?php
}
else
{
echo "No result found";
}

?>
<br><br><input type="submit" value="Back to home page" name="submit">
</center>
</body>
</html> 
