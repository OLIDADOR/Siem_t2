<?php
  include ('../../config/init.php');
  
  if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}
  
  $smarty->assign('admin', $_SESSION['admin_l']);
  $smarty->assign('user', $_SESSION['user']);
  $smarty->assign('saldo', $_SESSION['saldo']);
  $smarty->display('homepages/homepage.tpl');
?>
