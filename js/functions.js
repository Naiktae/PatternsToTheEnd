function question(number){
	$("#bouton").empty();
	$("#question").empty();
	$("#answers").empty();
	$("#question").append(questions[number]);
	$("#answers").append(answers[number]);
	switch(number){
		case 0:
		$("#bow").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");	
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "bow";
			lastClicked = "#bow";
			continuer();
		});
		$("#axe").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "axe";
			lastClicked = "#axe";
			continuer();
		});
		$("#food").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "food";
			lastClicked = "#food";
			continuer();
		});
		$("#bottle").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "bottle";
			lastClicked = "#bottle";
			continuer();
		});
		$("#bag").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "bag";
			lastClicked = "#bag";
			continuer();
		});
		$("#map").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "map";
			lastClicked = "#map";
			continuer();
		});
		$("#medic").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "medic";
			lastClicked = "#medic";
			continuer();
		});
		$("#plush").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "plush";
			lastClicked = "#plush";
			continuer();
		});
		break;
		case 1:
		$("#forest").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "forest";
			lastClicked = "#forest";
			continuer();
		});
		$("#cave").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "cave";
			lastClicked = "#cave";
			continuer();
		});
		$("#sea").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "sea";
			lastClicked = "#sea";
			continuer();
		});
		$("#hills").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "hills";
			lastClicked = "#hills";
			continuer();
		});
		break;
		case 2:
		$("#diffus").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[2] = "diffus";
			lastClicked = "#diffus";
			continuer();
		});
		$("#mariniere").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[2] = "mariniere";
			lastClicked = "#mariniere";
			continuer();
		});
		break;
		case 3:
		$("#wood").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "wood";
			lastClicked = "#wood";
			continuer();
		});
		$("#clay").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "clay";
			lastClicked = "#clay";
			continuer();
		});
		$("#stone").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "stone";
			lastClicked = "#stone";
			continuer();
		});
		break;
		case 4:
		$("#taming").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "taming";
			lastClicked = "#taming";
			continuer();
		});
		$("#farming").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "farming";
			lastClicked = "#farming";
			continuer();
		});
		$("#hunting").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "hunting";
			lastClicked = "#hunting";
			continuer();
		});
		$("#foraging").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "foraging";
			lastClicked = "#foraging";
			continuer();
		});
		break;
		case 5:
		$("#kill").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[5] = "kill";
			lastClicked = "#kill";
			continuer();
		});
		$("#live").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[5] = "live";
			lastClicked = "#live";
			continuer();
		});
		break;
		case 6:
		$("#yes").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[6] = "yes";
			lastClicked = "#yes";
			continuer();
		});
		$("#no").click(function(){
			$("#bouton").empty();
			$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[6] = "no";
			lastClicked = "#no";
			continuer();
		});
		break;
		case 7:
			end()
		break;
	}
	function continuer(){
		$("#continue1").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue2").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue3").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue4").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue5").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue6").click(function(){
				number++;
				console.log(number);
				question(number);
		});
		$("#continue7").click(function(){
				number++;
				console.log(number);
				question(number);
		});
	}
}
function end(){
	console.log(user);
	$("#question").empty();
	$("#answers").empty();
	$.ajax({
		type:"post",
		url:"fin.php",
		dataType:"html",
		data:{
			color1:user[0],
			color2:user[1],
			motif:user[2],
			size:user[3],
			direction:user[4],
			life:user[5],
			survive:user[6],
			createur:user[7],
		},
		error:function(msg,string){
			alert( "Error !: " + string );
		},
		success:function(data){
			$("#rules").append(data);
			$("#question").append(graph);
			$("#bouton").empty();
			$("#fresque").append(fresqueTxt);
			$("#fresque").append(fresque);
			$("#fresque").append(restart);
		}
	});
}