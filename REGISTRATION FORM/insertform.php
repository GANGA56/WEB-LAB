<html>
<head>
 <title>Register form</title>
</head>
<body bgcolor="yellowgreen">
<form method="post" action="insertform.php">
<center><br><br>
<b>User Registration Form<b><br><br>
<table>
<tr>
<td>Name.</td>
<td><input type="text" name="uname"></td>
</tr>
 <tr>
<td>password:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">female</td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email"name="email"></td>
</tr>
<tr>
<td>phone no:</td>
<td>
<select name="code">
<option>977</option>
<option>978</option>
<option>979</option>
<option>973</option>
<option>972</option>
<option>971</option>
</select>
<input type="phone" name="phno">
</td>
</tr>
<tr>
<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>