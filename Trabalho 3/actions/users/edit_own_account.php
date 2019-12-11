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

if($user_p){
	$user=$user_p;
}
if($email_p){
	$email=$email_p;
}

$tr = edituser($id,$user,$email,$saldo);

?>