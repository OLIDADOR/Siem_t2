{include file='common/header_login.tpl'}

<div class = "row">
 
    {foreach $products as $product}
          
          <div class="column">
           <img class = 'img_product' src ={$BASE_URL}/images/game_cases/{$product.id_game}.jpg>  
          </div>

          <div class="column">
            <div class = "product_text">
              <b>Game title: </b><span class = "product_description">{$product.g_name}</span>
              <p><b> Launch date: </b><span class = "product_description">{$product.launch_date}</span></p>
              <p><b> Category: </b><span class = "product_description">{$product.category}</span></p>
              <p><b> Platform: </b><span class = "product_description">{$product.platform}</span></p>
              <p><b> Developer: </b><span class = "product_description">{$product.developer}</span></p>
              <p><b> Price: </b><span class = "product_description">{$product.price}€</span></p> 
                <p>
                <form action="{$BASE_URL}/actions/store/add_cart.php" method="post" id="add_to_cart" autocomplete="off">
                    <input type="submit" name="back" value="Back" class = 'back_button_containter'>
                    <input type='hidden' name='cart_product' value='{$product.id_game}'><button class = 'buy_button_containter' onclick='Submit_product()'>Buy</button>  
                </form>
                </p>
            </div>
          </div>

          <div class = "row">
           <div class = "product_text">
            <p><b> Game Description: </b> <span class = "product_description">{$product.g_description}</span></p>
            </div>
          </div>
    {/foreach}

</div>

{include file='common/footer_login.tpl'}