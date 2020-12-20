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

	document.getElementById(tab).style.display = "grid";
	event.currentTarget.className += " light_blue";
}

function popup() {

	var popup = document.getElementById("poptext");
  	popup.classList.toggle("show");
}
