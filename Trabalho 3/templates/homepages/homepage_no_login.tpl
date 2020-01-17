{include file='common/header_no_login.tpl'}
 {if (isset($success_messages))}
      {foreach $success_messages as $success}
        <div class="msg_success">{$success} <a class="msg_close" href="#"  style="text-decoration:none;">&#215;</a></div>
      {/foreach}
    {/if}
    {if (isset($error_messages))}
      {foreach $error_messages as $error}
        <div class="msg_error"> <a class="msg_close" href="#" style="text-decoration:none;">&#215;</a>{$error}</div>
      {/foreach}
  {/if}
	<h1>Deals of the Vault</h1>
	<br>

  <div class = "row">
  {$i = 0}
    {foreach $products as $product}
          
          {$i = $i+1}
          <div class="column">
              {if ($i < 4)}
              <div class = "bestseller_container" id = "b{$i}">{$i}º Bestseller</div>
              {/if}
              {if $i > 3 }
              <div class = "empty_container"></div>
              {/if}
              <img src="{$BASE_URL}/images/game_cases/{$product.id_game}.jpg">
              <div class = "row2">
                <div class = "price_container">Price = {$product.price} €</div>
              </div>
          </div>
    {/foreach}
  </div>
{include file='common/footer_no_login.tpl'}