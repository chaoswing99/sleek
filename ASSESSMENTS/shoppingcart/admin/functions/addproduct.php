<?php

require('../../dbconnect.php');
require('products.function.php');

$categoryID = $_POST['category_id']


$result = createProduct($conn, $categoryID, $productName, $price, $quantity);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>