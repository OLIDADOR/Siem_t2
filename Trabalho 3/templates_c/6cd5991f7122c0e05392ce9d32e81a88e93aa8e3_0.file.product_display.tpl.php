<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:46:38
  from "/usr/users2/2015/up201503216/public_html/tf/templates/store/product_display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e21827e2dfb14_12875759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd5991f7122c0e05392ce9d32e81a88e93aa8e3' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/store/product_display.tpl',
      1 => 1579249830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:common/header_login.tpl' => 1,
    'file:common/footer_login.tpl' => 1,
  ),
),false)) {
function content_5e21827e2dfb14_12875759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class = "row">
 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
          
          <div class="column">
           <img class = 'img_product' src =<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/game_cases/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
.jpg>  
          </div>

          <div class="column">
            <div class = "product_text">
              <b>Game title: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['g_name'];?>
</span>
              <p><b> Launch date: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['launch_date'];?>
</span></p>
              <p><b> Category: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['category'];?>
</span></p>
              <p><b> Platform: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['platform'];?>
</span></p>
              <p><b> Developer: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['developer'];?>
</span></p>
              <p><b> Price: </b><span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</span></p> 
                <p>
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/add_cart.php" method="post" id="add_to_cart" autocomplete="off">
                    <input type="submit" name="back" value="Back" class = 'back_button_containter'>
                    <input type='hidden' name='cart_product' value='<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
'><button class = 'buy_button_containter' onclick='Submit_product()'>Buy</button>  
                </form>
                </p>
            </div>
          </div>

          <div class = "row">
           <div class = "product_text">
            <p><b> Game Description: </b> <span class = "product_description"><?php echo $_smarty_tpl->tpl_vars['product']->value['g_description'];?>
</span></p>
            </div>
          </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
