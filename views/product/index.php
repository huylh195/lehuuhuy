
<?php 
	$controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'ProductController' ;
	$action = isset($_GET['action'])?$_GET['action']: 'getProduct' ;
	// echo $controller;
	// die();
	require_once('../../controllers/ProductController.php');
	$usercontroller = new ProductController();
	$usercontroller->$action();
	
	
	// $post= $_POST;
	// print_r($post);
	// die();

 ?>