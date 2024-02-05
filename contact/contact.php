<?php

if (isset($_POST['SUBMIT'])){
    $name = $_POST['name'];
    $subject = $_POST['reason'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hiwate3130@siberpay.com";  //fill with email later
    $headers = "From: ".$mailFrom;
    $txt = "You have received a new e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    // header("Location: index.php?mailsend");
    
}
?>