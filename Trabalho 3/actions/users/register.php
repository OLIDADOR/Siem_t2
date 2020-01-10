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
'. $BASE_URL .'pages/users/verifyemail.php?token=' . $token ;

// Our message

$headers = 'From:noreply@siem_games_vault.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

}
  
  $email = strip_tags($_POST['email']);
  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $com_password = $_POST['c_password'];
  
   
  
	 if (!$_POST['username'] || !$_POST['realname'] || !$_POST['password']) {
		  $_SESSION['error_messages'][] = 'All fields are mandatory';
		  $_SESSION['form_values'] = $_POST;
		  header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
		  exit;
	}
	
	else if (strcmp($password,$com_password)!=0) {
		  $_SESSION['error_messages'][] = 'Passwords dont match are mandatory';
		  $_SESSION['form_values'] = $_POST;
		  header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
		  exit;
	}


$email = test_input($email);
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error_messages'][] = "Invalid email format";
      $_SESSION['form_values']=$_POST;
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }
  

	

  $st = createUser($username, $email, $password, 0);
  if($st==-1){
	   $_SESSION['error_messages'][] = 'Username is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  else if($st==-2){
	   $_SESSION['error_messages'][] = 'Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  else if($st==-3){
	   $_SESSION['error_messages'][] = 'Username and Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  send_mail_client( $email, $username, $password,$email);
  
  header("Location: $BASE_URL");
?>