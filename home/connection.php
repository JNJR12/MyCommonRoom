<?php

$dbhost = "dbhost.cs.man.ac.uk";
$dbuser = "p29365al";
$dbpass = "group_r5";
$dbname = array(
    "2021_comp10120_r5",
);



if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname[0]))
{
  die("failed to connect!");
}

?>