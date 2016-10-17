// $('#garagelink').bind('touchstart', function() {});
// $('#garagelink').on("touchstart", function() {
//     	// $(location).attr("href", "index.html")
//     	// window.location.href='patients.html';
    	
//        alert("Работает!");
//     });

// $('#logo').on('touchstart', function(){
//  alert("Работает!");
// });

// $('#logo').bind('touchstart', select);
// $('#logo').bind('touchend', unselect);

// function select(){
// alert('test');
// }

// function unselect(){
// alert('unselect');
// }

// document.getElementById('logo').addEventListener('touchstart', select, false);

//         function select(){
//             alert('test');
//         }
//         function unselect(){
//             alert('unselect');
//         }
// ;

$('document').ready(function () {

	var startnumbers = new TimelineLite();
	startnumbers.set("#motorcycle", {css:{y:-20, scale:0.6}})
	;

    var trigger = $('#hamburger'), isClosed = true;
    trigger.click(function () {
      burgerClock();
    });
    function burgerClock() {
      if (isClosed == true) {
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = false;
        $("#mainmenu").addClass('menuopen');
        $("#mainmenu").removeClass('menuclose');

        $("#menubackfilter").addClass('backfilterOn');
        $("#menubackfilter").removeClass('backfilterOff');

        $("#centerlead").addClass('vizibleOff');
        $("#centerlead").removeClass('vizibleOn');

        $("#motorcycle").addClass('vizibleOff');
        $("#motorcycle").removeClass('vizibleOn');

      } else {
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
        $("#mainmenu").addClass('menuclose');
        $("#mainmenu").removeClass('menuopen');

        $("#menubackfilter").addClass('backfilterOff');
        $("#menubackfilter").removeClass('backfilterOn');

        $("#centerlead").addClass('vizibleOn');
        $("#centerlead").removeClass('vizibleOff');

        $("#motorcycle").addClass('vizibleOn');
        $("#motorcycle").removeClass('vizibleOff');

      }
    }

 });






if ('ontouchstart' in window ) {    //behaviour and events for touch device
  	$('#garagelink').on('touchstart',function(){
	    setTimeout(function(){
	       window.location.href='index.html';
       },1000);
    });
  	$('#patients').on('touchstart',function(){
	    setTimeout(function(){
	       window.location.href='patients.html';
       },1000);
    });    
  	$('#whoarewe').on('touchstart',function(){
	    setTimeout(function(){
	       window.location.href='whoarewe.html';
       },1000);
    });

	$('#motorcycle').on('touchstart',function(event){
		event.preventDefault();
		var tlmain = new TimelineLite({onComplete:sendtopage});
		var tlfilter = new TimelineMax();
		var tlloop = new TimelineMax({repeat:50});
		var tl = new TimelineMax();
		tl.to("#motorcycle", 1, {css:{y:20, scale:1.0}});
		tlmain.set("#taho_arrow", {directionalRotation:"0_cw",transformOrigin:"100% 0%"}, "start")
		.set("#speed_arrow", {directionalRotation:"0_cw",transformOrigin:"100% 0%"}, "start")
		.set("#tunnel",  {css:{ y:-20, height:0, scale:0.01, autoAlpha:0}, ease:Power0.easeNone}, "start")
		.set("#roadwrap", {css:{zIndex:-10}}, "start")
		.to("#roadwrap", 0.1, {css:{zIndex:0} } , "stage1")
		.to("#taho_arrow", 2, {directionalRotation:"190_cw", ease:Power4.easeOut}, "stage1")
		.to("#tunnel", 1, {css:{ height:300}}, "start")
		.addLabel("startspeed", 10)
		.to("#speed_arrow", 3, {directionalRotation:"200_cw", ease:Power1.easeOut}, "stage1+=1")
		.to("#tunnel", 3, {css:{ y:0,  height:300, scale:4.1, autoAlpha:1}, ease:Power3.easeIn}, "stage1+=3");	
		tlfilter.set("#whitefilter", {css:{autoAlpha:1, height:"0%", backgroundColor:"rgba(0,0,0,0.0)"}}, "start")
		.to("#whitefilter", 0.2, {css:{height:"100%", ease:Power0.easeNone} } , "starttogo")
		.to("#whitefilter", 7, {css:{backgroundColor:"rgba(250,250,250,0.98)", ease:Power0.easeNone} }, "stage2");
		tlloop.set("#road1left", {css:{y:0, scale:0.1, rotationX:90, x:140, height:100, autoAlpha:1}} )
		.set("#road1right", {css:{y:0, scale:0.1, rotationX:90, x:-140, height:100, autoAlpha:1}} )
		.to("#road1left", 0.5, {css:{y:150, scale:1.5, rotationX:80, x:-100}, ease:Power0.easeNone}, "loop")
		.to("#road1right", 0.5, {css:{y:150, scale:1.5, rotationX:80, x:100}, ease:Power0.easeNone}, "loop")
		.to("#road1left", 0.1, {css:{y:200, scale:1.5, height:0, autoAlpha:0}, ease:Power0.easeNone}, "loopend")
		.to("#road1right", 0.1, {css:{y:200, scale:1.5, height:0, autoAlpha:0}, ease:Power0.easeNone}, "loopend");
		var masterTimeline = new TimelineLite();
		masterTimeline.add(tlmain)
		.add(tlfilter, 1)
		.add(tlloop, 1);
		tlmain.timeScale(1.00);
		tlfilter.timeScale(1.00);
		tlloop.timeScale(4.1);

		$('#motorcycle').on('touchend',function(){
		    tlfilter.time(0)
		    tlmain.time(0)
		    tlloop.time(0)
		    tlfilter.stop()
		    tlmain.stop() 
		    tlloop.stop()
		    tl.to("#motorcycle", 1, {css:{y:-20, scale:0.6}})
		});
		$('#motorcycle').on('touchleave',function(){
		    tlfilter.time(0)
		    tlmain.time(0)
		    tlloop.time(0)
		    tlfilter.stop()
		    tlmain.stop() 
		    tlloop.stop()
		    tl.to("#motorcycle", 1, {css:{y:-20, scale:0.6}})
		});

		var gotoUrl = $("#sendtopage").attr('href');
		function sendtopage() {
	    	$(location).attr("href", gotoUrl);
		};

	});

  

	

}

