<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/product.php');  

//Guarda o id do jogo que o utilizador escolheu
$id_game = $_POST['buy_button'];
$_SESSION['id_game'] = $id_game;

header("Location:  $BASE_URL" . '/pages/store/product_display.php');

?>