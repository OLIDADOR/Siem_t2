<?php
  include_once('../../config/init.php');
$smarty->assign('login_e', $_SESSION['login_e']);
  $smarty->display('users/register.tpl');
?>
