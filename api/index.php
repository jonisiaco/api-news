<?php
spl_autoload_register(function($className) {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/modules/' . $className . '.php';
});


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