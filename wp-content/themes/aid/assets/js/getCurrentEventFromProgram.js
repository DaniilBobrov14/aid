jQuery(function ($) {

   function addDataAttributes () {

       if ($('table').hasClass('table-program')) {

           $('.table-row').each(function () {

               let dataDate = $(this).find('.date-cell').text();

               let timeDate = $(this).find('.time-cell').text();

               $(this).find('.date-cell').attr('data-date' , dataDate);

               $(this).find('.time-cell').attr('data-time' , timeDate);

           });

           return true ;

       }
   }

   addDataAttributes();

});