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


if (isset($_POST['edit_user'])){
$id = $_SESSION['m_id'];
$user = getuser($_SESSION['m_id']);
//echo  $user['email'];

$username = $user['username'];
$email = $user['email'];
$saldo = $user['saldo'];
$admin = $user['admin'];

$user_p = $_POST['login'];
$email_p = $_POST['email'];
$saldo_p = $_POST['saldo'];
$admin_p = $_POST['admin'];



if(!empty($user_p) or is_numeric($user_p)){
	$username=$user_p;
}
if(!empty($email_p)){
	$email=$email_p;
}
if(!empty($saldo_p) or is_numeric($saldo_p)){
	$saldo=$saldo_p;
}

$email = test_input($email);
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $_SESSION['error_messages'][] = "Invalid email format";
      $_SESSION['form_values']=$_POST;
      //die(header('Location: ' . $_SERVER['HTTP_REFERER']));
    }
  



$tr = edituser($id,$username,$email,$saldo);
    if($tr==-1){
		$_SESSION['error_messages'][] = 'Username is already in use';
	    $_SESSION['form_values'] = $_POST;
		header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
	}
	elseif ($tr==-2){
	   $_SESSION['error_messages'][] = 'Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
	}	
	elseif ($tr==-3){
		 $_SESSION['error_messages'][] = 'Username and Email is already in use';
	     $_SESSION['form_values'] = $_POST;
		  header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
	}	
else{
	if($admin_p==1){
		makeadmin($id);
	  header("Location:  $BASE_URL" . '/pages/users/user_management.php');
	}
	else if($admin_p!=1){
		removeadmin($id);
		 header("Location:  $BASE_URL" . '/pages/users/user_management.php');
	}
}
}


elseif (isset($_POST['back'])){
	header("Location:  $BASE_URL" . '/pages/users/user_management.php');
}


?>