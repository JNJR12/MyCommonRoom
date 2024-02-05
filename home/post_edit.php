<?php
// include the configuratin file.
include 'dbConfig.php'; 

$post_id = $_GET['id'];
// echo $post_id;

$select_query = $conn->query("SELECT * FROM Post WHERE id=$post_id ");
$result = $select_query->fetch_assoc();

?>

<!DOCTYPE html>
<head>
    <title>Post Edit</title>
    <link rel="stylesheet" href ="post_creat.css">
</head>
<body>
<div class="topnav">
  <img src="img/logowobg.png" style="width:100px;height:75px;">
</div>  
<div class="containerform">
    <form action="" method="post" enctype="multipart/form-data">

      <h1 class="fredokaFont" style="padding-left: 15%;">Edit A Post</h1>

      <h2 class="fredokaFont" style="padding-left: 45%;">About the Room</h2>
      <label class="fredokaFont" for="NameOfP" style="margin-left: 15%;">Name of Property</label>
      <?php 
      echo "<input class='fredokaFont' type='text' id ='NameOfP' name='NameOfP' value='" . $result["NameOfP"] . "' required>";
      ?>

      <label class="fredokaFont" for="AddressOfP" style="margin-left: 15%;">Address of Property</label>
      <?php echo "<input class='fredokaFont' type='text' id = 'AddressOfP' name='AddressOfP' value='" . $result["AddressOfP"] . "' required>";
      ?>

      <label class="fredokaFont" for="RoomType" style="margin-left: 15%;">Room Type</label>
      <select id="RoomType" name="RoomType">
        <option class="fredokaFont" value="House">House</option>
        <option class="fredokaFont" value="Flat">Flat</option>
        <option class="fredokaFont" value="Private Hall">Private Hall</option>
      </select> 

      <h2 class="fredokaFont" style="padding-left: 45%;">About the Price</h2>
      <label class="fredokaFont" for="PriceType" style="margin-left: 15%;">Price Type</label>
      <select class="fredokaFont" id="PriceType" name="PriceType">
        <option class="fredokaFont" value="per week">Price Per Week</option>
        <option class="fredokaFont" value="per month">Price Per Month</option>
        <option class="fredokaFont" value="other">Other</option>
      </select>     

      <label class="fredokaFont" for="Price" style="margin-left: 15%;">Price(&pound;):</label>
      <?php echo "<input class='fredokaFont' type='number' id='Price' name='Price' value='" . $result["Price"] ."' min='0' required>";
      ?>

      <h2 class="fredokaFont" style="padding-left: 45%;">About You</h2>
      <label class="fredokaFont" for="Contact" style="margin-left: 15%;">Contact Email:</label>
      <?php echo "<input class='fredokaFont' type='email' name='Contact' value='" . $result["Contact"] ."' required>";
      ?>

      <label class="fredokaFont" for="Gender" style="margin-left: 15%;">Perferred Gender</label>
      <select class="fredokaFont" id="Gender" name="Gender">
        <option class="fredokaFont" value="Male">Male</option>
        <option class="fredokaFont" value="Female">Female</option>
        <option class="fredokaFont" value="No Preference">No Preference</option>
      </select>

      <label class="fredokaFont" for="Details" style="margin-left: 15%;">Roommate Preference Details</label>
      <?php
      echo "<textarea class='fredokaFont' id='Details' name='Details' style='height:200px' required>" . $result["Details"] . "</textarea>";
      ?>
      
      <input type="submit" name="Submit" value="Submit">
      
      </script>
    </form>
  </div>
</body>
</html>

<?php

// check if click the upload
if(isset($_POST["Submit"])){

    // fot the content part 
    $NameOfP = $_POST['NameOfP'];
    $AddressOfP = $_POST['AddressOfP'];
    $RoomType = $_POST['RoomType'];
    $PriceType = $_POST['PriceType'];
    $Price = $_POST['Price'];
    $Contact = $_POST['Contact'];
    $Gender = $_POST['Gender'];
    $Details = $_POST['Details'];
    $sql_post = "UPDATE `Post` SET NameOfP='$NameOfP', AddressOfP='$AddressOfP', RoomType='$RoomType', PriceType='$PriceType', Price='$Price', Contact='$Contact', Gender='$Gender', Details='$Details' WHERE id=$post_id"; 

    // run query
    $upload = mysqli_query($conn, $sql_post);
    
    // // check post details upload
    // if (!$upload){
    //     die("Sorry! Error inserting new record" . $conn -> error);
    // } 

    
    // end the connection
    mysqli_close($conn);
    header("location: MyAccountPage.php");
    exit;
}

?>