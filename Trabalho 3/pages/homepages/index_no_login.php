<?php
  include ('../../config/init.php');
  $smarty->assign('login_e', $_SESSION['login_e']);
  $smarty->display('homepages/homepage_no_login.tpl');
  $_SESSION['login_e']=0;
?>
