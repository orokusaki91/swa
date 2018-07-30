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