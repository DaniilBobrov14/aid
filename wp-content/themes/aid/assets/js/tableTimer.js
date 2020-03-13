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

        let dayNow = dateTimeNow.getUTCDate().toLocaleString('ru');

        let monthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

        let yearNow = dateTimeNow.getUTCFullYear();

        let monthNowNumber = Number(monthNow) + 1;

        let monthNameNow = monthsKeys[monthNowNumber]; //добавляет +1 к текущему месяцу, чтобы всего было 12

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        let reDayNumber = new RegExp('^[0-9].');

        jQuery('td').each(function () {

            let array = reMonths.exec(jQuery(this).html()); //регулярное выражение ищет в html число месяца

            if (array) {

                let htmlMonth = array[0];

                if (htmlMonth == monthNameNow) {

                    let dayNumberHtml = reDayNumber.exec(jQuery(this).html());

                    if (dayNow == dayNumberHtml) {

                        jQuery(this).parent().addClass('table-primary');//устанавливает для tr подсветку по текущему месяцу

                        jQuery(this).parent().attr('data-current-date' , dayNumberHtml + '.' + monthNowNumber + '.' + yearNow); //добавляет дата атрибут для tr/

                    }

                }

            }

        });

        jQuery('tr').each(function () {

            if (jQuery(this).attr('data-current-date') !== undefined) {

                console.log(jQuery(this).attr('data-current-date'));
                console.log('существует');

            }

        })//Определяем время внутри нужных строк. Подчеркивает время нужным цветом (зеленым), если событие проходит сейчас
    }

});