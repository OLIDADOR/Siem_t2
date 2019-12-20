<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $username = strip_tags($_POST['username']);
  $password = $_POST['password'];
  $password=md5($password);
  $Result=login($username, $password);

  
  if($Result==1){
	$_SESSION['login'] = true;
	$_SESSION['id'] = loginid($username, $password);
	$user = getuser($_SESSION['id']);
	$_SESSION['admin_l']= $user['admin'];
	$_SESSION['login_e']=0;
	$_SESSION['login_l']=1;
	header("Location: $BASE_URL". '/pages/homepages/index_login.php');
  }	
  else{
	$_SESSION['error_messages'][] = 'Wrong username and password combination';
	$_SESSION['form_values'] = $_POST; 
	$_SESSION['login_e']=1;
	header("Location: $BASE_URL");
  }

  
?>