function setDateRange() {
    var today = new Date();
    var nextYear = new Date();
  
    nextYear.setDate(today.getDate() + 30); // add 365 days to the current date
  
    var minDate = today.toISOString().split('T')[0];
    var maxDate = nextYear.toISOString().split('T')[0];
    
    document.getElementById("date").min = minDate;
    document.getElementById("date").max = maxDate;
  }

 !function($) {
    'use strict';

    var Maps = function() {

    };
   
    $.Maps = new Maps, $.Maps.Constructor = Maps
}(window.jQuery),

function($) {
    'use strict';

    var App = function () {
        this.$body = $('body'),
        this.$window = $(window)
    };

    App.prototype.initComponents = function() {
        $(document).ready(function () {
         
    

            // aos
            AOS.init({
                    // disable: true // if you would like to disable animation
                }
            );

           
          
        });
    }


     
    App.prototype.init = function () {
        // init components
        this.initComponents();
        
    },

    $.App = new App, $.App.Constructor = App
}(window.jQuery),

//initializing main application module
function ($) {
    "use strict";
    $.App.init();
}(window.jQuery);


/**
* Marker popup content
* 
*/








