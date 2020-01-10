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
<form action="{$BASE_URL}/actions/users/add_user.php" method="post">
 <div class="t1"><b>Username:                           </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
<br>
<div class="t1"><b>Password:                 </b><input type="password" placeholder="Enter Password" name="password"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Email:                      </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:                 </b><input type="text" placeholder="Enter Balance" name="saldo"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Is Admin:                </b><input type="checkbox" value="1" name="admin"  style="width:20; height:20; margin-left:50px"> </div>
<br>

<input type="submit" name="back" value="Back" class="comfirm2" > <input type="submit" name="add_user"  value="Add User" class="comfirm2"> 
</form>
</div>



{include file='common/footer.tpl'}
