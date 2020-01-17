<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/store.php');  

if (isset($_POST['back'])){
	header("Location:  $BASE_URL" . '/pages/store/store_display.php');
}

else if(isset($_POST['cart_product'])){

    $product_id = $_POST['cart_product'];
    $user_id =  $_SESSION['user'];

    $result = add_to_user_cart($product_id, $user_id);

    header("Location:  $BASE_URL" . '/pages/store/cart.php');
}


?>