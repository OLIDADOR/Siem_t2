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
<form action="{$BASE_URL}/actions/store/product.php" method="post" id="productform" autocomplete="off">
  <div class = "row">
  {$i = 0}
    {foreach $products as $product}
          
          {$i = $i+1}
          <div class="column">
              {if (($i < 4) and
                              (
                                ({$_SESSION['search_choise']}== 14 )
                              or
                                ({$_SESSION['search_choise']}== 15 )
                              or
                                ({$_SESSION['search_choise']}== 16 )
                              or
                                ({$_SESSION['search_choise']}== 17 )
                              or
                                (!isset({$_SESSION['search_choise']}) )      
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
                <button class = "buy_button_containter" type = "submit" id = "buy_button" value="buy_product"> Buy</button>
              </div>
          </div>
    {/foreach}
  </div>
   </form>
   


{include file='common/footer_login.tpl'}