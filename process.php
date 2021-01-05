
<html>
<body>
<?php

error_reporting(0);
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field,
FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field,
FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

 
  if (isset($_POST["email"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST
["email"]);
    if ($mailcheck==FALSE) {
     echo "Invalid Input";
	  echo '<script>window.location="contact.php"</script>';
 
	  
    } else {
      $from = $_POST["email"]; // sender
      $subject = $_POST["name"]. '('.$_POST["ph"].')';
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message,
70);
      // send mail
      mail("info@zucamsng.com",
$subject,$message,"From: $from\n");
      
echo "Thank you for sending us feedback";
	  
    }
  }

?>
</body>
</html>
