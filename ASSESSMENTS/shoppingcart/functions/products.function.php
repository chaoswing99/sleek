<?php

function showProducts($conn) {
	$query = "select products.id, categories.category_name, products.product_name, products.price, products.quantity, products.created_at from products, categories where products.category_id=categories.id";
	return mysqli_query($conn, $query);
}
	
function createProduct ($conn, $categoryID, $productName, $price, $quantity) {
	$query = "insert into products (category_id, product_name, price, quantity) values ($categoryID, '$productName', $price, $quantity)";
	mysqli_query($conn, $query);
}

function deleteProduct ($conn, $id) {
	$query = "delete from products where id=$id";
	mysqli_query($conn, $query);

}

function addCart ($conn, $id, $productName, $price) {
	$query = "insert into cart (product_name, price) select product_name, products.price from products";
	mysqli_query($conn, $query);
}

function getProduct($conn, $productName, $price, $imageName) {
	$query = "select product_name, price, image_name from products";
		return mysqli_query($conn, $query);
}

function showCart($conn, $id, $productName, $price) {
	$query = "select product_name, price from cart";
		return mysqli_query($conn, $query);
}