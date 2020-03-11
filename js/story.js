$('#rules').append(rules);
$("#continue").click(function(){
	user[7] = $("#createur").val();
	$("#nom").empty();
	question(number);
	$('#rules').empty(rules);
});