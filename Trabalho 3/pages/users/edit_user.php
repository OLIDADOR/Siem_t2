
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

 $user = getuser($_SESSION['m_id']);
 
 $smarty->assign('user', $user);
 $smarty->display('users/edit_user.tpl');
?>


