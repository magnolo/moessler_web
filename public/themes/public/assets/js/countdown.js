jQuery(document).ready(function() {

//START COUNTDOWN GRID SECTION
      //variables
      var endDate = "June 06, 2016 10:30:00";
      var grid = "grid_3";
      //insert the class nicdark_displaynone in the var if you wnat to hide the visualization
      var display_years = "nicdark_displaynone";
      var display_days = "";
      var display_hours = "";
      var display_minutes = "";
      var display_seconds = "";
      //call
      $(".nicdark_countdown").countdown({
        date: endDate,
        render: function(data) {
          $(this.el).html("<div class=\"nicdark_bg_greydark " + display_years + " nicdark_center\"><div class=\"nicdark_space20\"></div><h3 class=\"white\">" + this.leadingZeros(data.years, 4) + "</h3><div class=\"nicdark_space5\"></div><h6 class=\"white\">Days</h6><div class=\"nicdark_space20 nicdark_disable_float\"></div></div><div class=\"nicdark_bg_greydark2 " + display_days + " nicdark_center\"><div class=\"nicdark_space20\"></div><h3 class=\"white\">" + this.leadingZeros(data.days, 3) + "</h3><div class=\"nicdark_space5\"></div><h6 class=\"white\">Days</h6><div class=\"nicdark_space20 nicdark_disable_float\"></div></div><div class=\"nicdark_bg_greydark " + display_hours + " nicdark_center\"><div class=\"nicdark_space20\"></div><h3 class=\"white\">" + this.leadingZeros(data.hours, 2) + "</h3><div class=\"nicdark_space5\"></div><h6 class=\"white\">Hours</h6><div class=\"nicdark_space20 nicdark_disable_float\"></div></div><div class=\"nicdark_bg_greydark2 " + display_minutes + " nicdark_center\"><div class=\"nicdark_space20\"></div><h3 class=\"white\">" + this.leadingZeros(data.min, 2) + "</h3><div class=\"nicdark_space5\"></div><h6 class=\"white\">Min</h6><div class=\"nicdark_space20 nicdark_disable_float\"></div></div><div class=\"nicdark_bg_greydark " + display_seconds + " nicdark_center\"><div class=\"nicdark_space20\"></div><h3 class=\"white\">" + this.leadingZeros(data.sec, 2) + "</h3><div class=\"nicdark_space5\"></div><h6 class=\"white\">Sec</h6><div class=\"nicdark_space20 nicdark_disable_float\"></div></div>");
        }
      });
      //END COUNTDOWN GRID SECTION

    });
