var faderImages;
var currentImage = 1;
$(document).ready(function (){

	// see if we have fader images in place
	faderImages = $(".fader-image");
	if ( faderImages.length == 0 )
		return;
		
	
	$(".fader-image:nth-child(1)").fadeIn(1800);
	
	// setup fader
	setInterval(function(){
		runFader();
	},6000);
});


function runFader(){
	if ( currentImage == (faderImages.length+1) ){
		// reset the slide show
		$(".fader-image:not(:nth-child(1))").fadeOut(1800);
		currentImage = 1;
	}
	
	currentImage++;
	
	$(".fader-image:nth-child(" + currentImage + ")").fadeIn(1800);
	
}