$(function() {
    
    var buttons = $('.form-actions-float');
    floatButtons();
    $(window).scroll(function() {
        floatButtons();
    });

    function floatButtons() {
        if ($(window).scrollTop() + $(window).height() < $(document).height() - 30) { // To far, the navigation needs to be set in place
            buttons.addClass('flotante');
        } else {
            buttons.removeClass('flotante');
        }
    }
});