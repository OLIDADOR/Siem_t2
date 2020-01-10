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
