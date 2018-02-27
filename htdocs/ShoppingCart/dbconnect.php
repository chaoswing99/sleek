<?php
	
require('config.php');
// require('admin/functions/products.function.php')

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	if(!$conn) {
		echo 'Not Connected';
	}