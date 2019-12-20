<?php
/* Smarty version 3.1.30, created on 2019-12-20 16:09:30
  from "/usr/users2/2015/up201503216/public_html/tf/templates/common/header_no_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dfcf23aa63eb9_40659853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89315e8a5a4a78a21452b5beff4beab8cffd7e56' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/common/header_no_login.tpl',
      1 => 1576857798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dfcf23aa63eb9_40659853 (Smarty_Internal_Template $_smarty_tpl) {
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
/js/admin.js"><?php echo '</script'; ?>
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
        <section id="container">
		<?php if ($_smarty_tpl->tpl_vars['login_e']->value == "1") {?>
		<label class="label_l" >Wrong Username or Password! </label>
		<?php } else { ?>
		<?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="Username">
                <input type="password" placeholder="password" name="Password">
                <input type="submit" name="login" value="Login">
			</form>
			<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">
                <input type="submit" name="register" value = "Register" id ="register_button">
            </form>
        </section>
	</div>
	
<div id="main"><br><?php }
}
