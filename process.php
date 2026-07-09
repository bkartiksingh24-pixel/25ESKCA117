<?php

include("header.php");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];

    echo "<h2>Registration Successful</h2>";

    echo "<b>Name :</b> ".$name."<br><br>";
    echo "<b>Email :</b> ".$email."<br><br>";
    echo "<b>Mobile :</b> ".$mobile."<br><br>";
    echo "<b>Gender :</b> ".$gender."<br><br>";
    echo "<b>Password :</b> ".$password."<br><br>";
}

include("footer.php");

?>