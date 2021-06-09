<?php
// Start the session
session_start();
?>

<?php
$title= "MyCsCode|Learn Coding and Web Development";
$slogan ="Learn Coding and Web Development";
include "header.php";   // Include the header
?>
                <?php
                    $orgDate = $_SESSION['DOB'];  
                    $newDate = date("d-m-Y", strtotime($orgDate));
                    echo "<marquee style='text-align:right;color:red;'>This is a Beta login Page of MyCsCode. It is still in development.</marquee>";
                    echo "<div class=form-container><div id='login-form'>";
                    echo "<h2 style='color:dodgerblue;'>Your Registered Profile Details</h2>";
                    echo "<b>Name: </b>" . $_SESSION["Name"] ."<br>";
                    echo "<br>";
                    echo "<b>Mobile Number: </b>". $_SESSION['Mobile']."<br>";
                    echo "<br>";
                    echo "<b>D.O.B: </b>".$newDate."<br>";
                    echo "<br>";
                    echo "<b>Country of Residence: </b>".$_SESSION['Country']."<br>";
                    echo "<br>";
                    echo "<b>Registered Email ID: </b>".$_SESSION['Email']."<br>";
                    echo "<br>";
                    echo "<center>";
                    echo "<b><i>".'<a style="color:red;" href="javascript:history.back()">Go to Dashboard</a>'."</i></b>";
                    echo "<b><i>".'<a style="color:red;" href="/beta/login">Log out</a>'."</i></b>";
                    echo "</center>";
                    echo "</div></div>";
                ?>

<?php
include "footer.php";                 // Include the footer
?>