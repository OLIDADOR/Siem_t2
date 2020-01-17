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
<h1>Downloads</h1>
<br>
<div class="row">
		<div class = "column">
			  <div class="row">
				   <a href="{$BASE_URL}/css/style.css" target="_blank" download><img src="{$BASE_URL}/images/download/css_download_icon.png" alt="" class="d_img" /></a>
				   </div>
			<div class="row">
				  <span class="t3">CSS</span>
			 </div>
		</div>
		<div class = "column">
			  <div class="row">
				   <a href="{$BASE_URL}/downloads/Mockup_Trabalho3.pptx" target="_blank" download><img src="{$BASE_URL}/images/download/ppt_download_icon.png" alt="" class="d_img" /></a>
				   </div>
				  <div class = "row">
				  <span class="t3" >Powerpoint</span>
				  </div> 
				  
			  </div>
		<div class = "column">
			  <div class="row">
				   <a href="{$BASE_URL}/downloads/zip_tp3.zip" target="_blank" download><img src="{$BASE_URL}/images/download/PHP_download_icon.png" alt="" class="d_img" /></a>
				   </div>
			<div class="row">
				 <span class="t3">PHP</span>
			 </div>
		</div>
			  
		</div>






<br>

{include file='common/footer.tpl'}
