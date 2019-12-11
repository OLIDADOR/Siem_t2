//mostra os erros caso o username ou o email ja estiverem em uso


function show_errors_m(){
	 if (em_u==1) {
        document.getElementById('em_u').style.display='block';
		em_u=0;
    }
	else if (em_email==1) {
        document.getElementById('em_email').style.display='block';
		em_email=0;
    }
	else{}
}


