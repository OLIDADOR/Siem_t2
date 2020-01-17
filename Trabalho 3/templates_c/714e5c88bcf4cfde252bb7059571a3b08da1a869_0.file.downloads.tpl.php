<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:44:58
  from "/usr/users2/2015/up201503216/public_html/tf/templates/info/downloads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e21821a528425_03592917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '714e5c88bcf4cfde252bb7059571a3b08da1a869' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/info/downloads.tpl',
      1 => 1579197914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer.tpl' => 1,
  ),
),false)) {
function content_5e21821a528425_03592917 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>Downloads</h1>
<br>
<div class="row">
		<div class = "column">
			  <div class="row">
				   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css" target="_blank" download><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/download/css_download_icon.png" alt="" class="d_img" /></a>
				   </div>
			<div class="row">
				  <span class="t3">CSS</span>
			 </div>
		</div>
		<div class = "column">
			  <div class="row">
				   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/downloads/Mockup_Trabalho2.pptx" target="_blank" download><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/download/ppt_download_icon.png" alt="" class="d_img" /></a>
				   </div>
				  <div class = "row">
				  <span class="t3" >Powerpoint</span>
				  </div> 
				  
			  </div>
		<div class = "column">
			  <div class="row">
				   <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/downloads/zip_tp2.zip" target="_blank" download><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/download/PHP_download_icon.png" alt="" class="d_img" /></a>
				   </div>
			<div class="row">
				 <span class="t3">PHP</span>
			 </div>
		</div>
			  
		</div>






<br>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
