<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form class="form" action="login.php" method="post" autocomplete="off">

		<?php include('errors.php'); ?>
		<div class="body-content">
		  <div class="module">
		    <h1>Log In</h1>
		      <div class="alert alert-error"></div>
		      <input type="text" placeholder="User Name" name="username" required />
		      <input type="email" placeholder="Email" name="email" required />
		      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
		      <input type="submit" value="Login" name="login_user" class="btn btn-block btn-primary" />
		    </form>
		  </div>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>