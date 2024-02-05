<?php
  session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Information Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        body{
            margin: 0;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;;
        }
        .btn1 {
            background-color: none; 
            border: none; 
            position: absolute;
            width: 20px; 
            height: 50px; 
            opacity: 0.3; 
            margin-left: -30px;
            margin-top: 120px; 
            font-family: Arial; 
            font-size: 1em;}
        :hover.btn1{
            opacity: 1;
        }
        
    </style>
    
    <script type="text/JavaScript" src="info.js"></script>
</head>

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
    
    // get the index from the previous page
    $index = $_GET['id'];
    $sql = "SELECT * FROM Store WHERE ID =".$index;
    $sql_pic = "SELECT * FROM PicOfHouse WHERE ID =".$index;
    $sql_fea = "SELECT * FROM Feature WHERE ID =".$index;
    
    $result = mysqli_query($conn, $sql);
    $result_pic = mysqli_query($conn, $sql_pic);
    $result_fea = mysqli_query($conn, $sql_fea);

?>

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
</div><br>

    <div style="width: 70%; margin-left: 15%; position: relative; 
                background-color: #f1f1f1; height: 330px;">
        <!-- <span id="picture" title="1"> -->
            <?php
            $row_pic = mysqli_fetch_assoc($result_pic);
            echo("<span id='picture' title='".$row_pic["Start"]."'>");

                $row = mysqli_fetch_assoc($result);
                
                echo("<img src='images/".$row_pic["Start"].".jpg' width='47%'/>");
                mysqli_close($conn);

            ?>
            
        </span>
        
        <?php
        
        echo("<button class ='btn1' onclick='nextPic(".$row_pic["Start"].",".$row_pic["End"].");'>></button>");
        echo("<button class ='btn1' onclick='prePic(".$row_pic["Start"].",".$row_pic["End"].");'".
            "style= 'margin-left: -46%;'><</button>");

        ?>

        <span style="width: 50%; font-size: 27px; padding-left: 2%;
                     font-weight: bold; padding-top: 8px; position: absolute; height: 40px; ">
            Property Details
        </span>

        <span style="width: 50%; padding-left: 3%; margin-top: 50px; 
                    height: 40px; position: absolute;font-weight: bold;
                    font-size: 17px;">
            <?php
                echo($row["Name"]);
            ?>
        </span>

        <span style="width: 50%; padding-left: 3%; margin-top: 80px;
                    font-size: 17px; position: absolute;">
            <?php
                echo("£".$row["FeePerW"]." pw");
            ?>
        </span>

        <span style="width: 50%; padding-left: 3%; margin-top: 120px; 
                    position: absolute; font-size: 17px; font-weight: bold;">
            <?php
                echo($row["RoomType"]);
            ?>
            <br/>
            <span style="font-size: 15px;">Location: </span>
            <span style="font-size: 15px; font-weight: normal;">
                <?php
                    echo($row["Location"]);
                ?>
            </span>
            <br/>
            <span style="font-size: 15px;">Postcode: </span>
            <span style="font-size: 15px; font-weight: normal;">
                <?php
                    echo($row["Postcode"]);
                ?>
            </span>
            <br/>
        </span>
        
        <span style="width: 50%; padding-left: 3%; margin-top: 200px; 
                    position: absolute; font-size: 17px; font-weight: bold;">
                Contact information
            <br/>
            <span style="font-size: 15px;">Email: </span>
            <span style="font-size: 15px; font-weight: normal;">
                <?php
                    echo($row["Email"]);
                ?>
            </span>
            <br/>
            <span style="font-size: 15px;">Phone: </span>
            <span style="font-size: 15px; font-weight: normal;">
                <?php
                    echo($row["Number"]);
                ?>
            </span>
        </span>
    </div>
    
    <br/>

    <div style="width: 70%; height: 120px; margin-left: 15%; 
                position: relative; background-color: #f1f1f1;">

        <div style="width: 100%; height: 100px; position: relative;
                    font-size: 18px; font-weight: bold; margin-left: 15px; padding-top: 8px;">
            Distance to the University of Manchester:  
            <?php
                echo($row_pic["Distance"]);
            ?>
            mile
            <br><br>
            <span style="font-size: 17px;">Walk: </span>
            <span style="font-size: 17px; font-weight: normal; "> 
                <?php
                    echo($row_pic["Walk"]);
                ?>
                min
            </span>
            <br/>
            <span style="font-size: 17px;">Car: </span>
            <span style="font-size: 17px; font-weight: normal;"> 
                <?php
                    echo($row_pic["Car"]);
                ?>
                min
            </span>
        </div>
    </div>
    <div style="width: 70%; height: 300px; margin-left: 15%; 
                position: relative; background-color: #f1f1f1; padding-top: 8px;">
        <!-- <span style="width: 100%; height: 300px; position: relative;"> -->
            <?php
                echo("<iframe src='".$row_pic["Map"].
                "' style='border:0;' width='100%' height='100%' allowfullscreen=''".
                "loading='lazy'></iframe>");
            ?>

        <!-- </span> -->
    </div>
    
    <br/><br/>
    
    <div style="width: 70%; height: auto; margin-left: 15%;
                position: relative; background-color: #f1f1f1;">
        <span style="height: 40px; position: absolute; font-weight: bold; 
                     font-size: 27px; padding-top: 8px; margin-left: 15px;">
            Features
            <br/><br/>
            <span style="font-size: 20px;">Description </span><br/>
            <span style="font-size: 17px; font-weight: normal;">
                <?php
                    $row_fea = mysqli_fetch_assoc($result_fea);
                    echo($row_fea['Description']);
                ?>
            </span>
            <br/><br/>
            <span style="font-size: 20px;">Facility </span><br/>
            <span style="font-size: 17px; font-weight: normal;">
                <?php
                    echo($row_fea['Facility']);
                ?>
            </span>
            <br/><br/>
            <span style="font-size: 20px;">Fee </span><br/>
            <span style="font-size: 17px; font-weight: normal;"> 
                <?php
                    echo($row_fea['Price']);
                ?>
            </span>
            <br/><br/>
            <span style="font-size: 20px;">Security </span><br/>
            <span style="font-size: 17px; font-weight: normal;"> 
                <?php
                    echo($row_fea['Security']);
                ?>
            </span>
            <br/><br/><br/>
        </span>
    </div>

</body>
</html>