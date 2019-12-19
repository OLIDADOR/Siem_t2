
<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

 $user = getuser($_SESSION['id']);
 
 $smarty->assign('user', $user);
 $smarty->assign('userinuse', $_SESSION['ea_u']);
 $smarty->assign('emailinuse', $_SESSION['ea_e']);
 $smarty->display('users/account_management.tpl');
 $_SESSION['ea_u']=0;
 $_SESSION['ea_e']=0;
?>

