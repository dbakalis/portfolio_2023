$(document).ready(function(){
    
    // init hero typed text
    new Typed('.text-typed-hero', {
        strings: $('.text-items-typed-hero').text().split('||'),
        typeSpeed: 100,
        loop: true,
        backDelay: 1100,
        backSpeed: 50
    });

    // skills progress bars
    $(".progress-bar-php").animate({width: "90%"}, 2000).text('90%');
    $(".progress-bar-html").animate({width: "90%"}, 2400).text('90%');
    $(".progress-bar-css").animate({width: "80%"}, 2600).text('80%');
    $(".progress-bar-js").animate({width: "80%"}, 3000).text('80%');
    $(".progress-bar-laravel").animate({width: "50%"}, 6000).text('50%');
    $(".progress-bar-php-header").attr('aria-valuenow', 70);
    $(".progress-bar-css-header").attr('aria-valuenow', 70);
    $(".progress-bar-js-header").attr('aria-valuenow', 70);
    $(".progress-bar-html-header").attr('aria-valuenow', 70);
    $(".progress-bar-laravel-header").attr('aria-valuenow', 70);

    

});