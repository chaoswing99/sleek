<?php



function showCategoryNames($conn) {
	$query = "select  id, category_name from categories";
	return mysqli_query($conn, $query);
}

?>