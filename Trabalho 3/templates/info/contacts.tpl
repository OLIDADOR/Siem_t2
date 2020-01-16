{include file='common/header_login.tpl'}
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
<br>
<h1>Contacts</h1>
<br>
<div class="row">
		<div class = "column">
			  <div class="row">
				   <img src="{$BASE_URL}/images/contacts/diogo.png" alt="" class="c_img" />
				   </div>
			<div class="row">
				  <span class="t4">Name: Diogo Matos </span>
			 </div>
			<div class="row">
				  <span class="t4" style="font-size:20;" > Email: up201503216@fe.up.pt </span>
			</div>
		</div>
		<div class = "column">
			  <div class="row">
				   <img src="{$BASE_URL}/images/contacts/marco_picture.PNG" alt="" class="c_img" />
				   </div>
				  <div class = "row">
				  <span class="t4">Name: Marco Silva </span>
				  </div> 
				   <div class = "row">
				  <span class="t4" style="font-size:20;" > Email: up201607763@fe.up.pt </span>
				  </div>
			  </div>
		</div>






<br>

{include file='common/footer.tpl'}
