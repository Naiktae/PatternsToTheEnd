$("img").click(function(){
	var id = $(this).attr("id");
	id=id.replace("i","");
	$.ajax({
		type:"post",
		url:"selection.php",
		dataType:"html",
		data:{
			id:id,
		},
		error:function(msg,string){
			alert( "Error !: " + string );
		},
		success:function(data){
			console.log(data);
			$('#selection').css("display","block");
			$('#box-img').css("display","block");
			$('#box-img').append(data);
			$("#close").click(function(){
				$('#box-img').empty();
				$('#box-img').css("display","none");
				$('#selection').css("display","none");
			});
		}
	});
});