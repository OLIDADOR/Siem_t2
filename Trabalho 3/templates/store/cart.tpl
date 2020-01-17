{include file='common/header_login.tpl'}

{if ({$empty_carts} != 1)}
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
    {foreach $products as $product}
    <tr>
        <td><img class ="images_cart" src ={$BASE_URL}/images/game_cases/{$product.id_game}.jpg></td>
        <td>{$product.g_name}</td>
        <td>{$product.category}</td>
        <td>{$product.quantity}</td>
        <td>{$product.price}€</td>
        <td>
            <form id='remove_game' method='post' action='{$BASE_URL}/actions/store/remove_game_cart.php'>
                <input type='hidden' name='remove_cart' value='{$product.id_game}'><img class = 'image_remove' src='{$BASE_URL}/images/remove.jpg' onclick='Delete_Game()' alt='Not Found'>
            </form>
        </td>
    </tr>
    {/foreach}
    <tr>
        <td colspan = 5>Total</td>
        <td>{$total_carts.total}€</td>
    </tr>
</table> 
<form action="{$BASE_URL}/actions/store/checkout.php" method="post" id="checkout" autocomplete="off">
    <input type='hidden' name='checkout' value=''><button class = 'checkout_button_container' onclick='CheckOut()'>Checkout</button>  
</form>

{else}
    <h1 style = "color: red;">Your Cart is Empty</h1>
{/if}

{include file='common/footer_login.tpl'}