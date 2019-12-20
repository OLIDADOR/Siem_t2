<?php
/* Smarty version 3.1.30, created on 2019-12-20 16:21:40
  from "/usr/users2/2015/up201503216/public_html/tf/templates/common/header_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dfcf514f2e1a9_91628017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae581458ae42ee967cae4a9277dbea31f0dfb302' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/common/header_login.tpl',
      1 => 1576857908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcf514f2e1a9_91628017 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/add_edit_delete.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/add_user.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/edit_account.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/edit_user.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/login_form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/product.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/product_m.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/purchase.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/search.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/sidebar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/store.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="grid">

	<div class="topnav">
		<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/logo.png">
		<logbox>Login:  <?php echo '<?php ';?>echo $_SESSION['user'];<?php echo '?>';?><br> Balance:  <?php echo '<?php ';?>echo $_SESSION['saldo'];<?php echo '?>';?> </logbox>
	</div>
	
<div id="mySidenav" class="sidenav">
  <div class="e"></div>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/product/store.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem1.png" height="20" width="20" hspace="5">Store</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/product/purchases.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem2.png" height="20" width="20" hspace="5"> My Purchases</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/account_management.php"> <div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem3.png" height="20" width="20" hspace="5">Account Management</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/downloads.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Download_Icon.png" height="20" width="20" hspace="5">Downloads </div></a>
<?php if ($_smarty_tpl->tpl_vars['admin']->value == "1") {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/product/product_management.php"><div class="c" id="a1"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem4.png" height="20" width="20" hspace="5">Product Management </div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/product/Sales_management.php"> <div class="c" id="a3"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem8.png" height="20" width="20" hspace="5"> Sales Management </div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/user_management.php"> <div class="c" id="a2"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem5.png" height="20" width="20" hspace="5"> User Management </div></a>
 <?php } else { ?>
 <?php }?>
  <div class="d"> The best games are in the Vault</div>
  <a href="contacts.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem6.png" height="20" width="20" hspace="5"> Contacts</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem7.png" height="20" width="20" hspace="5">Logout</div></a>
</div>

<div id="main"><br>
<?php }
}
