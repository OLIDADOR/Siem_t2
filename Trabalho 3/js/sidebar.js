var menuState = 0
//abre e fecha a sidebar
function toggleNav(){
    if ( menuState == 1) {
        return closeNav();
    }
    return openNav();
}

    function openNav() {
	  menuState = 1;
	  document.getElementById("mySidenav").style.width = "15.625em";
	}

	/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
	function closeNav() {
	  menuState = 0;
	  document.getElementById("mySidenav").style.width = "0";
	}
