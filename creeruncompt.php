<!DOCTYPE html>
<html lang="en-US">
<head>
	<title></title>
	    <link rel="stylesheet" href="creeruncompt.css">
	<body>
		<form method="POST">
			<h2>Formule d'inscription</h2>
			<label>User Name :</label>
			<input type="text" name="username" placeholder="User Name"><br>
			<label>Password:</label>
			<input type="text" name="password" placeholder="Password"><br>
			<label>numero de telephone:</label>
			<input type="text" name="numerodetelephone" placeholder="numero de teleohone"><br>
			<button type="submit" name="submit">Login</button>
		</form>
<?php   

$con=mysqli_connect("localhost:3325","root","","bienvenuegestion");
if(isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$numerodetelephone=$_POST['numerodetelephone'];
	$query="INSERT INTO gestion(username,password,numerodetelephone)value('$username','$password','$numerodetelephone')";
	mysqli_query($con,$query);

}

?>
</body>
</head>
</html>