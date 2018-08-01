var myVar;

function loader() {
	myVar = setTimeout(showPage, 300);
}

function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("app").style.display = "block";
	//	document.getElementById("footer").style.display = "block";
}

$(document).ready(function () {
	if ($("#back-to-top").length) {
		var scrollTrigger = 300, // px
			backToTop = function () {
				var scrollTop = $("#content").scrollTop();
				if (scrollTop > scrollTrigger) {
					$("#back-to-top").addClass("back-to-top-show");
				} else {
					$("#back-to-top").removeClass("back-to-top-show");
				}
			};
		backToTop();
		$("#content").on("scroll", function () {
			backToTop();
		});
		$("#back-to-top").on("click", function (e) {
			e.preventDefault();
			$("#content").animate({
				scrollTop: 0
			}, 800);
		});
	}
});

function openNav() {
	var media = window.matchMedia("only screen and (min-width: 320px) and (max-width: 767px) and (orientation: landscape)");
	if (media.matches) { // If media query matches
		document.getElementById("side-menu").style.width = "65%";
		document.getElementById("close-nav").style.width = "100%";
	} else {
		document.getElementById("side-menu").style.width = "70%";
		document.getElementById("close-nav").style.width = "100%";
	}
	document.body.style.overflowY = "hidden";
}

function closeNav() {
	document.getElementById("side-menu").style.width = "0";
	document.getElementById("close-nav").style.width = "0";
	document.body.style.overflowY = "auto";
}
