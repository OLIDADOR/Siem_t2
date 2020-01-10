<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');  

  $username = $_POST['username'];
  $password = $_POST['password'];
  $Result=login($username, $password);
  if($Result){
	$_SESSION['login'] = true;
	$result = loginid($username, $password);
	$_SESSION['id'] = $result['id'];
	$user = getuser($_SESSION['id']);
	$_SESSION['admin_l']= $user['admin'];
	$_SESSION['login_e']=0;
	$_SESSION['login_l']=1;
	header("Location: $BASE_URL". '/pages/homepages/index_login.php');
  }	
  else{
	$_SESSION['error_messages'][] = 'Wrong username and password combination';
	$_SESSION['form_values'] = $_POST; 
	$_SESSION['login_e']=$_SESSION['login_e']+1; 
	//echo $_SESSION['login_e'];
	header("Location: $BASE_URL");
  }

  
?>