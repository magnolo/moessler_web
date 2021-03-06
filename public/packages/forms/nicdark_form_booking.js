/*
	Author: nicdark
	Author URI: http://www.nicdarkthemes.com/
*/


	function nicdark_form_booking(){
            
        var nicdark_form_booking_name = $('[name="nicdark_form_booking_name"]').val();
        var nicdark_form_booking_email = $('[name="nicdark_form_booking_email"]').val();
        var nicdark_form_booking_people = $('[name="nicdark_form_booking_people"]').val();
        var nicdark_form_booking_date = $('[name="nicdark_form_booking_date"]').val();
        var nicdark_form_booking_message = $('[name="nicdark_form_booking_message"]').val();
        
        $.ajax({
            
          method: "POST",
          url: "forms/nicdark_form_booking.php",
          data: { 
              nicdark_form_booking_name: nicdark_form_booking_name, 
              nicdark_form_booking_email: nicdark_form_booking_email, 
              nicdark_form_booking_people: nicdark_form_booking_people, 
              nicdark_form_booking_date: nicdark_form_booking_date, 
              nicdark_form_booking_message: nicdark_form_booking_message
          }
        
        })
        
        .success(function( nicdark_message ) {
            
            
            
            //POPUP
            $.magnificPopup.open({
              items: {
                src: '<div id="nicdark_window" class="nicdark_bg_greydark"><div class="nicdark_textevidence nicdark_bg_violet"><div class="nicdark_margin20"><h4 class="white">CONTACT</h4></div></div><div class="nicdark_padding20 nicdark_display_inlineblock nicdark_width_percentage100 nicdark_sizing"><p class="white">'+ nicdark_message +'</p></div></div>', // can be a HTML string, jQuery object, or CSS selector
                type: 'inline'
              }
            });
            //POPUP
            
            
        })
        .error(function(){
         
            
            //POPUP
            $.magnificPopup.open({
              items: {
                src: '<div id="nicdark_window" class="nicdark_bg_greydark"><div class="nicdark_textevidence nicdark_bg_violet"><div class="nicdark_margin20"><h4 class="white">ERROR</h4></div></div><div class="nicdark_padding20 nicdark_display_inlineblock nicdark_width_percentage100 nicdark_sizing"><p class="white">Server Error, please contact us by our email.</p></div></div>', // can be a HTML string, jQuery object, or CSS selector
                type: 'inline'
              }
            });
            //POPUP
            
            
        });

    }