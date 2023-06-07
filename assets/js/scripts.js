$(document).ready(function(){
    
    // init hero typed text
    new Typed('.text-typed-hero', {
        strings: $('.text-items-typed-hero').text().split('||'),
        typeSpeed: 100,
        loop: true,
        backDelay: 1100,
        backSpeed: 50
    });

    

});