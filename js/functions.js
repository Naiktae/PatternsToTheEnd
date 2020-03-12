function question(number){
	$("#question").empty();
	$("#answers").empty();
	$("#question").append(questions[number]);
	$("#answers").append(answers[number]);

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
			createur:user[7],
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
			$("#fresque").append(restart);
		}
		});
}