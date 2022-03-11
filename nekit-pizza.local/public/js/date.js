function dateConv(date) {
    let currentDate = Date.parse(new Date());
    let days = (currentDate - Date.parse(date))/86400000;       //86400000 - ms в дне

    let before = Math.round(days);

    switch (before) {
        case 0:
            return 'Сегодня';
            break;
        case 1:
            return '1 день назад';
            break;
        case 2:
            return '2 дня назад';
            break;
        case 3:
            return '3 дня назад';
            break;
        case 4:
            return '4 дня назад';
            break;
        case 5:
            return '5 дней назад';
            break;
        case 6:
            return '6 дней назад';
            break;
        case 7:
            return '1 нед. назад';
            break;
        case 8:
            return '1 нед. назад';
            break;
        case 9:
            return '1 нед. назад';
            break;
        case 10:
            return '1 нед. назад';
            break;
        case 11:
            return '1 нед. назад';
            break;
        case 12:
            return '1 нед. назад';
            break;
        case 13:
            return '1 нед. назад';
            break;
        case 14:
            return '2 нед. назад';
            break;
        default:
            return date;
            break;
    }

}
