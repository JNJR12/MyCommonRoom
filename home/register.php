<?php

	// echo("Hello");
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$uname = $_POST['n_email'];
    $psw = $_POST['n_psw'];

    // echo($uname);
    // echo($psw);

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	// Name of database -> test, name of table -> user_registration
	$sql = "INSERT INTO user_registration (first_name, last_name, email, psw) 
	VALUES ('$fname', '$lname', '$uname', '$psw')";

	if ($conn->query($sql) === TRUE) {
	  echo "New account created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
