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


$id=$_SESSION['id'];
$user_p = $_POST['login'];
$email_p = $_POST['email'];

$userdat = getuser($id);
$user = $userdat['username'];
$email = $userdat['email'];
$saldo = $userdat['saldo'];

$email = test_input($email);
 // check if e-mail address is well-formed
 


if(!empty($user_p) or is_numeric($user_p)){
	$user=$user_p;
}
if(!empty($email_p)){
	$email=$email_p;
}


$email = test_input($email);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error_messages'][] = "Invalid email format";
      $_SESSION['form_values']=$_POST;
      die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }
$tr = edituser($id,$user,$email,$saldo);

	if($tr==-1){
		$_SESSION['error_messages'][] = 'Username is already in use';
	    $_SESSION['form_values'] = $_POST;
		header("Location:  $BASE_URL" . '/pages/users/account_management.php');
	}
	elseif ($tr==-2){
	   $_SESSION['error_messages'][] = 'Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location:  $BASE_URL" . '/pages/users/account_management.php');
	}	
	elseif ($tr==-3){
		 $_SESSION['error_messages'][] = 'Username and Email is already in use';
	     $_SESSION['form_values'] = $_POST;
		  header("Location:  $BASE_URL" . '/pages/users/account_management.php');
	}	
else{	
header("Location:  $BASE_URL" . '/pages/users/account_management.php');
}

?>