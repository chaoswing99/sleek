<?php

require('../dbconnect.php');
require('products.function.php');

if(isset($_POST['delete'])) {
$id = $_POST['id'];

deleteProduct ($conn, $id);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<form method="POST" action="">
	<input type="text" name="id"><br>
	<button type="submit" name="delete">Delete</button>
		
	</form>
</body>
</html>