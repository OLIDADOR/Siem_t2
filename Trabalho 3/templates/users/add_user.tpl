{include file='common/header.tpl'}

<div class="sidebar_open"> <span onclick="toggleNav()"><img src="{$BASE_URL}/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<div class="sidebar_open"> <span onclick="toggleNav()"><img src="{$BASE_URL}/images/sideBar_icons/open_close_bar.png" height="40" width="40" align="left"></span></div>
<br>
<h1>Add User</h1>
<br>
<div class="split left" id="left">
<form action="{$BASE_URL}/actions/users/add_user.php" method="post">
 <div class="t1"><b>Username:                           </b><input type="text" required placeholder="Enter Username" name="login"  style="width:300; height:30; margin-left:50px" > </div>
 <label class="label" id="am_u"  style="text-align: center; display:none; color:#fff;">Username already in  use!</label>
<br>
<div class="t1"><b>Password:                 </b><input type="password" required placeholder="Enter Password" name="password"  style="width:300; height:30; margin-left:50px" ></div>
<br>
 <div class="t1"><b>Email:                      </b><input type="text"  required placeholder="Enter Email" name="email"  style="width:300; height:30; margin-left:50px" ></div>
 <label class="label" id="am_email"  style="text-align: center; display:none; color:#fff;">Email already in  use!</label>
<br>
<div class="t1"><b>Balance:                 </b><input type="text" placeholder="Enter Balance" name="saldo"  style="width:300; height:30; margin-left:50px" ></div>
<br>
<div class="t1"><b>Is Admin:                </b><input type="checkbox" value="1" name="admin"  style="width:20; height:20; margin-left:50px"> </div>
<br>
<input type="submit" value="Add User" class="comfirm"> 
</form>
</div>

{include file='common/footer.tpl'}
