$(document).ready(function() {
	//Pop up window (magnificPopup)
	$(".popup").magnificPopup({type:"image"});
	//pop up at portfolio section
	$(".popup_content").magnificPopup({type:'inline', midClick: true, closeOnContentClick: true});

	//Headers animation (animate.css)
	$(".top_text h1").animated("fadeInDown", "fadeOutUp");
	$(".top_text p").animated("fadeInUp", "fadeOutDown");
	$(".section_header").animated("fadeInUp", "fadeOutDown");
	//section "aboutme" animation (animate.css)
	$(".animation_1").animated("zoomInUp", "zoomOutDown");
	$(".animation_2").animated("fadeInLeft", "fadeOutLeft");
	$(".animation_3").animated("fadeInLeft", "fadeOutLeft");
	//section work animation
	$(".left .resume_item").animated("fadeInUp", "fadeOutUp");
	$(".right .resume_item").animated("fadeInDown", "fadeOutDown");


	//tabs portfolio (mixitup plugin)
	$("#portfolio_grid").mixItUp();
	//toggle active tab  in portfolio section
	$(".s_portfolio li").click(function() {
		$(".s_portfolio li").removeClass("active");
		$(this).addClass("active");
	});



	//first Screen height detection
	function heightDetect() {
		$(".main_head").css("height", $(window).height());
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});

	$(".toggle_mnu").click(function() {
		$(".sandwich").toggleClass("active");
	});

	$(".top_mnu ul a").click(function() {
		$(".top_mnu").fadeOut(600);
		$(".sandwich").toggleClass("active");
		$(".top_text").css("opacity", "1");
	}).append("<span>");

	$(".toggle_mnu").click(function() {
		if ($(".top_mnu").is(":visible")) {
			$(".top_text").css("opacity", "1");
			$(".top_mnu").fadeOut(600);
			$(".top_mnu li a").removeClass("fadeInUp animated");
		} else {
			$(".top_text").css("opacity", ".1");
			$(".top_mnu").fadeIn(600);
			$(".top_mnu li a").addClass("fadeInUp animated");
		};
	});
	//set id's to portfolio items
	$(".portfolio_item").each(function(i) {
		$(this).find("a").attr("href", "#work_" + i);
		$(this).find(".port_descr").attr("id", "work_" + i);
	});
	//form validation
	$("input, select, textarea").jqBootstrapValidation();
	
	//page scroll to id plugin
	$(".top_mnu ul a").mPageScroll2id();

});

$(window).load(function() { 
	$(".loader_inner").fadeOut(); 
	$(".loader").delay(400).fadeOut("slow"); 
});