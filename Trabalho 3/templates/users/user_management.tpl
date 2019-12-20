{include file='common/header_login.tpl'}
<br>
<form action="{$BASE_URL}/actions/users/manage_users.php" method="post">

<table class='table_u'>
<tr>
<th></th><th>ID</th><th>User</th><th>Email</th><th>Balance</th><th>Admin</th>
</tr>
	{foreach $users as $user}
	<tr>
	<td><input type="radio" name="check" value="{$user.id}"></td><td>{$user.id}</td><td>{$user.username}</td><td>{$user.email}</td><td>{$user.saldo}</td><td>{$user.admin}</td>
	</tr>
{/foreach}
</table>

<br>
<input type="submit" name="edit" class="comfirm" value="Edit" >
<input type="submit" name="add" class="comfirm" value="ADD" >
<input type="submit" name="delete" class="comfirm" value="Delete" >
</form>

<br>

{include file='common/footer.tpl'}
