<?php

session_start();

$_SESSION['value'] = 'hello woard';

echo $_SESSION['value'];