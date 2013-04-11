window.onload = function(){

	$input = $('#filter_exercise label input');
	$('#filter_exercise label input:checked').parent().addClass('selected');

	$input.click(function(){
		$(this).parent().toggleClass('selected');
		//$('#filter_exercise').submit();
	});
}

