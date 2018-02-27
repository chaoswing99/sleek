
function clk() {
	var a = document.getElementById('name');
	var b = document.getElementById('cnumber');
	var u1 = document.getElementById('ulam1');
	var u2 = document.getElementById('ulam2');
	var u3 = document.getElementById('ulam3');
	var u4 = document.getElementById('ulam4');
	var u5 = document.getElementById('ulam5');
	var o1 = document.getElementById('ons1');
	var o2 = document.getElementById('ons2');
	var o3 = document.getElementById('ons3');
	var d1 = document.getElementById('dis1');
	var d2 = document.getElementById('dis2');
	var d3 = document.getElementById('dis3');
	var d4 = document.getElementById('dis4');
	var to = document.getElementById('out');
	var q1 = document.getElementById('quan1');
	var q2 = document.getElementById('quan2');
	var q3 = document.getElementById('quan3');
	var q4 = document.getElementById('quan4');
	var q5 = document.getElementById('quan5');
	var tp = document.getElementById('totalp');
	var tt = document.getElementById('totalt');

	var n = document.getElementById('out1');
	var cn = document.getElementById('out2');
	var uo1 = document.getElementById('out3');
	var uo2 = document.getElementById('out4');
	var uo3 = document.getElementById('out5');
	var uo4 = document.getElementById('out6');
	var uo5 = document.getElementById('out7');
	var oo1 = document.getElementById('out8');
	var oo2 = document.getElementById('out9');
	var oo3 = document.getElementById('out0');
	// SECOND COL
	var na = document.getElementById('out1a');
	var cna = document.getElementById('out2a');
	var uo1a = document.getElementById('out3a');
	var uo2a = document.getElementById('out4a');
	var uo3a = document.getElementById('out5a');
	var uo4a = document.getElementById('out6a');
	var uo5a = document.getElementById('out7a');
	var oo1a = document.getElementById('out8a');
	var oo2a = document.getElementById('out9a');
	var oo3a = document.getElementById('out0a');

	// last col
	var uo1b = document.getElementById('out3b');
	var uo2b = document.getElementById('out4b');
	var uo3b = document.getElementById('out5b');
	var uo4b = document.getElementById('out6b');
	var uo5b = document.getElementById('out7b');
	var oo1b = document.getElementById('out8b');
	var oo2b = document.getElementById('out9b');
	var oo3b = document.getElementById('out0b');
	// total
	
	var uot = parseInt(q1.value) + parseInt(q2.value) + parseInt(q3.value) + parseInt(q4.value) + parseInt(q5.value);
	var pr1 = 25;
	var pr2 = 30;
	var pr3 = 20;
	var pr4 = 40;
	var pr5 = 15;
	var pr6 = 10.00;
	var pr7 = 7;
	var pr8 = 5;
	var trt = parseInt(uo1b.innerHTML) + parseInt(uo2b.innerHTML) + parseInt(uo3b.innerHTML) + parseInt(uo4b.innerHTML) + parseInt(uo5b.innerHTML) + parseInt(oo1b.innerHTML) + parseInt(oo2b.innerHTML) + parseInt(oo3b.innerHTML);


	n.innerHTML="Name:";
	na.innerHTML=a.value;

	cn.innerHTML="Customer Number:";
	cna.innerHTML=b.value;

	// ulam1
	if (u1.checked) {
		q1.disabled=false;
		uo1.innerHTML="Menudo";
		tt.innerHTML="TOTAL PRICE";
		tp.innerHTML = trt;
	
	}
	else {
		uo1.innerHTML="";
		q1.disabled=true;
	}

	if (u1.checked) {
		uo1a.innerHTML=q1.value;
	}
	else if (u1.checked==false){
		uo1a.innerHTML=0;
	}


	if (uo1b =="") {
		uo1b.innerHTML=0;
	}
	else if (u1.checked) {
		uo1b.innerHTML=pr1 * q1.value;
	}
	else if (u1.checked==false){
		uo1b.innerHTML=0;

	}


	// ulam2
	if (u2.checked) {
		uo2.innerHTML="Afritada";
		q2.disabled=false;
		tt.innerHTML="TOTAL PRICE";
		tp.innerHTML = trt;
		
	}

	else {
		uo2.innerHTML="";
		q2.disabled=true;
	}

	if (u2.checked) {
		uo2a.innerHTML=q2.value;
	}
	else if (u2.checked==false){
		uo2a.innerHTML=0;
	}


	if (uo2b =="") {
		uo2b.innerHTML=0;
	}
	else if (u2.checked) {
		uo2b.innerHTML=pr2 * q2.value;
	}
	else if (u2.checked==false){
		uo2b.innerHTML="";
		uo2b.innerHTML=0;
	}


	// ulam3
	if (u3.checked) {
		uo3.innerHTML="Adobo";
		q3.disabled=false;
		tt.innerHTML="TOTAL PRICE";
		tp.innerHTML = trt;
		
	}
	else {
		uo3.innerHTML="";
		q3.disabled=true;
	}

	if (u3.checked) {
		uo3a.innerHTML=q3.value;
	}
	else if (u3.checked==false){
		uo3a.innerHTML=0;
	}


	if (uo3b =="") {
		uo3b.innerHTML=0;
	}
	else if (u3.checked) {
		uo3b.innerHTML=pr3 * q3.value;
	}
	else if (u3.checked==false){
		uo3b.innerHTML=0;
	}


	// ulam4
	if (u4.checked) {
		uo4.innerHTML="Mechado";
		q4.disabled=false;
		tt.innerHTML="TOTAL PRICE";
		tp.innerHTML = trt;
	}
	else {
		uo4.innerHTML="";
		q4.disabled=true;
	}

	if (u4.checked) {
		uo4a.innerHTML=q4.value;
	}
	else if (u4.checked==false){
		uo4a.innerHTML=0;
	}


	if (u4.checked) {
		uo4b.innerHTML=pr4 * q4.value;
	}
	else if (u4.checked==false){
		uo4b.innerHTML=0;
	}


	// ulam5
	if (u5.checked) {
		uo5.innerHTML="Caldereta";
		q5.disabled=false;
		tt.innerHTML="TOTAL PRICE";
		tp.innerHTML = trt;
	}
	else {
		uo5.innerHTML="";
		q5.disabled=true;
	}

	if (u5.checked) {
		uo5a.innerHTML=q5.value;
	}
	else if (u5.checked==false){
		uo5a.innerHTML=0;
	}


	if (u5.checked) {
		uo5b.innerHTML=pr5 * q5.value;
	}
	else if (u5.checked==false){
		uo5b.innerHTML=0;
	}



	// ADDONS
	// rice
	if (o1.checked) {
		oo1.innerHTML="Rice";
	}
	else {
		oo1.innerHTML="";
	}

	if (o1.checked) {
		oo1a.innerHTML=uot;
	}
	else if (o1.checked==false){
		oo1a.innerHTML=0;
	}

	if (o1.checked) {
		oo1b.innerHTML=uot * pr6;
	}
	else if (o1.checked==false){
		oo1b.innerHTML=0;
	}
	
	// drinks
	if (o2.checked) {
		oo2.innerHTML="Drinks";
	}
	else {
		oo2.innerHTML="";
	}


	if (o2.checked) {
		oo2a.innerHTML=uot;
	}
	else if (o2.checked==false){
		oo2a.innerHTML=0;
	}
	
	if (o2.checked) {
		oo2b.innerHTML=uot*pr7;
	}
	else if (o2.checked==false){
		oo2b.innerHTML=0;
	}

	// sabaw
	if (o3.checked) {
		oo3.innerHTML="Special Sabaw";
	}
	else {
		oo3.innerHTML="";
	}

	
	if (o3.checked) {
		oo3a.innerHTML=uot;
	}

	else if (o3.checked==false){
		oo3a.innerHTML=0;
	}


	if (o3.checked) {
		oo3b.innerHTML=uot*pr8;
	}
	else if (o3.checked==false){
		oo3b.innerHTML=0;
	}

	// radios
	// discount

	if (d1.checked) {
		tp.innerHTML= trt *.80;
	}
	else if (d2.checked) {
		tp.innerHTML = trt * 0;
	}
	else if (d3.checked) {
		tp.innerHTML = trt*.99;
	}
	else if (d4.checked) {
		tp.innerHTML = trt;
	}

}