<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');



if ($_SESSION['login_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
}
if ($_SESSION['admin_l']!=1){
	header("Location:  $BASE_URL" . '/pages/homepages/index_login.php');
}



  $sales_q = get_sales();


  if ($sales_q == NULL) {
      $empty_sale = 1;
      $smarty->assign('empty_sales', $empty_sale);
}

  
  //Atribuição das variáveis no smarty
  $smarty->assign('sales', $sales_q);
 $smarty->assign('user', $_SESSION['user']);
 $smarty->assign('saldo', $_SESSION['saldo']);
  $smarty->assign('admin', $_SESSION['admin_l']);
//Chamada do template a ser mostrado ao utilizador
 $smarty->display('management/sales.tpl');

 ?>