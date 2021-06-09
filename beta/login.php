<?php
// Start the session
session_start();
?>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>
<?php
$title= "MyCsCode Login";
$slogan ="Learn Coding and Web Development";
include "header.php";   // Include the header
?>

<div style="padding:15px 15px;font-size:20px">
<marquee style="text-align:right;color:red;">This is a Beta login Page of MyCsCode. It is still in development.</marquee>
<div class=form-container><div id="login-form">
<center><h1 style="color:dodgerblue">MyCsCode Login</h1></center>
<form name="testform" action="authentication" onsubmit="return validation()" method="POST">
<label> Email ID: </label>
<input type="text" id="username" name="email" placeholder="Registered Email ID"/>
<br>
<br>
<label> Password: &nbsp;</label>
<input type="password" id="password" name="password" placeholder="Enter your Password"/>
<br>
<input type="checkbox" onclick="showpassword()">
  <label for="Show Password">Show Password</label><br>
<br>
<br>
<center>

<button class="login button"><a href="register">Register Yourself !</a></button>
<input type="submit" id="btn" value="Login" />
 
</center>

</form>
</div> </div>
<script>  
            function validation()  
            {  
                var email=document.testform.username.value;  
                var ps=document.testform.password.value;  
                if(email.length=="" && ps.length=="") {  
                    alert("Email ID and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(email.length=="") {  
                        alert("Email ID is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
<script>
function showpassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>        
<?php
include "footer.php";                 // Include the footer
?>