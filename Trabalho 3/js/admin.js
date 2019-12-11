//verifica se e admin e caso seja mostra as opções extra na sidebar


function checkifadmin(){
    if ( admin == 0) {
		
        return hide_options();
    }
	
    return show_options();
}

function show_options(){
    document.getElementById('a1').style.display='block';
	document.getElementById('a2').style.display='block';
	document.getElementById('a3').style.display='block';
	
}

function hide_options(){
    document.getElementById('a1').style.display='none';
	document.getElementById('a2').style.display='none';
	document.getElementById('a3').style.display='none';
}





