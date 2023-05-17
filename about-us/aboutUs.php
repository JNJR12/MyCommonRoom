<?php
  session_start();


?>



<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="aboutUs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="topnav">
<img src="img/logowobg.png" style="width:100px;height:75px;">
<div class="topnav-right">
  <a href="../home/">Home</a>
  <a href="../store/store.php">Flat Finder</a>
  <a href="../flatmate-finder/rommate_finder.php">Flat Share</a>
  <a class="active" href="./aboutUs.php">About</a>
  <a href="../home/MyAccountPage.php"><span class="glyphicon glyphicon-log-in"></span> Account</a>
</div>
</div>
  <div class="about-section">
  <h1 class="aboutUsStyling" style="font-size:50px;">About My Common Room</h1>
  <p class="aboutUsStyling">My Common Room is a website built by 5 international CS students. <br> The idea was born out of the issues that we faced in searching for accommodation<br>
  To help fellow university students alike, we decided to incorporate <br> a flatmate-finding feature 
  to help students find other friends in their new environment</p>
  

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row" style="margin: 0;">
  <div class="columnn">
    <div class="cardd">
      <img src="img/ali.jpg" alt="Ali" style="width:100%">
      <div class="containerr">
        <h2>Ali Lakho</h2>
        <p class="title">Back End Developer</p>
        <!-- <p>Fair and just ruler of Meowland, the land of cats.</p> -->
        <!-- <p>ali.lakho@student.manchester.ac.uk</p> -->
        <p><button class="button" onclick="location.href='mailto:ali.lakho@student.manchester.ac.uk';">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="columnn">
    <div class="cardd">
      <img src="img/joshua121.jpg" alt="Joshua" style="width: 100%; height: 265px;">
      <div class="containerr">
        <h2 style="font-size: 25px">Joshua Simanullang</h2>
        <p class="title">Front End Developer</p>
        <!-- <p>His Meowjesty's trusted spy.</p> -->
        <!-- <p>joshua.simanullang@student.manchester.ac.uk</p> -->
        <p><button class="button" onclick="location.href='mailto:joshua.simanullang@student.manchester.ac.uk';">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="columnn">
    <div class="cardd">
      <img src="img/kezhi.jpg" alt="Kezhi" style="width:100%; height: 285px;">
      <div class="containerr">
        <h2>Kezhi Zhang</h2>
        <p class="title"> Front End Developer</p>
        <!-- <p>His Meowjesty's eloquent chancellor.</p> -->
        <!-- <p>chancellor@meowland.com</p> -->
        <p><button class="button" onclick="location.href='mailto:kezhi.zhang@student.manchester.ac.uk';">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="columnn">
    <div class="cardd">
      <img src="img/zhengtao11111.jpg" alt="Zhengato" style="width:100%; height: 285px;">
      <div class="containerr">
        <h2>Zhengtao Luo</h2>
        <p class="title">Back End Developer</p>
        <!-- <p>His Meowjesty's beloved music composer.</p> -->
        <!-- <p>composer@meowland.com</p> -->
        <p><button class="button" onclick="location.href='mailto:zhengtao.luo@student.manchester.ac.uk';">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="columnn">
    <div class="cardd">
      <img src="img/ziyi121111.jpg" alt="Ziyi" style="width:100%; height: 286px">
      <div class="containerr">
        <h2>Ziyi Wang</h2>
        <p class="title">Back End Developer</p>
        <!-- <p>His Meowjesty's fearless knight.</p> -->
        <!-- <p>knight@meowland.com</p> -->
        <p><button class="button" onclick="location.href='mailto:ziyi.wang-22@student.manchester.ac.uk';">Contact</button></p>
      </div>
    </div>
  </div>

  
  
</div>
</body>

<!-- Copy paste these for footer in all page. -->
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
          <input id="contact-name" name="contactName" placeholder="Your name" style="color: white;" class="form-control requiredField fredokaFont " data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
          <i class="fa fa-user"></i>
          </div>
        </div><!-- End name input -->
        
        <div class="form-group">
          <label class="control-label" for="contact-mail">Email</label>
          <div class=" controls">
          <input id="contact-mail" name="email" placeholder="Your email" style="color: white;"class="form-control requiredField fredokaFont " data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
          <i class="fa fa-envelope"></i>
          </div>
        </div><!-- End email input -->
        
        <div class="form-group">
          <label class="control-label" for="contact-message">Message</label>
          <div class="controls">
            <textarea id="contact-message" name="comments"  placeholder="Your message" style="color: white;" class="form-control requiredField  fredokaFont" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
            <i class="fa fa-comment"></i>
          </div>
        </div><!-- End textarea -->
        
        <p><button name="submit" type="submit" class="btn btn-color2 btn-block fredokaFont" style="font-size: 21px;"data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</p>
        <input type="hidden" name="submitted" id="submitted" value="true" />

        
      </form><!-- End contact-form -->
      
    </div>
    
  </div>

</section>
</html>
