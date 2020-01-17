<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');


  if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}

$id_game = $_SESSION['id_game'];
$product = get_product_information($id_game);
print_r($product);

  $smarty->assign('admin', $_SESSION['admin_l']);
  $smarty->assign('user', $_SESSION['user']);
  $smarty->assign('saldo', $_SESSION['saldo']);

//Atribuição das variáveis no smarty
$smarty->assign('products', $product);

//Chamada do template a ser mostrado ao utilizador
 $smarty->display('store/product_display.tpl');

 ?>