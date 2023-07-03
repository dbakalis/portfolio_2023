$(document).ready(function(){
    var count_up_enabled = 1;
    var skills_bars_fill = 1;
    
    // scrol filx
    function scrollNavFix(){
        if ($(window).scrollTop() <=  50) {
            $("#desktop_navbar").removeClass('py-1');
            $("#desktop_navbar").removeClass('bg-navbar-scroll');
            $("#navbar_container").addClass('container');
            $("#desktop_navbar").addClass('py-4');
        }else{
            $("#desktop_navbar").removeClass('py-4');
            $("#navbar_container").removeClass('container');
            $("#desktop_navbar").addClass('bg-navbar-scroll');
            $("#desktop_navbar").addClass('py-1');
        }
    }

    // determine if elemnt is in viewport (true / false)
    function elementInViewPort(element_selector){
        const elem       = document.querySelector(element_selector);
        const rect       = elem.getBoundingClientRect();
        const inViewPort = rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);

        return inViewPort;
    }

    // init hero typed text
    new Typed('.text-typed-hero', {
        strings: $('.text-items-typed-hero').text().split('||'),
        typeSpeed: 100,
        loop: true,
        backDelay: 1100,
        backSpeed: 50
    });
   
    // skills progress bars
    function fillSkillsProgressBars(){
        const skills_inviewport = elementInViewPort('#about')

        if( (skills_inviewport) && (skills_bars_fill == 1) ){
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

            // do not count up again on re-scroll on this div
            skills_bars_fill = 0;
        }
    }
    
    // pure javascript count up
    function countUpAchievments(){
        const achievments_inviewport = elementInViewPort('#achievments')

        if( (achievments_inviewport) && (count_up_enabled == 1) ){
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

            // do not count up again on re-scroll on this div
            count_up_enabled = 0;
        }
    }

    scrollNavFix();
    fillSkillsProgressBars();
    countUpAchievments();

    // scroll event handler
    $(window).scroll(function () { 
        scrollNavFix();
        fillSkillsProgressBars();
        countUpAchievments();
    });

});

