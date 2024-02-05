<?php
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

    // Database Connection
    $conn = mysqli_connect('localhost','root','','test');
    if (mysqli_connect_errorno()){
        echo "Failed to connect!";
        exit();
    }

    // if($conn->connect_error){
    //     echo "$conn->connect_error";
    //     die("Connection Failed : ". $conn->connect_error);
    // } else {
    //     $stmt = $conn->prepare("Insert into registration(email, psw, psw_repeat) values(?, ?, ?)");
    //     $stmt = bind_param("sss",$email, $psw, $psw_repeat);
    //     $execval = $stmt->execute();
    //     echo $execval;
    //     echo "Registration Successful";
    //     $stmt->close();
    //     $conn->close();
    // }
?>