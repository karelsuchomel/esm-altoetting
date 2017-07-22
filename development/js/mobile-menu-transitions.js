var showMobileMenuButton = document.getElementById("show-mobile-menu");
var menuContainerEl = document.getElementById("menu-top-bar-container");
var dimBGel = document.getElementById("dimm-background");
var gradientCardEl = document.getElementById("home-intro");
var inputCheckBox = document.getElementById("menu-toggle");
var menuClosed = true;

function toggleMobileMenu ()
{
	if ( menuClosed === true ) {
		// open menu

		dimBGel.style.display = "block";
		setTimeout( function() {
			dimBGel.style.opacity = "1";
		}, 20 );

		gradientCardEl.style.transform = "scale(0.95)";

		menuClosed = false;
		setTimeout( function() {
			inputCheckBox.checked = true;
		}, 20 );

	} else {
		// close menu

		dimBGel.style.opacity = "0";
		menuContainerEl.style.animation = "slide-out 0.5s forwards";
		gradientCardEl.style.transform = "scale(1)";

		setTimeout( function() {
			dimBGel.style.display = "none";
			menuContainerEl.style.animation = "";
		}, 500 );

		menuClosed = true;
		setTimeout( function() {
			inputCheckBox.checked = false;
		}, 20 );

	}
};

showMobileMenuButton.addEventListener( "click", toggleMobileMenu );
dimBGel.addEventListener( "click", toggleMobileMenu );