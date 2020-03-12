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
			$('#box-img').prepend(data);
		}
	});
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
	$('#selection').css("display","none");
}