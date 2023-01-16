<?php
$user = 'root';
$password = '';
$db = 'userform';
$host = 'learn.loc';
$mysqli = mysqli_connect($host,$user,$password, $db);
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

