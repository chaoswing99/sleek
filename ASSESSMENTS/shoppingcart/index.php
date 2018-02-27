<?php


require('dbconnect.php');
require('functions/products.function.php');


if(isset($_POST['cart'])) {
	$productName = $_POST['productName'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$quap	= $_POST['qua']; 

}


	$getc = getProduct($conn, $productName, $price, $imageName);
	$addc = addCart ($conn, $id, $productName, $price);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" class="btn btn-success" data-target="#cart">Show Cart</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="jumbotron">
  <h1>Welcome!</h1>
  <p>asd INA</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
<form method="POST" action="">

		<div class="row"><!-- ROW -->
		<?php while ($data = mysqli_fetch_assoc($getc)): ?>
		  <div class="col-sm-4 col-md-3">
		    	<div class="thumbnail">
		     		 <img height= 100px; src="uploads/<?= $data['image_name']; ?>">
				      <div class="caption">
				        <h3><?= $data['product_name']; ?></h3>
				        <p><?= $data['price'] . " PHP"; ?></p>
				        <p><a href="addtocart.php?id=" class="btn btn-primary" role="button">View Details</a> <button type="submit" class="btn btn-default">Add to Cart</button>
				     </div>
		   	 	</div>
		 	 </div>
		     <?php endwhile; ?>
		  </div>

<div class="modal fade" tabindex="-1" role="dialog" id="cart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add to Cart</h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover" border="">
			<tr>
				<th></th>
				<th>Quantity</th>
				<th>Price</th>
				<th>Total Price</th>
			</tr>

<?php while ($data = mysqli_fetch_assoc($addc)): ?>
		<tr>
			<td><?= $data['product_name']; ?></td>
			<td><input type="number" name="qua"></td>
			<td><?= $data['price']; ?></td>
			<td><?= $data['price'] * $_POST['quap']; ?> </td>
      <td><a href="deleteproduct.php?id=<?=  $data['id']; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-trash"></a></td>
		</tr>
		 <?php endwhile; ?>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Checkout</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</form>
</div>
</body>
</html>

<!-- 	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Product</button> -->