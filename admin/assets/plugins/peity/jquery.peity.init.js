       
$(function() {
    "use strict";

	   
            $("span.pie").peity("pie",{
                width: 120,
                height: 120 
            });
        
        

          $("span.donut").peity("donut",{
                width: 120,
                height: 120 
            });

       
         $('.peity-line').each(function() {
            $(this).peity("line", $(this).data());
         });

      
          $('.peity-bar').each(function() {
            $(this).peity("bar", $(this).data());
         });
         
   });