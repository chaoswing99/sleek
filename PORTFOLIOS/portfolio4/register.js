

function namef() {
	var ni = document.getElementById('name').value;
	var no = document.getElementById('nameo');
		no.value=ni;
	}

function bdayf() {
	var bi = document.getElementById('bdayd').value;
	var bi1= document.getElementById('bdayi1').value;
	var bi2= document.getElementById('bdayi2').value;
	var bo = document.getElementById('bdayo');
		bo.value=bi + "/" + bi1 + "/" + bi2;
}

function emailf() {
	var ei = document.getElementById('emaili').value;
	var eo = document.getElementById('emailo');
	var edrop = document.getElementById('ed').value;
		eo.value=ei + "@" + edrop;
}

function p1f () {
	var pi1 = document.getElementById('passwordi1').value;
	var po1 = document.getElementById('passwordo1');
	var pi2 = document.getElementById('passwordi2').value;

	if (pi1 == pi2) {
		po1.value=pi1;
	}

	else {
		alert("Password Not Matched");
	}
}

function genf () {
	var m = document.getElementById('male');
	var f = document.getElementById('female');
	var o = document.getElementById('other');
	var go = document.getElementById('gendero');

		if (m.checked) {
			go.value= "Male";
		}

		else if (f.checked) {
			go.value= "Female";
		}

		else if (o.checked) {
			go.value= "Others";
		}
}

function colorf () {
	var c1 = document.getElementById('color1');
	var c2 = document.getElementById('color2');
	var c3 = document.getElementById('color3');
	var c4 = document.getElementById('color4');
	var c5 = document.getElementById('color5');
	var c6 = document.getElementById('color6');
	var co = document.getElementById('coloro');
	// var cc1=;
	
		if (c1.checked) {
			cc1 = "Red";
		}

		else {
			cc1 ='';
		}


		if (c2.checked) {
			cc2 = "Green";
		}

		else {
			cc2 ='';
		}


		if (c3.checked) {
			cc3 = "Blue";
		}

		else {
			cc3 ='';
		}


		if (c4.checked) {
			cc4 = "Orange";
		}

		else {
			cc4 ='';
		}


		if (c5.checked) {
			cc5 = "White";
		}

		else {
			cc5 ='';
		}


		if (c6.checked) {
			cc6 = "Black";
		}

		else {
			cc6 ='';
		}


		co.value = cc1 + " " + cc2 + " " + cc3 + " " + cc4 + " " + cc5 + " " + cc6;
}

function reset () {
		var ni = document.getElementById('name');
		var no = document.getElementById('nameo');
		var bi = document.getElementById('bdayd');
		var bi1= document.getElementById('bdayi1');
		var bi2= document.getElementById('bdayi2');
		var bo = document.getElementById('bdayo');
		var ei = document.getElementById('emaili');
		var eo = document.getElementById('emailo');
		var pi1 = document.getElementById('passwordi1');
		var po1 = document.getElementById('passwordo1');
		var pi2 = document.getElementById('passwordi2');
		var m = document.getElementById('male');
		var f = document.getElementById('female');
		var o = document.getElementById('other');
		var c1 = document.getElementById('color1');
		var c2 = document.getElementById('color2');
		var c3 = document.getElementById('color3');
		var c4 = document.getElementById('color4');
		var c5 = document.getElementById('color5');
		var c6 = document.getElementById('color6');
		var go = document.getElementById('gendero');
		var co = document.getElementById('coloro');
		var edrop = document.getElementById('ed');

		edrop.value ='';
		ni.value = '';
		bi.value = '';
		bi1.value = '';
		bi2.value = '';
		ei.value = '';
		pi1.value = '';
		pi2.value = '';
		co.value = '';
		go.value = '';
		no.value = '';
		bo.value = '';
		eo.value = '';
		po1.value = '';
		c1.checked= false;
		c2.checked= false;
		c3.checked= false;
		c4.checked= false;
		c5.checked= false;
		c6.checked= false;
		m.checked= false;
		f.checked= false;
		o.checked= false;

}

function alert1 () {
		var ni = document.getElementById('name').value;
		var bi = document.getElementById('bdayd');
		var bi1= document.getElementById('bdayi1').value;
		var ei = document.getElementById('emaili').value;
		var ei1 = document.getElementById('ed').value;
		var pi1 = document.getElementById('passwordi1');
		var pi2 = document.getElementById('passwordi2');
		var c1 = document.getElementById('color1');
		var c2 = document.getElementById('color2');
		var c3 = document.getElementById('color3');
		var c4 = document.getElementById('color4');
		var c5 = document.getElementById('color5');
		var c6 = document.getElementById('color6');
		var m = document.getElementById('male');
		var f = document.getElementById('female');
		var o = document.getElementById('other');

		if (ni == "" || bi == "" || bi1 == ""|| ei == "" || pi1 == "" || pi2 == "" || ei1 == '')	{
			alert("kumpletuhen mo ung form ");
		}
		
		

}

function hids () {
		var bi2 = document.getElementById('bdayi2');
		var h1 = document.getElementById('hihi');
	

		if (h1.checked) {
			bi2.disabled=true;
			bi2.value="";
		}

		else {
			bi2.disabled=false;
			bi2.value="";
		}
		

}