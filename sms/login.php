<?php 
$title= "School Management System by MyCsCode";
include "header.php";   // Include the header
?>

<div class=form-container><div id="login-form">
<center><h1 style="color:white">SMS Login</h1></center>
<form name="smsform" action="#" onsubmit="return validation()" method="POST">
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
<input type="submit" id="btn" value="Login" />
 
</center>

</form>
</div>
    
</body>
<?php
include "footer.php";                 // Include the footer
?>