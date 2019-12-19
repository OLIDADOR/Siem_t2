
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

 $users = getalluser();
 

 $smarty->assign('users', $users);
 $smarty->assign('userinuse', $_SESSION['am_u']);
 $smarty->assign('emailinuse', $_SESSION['am_e']);
 $smarty->display('users/add_user.tpl');
 $_SESSION['am_u']=0;
 $_SESSION['am_e']=0;
?>


