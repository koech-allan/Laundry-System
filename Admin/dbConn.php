<?php

$db = mysqli_connect("localhost","root","","loc");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
