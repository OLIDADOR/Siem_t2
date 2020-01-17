<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:45:02
  from "/usr/users2/2015/up201503216/public_html/tf/templates/store/product_management.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e21821edb91e5_22049196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d36c77b72b21aff2a5fa0b52ee099c539600f9' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/store/product_management.tpl',
      1 => 1579220548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e21821edb91e5_22049196 (Smarty_Internal_Template $_smarty_tpl) {
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


<table class='table_u'>
<tr>
<th>ID</th><th>Name</th><th>Category</th><th>Number of Keys</th><th>Price</th><th>Launch Date</th>
</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
	<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['game']->value['id_game'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['game']->value['g_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['game']->value['category'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['game']->value['n_keys'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['game']->value['price'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['game']->value['launch_date'];?>
</td>
	</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<br>

<br>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
