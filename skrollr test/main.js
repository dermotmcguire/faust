$(document).ready(function() {
	setMargins();
});

$(window).resize(function() {
	setMargins();
});

function setMargins() {
	var marginLeft = $(".all-scenes").css("margin-left");
	var marginRight = $(".all-scenes").css("margin-right");
	console.log("set the left margins to: ", marginLeft);
	console.log("set the right margins to: ", marginRight);
}