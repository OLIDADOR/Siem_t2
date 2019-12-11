<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $Result=login($username, $password);
  
  if($Result==1){
	$_SESSION['login'] = true;
	$_SESSION['id'] = loginid($username, $password);
	header("Location: $BASE_URL");
  }	
  else{
	$_SESSION['error_messages'][] = 'Wrong username and password combination';
	$_SESSION['form_values'] = $_POST; 
	header("Location: $BASE_URL");
  }

  
?>