$(function() {
    var r = '<div class="splash" >'
            + '<div class="splash-inner">'
            + '<i class="icomo-atom"></i>' +
            '<p class="brand">Stilearn Metro</p>'
            + '<p class="splash-text">Destination progress text</p>'
            + '<div class="splash-loader">'
            + ' <img class="preload-large" src="' + themeUrl + 'img/preload-6-white.gif" alt="" />'
            + '</div> '
            + '</div>'
            + '</div>'
            , i = '<div class="splash splash-inline"><div class="splash-inner"><div class="splash-loader"> <img src="' + themeUrl + '/img/preload-5-black.gif" alt="" /></div></div></div>'
            , s = $("body").attr("data-splash"),
            o = $("body").attr("data-splash-type");

    if (s == 1 || s == "true") {
        o == "inline" ? ($("body").append(i), $("body > *").css({visibility: "visible"}), $(".splash.splash-inline").fadeIn())
                :
                ($("body").append(r), $(".splash").fadeIn(function() {
                    $(this).css({visibility: "visible"})
                }));
    }


    $(window).bind("load", function() {
        o == "inline" ? $(".splash.splash-inline").fadeOut() : $(".splash").fadeOut(2e3, function() {
            $("body > *").not(".splash").css({visibility: "visible"})
        })
    });
});