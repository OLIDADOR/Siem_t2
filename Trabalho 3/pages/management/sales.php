<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');


  $sales_q = get_sales();


  if ($sales_q == NULL) {
      $empty_sale = 1;
      $smarty->assign('empty_sales', $empty_sale);
}

  
  //Atribuição das variáveis no smarty
  $smarty->assign('sales', $sales_q);

//Chamada do template a ser mostrado ao utilizador
 $smarty->display('management/sales.tpl');

 ?>