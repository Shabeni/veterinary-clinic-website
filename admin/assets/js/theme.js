

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








