<html>
<head>
	<link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/style.css">
	<script src="{$BASE_URL}/js/sidebar.js"></script>
	<script src="{$BASE_URL}/js/login_form.js"></script>
	<title>Games Vault - SIEM Trabalho 2</title>
	
<div class="grid">
	<div class="topnav">
		<img class="logo" src="{$BASE_URL}/images/logo.png">
        <button onclick="toogleLogin()" >Login/Register</button>
        
	</div>
	<div class="login-wrap" id="loginw">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
			<form method="POST" action="{$BASE_URL}/actions/login.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  name="login">
					<label class="label"  style="text-align: center; display:none;">Login Failed</label>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" class="input"  name="password">
					<label class="label" id="ul" style="text-align: center; display:none;">Login Failed</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				</form>
			</div>
			<div class="sign-up-htm">
				<form method="POST" action="{$BASE_URL}/actions/regsiter.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  name="login">
					<label class="label" style="text-align: center; display:none;" id="u">Error: user already in use</label>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input type="password" class="input"  name="password">
					<label class="label" style="text-align: center; display:none;" id="p1">Error: Password don't match </label>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input type="password" class="input"  name="passwordc">
					<label class="label" style="text-align: center; display:none;" id="p2">Error: Password don't match </label>
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input type="text" class="input"  name="email">
					<label class="label" style="text-align: center; display:none;" id="e">Error: Email already in use</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

</head>

<body>
<div id="main">
<br>
<h1>Deals of the Vault</h1>
<br>
</div>
	<div id="footer">
	  Site criado por: Marco Silva e Diogo Matos - <b>Credenciais:</b> 'user:pass' client:client admin:admin - Testado no Mozilla Firefox com a resolução 1366x768
	</div> 
</div>
</body>