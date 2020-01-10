<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>
	
	    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
   	<script type="text/javascript" src="{$BASE_URL}/js/add_edit_delete.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/admin.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/login_form.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/product_m.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/purchase.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/search.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/sidebar.js"></script>
	<script type="text/javascript" src="{$BASE_URL}/js/store.js"></script>   
	 <!-- Messages Close Button -->
    <script src="{$BASE_URL}/js/msg_close.js" type="text/javascript"></script>
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
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <input type="submit" name="login" value="Login">
			</form>
			<form method="get" action="{$BASE_URL}pages/users/register.php">
                <input type="submit" name="register" value = "Register" id ="register_button">
            </form>
        </section>
	</div>
	
<div id="main"><br>