<?php
/* Smarty version 3.1.30, created on 2020-01-17 09:01:54
  from "/usr/users2/2015/up201503216/public_html/tf/templates/management/sales.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e2178020c0f90_38619426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5edf4e428c8c421c9b87f60cfb93eafb2972c0' => 
    array (
      0 => '/usr/users2/2015/up201503216/public_html/tf/templates/management/sales.tpl',
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
function content_5e2178020c0f90_38619426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:common/header_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php ob_start();
echo $_smarty_tpl->tpl_vars['empty_sales']->value;
$_prefixVariable1=ob_get_clean();
if (($_prefixVariable1 != 1)) {?>
 <table class = "table_cart">
    <th colspan = 24><b>Your sales</b></th>
    <tr>
        <th><b>Sale_id</b></th>
        <th><b>Copys Sold</b></th>
        <th><b>Game</b></th>
        <th><b>Buyer</b></th>
        <th><b>Confirm</b></th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sales']->value, 'sale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sale']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['sale_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['sold_copys'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['g_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['sale']->value['username'];?>
</td>
        <td>
            <form id='confirm_form_sale' method='post' action='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/management/sales.php'>
                <input type='hidden' name='confirm_sale' value='<?php echo $_smarty_tpl->tpl_vars['sale']->value['sale_id'];?>
'><img class = 'image_remove' src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/confirm.png' onclick='ConfirmSale()' alt='Not Found'>
            </form>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table> 
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/actions/management/sales.php" method="post" id="confirm_all_form" autocomplete="off">
    <input type='hidden' name='confirm_all_sale' value=''><button class = 'checkout_button_container' style= "background-color: green;" onclick='ConfirmAllSales()'>Confirm All</button>  
</form>

<?php } else { ?>
    <h1 style = "color: red;">No Sales left to be confirmed</h1>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:common/footer_login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
