$('#rules').append(rules);
$("#continue").click(function(){
	user[7] = $("#createur").val();
	if (user[7]=="") {
		$("#bouton").prepend('<div class="col-md-12 text-center"><p>Veuillez indiquer votre nom !</p></div>');
	}
	else
	{
		$("#bouton").empty();
		$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue">Continuer</button></div>');
		$("#nom").empty();
		question(number);
		$('#rules').empty(rules);
	}
});