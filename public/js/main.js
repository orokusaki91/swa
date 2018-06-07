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
	document.getElementById("mySidenav").style.width = "70%";
	document.body.style.overflowY = "hidden";
	document.getElementById("sidenav").style.visibility = "hidden";
	document.getElementById("sidenav").style.opacity = "0";
}

function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	document.body.style.overflowY = "auto";
	document.getElementById("sidenav").style.visibility = "visible";
	document.getElementById("sidenav").style.opacity = "1";
}
