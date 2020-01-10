<?php
/* Smarty version 3.1.30, created on 2020-01-10 12:10:38
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/add_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e1869be459f18_24195824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a791a22c02faea83c7831a7c1f6f28e529afa70' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/add_user.tpl',
      1 => 1578657776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e1869be459f18_24195824 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>Add User</h1>
<br>
<div class="split left" id="left">
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/add_user.php" method="post">
 <div class="t1"><b>Username:                           </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
<br>
<div class="t1"><b>Password:                 </b><input type="password" placeholder="Enter Password" name="password"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Email:                      </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:                 </b><input type="text" placeholder="Enter Balance" name="saldo"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Is Admin:                </b><input type="checkbox" value="1" name="admin"  style="width:20; height:20; margin-left:50px"> </div>
<br>

<input type="submit" name="back" value="Back" class="comfirm2" > <input type="submit" name="add_user"  value="Add User" class="comfirm2"> 
</form>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
