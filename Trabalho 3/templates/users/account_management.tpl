{include file='common/header_login.tpl'}
<br>
<h1>Edit Account</h1>
<br>
<form action="{$BASE_URL}/actions/edit_account_action.php" method="post">
 <div class="t1"><b>ID:  <span class=t2>{$user.id}</span> </b></div>
<br>
 <div class="t1"><b>Username:  <span class=t2>{$user.username}</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
 {if $userinuse eq "1"}
  <label class="label_u" id="am_u" >Username already in  use!</label>
 {else}
 {/if}
<br> 
 <div class="t1"><b>Email:     <span class=t2>{$user.email}</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
   {if $emailinuse eq "1"}
 <label class="label_u" id="am_email" >Email already in  use!</label>
 {else}
 {/if}
<br>
 <div class="t1"><b>Password:     </b><input type="password" placeholder="Enter Password" name="pass"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Balance:     <span class=t2>{$user.saldo}</span>            </b></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2>{$user.admin}</span>            </b> </div>
<br>
<input type="submit" value="Comfirm Changes" class="comfirm2"> 
</form>

{include file='common/footer.tpl'}