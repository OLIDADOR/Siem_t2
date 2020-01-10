
<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}


 $user = getuser($_SESSION['id']);
 
 $smarty->assign('user', $user);
 $smarty->assign('admin', $_SESSION['admin_l']);
 $smarty->display('users/account_management.tpl');
 $_SESSION['ea_u']=0;
 $_SESSION['ea_e']=0;
?>

