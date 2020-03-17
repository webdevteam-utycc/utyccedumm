<?php
	session_start();
  $salt = time('now');
  $token = hash("sha256",$salt);
  $_SESSION['token'] = $token;
	if(isset($_SESSION['admin_id']) && isset($_SESSION['admin_name'])){
		header("location: post.php");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>UTYCC Web Development</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
  	<div class="wrapper">
  		<div class="container-fluid">
  			<div class="float-div">
  				<label class="login">
  					<span class="login-inner">Login</span>
  				</label>
  				 <div class="row justify-content-md-center">
			    	<div class="col-lg-10">
			    		<form method="POST" action="login_process.php">
			    			<input type="text" class="user-input" name="name" placeholder="Enter Name" required>
			    			<input type="password" class="user-input" name="pass" placeholder="Enter Password" required>
                <input type="hidden" name="tok" value="<?php echo $token; ?>">
			    			<input type="submit" name="login" value="Login" class="btn btn-primary">
			    		</form>
			        </div>
	    		</div>
  			</div>
  		</div>
  	</div>
  </body>
</html>