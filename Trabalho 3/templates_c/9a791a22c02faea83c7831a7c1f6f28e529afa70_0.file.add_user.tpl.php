<?php
/* Smarty version 3.1.30, created on 2019-12-05 14:58:19
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/add_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5de91b0b330453_02225996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a791a22c02faea83c7831a7c1f6f28e529afa70' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/add_user.tpl',
      1 => 1575473187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5de91b0b330453_02225996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="sidebar_open"> <span onclick="toggleNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<div class="sidebar_open"> <span onclick="toggleNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<br>
<h1>Add User</h1>
<br>
<div class="split left" id="left">
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/users/add_user.php" method="post">
 <div class="t1"><b>Username:                           </b><input type="text" required placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
 <label class="label" id="am_u"  style="text-align: center; display:none; color:#fff;">Username already in  use!</label>
<br>
<div class="t1"><b>Password:                 </b><input type="password" required placeholder="Enter Password" name="password"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Email:                      </b><input type="text"  required placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
 <label class="label" id="am_email"  style="text-align: center; display:none; color:#fff;">Email already in  use!</label>
<br>
<div class="t1"><b>Balance:                 </b><input type="text" placeholder="Enter Balance" name="saldo"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Is Admin:                </b><input type="checkbox" value="1" name="admin"  style="width:20; height:20; margin-left:50px"> </div>
<br>
<input type="submit" value="Add User" class="comfirm"> 
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
