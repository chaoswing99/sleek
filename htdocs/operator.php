<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];


function add($x, $y) {
	return $x + $y;
}

function dif($x, $y) {
	return $x - $y;
}

function mul($x, $y) {
	return $x * $y;
}

function quo($x, $y) {
	return $x / $y;
}


if ($_POST['op'] == "+") {
	$ans = add($num1, $num2);
	echo $ans;
}

else if ($_POST['op'] == "-") {
	$ans = dif($num1, $num2);
	echo $ans;
}
else if ($_POST['op'] == "*") {
	$ans = mul($num1, $num2);
	echo $ans;
}
else if ($_POST['op'] == "/") {
	$ans = quo($num1, $num2);
	echo $ans;
}

// else if ($_POST['op'] == "") {
// 	echo "tanga";
// }






?>