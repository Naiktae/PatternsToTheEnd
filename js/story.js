$('#rules').append(rules);
$("#continue").click(function(){
	question(number);
	$('#rules').empty(rules);
});