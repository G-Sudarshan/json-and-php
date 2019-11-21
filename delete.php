<?php
require __DIR__.'/users/users.php';
include 'partials/header.php';


// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

if(!isset($_POST['id']))
{
	include 'partials/not_found.php';
	exit;
}

$userId = $_POST['id'];

deleteUser($userId);

header("location: index.php");

?>