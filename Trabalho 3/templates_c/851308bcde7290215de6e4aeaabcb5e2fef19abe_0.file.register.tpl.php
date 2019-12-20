<?php
/* Smarty version 3.1.30, created on 2019-12-20 15:42:35
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dfcebeb8a4125_95967333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851308bcde7290215de6e4aeaabcb5e2fef19abe' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/register.tpl',
      1 => 1576075037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_no_login.tpl' => 1,
    'file:common/footer_no_login.tpl' => 1,
  ),
),false)) {
function content_5dfcebeb8a4125_95967333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_no_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section id="register">
  <h2>Register</h2> 

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
    <input type="text" name="realname" value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];
}?>" placeholder="Name">
    <input type="text" name="username" value="<?php if (isset($_smarty_tpl->tpl_vars['FORM_VALUES']->value)) {
echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];
}?>" placeholder="Username">
    <input type="password" name="password" value="" placeholder="Password">
    <label><input type="submit" value="Register"></label>
  </form>

</section>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer_no_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
