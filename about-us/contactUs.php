<?php

	require_once 'dbConfig.php';

	$name = $_POST['contactName'];
    $email = $_POST['email'];
    $message = $_POST['comments'];

 //    $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "test";

	// // Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO contact (name, email, message)
	VALUES ('$name', '$email', '$message')";

	if ($conn->query($sql) === TRUE) {
	  header("Location: aboutUs.php");
      die;
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>
