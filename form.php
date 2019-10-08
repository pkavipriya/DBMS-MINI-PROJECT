<?php
$conn=mysqli_connect("localhost","root","","web");
?>
<html>
<head></head>
<body>
<?php
if(isset($_POST['submit'])){
	$firstname=$_POST['firstname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="insert into reg(Firstname,Email,Password)values('$firstname','$email','$password')";
	$run=mysqli_query($conn,$query);
	if($run)
	{
		echo"data insert successfully";
	}
	else
	{
		echo"error:".mysqli_error($conn);	
}
}
?>
<center><h1>Registration Form</h1></center>
<div class="form">
<form action="" method="POST">
<center>
<table>
<tr>
<th></th>
<th>Registration Form</th>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" name="firstname" placeholder="firstname" required=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" placeholder="emailid" required=""></td>
</tr>
<tr>
<td>Password</td>
<td><input type="pass" name="password" placeholder="password" required=""></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit" name="submit"></td>
</tr>
</table>
</center>
</form>
</div>
</body>
</html>