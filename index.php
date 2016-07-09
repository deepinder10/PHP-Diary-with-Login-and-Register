<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300italic,300,100italic,100,400italic' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>

<?php
	include("login.php");
?>

<style type="text/css">
	.container{
		margin-top: 12%;
		margin-bottom: 30px;
	}

	.navbar-brand{
		color: white !important;
	}
	.colorgraph {
	  	height: 5px;
	  	border-top: 0;
	  	background: #c4e17f;
	  	border-radius: 5px;
	  	background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  	background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  	background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	  	background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
	}
	.alert{
		position: absolute;
		top: 10vh;
		left: 25vw;
		text-align: center;
		width: 50vw;
	}
	.loginbtn{
		margin-top: 8px;
		margin-right: 10px;
	}
	body{
		background:url(diary.jpg);
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
	h1{
		text-align: center;
		color: #FECF71;
		font-size: 3em;
		font-family: Lato;
	}
	h3{
		font-family: Lato;
		font-weight: 300;
		text-align: center;
		color: white;
	}
</style>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
	 	 	 <div class="navbar-header pull-left">
	 	 	 	
	 	 	 	<div class="navbar-brand">MY DIARY</div>

	 	 	 </div>
	 	 	 <div class="nav navbar-nav navbar-right pull-right">
		      	<a class="btn btn-primary loginbtn" data-toggle="modal" href="#myModal">Login</a>
    		</div>	
	 	 	 
		</div>
	</div>

	<div class="container">
	
	<h1><b>MY DIARY</b></h1>
	<h3>Your own private diary, with you wherever you go.</h3>
	<div class="row">
	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form method="post" id="registerForm">
				<h2>Please Sign Up <span>It's free and always will be.</span></h2>
				<hr class="colorgraph">
				<div class="form-group">
					<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Name" required>
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
						</div>
					</div>
					
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-md-12"><input id='submit' type="submit" name='submit' value="Register" class="btn btn-primary btn-block btn-lg"></div>
				</div>
			</form>
		</div>
	</div>

<!-- Modal !-->
	<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title" id="myModalLabel">Login</h4>
				</div>
          <div class="modal-body row">
            <form method="post" name="login_form">
				<div class="form-group col-md-7 col-xs-7">
					<input type="email" name="loginemail" id="email" class="form-control input-lg" placeholder="Email Address" required>
				</div>              
				<div class="form-group col-md-7 col-xs-7">
					<input type="password" name="loginpassword" id="password" class="form-control input-lg" placeholder="Password" required>
				</div>               
				
          </div>
          <div class="modal-footer">
<!--                 <a href="#">Forgot Password?</a> -->
				<button type="submit" name='submit' value="Login" class="btn btn-primary">Sign in</button>
          </div>
        </form>
        </div>
       </div>
    </div>
	<!-- Modal -->
</body>
</html>