else{   //behaviour and events for pointing device like mouse
	$('#motorcycle').hover(
	function(){
	  var tl = new TimelineLite();
		tl.to("#motorcycle", 1, {css:{y:20, scale:1.0}})
		;
	},
	function(){

	  var tl = new TimelineLite();
		tl.to("#motorcycle", 1, {css:{y:-20, scale:0.6}})
		;
	});


	$('#motorcycle').mousedown(function() {
		var tlmain = new TimelineLite({onComplete:sendtopage});
		var tlfilter = new TimelineMax();
		var tlloop = new TimelineMax({repeat:50});
		var tl = new TimelineMax();
		tlmain.set("#taho_arrow", {directionalRotation:"0_cw",transformOrigin:"100% 0%"}, "start")
		.set("#speed_arrow", {directionalRotation:"0_cw",transformOrigin:"100% 0%"}, "start")
		.set("#tunnel",  {css:{ y:-20, height:0, scale:0.01, autoAlpha:0}, ease:Power0.easeNone}, "start")
		.set("#roadwrap", {css:{zIndex:-10}}, "start")
		.to("#roadwrap", 0.1, {css:{zIndex:0} } , "stage1")
		.to("#taho_arrow", 2, {directionalRotation:"190_cw", ease:Power4.easeOut}, "stage1")
		.to("#tunnel", 1, {css:{ height:300}}, "start")
		.addLabel("startspeed", 10)
		.to("#speed_arrow", 3, {directionalRotation:"200_cw", ease:Power1.easeOut}, "stage1+=1")
		.to("#tunnel", 3, {css:{ y:0,  height:300, scale:4.1, autoAlpha:1}, ease:Power3.easeIn}, "stage1+=3");	
		tlfilter.set("#whitefilter", {css:{autoAlpha:1, height:"0%", backgroundColor:"rgba(0,0,0,0.0)"}}, "start")
		.to("#whitefilter", 0.2, {css:{height:"100%", ease:Power0.easeNone} } , "starttogo")
		.to("#whitefilter", 7, {css:{backgroundColor:"rgba(250,250,250,0.98)", ease:Power0.easeNone} }, "stage2");
		tlloop.set("#road1left", {css:{y:0, scale:0.1, rotationX:90, x:140, height:100, autoAlpha:1}} )
		.set("#road1right", {css:{y:0, scale:0.1, rotationX:90, x:-140, height:100, autoAlpha:1}} )
		.to("#road1left", 0.5, {css:{y:150, scale:1.5, rotationX:80, x:-100}, ease:Power0.easeNone}, "loop")
		.to("#road1right", 0.5, {css:{y:150, scale:1.5, rotationX:80, x:100}, ease:Power0.easeNone}, "loop")
		.to("#road1left", 0.1, {css:{y:200, scale:1.5, height:0, autoAlpha:0}, ease:Power0.easeNone}, "loopend")
		.to("#road1right", 0.1, {css:{y:200, scale:1.5, height:0, autoAlpha:0}, ease:Power0.easeNone}, "loopend");
		var masterTimeline = new TimelineLite();
		masterTimeline.add(tlmain)
		.add(tlfilter, 1)
		.add(tlloop, 1);
		tlmain.timeScale(1.00);
		tlfilter.timeScale(1.00);
		tlloop.timeScale(4.1);

		$('#motorcycle').bind('mouseup mouseleave', function() {
		    tlfilter.time(0)
		    tlmain.time(0)
		    tlloop.time(0)
		    tlfilter.stop()
		    tlmain.stop() 
		    tlloop.stop()
		});

		var gotoUrl = $("#sendtopage").attr('href');
		function sendtopage() {
	    	$(location).attr("href", gotoUrl);
		};

	});


};




$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});





