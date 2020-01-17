<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/store.php');  

if(isset($_POST['checkout'])){

    $user =  $_SESSION['user'];

    $total_cart = get_cart_total($user);

    //$saldo = 1200;
    $saldo = $_SESSION['saldo'];

    if($saldo > ( $total_cart['total'])){
        $cart_products_temp = get_user_cart($user);
        
        foreach ($cart_products_temp as $product) {
            $result2 = update_sales($product['quantity'], $product['id_game'], $user);
        }

        $result = checkout($user);

        $_SESSION['saldo'] = $saldo - $total_cart['total'];
		changebalance($_SESSION['saldo'],$_SESSION['id']);
    }
    
    header("Location:  $BASE_URL" . '/pages/store/cart.php');
}


?>