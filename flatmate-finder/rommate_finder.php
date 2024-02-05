<?php
  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flat Share</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        /* Remove the navbar's default margin-bottom and rounded borders */
        @import url('https://fonts.googleapis.com/css2?family=Amatic+SC&family=Fredoka:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Fredoka&display=swap');

        .navbar {
          margin-bottom: 0;
          border-radius: 0;
        }

        /*---- Navbar style ----*/
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
            font-weight:bolder;
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

        a:hover,a:focus{
            color:#B77682;
            text-decoration:underline
        }

        body {
            background-color: whitesmoke;
        }

        /*---- Searchbox ----*/
        .searcharea {
            width: 100%;
            background-image: url(img/bg2.jpg);
            background-repeat: no-repeat;           
            background-size: cover;
            text-align: center;         
            background-color: whitesmoke;
        }

        .sb_content {
            font-family: Verdana;
        }

        .searcharea input {
            font-size: 20px;
            color: grey;
        }

        .searcharea button {
            font-size: 20px;
        }

        .line {
            border-top: 2px solid lightgray;
            margin-left: 14%;
            margin-right: 14%;
        }

        body{
            margin: 0;
            background-color: whitesmoke;
        }
        form{
            width: 70%;
            padding-left: 15%;
            padding-top: 1%;
            padding-bottom: 1%; 
        }
        .ButtonState{
            display:none
        }
        .Button{
            font-family: Verdana;
            font-size: 17px;
            padding:3px; 
            margin:4px;
            border: none; 
            cursor:pointer;}
        .Button:hover{
            color: #B77682;
        }
        .ButtonState:checked + .Button{
            color: #B77682;
        }
        .btn1{
            background-color: #FFFFFF; 
            font-weight: bold;
            font-size: 16px;
            border-radius: 10px;
        }
        :hover.btn1 {
            color: #B77682;
        }

        /*---- Filter ----*/
        .filter_title {
            text-align: center;
            color: #333;
            font-weight: bold;
            font-size: 35px;
            font-family: Verdana;
        }

        /*---- Picture Container ----*/
        .picbox {
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .picbox:hover {
            border: 1px solid #777;
        }

        .picbox img {
            width: 100%;
            height: 200px;
        }

        .picbox:hover {
            border-color: #ccc;
            box-shadow: 0px 0px 12px rgba(0, 0, 0, 0.24);

        }

        .descrip {
            padding: 15px;
            text-align: center;
            font-family: Verdana;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
            height: 300px;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
                
            }
        }

        .clean {
            clear:both;
        }

        .line {
            border-top:7px solid #B77682;
        }

/*-----------------------
----- Basic Styles -----
-------------------------*/

