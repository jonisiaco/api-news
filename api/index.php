<?php

include $_SERVER['DOCUMENT_ROOT'].'/classes/Book/Contact.php';

$class = new Contact();
$class->create();
/*
try{

	$method_name=$_SERVER["REQUEST_METHOD"];
	
	if($_SERVER["REQUEST_METHOD"])
	{

		switch ($method_name) 
		{
			case 'GET':
			
			case 'POST':					
			
			case 'PUT':					
			
			case 'DELETE':
		}
		echo json_encode($data);
	}
	else{
		$data=array("status"=>"0","message"=>"Please enter proper request method !! ");
		echo json_encode($data);
	}
	
}
	catch(Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "\n";
}
*/