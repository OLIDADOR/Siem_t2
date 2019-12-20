<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>
	<script type="text/javascript" src="{$BASE_URL}/js/add_edit_delete.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/admin.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/login_form.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product_m.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/purchase.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/search.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/sidebar.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/store.js"></script>
</head>
<body>
<div class="grid">

	<div class="topnav">
		<img class="logo" src="{$BASE_URL}/images/logo.png">
        <section id="container">
		{if $login_e eq "1"}
		<label class="label_l" >Wrong Username or Password! </label>
		{else}
		{/if}
            <form action="{$BASE_URL}actions/users/login.php" method="post">
                <input type="text" placeholder="username" name="Username">
                <input type="password" placeholder="password" name="Password">
                <input type="submit" name="login" value="Login">
			</form>
			<form method="get" action="{$BASE_URL}pages/users/register.php">
                <input type="submit" name="register" value = "Register" id ="register_button">
            </form>
        </section>
	</div>
	
<div id="main"><br>