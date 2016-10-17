

this.randomtip = function(){

	var pause = 5000; // define the pause for each tip (in milliseconds) 
	var length = $("#quotelist li").length; 
	var temp = -1;		

	this.getRan = function(){
		// get the random number
		var ran = Math.floor(Math.random()*length) + 1;
		return ran;
	};
	this.show = function(){
		var ran = getRan();
		// to avoid repeating
		while (ran == temp){
			ran = getRan();
		}; 
		temp = ran;
		$("#quotelist li").hide();	
		$("#quotelist li:nth-child(" + ran + ")").fadeIn("fast");		
	};
	
	show(); setInterval(show,pause);
	
};

$(document).ready(function(){	
	randomtip();
});