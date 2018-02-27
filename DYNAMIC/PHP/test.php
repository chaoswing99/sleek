 <?php


// if (isset($_GET['shit'])){
// $name = $_GET['bull'];
// 	echo $name;
// 	}

$func = $_POST['func'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
// $ans = $_GET['ans'];

if ($func == '+') {
	$ans = $num1 + $num2;
}

else if ($func == '-') {
	$ans = $num1 - $num2;
}

else if ($func == '*') {
	$ans = $num1 * $num2;
}

else if ($func == '/') {
	$ans = $num1 / $num2;
}

// echo $ans;
?>