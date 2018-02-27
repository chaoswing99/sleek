function shit () {
var color = document.getElementById('colors').value;
alert(color); 
}

function yy () {
	var yo = document.getElementById('yo');
	var ya = document.getElementById('ya');
	var ye = document.getElementById('ye');

	if (yo.checked == true) {
		alert('yooooooo');
	}
	if (ya.checked == true) {
		alert('yaaaaaaa');
	}
	if (ye.checked == true) {
		alert('yeeeeeee');
	}
}

function gg() {
	var ez = document.getElementById('ez');
	var gg = document.getElementById('gg');

	if (ez.checked) {
		alert('ez');
	}

	else if (gg.checked) {
		alert('gg');
	}
}

function dis () {
	var ee1 = document.getElementById('ee1');
	var ee2 = document.getElementById('ee2');
	var ee3 = document.getElementById('ee3');
	var qq1 = document.getElementById('qq1');
	var qq2 = document.getElementById('qq2');
	var qq3 = document.getElementById('qq3');
	

		if (ee1.checked) {
			qq1.disabled = false;
		}

		else {
			qq1.disabled = true;
			qq1.value = '';
		}
		if (ee2.checked) {
			qq2.disabled = false;
		}
		else {
			qq2.disabled = true;
			qq2.value = '';
		}
		if (ee3.checked) {
			qq3.disabled = false;
		}
		else {
			qq3.disabled = true;
			qq3.value = '';
		}
}