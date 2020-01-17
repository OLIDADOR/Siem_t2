//mostra os erros caso o username ou o email ja estiverem em uso


function show_errors_ea(){
	 if (ea_u==1) {
        document.getElementById('ea_u').style.display='block';
		ea_u=0;
    }
	else if (ea_email==1) {
        document.getElementById('ea_email').style.display='block';
		ea_email=0;
    }
	else{}
}


