<?php
/* Smarty version 3.1.30, created on 2019-12-05 14:50:29
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/edit_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5de91935ed42b7_05240340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebf80cc3274ff8cf0b41d83170e20bcfdac5370' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/edit_user.tpl',
      1 => 1575557426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5de91935ed42b7_05240340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="sidebar_open"> <span onclick="toggleNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<br>
<h1>Edit User</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/edit_account.php" method="post">

 <div class="t1"><b>ID:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</span> </div>
<br>
 <div class="t1"><b>Username:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300px; height:30px;  margin-left:2em;" > </div>
 <label class="label" id="em_u"  style="text-align: center; display:none; color:#fff;">Username already in  use!</label>
<br>
 <div class="t1"><b>Email:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300px; height:30px;  margin-left:2em;" ></div>
 <label class="label" id="em_email"  style="text-align: center; display:none; color:#fff;">Email already in  use!</label>
<br>
<div class="t1"><b>Balance:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['saldo'];?>
</span>            </b><input type="text" placeholder="Enter new Balance" name="saldo"  style="width:300px; height:30px;  margin-left:2em;" ></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['admin'];?>
</span>            </b><input type="checkbox" value="1" name="admin"  style="width:20px; height:20px;  margin-left:2em;"> </div>
<br>

<input type="submit" value="Edit User" class="comfirm2" > 
</form>


<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
