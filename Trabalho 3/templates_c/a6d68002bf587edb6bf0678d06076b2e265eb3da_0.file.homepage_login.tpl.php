<?php
/* Smarty version 3.1.30, created on 2020-01-17 08:43:43
  from "/usr/users2/2015/up201503216/public_html/tf/templates/homepages/homepage_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2173bfa83069_64414772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6d68002bf587edb6bf0678d06076b2e265eb3da' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/homepages/homepage_login.tpl',
      1 => 1579221352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer_login.tpl' => 1,
  ),
),false)) {
function content_5e2173bfa83069_64414772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<br>
	<h1>Deals of the Vault</h1>
	<br>

<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/product.php" method="post" id="productform" autocomplete="off">
  <div class = "row">
  <?php $_smarty_tpl->_assignInScope('i', 0);
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
          
          <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
          <div class="column">
              <?php if (($_smarty_tpl->tpl_vars['i']->value < 4)) {?>
              <div class = "bestseller_container" id = "b<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
º Bestseller</div>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['i']->value > 3) {?>
              <div class = "empty_container"></div>
              <?php }?>
              <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/game_cases/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
.jpg">
              <div class = "row2">
                <div class = "price_container">Price = <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 €</div>
                <button class = "buy_button_containter" type = "submit" id = "buy_button" value="buy_product"> Buy</button>
              </div>
          </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
   </form>
	
	
<?php $_smarty_tpl->_subTemplateRender("file:common/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
