/* Date.prototype.getWeek = function(start)
    {
        //Calcing the starting point
    start = start || 0;
    var today = new Date(this.setHours(0, 0, 0, 0));
    var day = today.getDay() - start;
    var date = today.getDate() - day;

        // Grabbing Start/End Dates
    var StartDate = new Date(today.setDate(date));
    var EndDate = new Date(today.setDate(date + 6));
    return [StartDate, EndDate];
    }

    // test code
    var Dates = new Date().getWeek();
    for(i = 0; i < Dates.length; i++) {
        day = Dates[i].getDate();
        month = (Dates[i].getMonth()) + 1;
        year = Dates[i].getFullYear();

         Dates[i] = year + '-' + month + '-' + day;
    }
    */

    $(document).ready(function() {

    	/*initialize external events
      ------------------------------------------------------*/

      $('#external-events .fc-event').each(function() {

		    // store data so the calendar knows to render an event upon drop
		    $(this).data('event', {
		      title: $.trim($(this).text()), // use the element's text as the event title
		      stick: true, // maintain when user navigates (see docs on the renderEvent method)
		      minTimeDuration: '1:00:00',
		      maxTime: '6:00:00'
		    });

		    // make the event draggable using jQuery UI
		    $(this).draggable({
          zIndex: 999,
		      revert: true,      // will cause the event to go back to its
		      revertDuration: 0  //  original position after the drag
		    });
      });

  		/*($('fc-event').overAllTime('5:00:00')) {
		        	// if so, remove the element from the "Draggable Events" list
		        	$(this).remove();
            });*/

		/*initialize calendar
		------------------------------------------------------*/
		
    $('#calendar').fullCalendar({
      header: true,
      columnFormat: 'dddd',
      allDaySlot: false,
      defaultView: 'agendaWeek',
      minTime: '07:30:00',
      maxTime: '21:00:00',
      editable: true,
      droppable: true,
      eventOverlap: false,
      eventDurationEditable:true,
      defaultTimedEventDuration:'01:00:00',
      eventMaxTimeDuration: '5:00:00',
      dragRevertDuration: 0,



      /*hover*/

      eventMouseover: function (data, event, view) {

        tooltip = '<div class="tooltiptopicevent" style="width:auto;height:auto;background:#e6e6e6;position:absolute;z-index:10001;padding:10px 10px 10px 10px ;  line-height: 200%;">' + 'Subject: ' + data.title + '</br>' + 'Schedule: ' + data.start + '</div>';

        $("body").append(tooltip);
        $(this).mouseover(function (e) {
          $(this).css('z-index', 10000);
          $('.tooltiptopicevent').fadeIn('500');
          $('.tooltiptopicevent').fadeTo('10', 1.9);
        }).mousemove(function (e) {
          $('.tooltiptopicevent').css('top', e.pageY + 10);
          $('.tooltiptopicevent').css('left', e.pageX + 20);
        });

      },

      eventMouseout: function (data, event, view) {
        $(this).css('z-index', 8);

        $('.tooltiptopicevent').remove();

      },

      drop: function(date) { 
        // this function is called when something is dropped
        // is the "remove after drop" checkbox checked?
        //if ($('#drop-remove').is(':checked')) {   // nilagayan ko lang ung comment na to 
        // if so, remove the element from the "Draggable Events" list
        $(this).remove();
        //  
        //
        //
        // console.log(date.duration());
        console.log(date.day());
        // } para kada drop matatanggal
      },


      // EVENT-LISTING MODAL (INSIDE)
      eventRender: function(event, element) {
        element.bind('dblclick', function() {
          $("#myModal").modal("toggle");
        });
      },

      eventDragStop: function( event, jsEvent, ui, view ) {

        if(isEventOverDiv(jsEvent.clientX, jsEvent.clientY)) {
          $('#calendar').fullCalendar('removeEvents', event._id);
          var el = $( "<div class='fc-event'>" ).appendTo( '#external-events-listing' ).text( event.title );
          el.draggable({
            zIndex: 999,
            revert: true, 
            revertDuration: 0 
          });
          el.data('event', { title: event.title, id :event.id, stick: true });
        }
      }
    });

    var isEventOverDiv = function(x, y) {

      var external_events = $( '#external-events' );
      var offset = external_events.offset();
      offset.right = external_events.width() + offset.left;
      offset.bottom = external_events.height() + offset.top;

            // Compare
            if (x >= offset.left
              && y >= offset.top
              && x <= offset.right
              && y <= offset .bottom) { return true; }
              return false;

          }

        });

// EVENT-LISTING MODAL (OUTSIDE)
$(document).ready(function(){
  $(".CSubjects").dblclick(function(){
    $("#myModal").modal("toggle");
  });
});

