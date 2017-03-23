

window.onload = function() {

$(".loading").css({"display" : "none"});
i = 1;
blur = 20;
$(".menubutton").click(function() {
	if (i == 1) {
	$(".lineone").css({ "transform" : "rotate(45deg)", "margin-top" : "7px"});
	$(".linetwo").css({"margin-top" : "-1px", "transform" : "rotate(-45deg)"});
	$(".menu").css({"margin-top" : "-100vh"});
	i=0;
	} else if(i==0) {
	$(".lineone").css({"margin-top" : "0", "transform" : "rotate(0deg)"});
	$(".linetwo").css({"margin-top" : "9px", "transform" : "rotate(0deg)"});
	$(".menu").css({"margin-top" : "-200vh"});
	i=1;
	}
});

$(".login").click(function() {
	prompt();
});
if (location.pathname == '/') { 
setInterval('backgroundColor(".hero")', 100);
}
}