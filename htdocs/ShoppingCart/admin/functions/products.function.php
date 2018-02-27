<?php

function showProducts($conn) {
	$query = "select products.id, categories.category_name, products.product_name, products.price, products.quantity, products.created_at, products.image_name from products, categories where products.category_id=categories.id";
	return mysqli_query($conn, $query);
}

function createProduct($conn, $categoryID, $productName, $price, $quantity, $imageName) {
	$query = "insert into products (category_id, product_name, price, quantity, image_name) values ($categoryID, '$productName', $price, $quantity, '$imageName')";
		return mysqli_query($conn, $query);
}

function deleteProduct($conn, $id) {
	$query = "delete from products where id= $id";
	return mysqli_query($conn, $query);
}

function editProduct($conn, $id, $productName, $price, $quantity, $categoryID) {
	$query = "update products set product_name='$productName', price=$price , quantity=$quantity, category_id =$categoryID where id= $id";  
	return mysqli_query($conn, $query);
}

function showProduct($conn, $id) {
		$query = "select products.id, products.category_id,categories.category_name, products.product_name, products.price, products.quantity,categories.id, products.image_name from products, categories where products.category_id=categories.id and products.id = $id";
		return mysqli_query($conn, $query);
}

function addProduct($conn, $productName, $price, $quantity, $categoryID, $imageName) {
	$query = "insert into products (product_name, price, quantity, category_id, image_name) values ('$productName', $price, $quantity, $categoryID, '$imageName')";
		return mysqli_query($conn, $query);
}

function addCart($conn, $id, $productName, $price) {
	$query = "insert into cart (id, product_name, price) values ($id, '$productName', $price)";
		return mysqli_query($conn, $query);
}

function getProduct($conn, $productName, $price, $imageName) {
	$query = "select product_name, price, image_name from products";
		return mysqli_query($conn, $query);
}