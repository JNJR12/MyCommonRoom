<?php
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Post Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Amatic+SC&family=Fredoka:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');
    * {
      box-sizing: border-box;
    }

    body {
    margin: 0; font-family: Arial, Helvetica, sans-serif;
    }

    .topnav{
      overflow: hidden;
      background-color: #333;
}
    .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 25px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background-color: #e0a1ad;
        color: black;
    }

    .topnav a.active {
        background-color: #B77682;
        color: white;
    }

    .topnav-right {
        float: right;
    }

    .block {
      margin-right: 15%;
      margin-left: 15%;
      margin-bottom: 20px;
      background-color: #f1f1f1;
      height: auto;
      width: 70%;
    }

    .block1 {
      /*margin-right: 15%;
      margin-left: 45%;
      margin-bottom: 20px;
      background-color: #f1f1f1;
      height: auto;
      width: 40%;*/
      /*padding-right: 1000px;*/
      background-color: #f1f1f1;
      padding-bottom: 5px;
    }

    .block2 {
      text-align: center;
      height: auto;
    }

    .rounded-circle {
      width:120px;
      height:120px;
      padding-top: 10px;
    }

    .place {
      margin-left: 15%;
      margin-right: 15%;
      margin-top: 20px;      
      width: 70%;
      background-color: #f1f1f1;
    }

    .gallery {
      /*padding-left: 10px;
      padding-top: 10px;*/
      overflow-y: scroll;
      width: 45%;
      float: left;
      height: 300px;
    }

    .frame {
      padding-bottom: 2%;
    }

    .amaticFont{
      font-family: 'Amatic SC', cursive;
    }

    .fredokaFont{
      font-family: 'Fredoka', sans-serif;
    }

/*-----------------------
----- Basic Styles -----
-------------------------*/

body{
    font-family: Raleway, Arial, sans-serif;
    overflow-x:hidden;
}

a{
    color:#B77682;
    text-decoration:none
}

a:hover,a:focus{
    color:#B77682;
    text-decoration:underline
}

a:focus,
.btn:focus {
    outline: none;
}

.img-responsive {
    border: 1px solid #ddd;
}

/*-----------------------
----- Typo Styles ------
-------------------------*/


.big-text{
    font-size:58px;
    color: whitesmoke;
    font-weight:300;
    line-height:62px;
    letter-spacing:0.01em;
    word-spacing: 0.15em;
    text-transform:uppercase;
}

.section-title{
    margin-top:-20px;
    margin-bottom: 80px;
    text-align:center;
}

/*-----------------------
----- Layout Styles -----
-------------------------*/

.add-padding {
    padding-top:20px;
    padding-bottom:50px;
}

/*-----------------------
----- Color Styles ------
-------------------------*/

.bg-color1{
    color:#fff;
    background:#509B9E;
}

.bg-color2{
    color:#fff;
    background:#f9398c;
}

.bg-color3{
    color:#fff;
    background:#334959;
}

.border-bottom-color2{
    border-bottom:7px solid #B77682;
}

.border-top-color2{
    border-top:7px solid #B77682;
}

.color1 .service-icon,
.color1.service-item ul li:nth-child(2):before{
    background:#509B9E;
}

.color1 .service-icon:after{
    border:3px solid #509B9E;
}

.color2 .service-icon,
.color2.service-item ul li:nth-child(2):before{
    background:#f9398c;
}

.color2 .service-icon:after{
    border:3px solid #f9398c;
}

.color3 .service-icon,
.color3.service-item ul li:nth-child(2):before{
    background:#334959;
}

.color3 .service-icon:after{
    border:3px solid #334959;
}

/*------------------
----- Buttons ------
--------------------*/

.btn-color1,
.btn-color2{
    padding: 10px 30px;
    color:#fff;
    font-size: 21px;
    font-weight: 300;
    background:#B77682;
    outline: none !important;
    border-radius: 0;
    transition: opacity .2s ease-out;
}

.btn-color1{
    background:#509B9E;
}

.btn-color1:hover,
.btn-color2:hover{
    color:#fff;
    opacity: 0.9;
}

.btn-color1:focus,
.btn-color1:active,
.btn-color2:focus,
.btn-color2:active{
    color:#fff;
}

.btn-color1 .fa,
.btn-color2 .fa{
    margin-right: 15px;
}

.whiteText {
  color: whitesmoke;
}

/*----------------------
----- Contact Styles ----
------------------------*/

#contact{
    background-image:url('img/footerbg2.jpg');
    background-size: cover;
    background-repeat:no-repeat;
    background-position:0 100%;
    background-color: #fff;
}

#contact-form .form-group label{
    display:none;
    font-size:18px;
    line-height:24px;
    font-weight:100;
    text-transform:uppercase;
}

#contact-form.no-placeholder .form-group label{
    display:block;
}

#contact-form .controls {
    padding:0;
    margin-bottom:30px;
    border:1px solid #ddd;
    border-radius:2px;
}

