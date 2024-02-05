<?php

function check_login($con)
{
	if(isset($_SESSION['user_id']))
	{
		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM registration WHERE user_id = '$id'";

		$result = mysqli_query($con, $query);
		if($result && mysqli_num_rows($result)>0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//Redirect to login
	header("Location: signup.php");
	die;
}


function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4, $length);

	for ($i=0; $i < $len; $i++) { 
		// code...

		$text .= rand(0,9);
	}

	return $text;
}

function display_pic($image) {
    ?>
      <?php
      	echo	"<img style='width:100%;height=330px;' src='data:image/jpg;charset=utf8;base64," . $image . "'/>"
      ?> 
<?php 
  }
?>