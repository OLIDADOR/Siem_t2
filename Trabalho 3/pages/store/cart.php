<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');

  $user = "admin";

  
  $cart_products = get_user_cart($user);
  if ($cart_products == NULL) {
      $empty_cart = 1;
      $smarty->assign('empty_carts', $empty_cart);
}
  $total_cart = get_cart_total($user);


  //Atribuição das variáveis no smarty
  $smarty->assign('products', $cart_products);
  $smarty->assign('total_carts', $total_cart);

//Chamada do template a ser mostrado ao utilizador
 $smarty->display('store/cart.tpl');

 ?>