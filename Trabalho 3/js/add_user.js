//mostra os erros caso o username ou o email ja estiverem em uso


function show_error_am(){
	if (am_u==1) {
        document.getElementById('am_u').style.display='block';
		am_u=0;
    }
	else if (am_email==1) {
        document.getElementById('am_email').style.display='block';
		am_email=0;
    }
	else{}
}


