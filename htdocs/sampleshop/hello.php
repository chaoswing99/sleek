
<!-- 
// $hello =[
// 	'word'=> ['firstname' => 'Shit ',
// 	'lastname' => 'Fuck ',
// 	'lasname' => 'This ']
// 	];

// echo $hello['word']['lastname'];
// echo $hello['word']['lasname'];
// echo $hello['word']['firstname'];
 -->
<?php 

include('test.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<form method="POST" action="">
	<input type="number" name="num1" method="POST"><br>
	<input type="number" name="num2" method="POST"><br>
	<select name="func" action="" method="POST">
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
	</select><br>
	<button type="Submit" name="btn">Answer</button>
</form>
<?php if (isset($ans)): ?>
<p name="ans"><?php echo $ans; ?></p>
</body>
</html>