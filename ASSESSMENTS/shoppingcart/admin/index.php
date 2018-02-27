<?php

require('adminsession.php');
require('../dbconnect.php');
require('functions/products.function.php');
require('functions/categories.function.php');

$result = showProducts($conn);


if($_SESSION['admin']['id'] == []) {
	header('location: login.php');
}

if(isset($_POST['add'])) {
	$productName = $_POST['productName'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$categoryID = $_POST['category'];
	$imageName = $_FILES['image']['name'];
	$tmpImageName = $_FILES['image']['tmp_name'];
	
	$location = '../uploads/';

	move_uploaded_file($tmpImageName, $location . $imageName);

	$result = addProduct($conn, $productName, $price, $quantity, $categoryID, $imageName);

	if($result) {
		
		$alert['msg'] = "Added";
		$alert['type'] = "alert-warning";
		header('location: index.php?added=true');
	} 
	else {
		$alert['msg'] = "Failed";
		$alert['type'] = "alert-danger";
	}
}


$resultCategory = showCategoryNames($conn);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Database Home</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">
        	<form method="POST" action="" enctype="multipart/form-data">
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Product</button>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategory">Add Category</button>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
						    <div class="">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						        <h4 class="modal-title" id="myModalLabel">Add New Product</h4>

						      </div>
						      <div class="modal-body">
								<div class="form-group">
									<label for="product-name">Product Name:</label>
										<input type="text" name="productName" class="form-control" id="product-name">
											</div>
								<div class="form-group">
									<label for="product-name">Price:</label>
										<input type="text" class="form-control" name="price" id="price">
											</div>
								<div class="form-group">
									<label for="product-name">Quantity:</label>
										<input type="text" class="form-control" name="quantity" id="quantity">
											</div>
								<div class="form-group">
									<label for="category">Category:</label>
										<select class="form-control" name="category">
											<option value="0">Choose Category</option><?php while($dataCategory = mysqli_fetch_assoc($resultCategory)): ?>
												<option value="<?= $dataCategory['id'] ?>"><?= $dataCategory['category_name'] ?></option>
													<?php endwhile; ?>
														</select>
										</div>
								<div class="form-group">
									<label for="product-name">Image</label>
										<input type="file" class="form-control" name="image" id="image">
											</div>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="Submit" class="btn btn-success" name="add">Add Product</button>
						      </div>

						    </div>
						  </div>
						</div>
							<div class="modal fade" id="addCategory" tabindex="-1" role="dialog">
							  <div class="modal-dialog" role="document">
							    <div class="">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title">Modal title</h4>
							      </div>
							      <div class="modal-body">
							        <p>One fine body&hellip;</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        <button type="button" class="btn btn-primary">Save changes</button>
							      </div>
							    </div><!-- /.modal-content -->
							  </div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</form>
</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome, <?= $_SESSION['admin']['name']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
	<div class="row">
	
	

			<div class="heading">
			<h1>Products Database</h1>
			</div>
				<?php if (isset($_GET['success'])): ?>
	
		<?php if($_GET['success'] == true): ?>
		<div class="alert alert-success">Delete Successful Orayt!</div>
			

		<?php endif; ?>
		<?php endif; ?>
		<?php if (isset($_GET['added'])): ?>
	
		<?php if($_GET['added'] == true): ?>
			<div class="alert alert-success">Product Added!</div>
			<?php endif; ?>
			<?php endif; ?>
		<table class="table table-hover" border="4px  ">
			<tr>
				<th>ID</th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Date Added</th>
				<th>Image Name</th>
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
			<td><img width=100px; src="../uploads/<?= $data['image_name']; ?>"></td>
			<td><a href="editproduct.php?id=<?=  $data['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-wrench"></a></td>
			<td><a href="deleteproduct.php?id=<?=  $data['id']; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></a></td>
		</tr>
		<?php endwhile; ?>
</table>
	<a href="index.php" class="navbar-brand">Go Home</a>
</div>
</body>
</html>