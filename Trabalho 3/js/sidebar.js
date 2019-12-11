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
	  document.getElementById("mySidenav").style.width = "250";
	  document.getElementById("main").style.marginLeft = "250";
	  document.getElementById("left").style.marginLeft = "250";
	}

	/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
	function closeNav() {
	  menuState = 0;
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft = "0";
	  document.getElementById("left").style.marginLeft = "0";
	}
