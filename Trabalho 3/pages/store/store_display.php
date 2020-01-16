<?php
  include_once('../../config/init.php');
  include ($BASE_DIR . 'database/store.php');
//if ($_SESSION['login_l']!=1){
//	header("Location:  $BASE_URL" . '/pages/homepages/index_no_login.php');
//}

 //$user = getuser($_SESSION['id']);

 //Se a variavel de Sessão estiver definida mostra a ultima busca
 //Senao mostra os 3 best sellers
 if (isset($_SESSION['search_choise'])){
  $products = get_searched_product(); 
 }
 else {
  $products = get_3_most_bestsellers();
 }

 //Chamada das funções para ir buscar dados à base de dados dos jogos mais vendidos, categorias e dos developers
 
 $categories = get_all_categories();
 $developers = get_all_developers();

 //Atribuição das variáveis no smarty
 $smarty->assign('products', $products);
 $smarty->assign('categories', $categories);
 $smarty->assign('developers', $developers);

 //Chamada do template a ser mostrado ao utilizador
 $smarty->display('store/store_display.tpl');

?>