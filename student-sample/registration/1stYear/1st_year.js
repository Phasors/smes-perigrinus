
$(".cal_2_sched").on('click', function(){
  // if( $(this).hasClass("sched_1") ){
  //   document.getElementById('calcu2').value="Done 1";
  // }
  // else if( $(this).hasClass("sched_2") ){
  //   document.getElementById('calcu2').value="Done 2";
  // }

  if( $(this).hasClass("sched_1") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#calcu_3, #calcu_2").removeClass('btn-success');
    $("#calcu_3, #calcu_2").addClass('btn-outline-success');
    document.getElementById('calcu2').value="Done 1";
  }
  else if( $(this).hasClass("sched_2") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#calcu_1, #calcu_3").removeClass('btn-success');
    $("#calcu_1, #calcu_3").addClass('btn-outline-success');
    document.getElementById('calcu2').value="Done 2";
  }

  else if( $(this).hasClass("sched_3") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#calcu_1, #calcu_2").removeClass('btn-success');
    $("#calcu_1, #calcu_2").addClass('btn-outline-success');
    document.getElementById('calcu2').value="Done 3";
  }

  $('#calculus2-modal').modal('toggle');
  $('#calcu2').removeClass('btn-outline-success')
  .addClass('btn-success');
});



$(".cwts_sched").on('click', function(){
  if( $(this).hasClass("sched_1") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#cwts_2, #cwts_3").removeClass('btn-success');
    $("#cwts_2, #cwts_3").addClass('btn-outline-success');
    document.getElementById('cwts').value="Done 1";
  }
  else if( $(this).hasClass("sched_2") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#cwts_1, #cwts_3").removeClass('btn-success');
    $("#cwts_1, #cwts_3").addClass('btn-outline-success');
    document.getElementById('cwts').value="Done 2";
  }

  else if( $(this).hasClass("sched_3") ){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $("#cwts_1, #cwts_2").removeClass('btn-success');
    $("#cwts_1, #cwts_2").addClass('btn-outline-success');
    document.getElementById('cwts').value="Done 3";
  }



  $('#cwts-modal').modal('toggle');
  $('#cwts').removeClass('btn-outline-success')
  .addClass('btn-success');
});