#contact-form .form-control {
    background:transparent !important;
    border:none;
    border-bottom:3px solid transparent;
    border-radius:0;
    outline:none;
    box-shadow:none;
    height:56px;
    font-size:21px;
    line-height:32px;
    font-weight:100;
    padding-left:64px;
    -webkit-transition:border-color .3s ease-out;
    transition:border-color .3s ease-out;
    border-radius:2px;
}

#contact-form .form-group{
    position:relative;
}

#contact-form .form-group [class*=fa] {
    display:block;
    width:64px;
    position:absolute;
    top:0;
    left:5px;
    color:#e5e5e5;
    font-size:24px;
    line-height:53px;
    text-align:center;
    font-weight:300;
    opacity:0.5;
    transition:opacity .2s ease-out;
}

#contact-form.no-placeholder .form-group [class*=fa]{
    top:30px;
}

#contact-form .form-control:focus + [class*=fa]{
    opacity:1;
}

#contact-form textarea.form-control {
    height:auto;
    max-width:100%;
    min-width:100%;
    font-size:21px;
    line-height:32px;
    padding-top:10px;
}

#contact-form .form-control:focus {
    background:#fff;
    border-bottom:3px solid #B77682;
    outline:none;
    box-shadow:none;
    -webkit-transition:border-color .3s ease-in;
    transition:border-color .3s ease-in;
}

#contact-form .error-message {
    padding:5px 0;
    position:absolute;
    top:-30px;
    right:0;
    font-size:14px;
    font-weight:300;
    color:#ff0000;
    z-index:10;
}

#contact-form .error-message:before {
    content:"\00d7";
    font-size: 21px;
    line-height: 21px;
    margin-right: 5px;
}

/*----------------------
----- Footer Styles ----
------------------------*/

#main-footer {
    background: #fff;
}

#main-footer p a {
    padding-bottom: 40px;
    font-size: 25px;
    text-decoration: none;
}

#main-footer p {
    text-align: center; 
}

.social-links {
    list-style:none;
    margin:0;
    padding:0;
    margin-bottom:30px;
}

.social-links li{
    display:inline-block;
    margin:0 5px;
    border-radius:3px;
    box-shadow:0 4px 0 transparent;
    -webkit-transition:all .3s ease-out;
    transition:all .3s ease-out;
}

.social-links li a {
    display:block;
    color:#fff;
    font-size:21px;
    width:50px;
    height:50px;
    line-height:50px;
    text-align:center;
    background:#509B9E;
    border-radius:50%;
    -webkit-transition:all .3s ease-out;
    transition:all .3s ease-out;
}

.social-links li a:hover {
    color:#fff;
    background:#f9398c;
}

  </style>
</head>
<body>

<div class="topnav">
        <img src="img/logowobg.png" style="width:100px;height:75px;" >
          <div class="topnav-right">
              <a href="../home/">Home</a>
              <a href="../store/store.php">Flat Finder</a>
              <a class="active" href="../flatmate-finder/rommate_finder.php">Flat Share</a>
              <a href="../about-us/aboutUs.php">About</a>
              <a href="../home/MyAccountPage.php"><span class="glyphicon glyphicon-log-in"></span> Account</a>
          </div>
    </div>
    
    <div class="place">
      <!-- <img class="photo" src="accomodation.jpg" alt="Pics of room"> -->
      <!-- the image part of each post -->
      <?php 
        // Include the database configuration file  
        include 'dbConfig.php'; 
        include_once 'functions.php';
        
        $id = $_GET['id'];
          
      ?>
