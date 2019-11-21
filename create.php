<?php
require __DIR__.'/users/users.php';
include 'partials/header.php';


$user = [
			'id' => '', 
			'name' => '',
			'username' => '',
			'phone' => '',
			'email' => '',
			'website' => ''
];

$errors = [

			'name' => '',
			'username' => '',
			'phone' => '',
			'email' => '',
			'website' => ''

];

$isValid = true;
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$user = array_merge($user,$_POST);
	
	$isValid = validateUser($user,$errors);

	if($isValid)
	{

	$user = createUser($_POST);

	uploadImage($_FILES['picture'],$user);
	
	header("location: index.php");
	}

}



?>


<?php include '_form.php' ?>
