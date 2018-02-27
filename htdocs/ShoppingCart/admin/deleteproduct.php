<?php

require('../dbconnect.php');
require('functions/products.function.php');
$id = $_GET['id'];

$result = deleteProduct($conn, $id);

if($result) {
	header('location: index.php?success=true');
}

else {
	echo "Failed";
}
