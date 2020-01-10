{include file='common/header_no_login.tpl'}
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
<section id="register">
  <h2>Register</h2> 
   

  <form action="{$BASE_URL}actions/users/register.php" method="post">
    <input type="text" name="realname" value="{if isset($FORM_VALUES.realname)}{$FORM_VALUES.realname}{/if}" placeholder="Name">
    <input type="text" name="username" value="{if isset($FORM_VALUES.username)}{$FORM_VALUES.username}{/if}" placeholder="Username">
	<input type="text" name="email" value="{if isset($FORM_VALUES.email)}{$FORM_VALUES.email}{/if}" placeholder="Email">
    <input type="password" name="password" value="" placeholder="Password">
	<input type="password" name="c_password" value="" placeholder="Comfirm Password">
    <label><input type="submit" value="Register"></label>
  </form>

</section>

{include file='common/footer_no_login.tpl'}