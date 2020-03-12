function question(number){
	$("#bouton").empty();
	$("#bouton").append('<div class="col-md-12 text-center"><button type="button" class="btn btn-lg btn-outline-secondary mt-4 shadow-sm" id="continue'+(number+1)+'">Continuer</button></div>');
	$("#question").empty();
	$("#answers").empty();
	$("#question").append(questions[number]);
	$("#answers").append(answers[number]);
	switch(number){
		case 0:
		$("#bow").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");	
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "brown";
			lastClicked = "#bow";
		});
		$("#axe").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "grey";
			lastClicked = "#axe";
		});
		$("#food").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "black";
			lastClicked = "#food";
		});
		$("#bottle").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "lightblue";
			lastClicked = "#bottle";
		});
		$("#bag").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "orange";
			lastClicked = "#bag";
		});
		$("#map").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "purple";
			lastClicked = "#map";
		});
		$("#medic").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "white";
			lastClicked = "#medic";
		});
		$("#plush").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[0] = "pink";
			lastClicked = "#plush";
		});
		break;
		case 1:
		$("#forest").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "green";
			lastClicked = "#forest";
		});
		$("#cave").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "yellow";
			lastClicked = "#cave";
		});
		$("#sea").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "blue";
			lastClicked = "#sea";
		});
		$("#hills").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[1] = "red";
			lastClicked = "#hills";
		});
		break;
		case 2:
		$("#diffus").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[2] = "diffus";
			lastClicked = "#diffus";
		});
		$("#mariniere").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[2] = "mariniere";
			lastClicked = "#mariniere";
		});
		break;
		case 3:
		$("#wood").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "petit";
			lastClicked = "#wood";
		});
		$("#clay").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "moyen";
			lastClicked = "#clay";
		});
		$("#stone").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[3] = "grand";
			lastClicked = "#stone";
		});
		break;
		case 4:
		$("#taming").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "droite";
			lastClicked = "#taming";
		});
		$("#farming").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "gauche";
			lastClicked = "#farming";
		});
		$("#hunting").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "haut";
			lastClicked = "#hunting";
		});
		$("#foraging").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[4] = "bas";
			lastClicked = "#foraging";
		});
		break;
		case 5:
		$("#kill").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[5] = "kill";
			lastClicked = "#kill";
		});
		$("#live").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[5] = "live";
			lastClicked = "#live";
		});
		break;
		case 6:
		$("#yes").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[6] = "yes";
			lastClicked = "#yes";
		});
		$("#no").click(function(){
			$(lastClicked).removeClass("cc-selected");
			$(lastClicked).addClass("cc-unselected");
			$(this).addClass("cc-selected");
			$(this).removeClass("cc-unselected");
			user[6] = "no";
			lastClicked = "#no";
		});
		break;
		case 7:
			end()
		break;
	}
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