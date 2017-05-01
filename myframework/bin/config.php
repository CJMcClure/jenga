<?php
	
	$config = array(
		'defaultController' => 'welcome',
		'dbname' => 'fruits', 
		'dbpass' => 'root',
		'dbuser' => 'root',
		'baseurl' => 'http://127.0.0.1'
	);
	
	$str = $config["baseurl"]."/".$_SERVER['REQUEST_URI'];
	
	//This variable is an array of paths from your url
	$urlPathParts = explode('/', ltrim(parse_url($str, PHP_URL_PATH), "/"));

	// This file contains the router class
	include 'router.php';
	
	// Instantiates a router object from router.php
	$route = new router($urlPathParts,$config);
	
?>