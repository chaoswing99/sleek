<?php
	
require('config.php');

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

	if($conn) {
		echo 'Successfully Connected';
	}