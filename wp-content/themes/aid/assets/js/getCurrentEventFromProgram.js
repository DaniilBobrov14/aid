jQuery(function ($) {


    /*
    Добавление дата-атрибутов к тегам html
    */

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

       else {

           return false ;

       }
   }

    /*
     Получить текущую дату.
     */

   function getCurrentDate () {

       if (addDataAttributes() == true) {

           var dateTimeNow = new Date();

           var dayNow = dateTimeNow.getUTCDate().toLocaleString('ru');

           var monthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

           var monthNowNumber = Number(monthNow);

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

           /*
           * какой-то баг связанный с месяцом.
           * Приходится добавлять на +1
           * */

           var currentDate = dayNow + monthsKeys[monthNowNumber + 1];

           var currentDateClear = currentDate.replace(/(\d+)/g, '$1 ');

           return currentDateClear;

       }

       else {

           return false ;

       }

   }

    /*
     Получить текущее время.
     */

   function getCurrentTime () {

       if (addDataAttributes() == true) {

           var dateTimeNow = new Date();

           var hourNow = dateTimeNow.getHours().toLocaleString('ru');

           var minutesNow = dateTimeNow.getMinutes().toLocaleString('ru');

           var currentTime = hourNow + minutesNow ;

           return currentTime ;

       }

   }

    /*
     Получить необходимую строку с датой исходя из текущей даты.
     Получаемый параметр в формате jquery
     */

   function getTargetDateRow (currentDate, targetRow) {

       if (currentDate) {

           $('.date-cell').each(function () {

               var dataAttribute = $(this).data('date');

               var dataAttributeClear = dataAttribute.replace(/\s+/g, ' ').trim();

               if (currentDate == dataAttributeClear) {

                   targetRow = $(this).parent();

               }

           });

       }

       return targetRow ;

   }

    /*
      Отменить цветом success строку с текущей датой
      */

    function markTargetDateRow (targetRow) {

        targetRow.addClass('table-success');

        return true ;

    }

    /*
      Вернуть все строки table-row после targetRow
      */

    function getTargetTimeRows (targetDateRow, targetTimeRows) {

        targetTimeRows = targetDateRow.nextAll();

        return targetTimeRows ;

    }

    /*
      Поменить цветом текущее время события по текущей дате
      */

    function markTargetTimeRow (targetTimeRows) {

        console.log(targetTimeRows);

        targetTimeRows.each(function () {

            if ($(this).children().hasClass('time-cell')) {

                var dataAttribute = $(this).find('.time-cell').attr('data-time');

                var dataAttributeClear = dataAttribute.replace(/\s+/g, ' ').trim();

                console.log(dataAttributeClear);

            }

            else {

                return false ;

            }

        });

        return true ;

    }


   addDataAttributes();

   var currentDate = getCurrentDate();

   var currentTime = getCurrentTime();

   var targetDateRow = getTargetDateRow(currentDate);

   markTargetDateRow(targetDateRow);

   var targetTimeRows = getTargetTimeRows(targetDateRow);

   markTargetTimeRow(targetTimeRows);

});