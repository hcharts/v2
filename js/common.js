$(function(){

	var current = location.pathname.split("/")[1];
	if(current == null || current == "index.php" || current=="") current = "index";
	$("#navigater").find("li[index=\""+current+"\"]").addClass("active");

	$.scrollUp({
	      scrollName: 'scrollUp',
	      scrollDistance: 300,
	      scrollFrom: 'top',
	      scrollSpeed: 100,
	      easingType: 'linear',
	      animation: 'fade',
	      animationInSpeed: 200,
	      animationOutSpeed: 200, 
	      scrollTitle: '返回顶部',
	      scrollImg: true,
	      activeOverlay: false,
	      zIndex: 2147483647
	});

});

/* Other Functions, such as 
function aa() {
	do some thing;
}
*/