<?php

	function createUser($fname, $username, $password, $email, $userlvl) {
		include('connect.php');
		$userString = "INSERT INTO tbl_user VALUES(NULL,'{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no')";
		//echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			redirect_to("admin_index.php");
			$creationuser = "sent email";
		}else{
			$message = "There was a problem setting up this user. Please try again later, and thank you for you patience..";
			return $message;
		}
		mysqli_close($link);
	}




?>
