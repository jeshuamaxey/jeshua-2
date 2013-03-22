$(document).ready(function() {
	//initiate syntax highlighting
	hljs.initHighlightingOnLoad();
	$('#colour-toggle').click(function() {
		$('body, .colour-toggle img').toggleClass('inverted');
		$('#colour-toggle img.black-switch, #colour-toggle img.white-switch').toggle();
		invertTheme();
	})
}); //end document ready

function invertTheme() {
	l = $('#code-theme');
	if($('body, .colour-toggle img').hasClass('inverted')) {
		l.attr('href', window.location.origin+'/wp-content/themes/jeshua-2-0/js/highlightjs/styles/solarized_light.css');
	} else {
		l.attr('href', window.location.origin+'/wp-content/themes/jeshua-2-0/js/highlightjs/styles/solarized_dark.css');
	}
}