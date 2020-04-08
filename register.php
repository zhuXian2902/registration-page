<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="form" action="register.php" method="post" enctype="multipart/form-data" autocomplete="off">

		<?php include('errors.php'); ?>
		<div class="body-content">
		  <div class="module">
		    <h1>Create an account</h1>
		      <div class="alert alert-error"></div>
		      <input type="text" placeholder="User Name" name="username" required />
		      <input type="email" placeholder="Email" name="email" required />
		      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
		      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
		      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
		    </form>
		  </div>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>