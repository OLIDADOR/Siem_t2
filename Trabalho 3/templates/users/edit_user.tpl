{include file='common/header_login.tpl'}

<br>
<h1>Edit User</h1>

<form action="{$BASE_URL}/actions/users/edit_account.php" method="post">

 <div class="t1"><b>ID:  <span class=t2>{$user.id}</span> </b></div>
<br>
 <div class="t1"><b>Username:  <span class=t2>{$user.username}</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300px; height:30px;  margin-left:2em;" > </div>
  {if $userinuse eq "1"}
  <label class="label_u" id="am_u" >Username already in  use!</label>
 {else}
 {/if}
<br>
 <div class="t1"><b>Email:     <span class=t2>{$user.email}</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300px; height:30px;  margin-left:2em;" ></div>
  {if $emailinuse eq "1"}
 <label class="label_u" id="am_email" >Email already in  use!</label>
 {else}
 {/if}
<br>
<div class="t1"><b>Balance:     <span class=t2>{$user.saldo}</span>            </b><input type="text" placeholder="Enter new Balance" name="saldo"  style="width:300px; height:30px;  margin-left:2em;" ></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2>{$user.admin}</span>            </b><input type="checkbox" value="1" name="admin"  style="width:20px; height:20px;  margin-left:2em;"> </div>
<br>

<input type="submit" name="back" value="Back" class="comfirm2" > <input type="submit" name="edit_user"  value="Edit User" class="comfirm2" > 
</form>


{include file='common/footer.tpl'}
