<?php
/* Smarty version 3.1.30, created on 2020-01-10 11:12:43
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e185c2bb93f73_01740282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851308bcde7290215de6e4aeaabcb5e2fef19abe' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/register.tpl',
      1 => 1578654734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_no_login.tpl' => 1,
    'file:common/footer_no_login.tpl' => 1,
  ),
),false)) {
function content_5e185c2bb93f73_01740282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_no_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
<section id="register">
  <h2>Register</h2> 
   

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
    <input type="text" name="realname" value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'])) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];
}?>" placeholder="Name">
    <input type="text" name="username" value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'])) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>" placeholder="Username">
	<input type="text" name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'])) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];
}?>" placeholder="Email">
    <input type="password" name="password" value="" placeholder="Password">
	<input type="password" name="c_password" value="" placeholder="Comfirm Password">
    <label><input type="submit" value="Register"></label>
  </form>

</section>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer_no_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
