<?php 

class DBUtility {

	public $conn;

	function __construct($serverName, $user, $pass, $db) {

		// Create connection
		$this->conn = new mysqli($serverName, $user, $pass, $db);

		// Check connection
		if ($this->conn->connect_error) {
		    die("Connection failed: " . $this->conn->connect_error);
		}
	}

	// Insert values into the database
	function insertIntoDB($name, $description, $price) {

		try {
			// Prepare and bind
			$stmt = $this->conn->prepare("INSERT INTO Products (Name, Description, Price) VALUES (?, ?, ?)");
			$stmt->bind_param("ssd", $name, $description, $price);

			// Execute
			$stmt->execute();
			$stmt->close();

			// Response
			$data = ['status' => 'New record created successfully'];
			header('Content-Type: application/json');
			echo json_encode($data);

		} catch (Exception $ex) {
			
			// Response
			$data = ['status' => '[Error] '. $ex->getMessage()];
			header('Content-Type: application/json');
			echo json_encode($data);
		}
		
		// Close the connection
		$this->conn->close();
	}

}


?>
