$(document).ready(function() {
	//initiate syntax highlighting
	hljs.initHighlightingOnLoad();
	//inversion true/false kept in localstorage
	initialiseInversionWatch();
	$('#colour-toggle').click(function() {
		invertTheme();
		updateLocalStorageInverted();
	})
}); //end document ready

function invertTheme() {
	$('body, .colour-toggle img').toggleClass('inverted');
	$('#colour-toggle img.black-switch, #colour-toggle img.white-switch').toggle();
	
	l = $('#code-theme');
	if($('body, .colour-toggle img').hasClass('inverted')) {
		l.attr('href', window.location.origin+'/wp-content/themes/jeshua-2-0/js/highlightjs/styles/solarized_light.css');
	} else {
		l.attr('href', window.location.origin+'/wp-content/themes/jeshua-2-0/js/highlightjs/styles/solarized_dark.css');
	}
}
