<?php
$title= "MyCsCode|Learn Coding and Web Development";
$slogan ="Learn Coding and Web Development";
include "header.php";   // Include the header
?>

<?php

    $ServerName = "localhost:3306";
    $UserName = "mycscode_loginadmin";
    $PassWord = "Manish@123654";
    $DataBase = "mycscode_logindatabase";

    $Name = $_POST["name"];
    $Mobile = $_POST["mobile"];
    $DOB = $_POST["dob"];
    $Country = $_POST["country"];
	$Email = $_POST["email"];
	$Password = $_POST["password"];
	
    $con = new mysqli($Server,$UserName,$PassWord,$DataBase);
    
    if($con->connect_error){
       die("Connection Failed to Database: " .$con->connect_error);
   }

    $sql = "INSERT INTO registeruser (Name,Mobile,DOB,Country,Email,Password) VALUES ('$Name', '$Mobile', '$DOB', '$Country', '$Email', '$Password')";
    
    
    if(!mysqli_query($con,$sql))
	{
    echo '<center><p style="color:red;font-size:25px;">Something went wrong. Please re-register yourself. It seems you are already registered with us from this email id. </p></center>';
	 echo '<center><p style="color:red;font-size:25px;">Kindly use the different email id or login with your existing email id and password. </p></center>';
	 echo '<center><p style="color:red;font-size:25px;">This page will redirect you in 10 seconds to register page again...</p></center>';
	header("refresh:10; url=/dynamic/register");
        
    }
    else
	{
	echo '<center><p style="color:dodgerblue;font-size:30px;font-family:courier;">Thank you! Your have been sucessfully registered.</p></center>';
        header("refresh:5; url=/dynamic/login");
	}
	$con->close();

?>

<?php
include "footer.php";                 // Include the footer
?>
