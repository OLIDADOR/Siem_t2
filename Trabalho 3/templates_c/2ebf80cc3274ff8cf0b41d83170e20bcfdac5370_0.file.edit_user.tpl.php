<?php
/* Smarty version 3.1.30, created on 2020-01-17 08:46:47
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/edit_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2174774e7f67_99055788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebf80cc3274ff8cf0b41d83170e20bcfdac5370' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/edit_user.tpl',
      1 => 1579188299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e2174774e7f67_99055788 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>Edit User</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/edit_account.php" method="post">

 <div class="t1"><b>ID:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['id'];?>
</span> </b></div>
<br>
 <div class="t1"><b>Username:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['username'];?>
</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300px; height:30px;  margin-left:2em;" > </div>
<br>
 <div class="t1"><b>Email:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['email'];?>
</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300px; height:30px;  margin-left:2em;" ></div>
<br>
<div class="t1"><b>Balance:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['saldo'];?>
</span>            </b><input type="text" placeholder="Enter new Balance" name="saldo"  style="width:300px; height:30px;  margin-left:2em;" ></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2><?php echo $_smarty_tpl->tpl_vars['muser']->value['admin'];?>
</span>            </b><input type="checkbox" value="1" name="admin"  style="width:20px; height:20px;  margin-left:2em;"> </div>
<br>

<input type="submit" name="back" value="Back" class="comfirm2" > <input type="submit" name="edit_user"  value="Edit User" class="comfirm2" > 
</form>


<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
