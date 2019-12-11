<?php
/* Smarty version 3.1.30, created on 2019-12-04 15:12:06
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/user_management.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5de7ccc602ddf2_90193424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8e82237a318bdae83289d721fb56afe79be488b' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/user_management.tpl',
      1 => 1575472311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5de7ccc602ddf2_90193424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="sidebar_open"> <span onclick="toggleNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
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
</div>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
