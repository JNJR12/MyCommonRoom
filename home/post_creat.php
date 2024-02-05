<?php
// include the configuratin file.
require_once 'dbConfig.php'; 
// for random id of the post...
include 'functions.php';

// check if click the upload
$status = "";
if(isset($_POST["Submit"])){

    $user_id = $_GET['id'];

    // fot the content part 
    $NameOfP = $_POST['NameOfP'];
    $AddressOfP = $_POST['AddressOfP'];
    $RoomType = $_POST['RoomType'];
    $PriceType = $_POST['PriceType'];
    $Price = $_POST['Price'];
    $Contact = $_POST['Contact'];
    $Gender = $_POST['Gender'];
    $Details = $_POST['Details'];
    // $id = random_num(20);
    $id = createID();
    
    $sql_post = "INSERT INTO Post (NameOfP, AddressOfP, RoomType, PriceType, Price, Contact, Gender, Details, id, user_id, Created) 
    VALUES ( '$NameOfP', '$AddressOfP', '$RoomType', '$PriceType', '$Price', '$Contact', '$Gender', '$Details', '$id', '$user_id', NOW())"; 
    
    // // check post details upload
    // if (!$upload){
    //     die("Sorry! Error inserting new record" . $conn -> error);
    // } 

    //  process of upload pictures  
    $flag = 0;
    $uploadFolder = 'uploads/';
    $fileNames = array_filter($_FILES["images"]["name"]);
    if(!empty($fileNames)) { 
        foreach ($_FILES['images']['name'] as $key=>$image) {
            // set up the file name and type
            $fileName = basename($_FILES['images']['name'][$key]); 
            $targetPath = $uploadFolder . $fileName;
            $fileType = pathinfo($targetPath, PATHINFO_EXTENSION);  
            $allowTypes = array('jpg','jpeg'); 

            // check if the file is the allow type
            if(in_array($fileType, $allowTypes)){ 
                if($_FILES['images']['size'][$key] < 8000000){    
                    $flag = 1;
                }else{
                    $status = "Sorry, could you please upload a smaller picture?";
                }
            }else{ 
                $status = "Sorry, only JPG & JPEG files are allowed."; 
            }
        }
    }else{ 
        $status = "Show at least one picture of the room"; 
    }

    if ($flag == 1) {
        $upload = mysqli_query($conn, $sql_post);
        foreach ($_FILES['images']['name'] as $key=>$image) {
            // set up the file name and type
            $fileName = basename($_FILES['images']['name'][$key]); 
            $targetPath = $uploadFolder . $fileName;
            $image = $_FILES['images']['tmp_name'][$key]; 
            $imgContent = addslashes(file_get_contents($image)); 

            // Upload the image to the database
            $sql_pic = "INSERT INTO PicOfPost (image, Created, post_id) VALUES ('$imgContent', NOW(), '$id')";

            $insert = mysqli_query($conn, $sql_pic); 
        }
        mysqli_close($conn);
        header("location: MyAccountPage.php");
        exit;
    }
    
    
}
?>

<!DOCTYPE html>
<head>
    <title>Post Create</title>
    <link rel="stylesheet" href ="post_creat.css">
</head>
<body>
<div class="topnav">
    <img src="img/logowobg.png" style="width:100px;height:75px;">
</div>  
<div class="containerform">
    <form action="" method="post" enctype="multipart/form-data">

      <h1 class="fredokaFont" style="padding-left: 15%;">Create A Post</h1>

      <div class="fredokaFont" style="margin-left: 15%;">
        <label>Please Select The Image File:</label>
        <input type="file" name="images[]" multiple="" required>
        <label>Only allow JPG/JPEG And Max 7MB File</label>
      </div><br>

      <?php echo "<p class='fredokaFont' style='margin-left: 15%;font-size:20px; color:red;'>" . $status . "</p>"; ?>

      <h2 class="fredokaFont" style="padding-left: 45%;">About the Room</h2>
      <label class="fredokaFont" for="NameOfP" style="margin-left: 15%;">Name of Property</label>
      <input class="fredokaFont" type="text" id = "NameOfP" name="NameOfP" placeholder="The Property Name" required>

      <label class="fredokaFont" for="AddressOfP" style="margin-left: 15%;">Address of Property</label>
      <input class="fredokaFont" type="text" id = "AddressOfP" name="AddressOfP" placeholder="Address is important! Please include the Post Code." required>

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
      <input class="fredokaFont" type="number" id="Price" name="Price" placeholder="Price of Room" min="0" required>      

      <h2 class="fredokaFont" style="padding-left: 45%;">About You</h2>
      <label class="fredokaFont" for="Contact" style="margin-left: 15%;">Contact Email:</label>
      <input class="fredokaFont" type="email" name="Contact" placeholder="Your email.." required>

      <label class="fredokaFont" for="Gender" style="margin-left: 15%;">Perferred Gender</label>
      <select class="fredokaFont" id="Gender" name="Gender">
        <option class="fredokaFont" value="Male">Male</option>
        <option class="fredokaFont" value="Female">Female</option>
        <option class="fredokaFont" value="No Preference">No Preference</option>
      </select>

      <label class="fredokaFont" for="Details" style="margin-left: 15%;">Roommate Preference Details</label>
      <textarea class="fredokaFont" id="Details" name="Details" placeholder="Write something about you and your room/flat, how many roommates do you have? Don't forget the expectation of your new roommate!" style="height:200px" required></textarea>
      
      <input type="submit" name="Submit" value="Submit">
      
      </script>
    </form>
  </div>
</body>
</html>