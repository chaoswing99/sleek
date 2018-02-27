<?php

require('../dbconnect.php');
require('functions/products.function.php');
require('functions/categories.function.php');

// $categoryID = $_GET['category_id'];

$id = $_GET['id'];



if(isset($_POST['save'])) {
	$productName = $_POST['productName'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$categoryID = $_POST['category'];
	// $imageName = $_FILES['image']['name'];
	// $tmpImageName = $_FILES['image']['tmp_name'];

	// $location = '../uploads/';

	// move_uploaded_file($tmpImageName, $location . $imageName);


	$result = editProduct($conn, $id, $productName, $price, $quantity, $categoryID);

	if($result) {
		$alert['msg'] = "Success";
		$alert['type'] = "alert-warning";
	} 
	else {
		$alert['msg'] = "Failed";
		$alert['type'] = "alert-danger";
	}

}

$result = showProduct($conn, $id);
$data = mysqli_fetch_assoc($result);

$resultCategory = showCategoryNames($conn);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
	<form method="POST" action="">
		<div class="col-md-8 col-md-offset-2" style="margin-top: 50px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Edit Product</h1>
				</div>
					<div class="panel-body">
						<?php if (isset($alert)): ?> 
							<div class="alert <?= $alert['type']; ?>">
								<?= $alert['msg']; ?>
									</div>
										<?php endif; ?>
					<div class="form-group">
						<label for="product-name">Product Name:</label>
							<input type="text" name="productName" class="form-control" id="product-name" value="<?= $data['product_name']; ?>">
								</div>
					<div class="form-group">
						<label for="product-name">Price:</label>
							<input type="text" class="form-control" name="price" id="price" value="<?= $data['price']; ?>">
								</div>
					<div class="form-group">
						<label for="product-name">Quantity:</label>
							<input type="text" class="form-control" name="quantity" id="quantity" value="<?= $data['quantity']; ?>">
								</div>
					<div class="form-group">
						<label for="category">Category:</label>
							<select class="form-control" name="category">
								<option value="0">Choose Category</option><?php while($dataCategory = mysqli_fetch_assoc($resultCategory)): ?>
									<option <?= $dataCategory['id'] == $data['category_id'] ? 'selected="true"' : ''; ?> value="<?= $dataCategory['id'] ?>"><?= $dataCategory['category_name'] ?></option>
										<?php endwhile; ?>
											</select>
												</div>
				<!-- 	<div class="form-group">
								<label for="image-name">Image:</label>
							<input type="file" class="form-control" name="image" id="image" value="<?= $data['image']; ?>">
								</div> -->
					<div class="panel-footer"> 
						<button type="submit" name="save" class="btn btn-primary pull-left">
							<span class="glyphicon glyphicon-floppy-disk"></span>
								Save Changes
									</button>
						<div class="clearfix"></div>
					</div>
					</div>
				</div>
				<div><a href="index.php">Go Back</div>
			</div>
		</div>

	</form>	

	</div>
</div>

</body>
</html>