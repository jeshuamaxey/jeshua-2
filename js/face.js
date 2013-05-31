$(document).ready(function() {
	$('a.show-nice-face').hover(showNiceFace, hideFace);
	$('a.show-scary-face').hover(showScaryFace, hideFace);
	window.prevbg = $('body').css('background-color');
	window.jsFilePath = $('script#face').attr('src').substring(0,$('script#face').attr('src').length - 7);
	console.log(window.jsFilePath);
});

//any link with the class show-scary-face will change
//the bg-img to my scary face when hovered over
function showScaryFace(){
	$('body').css('background-image', 'url("'+window.jsFilePath+'img/stare.jpg")');
}

//any link with the class show-nice-face will change
//the bg-img to my nice face when hovered over
function showNiceFace(){
	$('body').css('background-image', 'url("'+window.jsFilePath+'img/swimming.jpg")');
}

function hideFace(){
	$('body').css('background', '');
	$('body').css('background-color', '#1e1e1e');
}