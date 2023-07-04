$(document).ready(function(){
    let mobileCheck = function() {
        let check = false;

        (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);

        return check;
    };

    var count_up_enabled = 1;
    var skills_bars_fill = 1;
    var is_mobile        = mobileCheck();

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

        if( ((skills_inviewport) && (skills_bars_fill == 1) && (!is_mobile)) || ((skills_bars_fill == 1) && (is_mobile)) ){
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

        if( ((achievments_inviewport) && (count_up_enabled == 1) && (!is_mobile)) || ((count_up_enabled == 1) && (is_mobile)) ){
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
    $(window).on('scroll', function () { 
        scrollNavFix();
        fillSkillsProgressBars();
        countUpAchievments();
    });
});

