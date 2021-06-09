<?php 
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Country = $POST['country'];
	$Message = $POST['message'];
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
$to_email = 'support@mycscode.com';
$subject = 'New Feedback From User';
$email_body = "Name:$Name.\n
               Email:$Email\n
               Country:$Country.\n
               Message:$Message.\n";
        
$headers = 'From: noreply@mycscode.com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email, $subject, $email_body, $headers);
    echo "Your Valuable Feedback is Submitted.";
}
header("refresh:2; url=index.html");
?>

