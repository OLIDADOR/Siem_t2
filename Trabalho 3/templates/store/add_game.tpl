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
<h1>Add User</h1>
<br>
<div class="split left" id="left">
<form action="{$BASE_URL}/actions/store/add_game.php" method="post">
 <div class="t1"><b>Game Name:                           </b><input type="text" placeholder="Enter Username" name="g_name"  style="width:300; height:30; margin-left:50px" > </div>
<br>
<div class="t1"><b>Category:                 </b><input type="text" placeholder="Enter Category" name="cat"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Number of Keys:                      </b><input type="text" placeholder="Number of Keys" name="keys"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Price:                 </b><input type="text" placeholder="Enter Price" name="price"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Platform:                 </b><input type="text" placeholder="Enter Platform" name="plat"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Launch Date:                 </b><input type="text" placeholder="Enter Launch Date" name="ld"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Developer Name:                 </b><input type="text" placeholder="Enter Developer Name" name="dn"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Image:                 </b><input type="text" placeholder="Enter Developer Name" name="dn"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Description:                 </b><input type="text" placeholder="Enter Developer Name" name="dn"  style="width:300; height:30; margin-left:50px" ></div>
<br>


<input type="submit" name="back" value="Back" class="comfirm2" > <input type="submit" name="add_game"  value="Add Game" class="comfirm2"> 
</form>
</div>



{include file='common/footer.tpl'}
