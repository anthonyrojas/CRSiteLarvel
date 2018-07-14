document.addEventListener('DOMContentLoaded', function(){
	var parallaxes = document.getElementsByClassName('parallax');
	for(var i=0; i < parallaxes.length; i++){
		var dataImage = parallaxes[i].getAttribute('data-image');
		console.log(dataImage);
		parallaxes[i].style.backgroundImage = 'url(' + dataImage + ')';
	}
});