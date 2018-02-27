<?php

require('dbconnect.php');
require('functions/products.function.php');

$result = showProducts($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
<table border="1">
		<tr>
			<th>ID</th>
			<th>Category Name</th>
			<th>Product Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Date Added</th>
			<th></th>
			<th></th>

		</tr>
<?php while ($data = mysqli_fetch_assoc($result)): ?>
		
		<tr>
			<td><?= $data['id']; ?></td>
			<td><?= $data['category_name']; ?></td>
			<td><?= $data['product_name']; ?></td>
			<td><?= $data['price']; ?></td>
			<td><?= $data['quantity']; ?></td>
			<td><?= $data['created_at']; ?></td>
			<td><a href="#" class="btn btn-primary"<?=  $data['id']; ?>"><span class="glyphicon glyphicon-wrench"></a></td>
			<td><a href="#" class="btn btn-primary"<?=  $data['id']; ?>">Edit</a></td>
		</tr>
<?php endwhile; ?>
</table>
</body>
</html>