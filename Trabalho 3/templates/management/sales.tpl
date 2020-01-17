{include file='common/header_login.tpl'}

{if ({$empty_sales} != 1)}
 <table class = "table_cart">
    <th colspan = 24><b>Your sales</b></th>
    <tr>
        <th><b>Sale_id</b></th>
        <th><b>Copys Sold</b></th>
        <th><b>Game</b></th>
        <th><b>Buyer</b></th>
        <th><b>Confirm</b></th>
    </tr>
    {foreach $sales as $sale}
    <tr>
        <td>{$sale.sale_id}</td>
        <td>{$sale.sold_copys}</td>
        <td>{$sale.g_name}</td>
        <td>{$sale.username}</td>
        <td>
            <form id='confirm_form_sale' method='post' action='{$BASE_URL}/actions/management/sales.php'>
                <input type='hidden' name='confirm_sale' value='{$sale.sale_id}'><img class = 'image_remove' src='{$BASE_URL}/images/confirm.png' onclick='ConfirmSale()' alt='Not Found'>
            </form>
        </td>
    </tr>
    {/foreach}
</table> 
<form action="{$BASE_URL}/actions/management/sales.php" method="post" id="confirm_all_form" autocomplete="off">
    <input type='hidden' name='confirm_all_sale' value=''><button class = 'checkout_button_container' style= "background-color: green;" onclick='ConfirmAllSales()'>Confirm All</button>  
</form>

{else}
    <h1 style = "color: red;">No Sales left to be confirmed</h1>
{/if}

{include file='common/footer_login.tpl'}