// $(document).ready(function(){
// 	$('#op').change(function(){
// 	var name = $('#op').val();
// 	var n1 = $('#num1').val();
// 	var n2 = $('#num2').val();
// 	var sum = parseInt(n1) + parseInt(n2);
// 	var quo = n1 / n2;
// 	var mul = n1 * n2;
// 	var dif = n1 - n2;
	
// 	if (name == "") {
// 		sagot="Please choose operator";
// 	}
// 	else if (name == "+") {
// 		sagot=sum;
// 	}
// 	else if (name == "-") {
// 		sagot=dif;
// 	}

// 	else if (name == "x") {
// 		sagot=mul;
// 	}

// 	else if (name == "/") {
// 		sagot=quo;
// 	}

// 	$('#showname').html(sagot);
// 	});

// });


// FOR EFFECTS

// $(document).ready(function(){
// 	$('#clk').mouseenter(function(){
// 		$('#content').slideToggle(1000);
// 	});
// });

// FOR html

// 	$(document).ready(function(){

// 	$('#CLICKMEFCKER').mouseenter(function(){
// 		$('#ol').css({
// 			'color':'blue',
// 			'font-size':'100px',
// 			'margin':'auto',			
// 			});
// 			});
// });

	$(document).ready(function(){

	$('#CLICKMEFCKER').mouseenter(function(){
		$('#ol').toggleClass('shit');
			});
});