<?php

require('adminsession.php');

unset($_SESSION);

$_SESSION = [];
session_destroy();
header('location: login.php');