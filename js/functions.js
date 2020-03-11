function question(number){
	$("#question").empty();
	$("#answers").empty();
	$("#question").append(questions[number]);
	$("#answers").append(answers[number]);
	switch(number){
		case 0:
		$("#bow").click(function(){
			user[0] = "brown";
			number++;
			question(number);
		});
		$("#axe").click(function(){
			user[0] = "grey";
			number++;
			question(number);
		});
		$("#food").click(function(){
			user[0] = "black";
			number++;
			question(number);
		});
		$("#bottle").click(function(){
			user[0] = "lightblue";
			number++;
			question(number);
		});
		$("#bag").click(function(){
			user[0] = "orange";
			number++;
			question(number);
		});
		$("#map").click(function(){
			user[0] = "purple";
			number++;
			question(number);
		});
		$("#medic").click(function(){
			user[0] = "white";
			number++;
			question(number);
		});
		$("#plush").click(function(){
			user[0] = "pink";
			number++;
			question(number);
		});
		break;
		case 1:
		$("#forest").click(function(){
			user[1] = "green";
			number++;
			question(number);
		});
		$("#cave").click(function(){
			user[1] = "yellow";
			number++;
			question(number);
		});
		$("#sea").click(function(){
			user[1] = "blue";
			number++;
			question(number);
		});
		$("#hills").click(function(){
			user[1] = "red";
			number++;
			question(number);
		});
		break;
		case 2:
		$("#diffus").click(function(){
			user[2] = "diffus";
			number++;
			question(number);
		});
		$("#mariniere").click(function(){
			user[2] = "mariniere";
			number++;
			question(number);
		});
		break;
		case 3:
		$("#wood").click(function(){
			user[3] = "petit";
			number++;
			question(number);
		});
		$("#clay").click(function(){
			user[3] = "moyen";
			number++;
			question(number);
		});
		$("#stone").click(function(){
			user[3] = "grand";
			number++;
			question(number);
		});
		break;
		case 4:
		$("#taming").click(function(){
			user[4] = "droite";
			number++;
			question(number);
		});
		$("#farming").click(function(){
			user[4] = "gauche";
			number++;
			question(number);
		});
		$("#hunting").click(function(){
			user[4] = "haut";
			number++;
			question(number);
		});
		$("#foraging").click(function(){
			user[4] = "bas";
			number++;
			question(number);
		});
		break;
		case 5:
		$("#kill").click(function(){
			user[5] = "kill";
			number++;
			question(number);
		});
		$("#live").click(function(){
			user[5] = "live";
			number++;
			question(number);
		});
		break;
		case 6:
		$("#yes").click(function(){
			user[6] = "yes";
			end();
		});
		$("#no").click(function(){
			user[6] = "no";
			end();
		});
		break;
	}
}
function end(){
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
		},
		error:function(msg,string){
			alert( "Error !: " + string );
		},
		success:function(data){
			$("#rules").append(data);
			$("#question").append(graph);
			$("#bouton").empty();
			$("#bouton").append(download);
			$("#fresque").append(fresque);
		}
		});
}