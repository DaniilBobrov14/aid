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

        console.log(hourNow + '.' + minutesNow);

        let dayNow = dateTimeNow.getUTCDate().toLocaleString('ru');

        let monthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

        let yearNow = dateTimeNow.getUTCFullYear();

        let monthNowNumber = Number(monthNow) + 1;

        let monthNameNow = monthsKeys[monthNowNumber]; //добавляет +1 к текущему месяцу, чтобы всего было 12

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        let reHourStart = new RegExp('^[0-9]....');

        let reHourEnd = new RegExp('....[0-9]$');

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

            if (jQuery(this).hasClass('table-primary')) {

                let siblingsTr = jQuery(this).siblings();
                let siblingsTrNext = siblingsTr['context']['nextSibling'];
                // let hourStart = reHourStart.exec(jQuery(siblingsTrNext['firstChild']).html());
                // let hourEnd = reHourEnd.exec(jQuery(siblingsTrNext['firstChild']).html());
                let hourStart = reHourStart.exec(jQuery(this).children().html()) ;
                let hourEnd = reHourEnd.exec(jQuery(this).children().html());

                console.log(hourStart);


                console.log(jQuery(this).children());

                jQuery(this).children().attr('data-start-event' , hourStart[0]);

                jQuery(this).children().attr('data-end-event' , hourEnd[0]);

                // jQuery(siblingsTrNext['firstChild']).attr('data-start-event' , hourStart[0]); //добавление часа начала ивента
                //
                // jQuery(siblingsTrNext['firstChild']).attr('data-end-event' , hourEnd[0]);

            }

        });
    }

});