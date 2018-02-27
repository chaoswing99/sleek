<?php

require('dbconnect.php');
require('functions/products.function.php');

if(isset($_POST['save'])) {
$productName = $_POST['productName'];
$categoryID = $_POST['categoryID'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];


createProduct($conn, $categoryID, $productName, $price, $quantity);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<form method="POST" action="">
		<label for="product-name">Product Name:</label>
		<input type="text" name="productName" id="product-name"><br>
		<label for="category-id">Category ID:</label>
		<input type="text" name="categoryID" id="category-id"><br>
		<label for="price">Price:</label>
		<input type="text" name="price" id="price"><br>
		<label for="quantity">Quantity:</label>
		<input type="text" name="quantity" id="quantity"><br>
		<button type="submit" name="save">Save</button>
<!-- 		<p name="success"></p> -->
	</form>
</body>
</html>