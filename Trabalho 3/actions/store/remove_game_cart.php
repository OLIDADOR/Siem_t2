<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/store.php');  

if(isset($_POST['remove_cart'])){

    $product_id = $_POST['remove_cart'];
    $user_id =  $_SESSION['user'];

    $result = remove_game_from_user_cart($product_id, $user_id);

    header("Location:  $BASE_URL" . '/pages/store/cart.php');
}

?>