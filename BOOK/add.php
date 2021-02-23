<html>
<body bgcolor="yellow">
<form action="main.html" method="post">
<center>
<br><br>
<?php
include 'conn1.php';
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$sql="INSERT INTO book (TITLE,AUTHOR,PUBLISHER,QUANTITY,PRICE)VALUES('$title','$author','$publisher','$quantity','$price')";
if(mysqli_query($conn,$sql))
{
echo "<br>New record created successfully!<br>";
}
else
{
echo "Error:".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="Back to Homepage" name="submit">
</center>
</body>
</html>
</center>