<!--         <script type="text/javascript" src="pic.js"></script> -->

      <?php
          // Get image data from database 
          $select_id_query = $conn->query("SELECT MAX(id) FROM PicOfPost WHERE post_id=$id ") or die($conn-> error); 
          $select_id_MAX = $select_id_query->fetch_assoc();
          $select_id_query = $conn->query("SELECT MIN(id) FROM PicOfPost WHERE post_id=$id ") or die($conn-> error); 
          $select_id_MIN = $select_id_query->fetch_assoc();
          // echo $select_id_MIN;
          // echo $select_id_MAX;

          $id_pic_first = min($select_id_MIN);
          // echo $id_pic_first . "//";
          $id_pic_last = max($select_id_MAX);
          // echo $id_pic_last;

          $images = array();
          $i = 0;
          for ($count=$id_pic_first;$count<=$id_pic_last;$count++) {
            $select_image_query = $conn->query("SELECT image FROM PicOfPost WHERE id=$count ") or die($conn-> error);
            $select_image = $select_image_query->fetch_assoc();
            $image = base64_encode($select_image['image']);
            $images[$i] = $image;
            $i += 1;
          }
          
          ?>
            <div class="gallery">
          <?php
          for ($i=0;$i<count($images);$i++) {
             display_pic($images[$i]);            
          } 
          ?>
            </div>

        <?php
        // Detail part
        $sql = "SELECT * FROM Post WHERE id=$id";

        $row = mysqli_query($conn, $sql);
        
        $row_result = mysqli_fetch_assoc($row);
        $user_id = $row_result["user_id"];
        $sql_user = "SELECT * FROM registration WHERE user_id=$user_id";
        $row_user = mysqli_query($conn, $sql_user);
        $row_user_info = mysqli_fetch_assoc($row_user);
        $user_pic = base64_encode($row_user_info['user_pic']);

          echo "<div style='padding-left: 50%; padding-top: 10px; padding-bottom: 5px; height: 350px;'>";
          echo  "<h1 class='fredokaFont'style='font-size: 35px;'>Room Details</h1>";  
          echo  "<table style='font-size: 20px;'>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Name:</td><td>" . $row_result["NameOfP"] . "</td></tr></tbody>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Room Type:</td><td>" . $row_result["RoomType"] . "</td></tr></tbody>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Address:</td><td>" . $row_result["AddressOfP"] . "</td></tr></tbody>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Price(&pound):</td><td>" . $row_result["Price"] . " " . $row_result["PriceType"] . "</td></tr></tbody>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Contact:</td><td>" . $row_result["Contact"] . "</td></tr></tbody>";
          // echo  "<tbody><tr style='padding-top: 5px;'><td>Number of Rommates:</td><td>" . $row_result[""] . "</td></tr></tbody>";
          echo  "<tbody><tr class='fredokaFont' style='padding-top: 5px;'><td>Preferred Gender:</td><td>" . $row_result["Gender"] . "</td></tr></tbody>";
          echo  "</table></div></div><br>";

          echo "<div class = 'block'>";
          echo  "<h1 class='fredokaFont' style='font-weight: bolder; text-align: center; padding: 15px; background-color: #de9ea9; font-size: 25px'>Post Creator</h1>"; 
          echo "<div class='block2'>";
          echo  "<img class='rounded-circle' src='data:image/jpg;charset=utf8;base64," . $user_pic . "'/>";
          echo  "<div class='block1'>";          
          echo  "<p class='fredokaFont' style='font-size: 20px; margin-bottom: 5px; margin-top: 8px'>Creator: " . $row_user_info["first_name"] . "</p>";
          echo  "<p class='fredokaFont' style='font-size: 20px;'>Created Time: " . $row_result["Created"] . "</p>";
          echo "</div>";
          echo "</div>";
          echo "</div>";


          echo  "<div class='block'>";
          echo  "<h1 class='fredokaFont' style='font-weight: bolder; text-align: center; padding: 15px; background-color: #de9ea9; font-size:25px;'>Roommate Preference</h1>"; 

          echo  "<div class='frame'>";
          echo "<p class='fredokaFont' style='font-size: 20px; padding-left: 15px;'>" . $row_result["Details"] . "</p>";
          echo  "</div>";  
          echo"</div>";

        ?>
    </div>

<!-- Footer here -->
<section id="contact" class="add-padding border-top-color2">
        
  <div class="container text-center">
    
    <div class="row">
    
      <div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">
      
        <h1 class="big-text whiteText">Contact Us</h1>
        
        <p class="lead whiteText fredokaFont">My Common Room offers a variety of services regarding accommodation<br></p>

        <p class="whiteText fredokaFont">You can use these services as you see fit. Your data will be kept private per the <a href="#" style="color:pink">Privacy Policy</a>

        <p class="whiteText fredokaFont">Please feel free to contact us with questions regarding our services. Alternatively, bugs or issues can also be reported and we will be happy to assist you.</p>

      
      </div>
    
      <!--=== Contact Form ===-->

      <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="contactUs.php" method="post" novalidate>
      <!-- <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" method="post" novalidate> -->
        
        <div class="form-group">
          <label class="control-label" for="contact-name">Name</label>
          <div class="controls">
          <input id="contact-name" name="contactName" placeholder="Your name" style="color: white;" class="form-control requiredField fredokaFont" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
          <i class="fa fa-user"></i>
          </div>
        </div><!-- End name input -->
        
        <div class="form-group">
          <label class="control-label" for="contact-mail">Email</label>
          <div class=" controls">
          <input id="contact-mail" name="email" placeholder="Your email" style="color: white;" class="form-control requiredField fredokaFont" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
          <i class="fa fa-envelope"></i>
          </div>
        </div><!-- End email input -->
        
        <div class="form-group">
          <label class="control-label" for="contact-message">Message</label>
          <div class="controls">
            <textarea id="contact-message" name="comments"  placeholder="Your message" style="color: white;" class="form-control requiredField whiteText fredokaFont" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
            <i class="fa fa-comment"></i>
          </div>
        </div><!-- End textarea -->
        
        <p><button name="submit" type="submit" class="btn btn-color2 btn-block fredokaFont" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
        <input type="hidden" name="submitted" id="submitted" value="true" />

        
      </form><!-- End contact-fdorm -->
      
    </div>
    
  </div>

</section>

</body>
</html>