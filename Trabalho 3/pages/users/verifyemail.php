<?php

  include_once('../../config/init.php');
  include($BASE_DIR . 'database/users.php');

$token = $_REQUEST['token'];
$result = emailVerificationValidation($token);
if($result==-1){
	$_SESSION['error_messages'][] = 'Verification failed';
	die(header("Location:  $BASE_URL" . 'pages/users/register.php'));
}
else {
	 $_SESSION['success_messages'][] = "Email was verify you can now login";
	  die(header("Location:  $BASE_URL" ));
}

 ?>
