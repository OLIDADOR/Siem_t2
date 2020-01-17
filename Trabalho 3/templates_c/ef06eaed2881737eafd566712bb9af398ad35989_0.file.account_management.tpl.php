<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:44:36
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/account_management.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e218204e5eb87_53537075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef06eaed2881737eafd566712bb9af398ad35989' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/account_management.tpl',
      1 => 1579198696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e218204e5eb87_53537075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <?php if ((isset($_smarty_tpl->tpl_vars['success_messages']->value))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['success_messages']->value, 'success');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['success']->value) {
?>
        <div class="msg_success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
 <a class="msg_close" href="#"  style="text-decoration:none;">&#215;</a></div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['error_messages']->value))) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_messages']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <div class="msg_error"> <a class="msg_close" href="#" style="text-decoration:none;">&#215;</a><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  <?php }?>
<br>
<h1>My Account</h1>
<br>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/edit_own_account.php" method="post">
 <div class="t1"><b>ID:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['id'];?>
</span> </b></div>
<br>
 <div class="t1"><b>Username:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['username'];?>
</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
<br> 
 <div class="t1"><b>Email:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['email'];?>
</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Password:     </b><input type="password" placeholder="Enter Password" name="pass"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['saldo'];?>
</span>            </b></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['admin'];?>
</span>            </b> </div>
<br>
<input type="submit" value="Comfirm Changes" class="comfirm2"> 
</form>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
