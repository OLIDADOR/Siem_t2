<?php
  include ('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');
  $products = get_3_most_bestsellers();
  $smarty->assign('login_e', $_SESSION['login_e']); 
  $smarty->assign('products', $products);
  $smarty->display('homepages/homepage_no_login.tpl');
  $_SESSION['login_e']=0;

?>
