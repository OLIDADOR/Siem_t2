<?php
  include ('../../config/init.php');
    include ($BASE_DIR . 'database/store.php');
  
  if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}
  $products = get_3_most_bestsellers();
  $smarty->assign('products', $products);
  $smarty->assign('admin', $_SESSION['admin_l']);
  $smarty->assign('user', $_SESSION['user']);
  $smarty->assign('saldo', $_SESSION['saldo']);
  $smarty->display('homepages/homepage_login.tpl');
?>
