<?php

require('adminsession.php');
require('../dbconnect.php');
require('functions/admin.function.php');


if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$result = logIn($conn, $email, $password);

	if (mysqli_num_rows($result) >0) {
		$data = mysqli_fetch_assoc($result);
		$_SESSION['admin']['id'] = $data['id'];
		$_SESSION['admin']['name'] = $data['name'];
		$_SESSION['admin']['email'] = $data['email'];
		header('location: index.php');
		}

	else {
		$alert['type'] = 'alert-danger';
		$alert['msg']  = 'Invalid Account';
	}
}

if(isset($_SESSION['admin']['id'])) {
	if (!$_SESSION['admin']['id'] == []) {
	header('location: index.php');
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<form method="POST" action="">
			<div class="panel default-panel">
				<div class="panel-heading">
					<h3>Log In</h3>
				</div>
				<div class="panel-body">
					<?php if(isset($alert)): ?> 
					<div class="alert <?= $alert['type']; ?>"> <?= $alert['msg']; ?>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control" id="password">
					</div>
					<div class="panel-footer">
						<button type="submit" class="btn btn-danger	 pull-left" name="login">Log In</button>
						<div class="clearfix"></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>