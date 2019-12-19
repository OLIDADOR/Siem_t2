<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  


$id=$_SESSION['id'];
$user_p = $_POST['login'];
$email_p = $_POST['email'];

$userdat = getuser($id);
$row = pg_fetch_row($userdat, 0);
$user = $row[1];
$email = $row[3];
$saldo = $row[4];

if(!empty($user_p) or is_numeric($user_p)){
	$user=$user_p;
}
if(!empty($email_p)){
	$email=$email_p;
}

$tr = edituser($id,$user,$email,$saldo);

	if($tr==-1){
			$_SESSION['ea_u']=1;
			$_SESSION['ea_e']=0;
			header("Location:  $BASE_URL" . '/pages/users/account_management.php');
		}
		elseif ($tr==-2){
			$_SESSION['ea_u']=1;
			$_SESSION['ea_e']=0;
			header("Location:  $BASE_URL" . '/pages/users/account_management.php');
		}	
		elseif ($tr==-3){
			$_SESSION['ea_u']=1;
			$_SESSION['ea_e']=0;
			header("Location:  $BASE_URL" . '/pages/users/account_management.php');
		}	
header("Location:  $BASE_URL" . '/pages/users/account_management.php');
?>