<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');

$id_game = $_SESSION['id_game'];
$product = get_product_information($id_game);

//Atribuição das variáveis no smarty
$smarty->assign('product', $product);

//Chamada do template a ser mostrado ao utilizador
 $smarty->display('store/product_display.tpl');

 ?>