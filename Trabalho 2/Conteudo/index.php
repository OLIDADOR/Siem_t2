
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Games Vault - SIEM Trabalho 2</title>


	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" ><img src="t1.png" height="20" width="20" align="right"></a>
	  <a href="#">Home</a>
	  <a href="#" >New Finds</a>
	  <a href="#">Downloads </a>
	</div>

</head>
<body>

<P>Está a tentar aceder a uma página reservada. Por favor, comece por se autenticar.<br>Obrigado</p>

<div class="bottomright"> <span onclick="openNav()"><img src="library-sidebar.png" height="40" width="40" align="left"></span></div>
<form method='post' action='acaoLogin.php'>

  Nome: <input type='text' name='nome'></input><p>

  Password: <input type='password' name='pass'></input><p>

  <input type='submit' value='Ok'></input>

</form>

</body>

<script type='text/javascript'>
    
    function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";
	}

	/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft = "0";
	}

</script>

</html>
