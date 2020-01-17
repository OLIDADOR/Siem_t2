{include file='common/header_login.tpl'}

 <div class="search_bar_cotainer">
  <form action="{$BASE_URL}/actions/store/search.php" method="post" id="searchform" autocomplete="off">
    
      <input type="search" id="search" placeholder="Search..." name="search_text"/>
      
      <button type = "submit" id = "search_button" value="search_button"><img src="{$BASE_URL}/images/lupa.png"></button>
      
        <select name="category" class ="input_expander" form="searchform" >
          <option value ="category_all">Category: </option>
          <option value = "category_all">All</option>
          {foreach $categories as $category}
            <option value="{$category.category}">{$category.category}</option>
          {/foreach}
        </select>

        <select class = "input_expander" name="developer" >
				  <option value ="developer_all">Developer: </option>
				  <option value = "developer_all">All</option>
          {foreach $developers as $developer}
            <option value="{$developer.d_name}">{$developer.d_name}</option>
          {/foreach}
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

{*Basicamente um flex container de row que dentro tem colunas sendo que é separado consuante a dimensao do ecra *}

  <div class = "row">
  {$i = 0}
    {foreach $products as $product}
          
          {$i = $i+1}
          <div class="column">
              {if (($i < 4) and
                              (
                                ({$search_choise_temps}== 14 )
                              or
                                ({$search_choise_temps}== 15 )
                              or
                                ({$search_choise_temps}== 16 )
                              or
                                ({$search_choise_temps}== 17 )    
                              ) 
                              )
                              }
              <div class = "bestseller_container" id = "b{$i}">{$i}º Bestseller</div>
              {/if}
              {if $i > 3 }
              <div class = "empty_container"></div>
              {/if}
              <img src="{$BASE_URL}/images/game_cases/{$product.id_game}.jpg">
              <div class = "row2">
                <div class = "price_container">Price = {$product.price} €</div>
                <form action="{$BASE_URL}/actions/store/product.php" method="post" id="product_form" autocomplete="off">
                  <input type='hidden' name='buy_button' value='{$product.id_game}'><button class = 'buy_button_containter' onclick='Submit_selected()'>More info</button>  
                </form>
              </div>
          </div>
    {/foreach}
  </div>

   


{include file='common/footer_login.tpl'}