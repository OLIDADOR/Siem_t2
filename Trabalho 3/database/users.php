<?php

  function createUser($username, $email, $password, $balance) {
    global $conn;
    $stmt = $conn->prepare("select * from credentials where username= ?;");
    $stmt->execute(array($username));
	$stmt->fetchAll();
	$num_registos_u = $stmt->rowCount();
	$stmt = $conn->prepare("select * from credentials where email =  ?;");
    $stmt->execute(array($email));
	$stmt->fetchAll();
	$num_registos_e = $stmt->rowCount();
	if($num_registos_u > 0 and $num_registos_e <=0){
		return -1;	
	}
	else if ($num_registos_e > 0 and $num_registos_u <= 0){
		return -2;
	}
	else if ($num_registos_u > 0 and $num_registos_e > 0){
		return -3;
	}
	else{
		$stmt = $conn->prepare("INSERT INTO credentials (username, pass, email, saldo, email_com) VALUES(?,?,?,?,?);");
		$stmt->execute(array($username, md5($password),$email,$balance,0));
		$temp=$stmt->fetch(PDO::FETCH_ASSOC);
		return $temp[0];
	}	
  }
  function login($username, $password) {
    global $conn;
    $stmt = $conn->prepare("select * from credentials where username = ? and pass =? And email_com = ?;");
    $stmt->execute(array($username, md5($password),1));
	$r=$stmt->fetchAll();
	$num_registos_l = $stmt->rowCount();
	if($num_registos_l > 0){
		return 1;	
	}
	else{
		return 0;
	}
  }
  
  function loginid($username, $password) {
    global $conn;
    $stmt = $conn->prepare("select id from credentials where username = ? AND pass = ? And email_com = ?;");
    $stmt->execute(array($username,md5($password),1));
	return $stmt->fetch();
  }
  
  function getuser($id) {
    global $conn;
    $stmt = $conn->prepare("select * from credentials where id= ?;");
    $stmt->execute(array($id));
	return $stmt->fetch();
  }
  function edituser($id,$username,$email,$saldo) {
    global $conn;
	$stmt = $conn->prepare("select * from credentials where username= ? and id != ?;");
    $stmt->execute(array($username,$id));
	$stmt->fetchAll();
	$num_registos_u = $stmt->rowCount();
	$stmt = $conn->prepare("select * from credentials where email =  ? and id != ?;");
    $stmt->execute(array($email,$id));
	$stmt->fetchAll();
	$num_registos_e = $stmt->rowCount();
	if($num_registos_u > 0 and $num_registos_e <=0){
		return -1;	
	}
	else if ($num_registos_e > 0 and $num_registos_u <= 0){
		return -2;
	}
	else if ($num_registos_u > 0 and $num_registos_e > 0){
		return -3;
	}
	else{
    $stmt = $conn->prepare("UPDATE credentials SET username = ? ,email= ?,saldo= ? WHERE id= ? ;");
    $stmt->execute(array($username,$email,$saldo,$id));
	return 0;
  }
  }
  function getalluser() {
    global $conn;
    $stmt = $conn->prepare("select * from credentials;");
	$stmt->execute();
	return $stmt->fetchAll();
  }
  function checkuserbalance($id) {
    global $conn;
    $stmt = $conn->prepare("select saldo from credentials where id= ?;");
    $stmt->execute(array($id));
	return $stmt->fetchAll();
  }
  function deleteuser($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM credentials where id = ? ;");
    $stmt->execute(array($id));
	return $stmt->fetchAll();
  }
  function makeadmin($id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE credentials SET admin = '1' WHERE id=?");
    $stmt->execute(array($id));
	return $stmt->fetchAll();
  }
  function removeadmin($id) {
    global $conn;
    $stmt = $conn->prepare("UPDATE credentials SET admin = '0' WHERE id=?");
    $stmt->execute(array($id));
	return $stmt->fetchAll();
  }
  function emailVerificationValidation($email) {
    global $conn;
    $stmt = $conn->prepare("UPDATE credentials SET email_com= '1' WHERE email=?");
    $stmt->execute(array($email));
	return $stmt->fetchAll();
  }


?>
