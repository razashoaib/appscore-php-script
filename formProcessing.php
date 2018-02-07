<?php 

// Including dependencies
require 'Classes/DBUtility.php';

init();

function init() {
	
	// Validate the query strings
	if (isset($_GET['name']) && isset($_GET['desc']) && isset($_GET['price'])) {
		$dbConnection = new DBUtility('localhost', 'root', '', 'test');

		$name = $_GET['name'];
		$description = $_GET['desc'];
		$price = $_GET['price'];

		// Inserting into the db
		$dbConnection->insertIntoDB($name, $description, $price);
	} else {
		// Response
		$data = ['status' => '[Incomplete parameters] Unable to process the request'];
		header('Content-Type: application/json');
		echo json_encode($data);
	}	
}


?>