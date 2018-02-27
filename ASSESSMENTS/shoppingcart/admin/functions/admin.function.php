<?php

function logIn($conn, $email, $password) {
	$query = "select id, email, name from admins where email= '$email' and password= '$password'";

	return mysqli_query($conn, $query);


}