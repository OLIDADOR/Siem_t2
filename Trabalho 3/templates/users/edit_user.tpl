{include file='common/header.tpl'}

<div class="sidebar_open"> <span onclick="toggleNav()"><img src="{$BASE_URL}/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<br>
<h1>Edit User</h1>

<form action="{$BASE_URL}/actions/users/edit_account.php" method="post">

 <div class="t1"><b>ID:  <span class=t2>{$user.id}</span> </div>
<br>
 <div class="t1"><b>Username:  <span class=t2>{$user.username}</span>          </b><input type="text" placeholder="Enter Username" name="login"  style="width:300px; height:30px;  margin-left:2em;" > </div>
 <label class="label" id="em_u"  style="text-align: center; display:none; color:#fff;">Username already in  use!</label>
<br>
 <div class="t1"><b>Email:     <span class=t2>{$user.email}</span>            </b><input type="text" placeholder="Enter Email" name="email"  style="width:300px; height:30px;  margin-left:2em;" ></div>
 <label class="label" id="em_email"  style="text-align: center; display:none; color:#fff;">Email already in  use!</label>
<br>
<div class="t1"><b>Balance:     <span class=t2>{$user.saldo}</span>            </b><input type="text" placeholder="Enter new Balance" name="saldo"  style="width:300px; height:30px;  margin-left:2em;" ></div>
<br>
<div class="t1"><b>Is Admin:    <span class=t2>{$user.admin}</span>            </b><input type="checkbox" value="1" name="admin"  style="width:20px; height:20px;  margin-left:2em;"> </div>
<br>

<input type="submit" value="Edit User" class="comfirm2" > 
</form>


{include file='common/footer.tpl'}
