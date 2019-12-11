
<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/users.php');

 $user = getuser($_SESSION['id']);
 
 $smarty->assign('user', $user);
 $smarty->display('users/account_management.tpl');
?>