body{
    font-family: Raleway, Arial, sans-serif;
    font-size:16px;
    font-weight:300;
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
h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{
    font-weight:300;
}

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
    </style>
</head>

<body>
   
<!-- Navbar here -->
<div class="topnav">
    <img src="img/logo.png" style="width:100px;height:75px;" >
      <div class="topnav-right">
          <a href="../home/">Home</a>
          <a href="../store/store.php">Flat Finder</a>
          <a class="active" href="./rommate_finder.php">Flat Share</a>
          <a href="../about-us/aboutUs.php">About</a>
          <a href="../home/MyAccountPage.php"><span class="glyphicon glyphicon-log-in"></span> Account</a>
      </div>
</div>

<!-- Searchbox here -->
<div class="searcharea">
    <div class="sb_content" style="padding: 100px;">
        <h1 style="font-weight: bold; font-size: 60px; color: white; font-family: Lucida Console;">Find Your Flatmates</h1>
        <p style="color: white; font-size: 18px;">We can help you find the most like-minded flatmate</p>

    </div>
</div><br><br>

<!-- Filter here -->
<h3 class="filter_title" >
    Post
</h3><br>
<div style="width: 100%; height: 100%;">
<div class="line"></div>
    <form method="POST" action="filter.php">
        <label style="font-size: 17px; font-weight: bold; font-family: Verdana;">Type: </label>
        <input type="radio" name="type" class="ButtonState" checked id="tAll" value="tAll"/>
        <label class="Button" for="tAll"> All</label>
        <input type="radio" name="type" class="ButtonState" id="House" value="House"/>
        <label class="Button" for="House">House</label>
        <input type="radio" name="type" class="ButtonState" id="Flat" value="Flat"/>
        <label class="Button" for="Flat">Flat</label>
        <input type="radio" name="type" class="ButtonState" id="Private Hall" value="Private Hall"/>
        <label class="Button" for="Private Hall">Private Hall</label>

        <br/><br/>
        <label style="font-size: 17px; font-weight: bold; font-family: Verdana;">Gender: </label>
        <input type="radio" name="gender" class="ButtonState" checked id="gAll" value="gAll"/>
        <label class="Button" for="gAll"> All</label>
        <input type="radio" name="gender" class="ButtonState" id="Male" value="Male"/>
        <label class="Button" for="Male">Male</label>
        <input type="radio" name="gender" class="ButtonState" id="Female" value="Female"/>
        <label class="Button" for="Female">Female</label>
        <input type="radio" name="gender" class="ButtonState" id="No Preference" value="No Preference"/>
        <label class="Button" for="No Preference">No Preference</label>

        <!-- <br/><br/>
        <label style="font-size: 17px; font-weight: bold; font-family: Verdana;">Price pw: </label>
        <input type="radio" name="price" class="ButtonState" checked id="priAll" value="priAll"/>
        <label class="Button" for="priAll"> All</label>
        <input type="radio" name="price" class="ButtonState" id="100" value="100"/>
        <label class="Button" for="100">0-100</label>
        <input type="radio" name="price" class="ButtonState" id="150" value="150"/>
        <label class="Button" for="150">100-150</label>
        <input type="radio" name="price" class="ButtonState" id="200" value="200"/>
        <label class="Button" for="200">150-200</label>
        <input type="radio" name="price" class="ButtonState" id="200+" value="200+"/>
        <label class="Button" for="200+">>200</label> -->

        <br/><br/>
        <input class="btn1" type="submit" name="apply" value="Apply">
    </form>
    
    <form action="rommate_finder.php">
        <input class="btn1" type="submit" name="clear" value="Clear">
    </form>
</div>
<div class="line"></div>
    <br/><br/>

<!-- Proporties here -->
        <div style="margin-left: 14%; margin-right: 14%;">
                
        <?php    

            // connect to database
            require_once 'dbConfig.php';;

            $sql = "SELECT * FROM Post ORDER BY post_id DESC";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            while($row1 = mysqli_fetch_assoc($result)) {
                $post_id = $row1["id"];
                $select_pic_id = $conn->query("SELECT MIN(id) FROM PicOfPost WHERE post_id=$post_id");
                $select_pic_id_query = $select_pic_id->fetch_assoc();
                $pic_id = min($select_pic_id_query);
                $select = $conn->query("SELECT image FROM PicOfPost WHERE id=$pic_id"); 
                $row = $select->fetch_assoc();
                // if($select->num_rows > 0){ ?> 
                        <?php //while(){ ?> 
                        <div class='responsive'>
                        <div class="picbox">

                            <?php echo "<a href='post.php?id=" . $row1["id"] . "'>"; ?>
                            <!-- <div class='roompicture'> -->
                            <img alt='roompicture' width="600" height="400" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                            </a>
                        <?php 
                            echo "<span class='descrip'>" . $row1["NameOfP"] . "</span>";
                            echo "</div>";
                            echo "</div>";
                            
                            ?>
                        <?php } ?> 
                <?php //}else{ ?> 
                    <!-- <p class="status error">Image(s) not found...</p>  -->
                <?php //} ?>
                <?php// } ?>
        <?php        
                // echo     "";
            } else {
                echo "0 result";
              }

            mysqli_close($conn);

        ?>

        </div>
<div class="clean"></div><br>

<!-- Footer here -->
<section id="contact" class="add-padding border-top-color2">
        
  <div class="container text-center">
    
    <div class="row">
    
      <div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">
      
        <h1 class="big-text whiteText">Contact Us</h1>
        
        <p class="lead whiteText fredokaFont">My Common Room offers a variety of services regarding accommodation<br></p>

        <p class="whiteText fredokaFont">You can use these services as you see fit. Your data will be kept private per the <a style="color:#B77682" href="../home/Privacy_Policy.pdf" target = "_blank">Privacy Policy</a>
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