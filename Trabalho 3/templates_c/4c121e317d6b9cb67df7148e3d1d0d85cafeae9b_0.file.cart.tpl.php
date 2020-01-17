<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:44:32
  from "/usr/users2/2015/up201503216/public_html/tf/templates/store/cart.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e218200830fd1_64795174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c121e317d6b9cb67df7148e3d1d0d85cafeae9b' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/store/cart.tpl',
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
function content_5e218200830fd1_64795174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['empty_carts']->value;
$_prefixVariable1=ob_get_clean();
if (($_prefixVariable1 != 1)) {?>
 <table class = "table_cart">
    <th colspan = 24><b>Your cart</b></th>
    <tr>
        <th><b>Game</b></th>
        <th><b>Name</b></th>
        <th><b>Category</b></th>
        <th><b>Quantity</b></th>
        <th><b>Price/unit</b></th>
        <th><b>Remove</b></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <tr>
        <td><img class ="images_cart" src =<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/game_cases/<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
.jpg></td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['g_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['category'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
€</td>
        <td>
            <form id='remove_game' method='post' action='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/remove_game_cart.php'>
                <input type='hidden' name='remove_cart' value='<?php echo $_smarty_tpl->tpl_vars['product']->value['id_game'];?>
'><img class = 'image_remove' src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/remove.jpg' onclick='Delete_Game()' alt='Not Found'>
            </form>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tr>
        <td colspan = 5>Total</td>
        <td><?php echo $_smarty_tpl->tpl_vars['total_carts']->value['total'];?>
€</td>
    </tr>
</table> 
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/store/checkout.php" method="post" id="checkout" autocomplete="off">
    <input type='hidden' name='checkout' value=''><button class = 'checkout_button_container' onclick='CheckOut()'>Checkout</button>  
</form>

<?php } else { ?>
    <h1 style = "color: red;">Your Cart is Empty</h1>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
