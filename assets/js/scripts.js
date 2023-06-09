$(document).ready(function(){
    
    function scrollNavFix(){
        if ($(window).scrollTop() <=  50) {
            $("#navbar_container").addClass('container');
            $("#desktop_navbar").removeClass('bg-navbar-scroll');
        }else{
            $("#navbar_container").removeClass('container');
            $("#desktop_navbar").addClass('bg-navbar-scroll');
        }
    }

    // init hero typed text
    new Typed('.text-typed-hero', {
        strings: $('.text-items-typed-hero').text().split('||'),
        typeSpeed: 100,
        loop: true,
        backDelay: 1100,
        backSpeed: 50
    });

    // navbar scroll style fix
    scrollNavFix();
    $(window).scroll(function () { 
        scrollNavFix();
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

    // pure javascript count up
    let valueDisplays = document.querySelectorAll(".count-up");
    let interval      = 4000;

    valueDisplays.forEach((valueDisplay) => {
        let startValue  = 0;
        let endValue    = parseInt(valueDisplay.getAttribute("data-val"));
        let duration    = Math.floor(interval / endValue);
        let counter     = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });
});

