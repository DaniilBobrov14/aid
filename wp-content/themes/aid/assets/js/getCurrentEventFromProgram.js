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

   function getCurrentDate () {

       var dateTimeNow = new Date();

       var dayNow = dateTimeNow.getUTCDate().toLocaleString('ru');

       var monthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

       var monthsKeys = {

           1 : 'января',
           2 : 'февраля',
           3 : 'марта',
           4 : 'апреля',
           5 : 'мая',
           6 : 'июня',
           7 : 'июля',
           8 : 'августа',
           9 : 'сентября',
           10 : 'октября',
           11 : 'ноября',
           12 : 'декабря'

       };

       if (addDataAttributes() == true) {



       }

   }

   addDataAttributes();

   getCurrentDate();

});