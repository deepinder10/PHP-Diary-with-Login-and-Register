<?php
	
	// if post request is made
	session_start();

	if($_POST['out'] == 1)
		session_destroy();

	include("connection.php");
	
	if($_POST){
	if($_POST['submit']=="Register"){

		// initialize error variable
		$error ="";
		// if no email is entered
		if(!$_POST['email'])
			$error.="<br>Please enter email";
		// email validation
		if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			$error.="<br>Please enter valid email";
		//if no password is entered
		if(!$_POST['password'])
			$error.="<br>Please enter password";
		else{
			//if password length is less than 8
			if(strlen($_POST['password'])<8)
				$error .="<br>Please enter atleast 8 characters";
			//if password dowsn't contain a capital letter
			if(!preg_match('`[A-Z]`', $_POST['password']))
				$error .="<br>Please include atleast one capital letter";
		}
		// if there is an error.
		if(!empty($error)) 
			echo "<div class='alert alert-danger'>There were error(s) in your signup details.$error</div>";
		else{
			//we make sql query to check whether the email exists or not.
			$query = "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link,$_POST['email'])."'";
			$result = mysqli_query($link,$query);
			//if number of rows are more than 0 that means there already exists a email.
			$results = mysqli_num_rows($result);

			//if email is registered
			if($results)
				echo "<div class='alert alert-danger'>Email already registered</div>";
			else{
				//sign up a new email into database.
				$query = "INSERT INTO `users`(`email`,`password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."',
				'".md5(md5($_POST['email']).$_POST['password'])."')";
				mysqli_query($link,$query);
				echo "<div class='alert alert-success'>You have been signed up.</div>";
				//returns most recently signed up user's id
				$_SESSION['id']=mysqli_insert_id($link);
				header('Location:diaryPage.php');
			}
		}
	}
	//login clicked
	else if($_POST['submit']=="Login"){

		$query =  "SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password = '".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_array($result);

		//if user exists and right password and email is entered.
		if($row){
			$_SESSION['id']=$row['id'];
			header('Location:diaryPage.php');
		}
		else{
			echo "<div class='alert alert-danger'>Wrong details entered.</div>";
		}
	}
}
?>
