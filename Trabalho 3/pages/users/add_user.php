
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}


 $users = getalluser();
 

 $smarty->assign('users', $users);
 $smarty->assign('admin', $_SESSION['admin_l']);
 $smarty->display('users/add_user.tpl');
 $_SESSION['am_u']=0;
 $_SESSION['am_e']=0;
?>


