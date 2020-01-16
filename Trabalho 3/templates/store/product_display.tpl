{include file='common/header_login.tpl'}

<div class = "row">
  {$i = 0}
    {foreach $product as $product}
          
          <div class="column">
           <img class = 'img_product' src =../../images/game_cases/"{$product.id_game}".jpg>"   
          </div>

    {/foreach}

  </div>

{include file='common/footer_login.tpl'}