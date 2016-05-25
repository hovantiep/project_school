$(document).ready(function () {
    $('#slider-main').bxSlider({
        adaptiveHeight: true,
        mode: 'fade',
        captions: true,
        auto: true,
        autoControls: true,
        pause: 2000
    });

    $('#slider-sub').bxSlider({
        auto: true,
        captions: true,
        autoControls: false,
        pause: 3000,
        mode: 'horizontal',
        slideMargin: 5
    });

    $('#slider-content').bxSlider({
        adaptiveHeight: true,
        auto: true,
        autoControls: false,
        pause: 5000,
        mode: 'horizontal'
    });

    $('#slider-video').bxSlider({
        video: true,
        useCSS: false
    });

    $('#slider-sticker').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 170,
        slideMargin: 10,
        ticker: true,
        speed: 60000
    });

});