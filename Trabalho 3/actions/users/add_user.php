<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  

if (isset($_POST['add_user'])){
$user_p = $_POST['login'];
$email_p = $_POST['email'];
$password_p=$_POST['password'];
$saldo_p = $_POST['saldo'];
$admin = $_POST['admin'];

$tr = createUser($user_p, $email_p, $password_p, $saldo_p);

	if($tr==-1){
		echo $tr;
		$_SESSION['am_u']=1;
		$_SESSION['am_e']=0;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}
	elseif ($tr==-2){
		echo $tr;
		$_SESSION['am_u']=0;
		$_SESSION['am_e']=1;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}	
	elseif ($tr==-3){
		echo $tr;
		$_SESSION['am_u']=1;
		$_SESSION['am_e']=1;
		header("Location:  $BASE_URL" . '/pages/users/add_user.php');
	}	
	else{
		$_SESSION['am_u']=0;
		$_SESSION['am_e']=0;
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