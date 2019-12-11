<?php
/* Smarty version 3.1.30, created on 2019-12-05 17:42:29
  from "/usr/users2/2015/up201503216/public_html/tf/templates/users/account_management.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5de94185f00433_90735787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef06eaed2881737eafd566712bb9af398ad35989' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/users/account_management.tpl',
      1 => 1575567746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header.tpl' => 1,
  ),
),false)) {
function content_5de94185f00433_90735787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="sidebar_open"> <span onclick="toggleNav()"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<br>
<h1>Edit Account</h1>
<br>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/edit_account_action.php" method="post">
 <div class="t1"><b>ID:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</span> </div>
<br>
 <div class="t1"><b>Username:  <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
 <label class="label" id="ea_u"  style="text-align: center; display:none; color:#fff;">Username already in  use!</label>
<br> 
 <div class="t1"><b>Email:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
 <label class="label" id="ea_email"  style="text-align: center; display:none; color:#fff;">Email already in  use!</label>
<br>
 <div class="t1"><b>Password:     </b><input type="password" placeholder="Enter Password" name="pass"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:     <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['saldo'];?>
</span>            </b></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2><?php echo $_smarty_tpl->tpl_vars['user']->value['admin'];?>
</span>            </b> </div>
<br>
<input type="submit" value="Comfirm Changes" class="comfirm2"> 
</form>
</div><?php }
}
