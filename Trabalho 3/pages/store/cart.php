<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');
    include ($BASE_DIR . 'database/users.php');

  $user =  $_SESSION['user'];

if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}
  
  $cart_products = get_user_cart($user);
  if ($cart_products == NULL) {
      $empty_cart = 1;
      $smarty->assign('empty_carts', $empty_cart);
}
  $total_cart = get_cart_total($user);

 $user = getuser($_SESSION['id']);
 
 $smarty->assign('user', $_SESSION['user']);
 $smarty->assign('saldo', $_SESSION['saldo']);
 $smarty->assign('admin', $_SESSION['admin_l']);
  //Atribuição das variáveis no smarty
  $smarty->assign('products', $cart_products);
  $smarty->assign('total_carts', $total_cart);

//Chamada do template a ser mostrado ao utilizador
 $smarty->display('store/cart.tpl');

 ?>