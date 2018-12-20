// $("#sidebar").css({
// 	"height": $(window).height() + "px"

// });

// alert($(document).height());

// $(window).on('resize', function(){
// 	var win = $(this); 
// 	if (win.width() <= 1400 ) {
// 		$("#sidebar").css({
// 			"overflow-y": "scroll" , 
// 			"height": $(window).height() + "px" 
// 		});

// 	} else {
// 		$("#sidebar").css({
// 			"height": "unset",
// 			"overflow-y" : "hidden"
// 		});
// 	}

// });

$(document).ready(function(){
	$("#form9").on("change",function(e){
		var filename = e.target.value.split('\\').pop();
		$("#label-span").text(filename);
	});
});




$(document).ready(function () {
	$('#main-menu').on('click', function () {
		$('#sidebar').toggleClass('active');
	});
});


  $(document).ready(function(){

    $("#other_nation").hide();

    $("#nationality").change(function(){
      if($(this).val()=="others")
      {    
        $("#other_nation").show();
      }
      else
      {
        $("#other_nation").hide();
      }
    });
  });

  $(document).ready(function(){

    $("#other_nation_father").hide();

    $("#nationality_father").change(function(){
      if($(this).val()=="others")
      {    
        $("#other_nation_father").show();
      }
      else
      {
        $("#other_nation_father").hide();
      }
    });
  });

  $(document).ready(function(){

    $("#other_nation_mother").hide();

    $("#nationality_mother").change(function(){
      if($(this).val()=="others")
      {    
        $("#other_nation_mother").show();
      }
      else
      {
        $("#other_nation_mother").hide();
      }
    });
  });


  