//$(document).ready(function () {
//	var sideMenu = $("#side-menu").outerHeight();
//	var header = $(".admin_panel_head_inner").outerHeight();
//	$("#side-menu").css("height", sideMenu - header + "px");
//});

var myVar;

function loader() {
	myVar = setTimeout(showPage, 300);
}

function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("app").style.display = "block";
//	document.getElementById("footer").style.display = "block";
}