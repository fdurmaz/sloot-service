window.onscroll = function () { scrollFunction() };

function scrollFunction() {
	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
		document.getElementById("navbar").style.boxShadow = "0px 10px 8px 1px rgba(0,0,0,0.17)";
	} else {
		document.getElementById("navbar").style.boxShadow = "0px 0px 0px 0px rgba(0,0,0,0.0)";
	}
}

