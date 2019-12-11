var loginState = 0 

//mostra o modal de login e os erros caso as crdenciais estjam erradas
//mostra tambem os erros caso o username ou o email ja estiverem em uso no processo de criar conta 
function toogleLogin(){
    if ( loginState == 1) {
        return hide_login();
    }
    return show_login();
}

function show_login(){
    loginState = 1;
    document.getElementById('loginw').style.display='block';
}

function hide_login(){
    loginState = 0;
    document.getElementById('loginw').style.display='none';
}


function show_errors(){
	if (dm==1) {
		show_login();
        document.getElementById('p1').style.display='block';
		document.getElementById('p2').style.display='block';
		document.getElementById("tab-2").checked=true;
		dm=0;		
    }
	else if (u==1) {
        document.getElementById('u').style.display='block';
		document.getElementById("tab-2").checked=true;
		show_login();
		u=0;
    }
	else if (email==1) {
        document.getElementById('e').style.display='block';
		document.getElementById("tab-2").checked=true;
		show_login();
		email=0;
    }
	else if (ul==1) {
        document.getElementById('ul').style.display='block';
		document.getElementById("tab-1").checked=true;
		show_login();
		ul=0;
    }
	else{}
}


