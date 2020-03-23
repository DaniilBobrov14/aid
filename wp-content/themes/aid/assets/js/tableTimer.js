jQuery(document).ready(function() {

    if (jQuery('section').hasClass('program')) {

        jQuery('table').addClass('table table-bordered'); //добавление класса в таблицу

        let dateTimeNow = new Date();

        let monthsKeys = {

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

        let hourNow = dateTimeNow.getHours().toLocaleString('ru');

        let minutesNow = dateTimeNow.getMinutes().toLocaleString('ru');

        let dayNow = dateTimeNow.getUTCDate().toLocaleString('ru');

        let monthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

        let yearNow = dateTimeNow.getUTCFullYear();

        let monthNowNumber = Number(monthNow) + 1;

        let monthNameNow = monthsKeys[monthNowNumber]; //добавляет +1 к текущему месяцу, чтобы всего было 12

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        let reHourStart = new RegExp('^[0-9]....');

        let reHourEnd = new RegExp('....[0-9]$');

        let reDayNumber = new RegExp('^[0-9].');

        let reFindNumber = new RegExp('[0-9]');

        jQuery('td').each(function () {

            let array = reMonths.exec(jQuery(this).html()); //регулярное выражение ищет в html число месяца

            if (array) {

                let htmlMonth = array[0];

                let dayNumberHtml = reDayNumber.exec(jQuery(this).html());

                if (htmlMonth == monthNameNow) {

                    if (dayNow == dayNumberHtml) {

                        jQuery(this).parent().addClass('table-primary');//устанавливает для tr подсветку по текущему месяцу

                        jQuery(this).parent().attr('data-current-date' , dayNumberHtml + '.' + monthNowNumber + '.' + yearNow); //добавляет дата атрибут для tr/

                        jQuery(this).parent().attr('data-current-status-date' , 'yes'); // добавляет статус текущего месяца

                    }

                }

                else {

                    jQuery(this).parent().attr('data-current-date' , dayNumberHtml + '.' + monthNowNumber + '.' + yearNow); //добавляет дата атрибут для tr/

                    jQuery(this).parent().attr('data-current-status-date' , 'no'); //добавляет для tr атрибут не текущего месяца

                }

            }

            else {

                if (jQuery(this).parent().attr('data-current-date')) {

                }

                else {

                    jQuery(this).parent().attr('data-current-status-date' , 'cell');

                }

            }

        });

        jQuery('[data-current-status-date="cell"]').each(function() {

            if (jQuery(this).prev().data('current-status-date') == 'yes') {

                jQuery(this).attr('data-status-event' , 'event');

                jQuery(this).next().attr('data-status-event' , 'event');

            }

        })
    }

});