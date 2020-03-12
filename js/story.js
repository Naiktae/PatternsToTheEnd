$('#rules').append(rules);
$("#start").click(function(){
	user[7] = $("#createur").val();
	if (user[7]=="") {
		$("#bouton").prepend('<div class="col-md-12 text-center"><p>Veuillez indiquer votre nom !</p></div>');
	}
	else
	{
		$("#nom").empty();
		question(number);
		$('#rules').empty(rules);
	}
});