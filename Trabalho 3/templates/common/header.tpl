<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>
	<script type="text/javascript" src="{$BASE_URL}/js/add_edit_delete.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/admin.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/login_form.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product_m.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/purchase.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/search.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/sidebar.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/store.js"></script>
</head>
<body>
<div class="grid">

	<div class="topnav">
		<img class="logo" src="{$BASE_URL}/images/logo.png">
        <button onclick="toogleLogin()" >Login/Register</button>
	</div>
	
<div id="mySidenav" class="sidenav">
  <div class="e"></div>
  <a href="{$BASE_URL}/pages/product/store.php"><div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Imagem1.png" height="20" width="20" hspace="5">Store</div></a>
  <a href="{$BASE_URL}/pages/product/purchases.php"><div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Imagem2.png" height="20" width="20" hspace="5"> My Purchases</div></a>
  <a href="{$BASE_URL}/pages/users/account_management.php"> <div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Imagem3.png" height="20" width="20" hspace="5">Account Management</div></a>
  <a href="{$BASE_URL}/pages/downloads.php"><div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Download_Icon.png" height="20" width="20" hspace="5">Downloads </div></a>
  <a href="{$BASE_URL}/pages/product/product_management.php"><div class="c" id="a1"><img src="{$BASE_URL}/images/sideBar_icons/Imagem4.png" height="20" width="20" hspace="5">Product Management </div></a>
  <a href="{$BASE_URL}/pages/product/Sales_management.php"> <div class="c" id="a3"><img src="{$BASE_URL}/images/sideBar_icons/Imagem8.png" height="20" width="20" hspace="5"> Sales Management </div></a>
  <a href="{$BASE_URL}/pages/users/user_management.php"> <div class="c" id="a2"><img src="{$BASE_URL}/images/sideBar_icons/Imagem5.png" height="20" width="20" hspace="5"> User Management </div></a>
  <div class="d"> The best games are in the Vault</div>
  <a href="contacts.php"><div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Imagem6.png" height="20" width="20" hspace="5"> Contacts</div></a>
  <a href="{$BASE_URL}/actions/users/logout.php"><div class="f"><img src="{$BASE_URL}/images/sideBar_icons/Imagem7.png" height="20" width="20" hspace="5">Logout</div></a>
</div>

<div id="main"><br>
