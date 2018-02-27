$(document).ready(function(){
	$('#tab1').click(function(){
		$('#content1').show();
		$('#content2').hide();
		$('#content3').hide();
		$('#tab1').addClass('cookie');
		$('#tab2').removeClass('cookie');
		$('#tab3').removeClass('cookie');

	})

	$('#tab2').click(function(){
		$('#content1').hide();
		$('#content2').show();
		$('#content3').hide();
		$('#tab2').addClass('cookie');
		$('#tab1').removeClass('cookie');
		$('#tab3').removeClass('cookie');

	})

	$('#tab3').click(function(){
		$('#content1').hide();
		$('#content2').hide();
		$('#content3').show();
		$('#tab3').addClass('cookie');
		$('#tab2').removeClass('cookie');
		$('#tab1').removeClass('cookie');
	})

	$('#equals').click(function(){
		$('#down').toggle();
	})

})

// $(document).click(function(evt){
// 	$('#down').hide();
// });
// $(document).click(function(evt){
//       $('#shit').evt.stopPropagation();
// });
