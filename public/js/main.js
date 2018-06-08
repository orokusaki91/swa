$(document).ready(function () {
	var height = $("footer").outerHeight();
	$("#app").css("margin-bottom", "-" + height + "px");
	$(".push-footer").css("height", height + "px");
});

$(document).ready(function () {
	if ($("#back-to-top").length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$("#back-to-top").addClass("show");
				} else {
					$("#back-to-top").removeClass("show");
				}
			};
		backToTop();
		$(window).on("scroll", function () {
			backToTop();
		});
		$("#back-to-top").on("click", function (e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: 0
			}, 1000);
		});
	}
});

function openNav() {
	var media = window.matchMedia("only screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape)");
	if (media.matches) { // If media query matches
		document.getElementById("side-nav").style.width = "65%";
	} else {
		document.getElementById("side-nav").style.width = "70%";
	}
	document.body.style.overflowY = "hidden";
	document.getElementById("top-menu").style.visibility = "hidden";
	document.getElementById("top-menu").style.opacity = "0";
}

function closeNav() {
	document.getElementById("side-nav").style.width = "0";
	document.body.style.overflowY = "auto";
	document.getElementById("top-menu").style.visibility = "visible";
	document.getElementById("top-menu").style.opacity = "1";
}

var map;

function initMap() {
	map = new google.maps.Map(document.getElementById("map"), {
		center: {
			lat: 38.906659,
			lng: 1.420721
		},
		zoom: 10
	});
}
