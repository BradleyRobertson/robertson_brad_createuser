<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;

		}
	}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link rel="stylesheet" href="css/main.css">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
</head>
<body>
	<h1>User Creation</h1>
	<div id="error">
	<?php if(!empty($message)){echo $message;} ?>
</div>
	<form action="admin_createuser.php" method="post">
		<div id="firstname">
	<label>First Name:</label>
	<div id="inputfield">
	<input type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?>
"><br><br>
</div>
</div>

	<label>Username:</label>
	<div id="inputfield">
	<input type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>
">
</div>
<br><br>

	<label>Password:</label>
		<div id="inputfield">
	<input type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>
">
</div>
<br><br>

	<label>Email:</label>
		<div id="inputfield">
	<input type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?>
">
</div>
<br><br>

	<label>User Level:</label>
		<div id="inputfield">
	<select name="userlvl">
		<option value="">Please select a user level</option>
		<option value="2">Web Admin</option>
		<option value="1">Web Master</option>
	</select>
	<br><br>
</div>

	<input class="submit" type="submit" name="submit" value="Create User">
	</form>
</body>
</html>
