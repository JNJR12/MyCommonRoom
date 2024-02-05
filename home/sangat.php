<?php


	$email = $_POST['email'];
  $psw = $_POST['psw'];

    // echo($uname);
    // echo($psw);


  // this works rightly so
  $servername = "dbhost.cs.man.ac.uk";
	$dbusername = "p29365al";
	$dbpassword = "group_r5";
	$dbname = "2021_comp10120_r5";

	// Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	  echo("fail");
	}

	$query = "insert into login (email, psw) values ('$email', '$psw')";

	// $sql = "INSERT INTO login (email, saf) VALUES ('$email', '$psw')";

	if ($conn->query($query) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();

?>

<!DOCTYPE html>
<html>

<body>
<form method="post">
  <div style="position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0; text-align: center;" class="login">
    <h1>Login</h1>
    <p>If you already have an account, please log in</p>
    <hr>
    <label for="uname"><b>Email Address</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
      
    <button type="submit">Login</button>

    <br>
    <br>
  </div>
</form>
</body>

</html>
