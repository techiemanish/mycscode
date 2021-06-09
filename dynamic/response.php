
<?php
    $ServerName = "localhost:3306";
    $UserName = "mycscode_loginadmin";
    $PassWord = "Manish@123654";
    $DataBase = "mycscode_feedbackdata";
    
    $Name = $_POST["name"];
	$Email = $_POST["email"];
	$Country = $_POST["country"];
	$Message = $_POST["message"];
    
   $con = new mysqli($Server,$UserName,$PassWord,$DataBase);
   
   if($con->connect_error){
       die("Connection Failed to Database: " .$con->connect_error);
   }
   
	$sql ="INSERT INTO feedback (Name,Email,Country,Message) VALUES('$Name', '$Email', '$Country', '$Message')";
	
	if(!mysqli_query($con,$sql))
	{
	echo 'Not Inserted, Inconvinence is deeply regretted';
	}
	else
	{
	echo '<center><h2 style="color: dodgerblue">Thank you! Your valuable feedback is submitted Suceesfully. Please login to view your submitted comment.</h2></center>';
	
	}
	$con->close();
	header("refresh:5; url=/dynamic/login");


?>
