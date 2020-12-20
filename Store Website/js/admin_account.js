function controlInfo() {

	var info = document.getElementById('info');

	if (window.getComputedStyle(info).display == 'none') {

		info.style.display = 'block';
		var dropdown = document.getElementById('dropdown');
		dropdown.style.background = "url('./images/uparrow.png') no-repeat bottom";
		dropdown.style.backgroundSize = "8px";
		console.log(window.innerWidth);

	} else if (window.getComputedStyle(info).display == 'block') {

		info.style.display = 'none';
		var dropdown = document.getElementById('dropdown');
		dropdown.style.background = "url('./images/downarrow.png') no-repeat bottom";
		dropdown.style.backgroundSize = "8px";
	}
}

function controlPChange() {

	var pform = document.getElementById('pform');

	if (window.getComputedStyle(pform).display == 'none') {

		pform.style.display = 'block';
		var pchange = document.getElementById('change_button');
		pchange.style.background = "url('./images/uparrow.png') no-repeat bottom";
		pchange.style.backgroundSize = "8px";

	} else if (window.getComputedStyle(pform).display == 'block') {

		pform.style.display = 'none';
		var pchange = document.getElementById('change_button');
		pchange.style.background = "url('./images/downarrow.png') no-repeat bottom";
		pchange.style.backgroundSize = "8px";
	}
}