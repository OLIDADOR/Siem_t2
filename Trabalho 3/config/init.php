<?php
  $BASE_DIR = dirname(__DIR__).'/';
  $BASE_URL = 'https://gnomo.fe.up.pt/~up201503216/tf/';
  
  session_start();
  if (isset($_SESSION['error_messages'])) {
	$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
	unset($_SESSION['error_messages']);
}

  
  /*
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  */

  //lidação a base de dados
  $conn = new PDO('pgsql:host=db.fe.up.pt;dbname=siem1911', 'siem1911', 'siem2019'); //mudar !!!
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("set schema 'Siem';");
  $stmt->execute();
  $stmt->fetchAll();
  
  //smarty
  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');
  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';
  $smarty->assign('BASE_URL', $BASE_URL);
?>