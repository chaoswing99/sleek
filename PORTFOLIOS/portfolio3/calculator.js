
		function show() {
		var x = document.getElementById('bolt').value;
		var y = document.getElementById('nut').value;
		var z = document.getElementById('crack').value;
		var a = 5
		var b = 3
		var c = 1.5
		var w = document.getElementById('answer');
		var t;
		var g = 2 * parseInt(x);
		var h = 4 + parseInt(x);

		
	
		
		if (y == g && z == h)  {
			t = parseInt(x) * a + parseInt(y) * b + parseInt(z) * c;
		}
		else if (y != g || z != h) {
			t ="Make sure Nuts must be twice the number of Bolts and Cracker must be 4 more than Bolts";
		}
		
		
		
		
		w.innerHTML = t;
		}
	