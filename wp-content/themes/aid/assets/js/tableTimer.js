jQuery(document).ready(function() {

    if (jQuery('section').hasClass('program')) {

        jQuery('table').addClass('table table-bordered'); //добавление класса в таблицу

        let dateTimeNow = new Date();

        let reMonths = new RegExp('января|февраля|марта|апреля|мая|июня|июля|августа|сентября|октября|ноября|декабря');

        jQuery('td').each(function () {

            let array = reMonths.exec(jQuery(this).html()); //регулярное выражение ищет в html число

            if (array) {

                console.log(array);

                // let dateArray = reMonths.exec(array.input);
                //
                // if (dateArray) {
                //
                //     console.log(dateArray);
                //
                //     console.log('успех');
                //
                // }

            }

        })
    }

});