<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes  ($data);
  $data = htmlspecialchars($data);
  $data = strip_tags($data);
  return $data;
}

function send_mail_client($email,$username,$password,$token){
global $BASE_URL;

$to      = $email; // Send email to our user
$subject = 'App Signup'; // Give the email a subject
$message = '

Thanks for signing up!
Your account has been created.
You can login with the following credentials:

------------------------
Username: '.$username.'
Password: '.$password.'
------------------------

Please click this link to verify your email:
'. $BASE_URL .'pages/verifyemail.php?token=' . $token ;

// Our message

$headers = 'From:noreply@seaiteamf.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

}

if (isset($_POST['add_user'])){
$user_p = $_POST['login'];
$email_p = $_POST['email'];
$password_p=$_POST['password'];
$saldo_p = $_POST['saldo'];
$admin = $_POST['admin'];

$email_p = test_input($email_p);
 // check if e-mail address is well-formed
 if (!filter_var($email_p, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error_messages'][] = "Invalid email format";
      $_SESSION['form_values']=$_POST;
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }
 

$tr = createUser($user_p, $email_p, $password_p, $saldo_p);

	if($tr==-1){
		$_SESSION['error_messages'][] = 'Username is already in use';
	    $_SESSION['form_values'] = $_POST;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}
	elseif ($tr==-2){
	   $_SESSION['error_messages'][] = 'Email is already in use';
	   $_SESSION['form_values'] = $_POST;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}	
	elseif ($tr==-3){
		 $_SESSION['error_messages'][] = 'Username and Email is already in use';
	     $_SESSION['form_values'] = $_POST;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}	
	else{
		if($admin==1){
			makeadmin($tr);
		}
		
	header("Location:  $BASE_URL" . '/pages/users/user_management.php');
	}
}

elseif (isset($_POST['back'])){
	header("Location:  $BASE_URL" . '/pages/users/user_management.php');
}
?>