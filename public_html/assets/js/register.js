$(document).ready(function(){
	$("#hideLogin").click(function() {
		$("#loginForm").hide();
		$("#registerForm").show();
	});
	console.log("js");
	$("#hideRegister").click(function(){
		$("#registerForm").hide();
		$("#loginForm").show();

	});


});