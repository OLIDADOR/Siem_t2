<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:46:20
  from "/usr/users2/2015/up201503216/public_html/tf/templates/store/store_display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e21826c886aa0_55247353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8cdb82a6e895b18eace8647663b4feef709735' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/store/store_display.tpl',
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
function content_5e21826c886aa0_55247353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


 <div class="search_bar_cotainer">
  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/search.php" method="post" id="searchform" autocomplete="off">
    
      <input type="search" id="search" placeholder="Search..." name="search_text"/>
      
      <button type = "submit" id = "search_button" value="search_button"><img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/lupa.png"></button>
      
        <select name="category" class ="input_expander" form="searchform" >
          <option value ="category_all">Category: </option>
          <option value = "category_all">All</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>

        <select class = "input_expander" name="developer" >
				  <option value ="developer_all">Developer: </option>
				  <option value = "developer_all">All</option>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['developers']->value, 'developer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['developer']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['developer']->value['d_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['developer']->value['d_name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			  </select>

			  <select  class = "input_expander" name="order" >
				  <option value = "order_none">Order by: </option>
          <option value = "order_none">None</option>
          <option value = "order_price_low">Price Low</option>
          <option value = "order_price_high">Price High</option>
          <option value = "order_sold_best">Bestsellers</option>
		  	</select>
  </form>
 </div>



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
              <?php ob_start();
echo $_smarty_tpl->tpl_vars['search_choise_temps']->value;
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search_choise_temps']->value;
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search_choise_temps']->value;
$_prefixVariable3=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['search_choise_temps']->value;
$_prefixVariable4=ob_get_clean();
if ((($_smarty_tpl->tpl_vars['i']->value < 4) && (($_prefixVariable1 == 14) || ($_prefixVariable2 == 15) || ($_prefixVariable3 == 16) || ($_prefixVariable4 == 17)))) {?>
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
                <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/product.php" method="post" id="product_form" autocomplete="off">
                  <input type='hidden' name='buy_button' value='<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
'><button class = 'buy_button_containter' onclick='Submit_selected()'>More info</button>  
                </form>
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
