<?php
/* Smarty version 3.1.30, created on 2020-01-17 08:46:40
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/user_management.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e217470438441_18807299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e82237a318bdae83289d721fb56afe79be488b' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/user_management.tpl',
      1 => 1578657589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e217470438441_18807299 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/manage_users.php" method="post">

<table class='table_u'>
<tr>
<th></th><th>ID</th><th>User</th><th>Email</th><th>Balance</th><th>Admin</th>
</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
	<tr>
	<td><input type="radio" name="check" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['saldo'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['admin'];?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<br>
<input type="submit" name="edit" class="comfirm" value="Edit" >
<input type="submit" name="add" class="comfirm" value="ADD" >
<input type="submit" name="delete" class="comfirm" value="Delete" >
</form>

<br>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
