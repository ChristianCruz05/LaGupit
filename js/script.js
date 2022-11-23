$(document).ready(function () {
    var breakpoint = 1000;

    if ($(window).width() < breakpoint) {
        $('.js-slidein').removeClass('js-slidein');
    }

    $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
        $(this).removeClass('js-slidein');
        }
    });

    $(window).scroll(function () {
        $('.js-slidein').each(function (i) {
        var bottomObject = $(this).offset().top + $(this).outerHeight() / 3;
        var bottomWindow = $(window).scrollTop() + $(window).height();

        if (bottomWindow > bottomObject) {
            $(this).addClass('js-slidein-visible');
        }
        });
    });
});