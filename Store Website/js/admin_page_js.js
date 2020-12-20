function openTab(event, tab) {

	var i, x, tablinks;
	x = document.getElementsByClassName("tab");

	for (i = 0; i < x.length; i++) {

		x[i].style.display = "none";
	}

	tablinks = document.getElementsByClassName("tablink");

	for (i = 0; i < x.length; i++) {

		tablinks[i].className = tablinks[i].className.replace(" light_blue", "");

	}

	document.getElementById(tab).style.display = "block";

	var m = document.getElementById('messages');
	var o = document.getElementById('other');

	if (m.style.display == "block") {

		o.style.display = "block";

	} else {

		o.style.display = "none";
	}
	
	event.currentTarget.className += " light_blue";
}

window.addEventListener("resize", function() {		

	var grid = document.getElementById("grid");
	var x = document.getElementsByClassName("tab");
	var other = document.getElementById('other');
	var tablinks = document.getElementsByClassName("tablink");

	if ($('.tabs:visible').length == 0) {

		console.log("resize");

		grid.style.display = "grid";

		for (i = 0; i < x.length; i++) {

			x[i].style.display = "block";
		}

		other.style.display = "block";

	} else {

		grid.style.display = "block";

		for (i = 0; i < x.length; i++) {

			x[i].style.display = "none";
		}

		other.style.display = "none";

		for (i = 0; i < x.length; i++) {

			tablinks[i].className = tablinks[i].className.replace(" light_blue", "");
		}
	}
});

function popup() {

	var popup = document.getElementById("poptext");
  	popup.classList.toggle("show");
}
