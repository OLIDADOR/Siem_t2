<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

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
	

  $st = createUser($username, $email, $password);
  if($st==1){
	   $_SESSION['error_messages'][] = 'Username is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  else if($st==2){
	   $_SESSION['error_messages'][] = 'Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  else if($st==3){
	   $_SESSION['error_messages'][] = 'Username and Email is already in use';
	   $_SESSION['form_values'] = $_POST;
	   header("Location: $BASE_URL" . 'pages/users/register.php'); //mudar
	   exit;
  }
  
  header("Location: $BASE_URL");
?>