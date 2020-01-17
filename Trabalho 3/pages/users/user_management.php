
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}
if ($_SESSION['admin_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_login.php');
}


 $users = getalluser();
 $smarty->assign('user', $_SESSION['user']);
 $smarty->assign('saldo', $_SESSION['saldo']);
 $smarty->assign('users', $users);
 $smarty->assign('admin', $_SESSION['admin_l']);
 $smarty->display('users/user_management.tpl');
?>


