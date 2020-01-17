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


<table class='table_u'>
<tr>
<th>ID</th><th>Name</th><th>Category</th><th>Number of Keys</th><th>Price</th><th>Launch Date</th>
</tr>
	{foreach $games as $game}
	<tr>
	<td>{$game.id_game}</td><td>{$game.g_name}</td><td>{$game.category}</td><td>{$game.n_keys}</td><td>{$game.price}</td><td>{$game.launch_date}</td>
	</tr>
{/foreach}
</table>

<br>

<br>

{include file='common/footer.tpl'}
