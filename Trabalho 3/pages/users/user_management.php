
 <?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

 $users = getalluser();

 $smarty->assign('users', $users);
 $smarty->display('users/user_management.tpl');
?>


