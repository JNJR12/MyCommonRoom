<?php
  session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flat Finder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <style>
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

        .line {
            border-top: 7px solid #B77682;
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
            font-size: 30px;
            font-family: Verdana;
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

</head>

<body>

<!-- Navbar here -->
<div class="topnav">
    <img src="img/logo.png" style="width:100px;height:75px;" >
      <div class="topnav-right">
          <a href="../home/">Home</a>
          <a class="active" href="./store.php">Flat Finder</a>
          <a href="../flatmate-finder/rommate_finder.php">Flat Share</a>
          <a href="../about-us/aboutUs.php">About</a>
          <a href="../home/MyAccountPage.php"><span class="glyphicon glyphicon-log-in"></span> Account</a>
      </div>
</div>

<!-- Searchbox here -->
<div class="searcharea">
    <div class="sb_content" style="padding: 100px;">
        <h1 style="font-size: 60px; color: black; font-family: Lucida Console; font-weight: bold;">Find Your Ideal Room</h1>
        <p style="color: black; font-size: 17px;">Here are the most popular properties in Manchester</p>
    </div>
</div><br><br>

<h3 class="filter_title" >
    Properties
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
        <input type="radio" name="type" class="ButtonState" id="PrivateHall" value="PrivateHall"/>
        <label class="Button" for="PrivateHall">Private Hall</label>

        <br/><br/>
        <label style="font-size: 17px; font-weight: bold; font-family: Verdana;">Period: </label>
        <input type="radio" name="period" class="ButtonState" checked id="pAll" value="pAll"/>
        <label class="Button" for="pAll"> All</label>
        <input type="radio" name="period" class="ButtonState" id="Long" value="Long"/>
        <label class="Button" for="Long">Long(> 6 months)</label>
        <input type="radio" name="period" class="ButtonState" id="Short" value="Short"/>
        <label class="Button" for="Short">Short(< 6 month)</label>


        <br/><br/>
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
        <label class="Button" for="200+">>200</label>

        <br/><br/>
        <input class="btn1" type="submit" name="apply" value="Apply">
    </form>
    
    <form action="store.php">
        <input class="btn1" type="submit" name="clear" value="Clear">
    </form>
</div>
<div class="line"></div>
    <br/><br/>

    <?php
        $database_host = "dbhost.cs.man.ac.uk";
        $database_user = "e31258zw";
        $database_pass = "r5_wzy000";
        $group_dbnames = "2021_comp10120_r5";

        // connect to the database
        $conn = mysqli_connect($database_host, $database_user, $database_pass, $group_dbnames);
        // Check connection
        if (!$conn) {
            die("fail: " . mysqli_connect_error());
        } 
        // else {
        //     echo("this is connected<br/>");
        // }

        // get the data from tables
        $sql = "SELECT * FROM Store";
        // echo("the sql is: ".$sql."<br/>");
        $result = mysqli_query($conn, $sql);
        
        // store the ID into a list
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $arr[] = $row["ID"];
            }
        }

        $total_num = mysqli_num_rows($result);
        // echo("There are ".$total_num." results<br/>");

        $count = 1;
        $num = 1;

        $check = floor($total_num / 4);
        $rem = $total_num % 4;

        // 4 properties in one row
        while($count <= $check){
            // get the pictures
            $num = 4 * ($count-1) + 1;
            echo("<div style='position: relative; width: 85%; height:100%; padding-left: 15%;'>");
            while($num <= 4 * $count){
                // get request and results
                $sql = "SELECT * FROM Store WHERE ID = ".$arr[$num-1];
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<span style= 'width=25%; background-color=plum; height = 200px; position: relative;'>");
                            echo("<a href='information.php?id=".$arr[$num-1]."'>".
                            "<img src='images/".$row["Picture"].".jpg' width='25%' height='150px'/></a>");
                            // echo("<span >".$row["Name"].
                            // "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
                            // "£".$row["FeePerW"]."pw<br/>".$row["Postcode"]."</span>");
                        echo("</span>");
                    }
                } else {
                    echo "0 result";
                }
                $num++;
            }
            echo("</div>");

            // get the features
            echo("<div style='position: relative; width:100%;'>");
            echo("<table style='width: 70%; margin-left: 15%;'>");
                echo("<tr>");
                $num = 4 * ($count-1) + 1;
                while($num <= 4 * $count){
                    $sql = "SELECT * FROM Store WHERE ID = ".$arr[$num-1];
        
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<td style='text-align: center;'>".$row["Name"].
                            "<br/>".
                            "£".$row["FeePerW"]."pw&nbsp;&nbsp;&nbsp;&nbsp;".$row["Postcode"]."</td>");
                        }
                    } else {
                        echo "0 result";
                    }
                    $num++;
                }
            echo("</tr></table></div>");
            
            echo("<br/><br/>");
            $count++;
        }

        if ($num <= $total_num){
            $num1 = $num;
            echo("<div style='position: relative; width: 70%; height:100%; padding-left: 15%;'>");
            while ($num1 <= $total_num) {
                // get request and results
                $sql = "SELECT * FROM Store WHERE ID = ".$arr[$num1-1];
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
                        echo("<span style= 'width=25%; background-color=plum; height = 200px; position: relative;'>");
                            echo("<a href='information.php?id=".$arr[$num1-1]."'>".
                            "<img src='images/".$row["Picture"].".jpg' width='25%' height='150px'/></a>");
                        echo("</span>");
                    }
                }

                $num1++;
            }
            echo("</div>");

            // get the features
            echo("<div style='position: relative; width:100%;'>");
            echo("<table style='width:".($rem*17.5)."%; margin-left: 5%; margin-right:15%'>");
                echo("<tr>");
                while($num <= $total_num){
                    $sql = "SELECT * FROM Store WHERE ID = ".$arr[$num-1];
        
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo("<td style='text-align: center;'>".$row["Name"].
                            "<br/>".
                            "£".$row["FeePerW"]."pw&nbsp;&nbsp;&nbsp;&nbsp;".$row["Postcode"]."</td>");
                        }
                    } else {
                        echo "0 result";
                    }
                    $num++;
                }
            echo("</tr></table></div>");
            
            echo("<br/><br/>");

        }

        mysqli_close($conn);

    ?>

    <br/>
    <br/><br/>


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