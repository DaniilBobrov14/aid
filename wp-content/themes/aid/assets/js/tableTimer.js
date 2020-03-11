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

        let mouthNow = dateTimeNow.getUTCMonth().toLocaleString('ru');

        let mouthName = mouthsKeys[mouthNow];

        console.log(mouthNow);

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        jQuery('td').each(function () {

            let array = reMonths.exec(jQuery(this).html()); //регулярное выражение ищет в html число

            if (array) {



            }

        })
    }

});

//подчеркнуть время, если будет подчеркнута дата