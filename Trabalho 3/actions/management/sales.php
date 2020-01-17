<?php

include_once('../../config/init.php');
include_once($BASE_DIR .'database/store.php');  

if(isset($_POST['confirm_sale'])){

        $selected_sale = $_POST['confirm_sale'];
        $result = confirm_one_sale($selected_sale);
    }
elseif(isset($_POST['confirm_all_sale'])){
    $all_sales = confirm_all_sales();
}
    
    header("Location:  $BASE_URL" . '/pages/management/sales.php');
?>