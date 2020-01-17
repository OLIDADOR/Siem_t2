<?php
	//encerra a sessão
    session_start();    
    session_destroy();
    header('location: ../../pages/homepages/index_no_login.php');
?>