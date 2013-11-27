$(function(){
	$('#username').keypress(function(event){
		if(event.which == 13) {
			console.log($(this).val());
		}
	});
});