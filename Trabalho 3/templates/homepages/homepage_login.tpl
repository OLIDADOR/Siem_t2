{include file='common/header_login.tpl'}
	<br>
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

	
	
{include file='common/footer_login.tpl'}