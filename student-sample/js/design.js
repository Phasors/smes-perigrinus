  $(document).ready(function () {
  	$('#main-menu').on('click', function () {
  		$('#sidebar').toggleClass('active');
  	});
  });

   $(document).ready(function () {
    $('#main-menu').on('click', function () {
      $('#sidebar-regis').toggleClass('active');
    });
  });

  // $(document).ready(function () {
  // 	$('img.picture-login').fadeIn(1000).removeClass('picture-login');
  // });

  // $(document).ready(function () {
  // 	$('div.login').fadeIn(800).removeClass('login');
  // });




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



// FOR REGISTRATION
$(document).ready(function(){
    if(window.location.href == "http://localhost/elec4/registration.php"){
      $('#sidebar').attr('id', 'sidebar-regis');
    }
  });



