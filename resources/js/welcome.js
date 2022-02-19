$(".showpopup").click(function (e) { 
    e.preventDefault();
    $(".popup").fadeIn(300, 'linear')
});

$(".closepopup").click(function (e) { 
    e.preventDefault();
    hidepopup();
});

function hidepopup () {
    $(".popup").fadeOut(300, 'linear');
}

$(document).mouseup(function (click) { // событие клика по веб-документу
    var div = $('.popup_content'); // тут указываем ID элемента
    if (!div.is(click.target) // если клик был не по нашему блоку
        && div.has(click.target).length === 0) { // и не по его дочерним элементам
        hidepopup(); // скрываем его
    }
});