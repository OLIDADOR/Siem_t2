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
<h1>My Account</h1>
<br>
<form action="{$BASE_URL}/actions/users/edit_own_account.php" method="post">
 <div class="t1"><b>ID:  <span class=t2>{$muser.id}</span> </b></div>
<br>
 <div class="t1"><b>Username:  <span class=t2>{$muser.username}</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
<br> 
 <div class="t1"><b>Email:     <span class=t2>{$muser.email}</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Password:     </b><input type="password" placeholder="Enter Password" name="pass"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:     <span class=t2>{$muser.saldo}</span>            </b></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2>{$muser.admin}</span>            </b> </div>
<br>
<input type="submit" value="Comfirm Changes" class="comfirm2"> 
</form>

{include file='common/footer.tpl'}