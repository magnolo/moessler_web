/*
	Author: nicdark
	Author URI: http://www.nicdarkthemes.com/
*/


	function nicdark_form_newsletter(){
            
        var nicdark_form_newsletter_email = $('[name="nicdark_form_newsletter_email"]').val();
        
        $.ajax({
            
          method: "POST",
          url: "forms/nicdark_form_newsletter.php",
          data: { 
              nicdark_form_newsletter_email: nicdark_form_newsletter_email
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