<?php
  $BASE_DIR = dirname(__DIR__).'/';
  $BASE_URL = 'https://paginas.fe.up.pt/~up201503216/tf/';
  
 session_start();



  //lidação a base de dados
  $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1911', 'siem1911', 'siem2019'); //mudar !!!
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("set schema 'Siem';");
  $stmt->execute();
  $stmt->fetchAll();
  
 include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  
  
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
 
 
 
 if (!isset($_SESSION['login_e'])) {
  	$_SESSION['login_e']=0;
}
  
if (isset($_SESSION['form_values'])) {
  $smarty->assign('form_values', $_SESSION['form_values']);
  unset($_SESSION['form_values']);
}

if (isset($_SESSION['error_messages'])) {
  $smarty->assign('error_messages', $_SESSION['error_messages']);
  unset($_SESSION['error_messages']);
}

if (isset($_SESSION['success_messages'])) {
  $smarty->assign('success_messages', $_SESSION['success_messages']);
  unset($_SESSION['success_messages']);
}
 
?>