<?php
/* Smarty version 3.1.30, created on 2020-01-17 00:33:48
  from "/usr/users2/2015/up201503216/public_html/tf/templates/common/header_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2100ec486475_86978245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae581458ae42ee967cae4a9277dbea31f0dfb302' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/common/header_login.tpl',
      1 => 1579214415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2100ec486475_86978245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>
	
	
	
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	
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
	
    <!-- Messages Close Button -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/msg_close.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<body>
<div class="grid">

	<div class="topnav">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/homepages/index_login.php"><img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/logo.png"></a>
		<section class="container" id="login_correct">
			Username: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 <br> Balance: <?php echo $_smarty_tpl->tpl_vars['saldo']->value;?>

		</section>
	</div>
	
<div id="mySidenav" class="sidenav">
  <div class="e"></div>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/store_display.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem1.png" height="20" width="20" hspace="5">Store</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/purchases.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem2.png" height="20" width="20" hspace="5"> My Purchases</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/users/account_management.php"> <div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem3.png" height="20" width="20" hspace="5">Account Management</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/info/downloads.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Download_Icon.png" height="20" width="20" hspace="5">Downloads </div></a>
<?php if ($_smarty_tpl->tpl_vars['admin']->value == "1") {?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/store/product_management.php"><div class="c" id="a1"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
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
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/pages/info/contacts.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem6.png" height="20" width="20" hspace="5"> Contacts</div></a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/logout.php"><div class="f"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/Imagem7.png" height="20" width="20" hspace="5">Logout</div></a>
</div>

<div id="main"><br>
<?php }
}
