var buttonSound;

function playButtonSound () {
	buttonSound.play();
}

function initSoundEffects() 
{
	buttonSound = new Audio( directory_uri.stylesheet_directory_uri + '/assets/audio/vzz.mp3' );
  console.log("initializing sound effects");

	//find all <a></a> elements and add listener
	const listOfAnchors = document.getElementsByTagName("a");

	for (var i = listOfAnchors.length - 1; i >= 0; i--) {
		console.log(listOfAnchors[i]);
		listOfAnchors[i].addEventListener("mouseenter", playButtonSound);
	}
};

const logoEl = document.getElementById("home-page-link");
var EggCtivator = 0;

logoEl.addEventListener('contextmenu', function(ev) 
{
  ev.preventDefault();
  console.log("registered context menu");

	if ( EggCtivator === 7) {
		initSoundEffects();
	}
	
	EggCtivator++;

  return false;
}, false);

