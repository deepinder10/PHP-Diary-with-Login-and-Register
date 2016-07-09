<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<?php
	session_start();
	error_reporting(0);

	include("connection.php");

	$query = "SELECT `diary` from `users` WHERE `id` = '".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link,$query);

	$row = mysqli_fetch_array($result);

	$diary = $row['diary'];

if(isset($_SESSION['id'])){
echo '
<style type="text/css">
	.container{
		margin-top: 10%;
	}

	.navbar-brand{
		color: white !important;
	}
	body{
		background:url(journal.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;	
	}
	h2{
		color: white;
	}
	h2 span{
		color: #F7FDCA;
		font-size: 60%;
	}
	textarea{
		font-size: 2em !important;
		height: 70vh !important;
	}
	.pull-right{
		padding: 15px;
		color: white !important;
	}
</style>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
	 	 	 <div class="navbar-header pull-left">
	 	 	 	
	 	 	 	<div class="navbar-brand">MY DIARY</div>

	 	 	 </div>
	 	 	 <div class="nav navbar-nav navbar-right">
		      	<a class="pull-right" href="index.php" onclick="logout();">Logout</a>
    		</div>	
	 	 	 
		</div>
	</div>

	<div class="container">
		<div class="form-group">
			<textarea class="form-control">'. $diary.'</textarea>
		</div>
	</div>

	<script type="text/javascript">
		$("textarea").keyup(function(){
			$.post("updatediary.php",{diary:$("textarea").val()});
		});

		function logout(){
			$.post("index.php",{out:1});
		}
	</script>
	</body>
</html>';}
else{
	echo "Please login first.";
}