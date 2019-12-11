<?php
/* Smarty version 3.1.30, created on 2019-12-03 15:21:59
  from "/usr/users2/2015/up201503216/public_html/tf/templates/homepages/homepage_nologin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5de66f87b1ddf2_21987362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9481e192b4d2c1428a60d9fe2a52615e8cd14d' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/homepages/homepage_nologin.tpl',
      1 => 1575382867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de66f87b1ddf2_21987362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/sidebar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/login_form.js"><?php echo '</script'; ?>
>
	<title>Games Vault - SIEM Trabalho 2</title>

	<div class="topnav">
		<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/logo.png">
        <button onclick="toogleLogin()" >Login/Register</button>
        
	</div>
	<div class="login-wrap" id="loginw">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/login.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  name="login">
					<label class="label"  style="text-align: center; display:none;">Login Failed</label>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" class="input"  name="password">
					<label class="label" id="ul" style="text-align: center; display:none;">Login Failed</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/regsiter.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  name="login">
					<label class="label" style="text-align: center; display:none;" id="u">Error: user already in use</label>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" class="input"  name="password">
					<label class="label" style="text-align: center; display:none;" id="p1">Error: Password don't match </label>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input type="password" class="input"  name="passwordc">
					<label class="label" style="text-align: center; display:none;" id="p2">Error: Password don't match </label>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input type="text" class="input"  name="email">
					<label class="label" style="text-align: center; display:none;" id="e">Error: Email already in use</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

</head>

<body>
<div id="main">
<br>
<h1>Deals of the Vault</h1>
<br>
</div>
</body><?php }
}
