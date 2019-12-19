<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');  


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
echo  $username;
echo  $email;
echo  $saldo;

$tr = edituser($id,$username,$email,$saldo);




		if($tr==-1){
			$_SESSION['em_u']=1;
			$_SESSION['em_e']=0;
			header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
		}
		elseif ($tr==-2){
			echo $tr;
			$_SESSION['em_u']=0;
			$_SESSION['em_e']=1;
			header("Location:  $BASE_URL" . '/pages/users/edit_user.php');
		}	
		elseif ($tr==-3){
			$_SESSION['em_u']=1;
			$_SESSION['em_e']=1;
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