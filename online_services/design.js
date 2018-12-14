

// IMAGE UPLOAD
$(document).ready(function(){
	$("#form9").on("change",function(e){
		var filename = e.target.value.split('\\').pop();
		$("#label-span").text(filename);
	});
});

