jQuery(document).ready(function() {

    if (jQuery('section').hasClass('program')) {

        jQuery('table').addClass('table table-bordered'); //добавление класса в таблицу

        let dateTimeNow = new Date();

        let mouthsKeys = {

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

        let monthNowNumber = Number(monthNow) + 1;

        let monthNameNow = mouthsKeys[monthNowNumber]; //добавляет +1 к текущему месяцу, чтобы всего было 12

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        jQuery('td').each(function () {

            let array = reMonths.exec(jQuery(this).html()); //регулярное выражение ищет в html число

            if (array) {

                let htmlMonth = array[0];

                if (htmlMonth == monthNameNow) {

                    console.log('сейчас ' + monthNameNow);
                    console.log('сработало');

                }

                else {

                    console.log('сейчас не тот месяц');
                    console.log(monthNameNow);
                    console.log(htmlMonth);
                }

            }

        })
    }

});

//подчеркнуть время, если будет подчеркнута дата