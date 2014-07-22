$(function() {
    $('[name="layout-mode"]').on("change", function() {
        $(".section-content, .footer").toggleClass("container"), $(this).is(":checked") ? $(".backgrounds").hide() : $(".backgrounds").show()
    }), $(".backgrounds .background-choice > a").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("data-bg") == "noimage" ? "#323232" : "url(img/backgrounds/" + $(this).attr("data-bg") + ")";
        $("body").css({background: t, "background-repeat": "no-repeat", "background-attachment": "fixed", "background-size": "100% 100%"})
    }), $('[name="header-mode"]').on("change", function() {
        $("#navbar-top").toggleClass("navbar-fixed-top"), $("body").toggleClass("fixed");
        if ($('[name="sidebar-mode"]').is(":checked")) {
            var e = $(window).scrollTop();
            e > 40 && $("#navside").removeClass("fixed-top").addClass("fixed-top")
        }
    }), $('[name="sidebar-mode"]').on("change", function() {
        $(".side-left").toggleClass("side-left-fixed"), $(this).is(":checked") ? $(".side-left").css({"min-height": "100%"}) : u()
    }), $(window).scroll(function() {
        $(window).scrollTop() > 40 ? $('[name="header-mode"]').is(":checked") || $("#navside").addClass("fixed-top") : $("#navside").removeClass("fixed-top")
    }), $('[name="theme-mode"]').on("change", function() {
        var e = $('[name="theme-mode"]:checked').val();
        e == "dark" ? ($("#navbar-top").attr("class", "navbar navbar-inverse"), $("#navside").attr("class", "side-left side-black"), $(".footer").hasClass("container") ? $(".footer").attr("class", "footer container bg-black") : $(".footer").attr("class", "footer bg-black"), $(".side-left > .search-module, .nav-collapse > .search-module").find(".btn").attr("class", "btn bg-black")) : e == "light" && ($("#navbar-top").attr("class", "navbar navbar-cyan"), $("#navside").attr("class", "side-left"), $(".footer").hasClass("container") ? $(".footer").attr("class", "footer container bg-silver") : $(".footer").attr("class", "footer bg-silver"), $(".side-left > .search-module, .nav-collapse > .search-module").find(".btn").attr("class", "btn bg-cyan")), $('[name="header-mode"]').is(":checked") && $("#navbar-top").addClass("navbar-fixed-top"), $('[name="sidebar-mode"]').is(":checked") && $("#navside").toggleClass("side-left-fixed")
    }), $('[name="syncronize-theme"]').on("change", function() {
        $(this).is(":checked") ? ($(".syncronize").show(), $(".unsyncronize").hide()) : ($(".syncronize").hide(), $(".unsyncronize").show())
    }), $(".syncronize .themes-choice > a").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("data-theme"), n = $('[name="theme-mode"]:checked').val();
        $('[name="syncronize-theme"]').is(":checked") && n == "dark" ? ($("#navbar-top").attr("class", "navbar navbar-inverse"), $("#navside").attr("class", "side-left side-" + t), $(".footer").hasClass("container") ? $(".footer").attr("class", "footer container bg-" + t) : $(".footer").attr("class", "footer bg-" + t)) : $('[name="syncronize-theme"]').is(":checked") && n == "light" && ($("#navbar-top").attr("class", "navbar navbar-" + t), $("#navside").attr("class", "side-left")), $('[name="header-mode"]').is(":checked") && $("#navbar-top").addClass("navbar-fixed-top"), $('[name="sidebar-mode"]').is(":checked") && $("#navside").toggleClass("side-left-fixed"), $(".side-left > .search-module, .nav-collapse > .search-module").find(".btn").attr("class", "btn bg-" + t)
    }), $(".unsyncronize .themes-navbar > a").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("data-theme");
        $("#navbar-top").attr("class", "navbar navbar-" + t), $('[name="header-mode"]').is(":checked") && $("#navbar-top").addClass("navbar-fixed-top"), $(".side-left > .search-module, .nav-collapse > .search-module").find(".btn").attr("class", "btn bg-" + t)
    }), $(".unsyncronize .themes-sidebar > a").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("data-theme");
        $("#navside").attr("class", "side-left side-" + t), $(".footer").hasClass("container") ? $(".footer").attr("class", "footer container bg-" + t) : $(".footer").attr("class", "footer bg-" + t), $('[name="sidebar-mode"]').is(":checked") && $("#navside").toggleClass("side-left-fixed")
    }), $('[data-scrollbar="mscroll"]').each(function(e, t) {
        var n = $(this), r = n.attr("data-theme") == undefined ? "light" : n.attr("data-theme"), i = n.attr("data-autohide") == undefined ? !0 : n.attr("data-autohide"), s = n.attr("data-button") == undefined ? !1 : n.attr("data-button"), o = $.parseJSON(i), u = $.parseJSON(s);
        n.mCustomScrollbar({autoHideScrollbar: o, scrollButtons: {enable: u, scrollSpeed: 100}, theme: r})
    });
    var e = $("[data-toggle=dropdown-list]");
    e.click(function(e) {
        e.preventDefault();
        var t = $(this).offsetParent(".dropdown-list"), n = t.find(".dropdown-menu");
        n.slideUp();
        var r = t.hasClass("open");
        r == 0 ? (t.addClass("open"), n.slideDown()) : (t.removeClass("open"), n.slideUp())
    });
    var t = $(".btn-navbar").attr("data-target"), n = $('[data-collapse="navbar"]').html();
    $(t).html(n), $(t).find(".nav").addClass("nav-list").find("li.dropdown-list").removeClass("dropdown-list").addClass("dropdown").find("a[data-toggle=dropdown-list]").attr("data-toggle", "dropdown").find("i").remove(), $(".nav-collapse").find("a[data-toggle=dropdown]").find("i, .caret").remove(), $("[data-toggle=collapse-all-widgets]").click(function(e) {
        e.preventDefault();
        var t = $(".widget").find(".widget-content"), n = $(".widget-header [data-toggle=collapse] > i");
        $(n).attr("class", "icomo-plus"), $(t).slideUp(300, "easeOutQuad")
    }), $("[data-toggle=expand-all-widgets]").click(function(e) {
        e.preventDefault();
        var t = $(".widget").find(".widget-content"), n = $(".widget-header [data-toggle=collapse] > i");
        $(n).attr("class", "icomo-minus"), $(t).slideDown(300, "easeOutQuad")
    }), $("[data-toggle=toggle-all-widgets]").click(function(e) {
        e.preventDefault();
        var t = $(".widget").find(".widget-content");
        $(t).slideToggle(300, "easeOutQuad")
    }), $(".widget > .widget-header").dblclick(function(e) {
        e.preventDefault();
        var t = $(this).parent().find(".widget-content"), n = $(this).parent().find(".widget-header [data-toggle=collapse] > i"), r = $(n).attr("data-toggle-icon");
        $(n).toggleClass(r), $(t).slideToggle(300, "easeOutQuad", function() {
            u();
        })
    }), $(".widget[data-collapse=true] .widget-content").slideUp(), $(".widget[data-collapse=true] .widget-header [data-toggle=collapse] > i").attr("class", "aweso-plus"), $(".widget [data-toggle=close]").click(function(e) {
        e.preventDefault();
        var t = $(this).attr("data-close");
        $(t).hide(300, "easeOutQuad")
    }), $(".widget [data-toggle=collapse]").click(function(e) {
        e.preventDefault();
        var t = $(this).attr("data-collapse"), n = $(this).find("i"), r = $(n).attr("data-toggle-icon");
        $(n).toggleClass(r), $(t + " .widget-content").slideToggle(300, "easeOutQuad", function() {
//            u();
        })
    }), $(".widget [data-toggle=fullscreen]").click(function(e) {
        e.preventDefault();
        var t = $(this).attr("data-fullscreen"), n = $(t).hasClass("with-tile"), r = $(this).find("i"), i = $(r).attr("data-toggle-icon");
        $(r).toggleClass(i), $(t).toggleClass("fullscreen"), n == 1 && ($(t).toggleClass("with-tile"), $(t).hide())
    }), $('[data-toggle="appbar"]').click(function(e) {
        e.preventDefault();
        var t = $(this).attr("data-target");
        $(t).hasClass("open") == 0 ? ($(".appbar").removeClass("open"), $(t).addClass("open")) : !$(e.target).is("input") && !$(e.target).is("textarea") && !$(e.target).is("select") && !$(e.target).is("form") && $(t).removeClass("open")
    }).focus(function(e) {
        e.preventDefault();
        var t = $(this).attr("data-target");
        $(t).hasClass("open") == 0 ? ($(".appbar").removeClass("open"), $(t).addClass("open")) : !$(e.target).is("input") && !$(e.target).is("textarea") && !$(e.target).is("select") && !$(e.target).is("form") && $(t).removeClass("open")
    }), $(document.body).click(function(e) {
        var t = e.target;
        !$(t).is(".appbar") && !$(t).parents().is(".appbar") && !$(t).is('[data-toggle="appbar"]') && $(".appbar").removeClass("open")
    });
    var r = '<div class="splash">    <div class="splash-inner">        <i class="icomo-atom"></i>        <p class="brand">Stilearn Metro</p>        <p class="splash-text">Destination progress text</p>        <div class="splash-loader">            <img class="preload-large" src="img/preload-6-white.gif" alt="" />        </div>    </div></div>', i = '<div class="splash splash-inline">    <div class="splash-inner">        <div class="splash-loader">          <img src="img/preload-5-black.gif" alt="" />        </div>    </div></div>', s = $("body").attr("data-splash"), o = $("body").attr("data-splash-type");
    if (s == 1 || s == "true")
        o == "inline" ? ($("body").append(i), $("body > *").css({visibility: "visible"}), $(".splash.splash-inline").fadeIn()) : ($("body").append(r), $(".splash").fadeIn(function() {
            $(this).css({visibility: "visible"})
        }));
    $(window).bind("load", function() {
        o == "inline" ? $(".splash.splash-inline").fadeOut() : $(".splash").fadeOut(2e3, function() {
            $("body > *").not(".splash").css({visibility: "visible"})
        })
    }), $('[data-ui="slider"]').each(function() {
        var e = $(this), t = e.attr("data-slider-animate") == undefined ? !1 : e.attr("data-slider-animate"), n = e.attr("data-slider-disabled") == undefined ? !1 : Boolean(e.attr("data-slider-disabled")), r = e.attr("data-slider-max") == undefined ? 100 : parseInt(e.attr("data-slider-max")), i = e.attr("data-slider-min") == undefined ? 0 : parseInt(e.attr("data-slider-min")), s = e.attr("data-slider-orientation") == undefined ? "horizontal" : e.attr("data-slider-orientation"), o = e.attr("data-slider-range") == undefined ? !1 : e.attr("data-slider-range"), u = e.attr("data-slider-step") == undefined ? 1 : parseInt(e.attr("data-slider-step")), a = e.attr("data-slider-value") == undefined ? 0 : parseInt(e.attr("data-slider-value")), f = e.attr("data-slider-values") == undefined ? null : e.attr("data-slider-values").split(","), l = o == "true" ? Boolean(o) : o, c = {animate: t, disabled: n, max: r, min: i, orientation: s, range: l, step: u, value: a, values: f};
        e.slider(c)
    }), $("[data-toggle=tooltip]").tooltip(), $("[data-toggle=tooltip-bottom]").tooltip({placement: "bottom"}), $("[data-toggle=tooltip-right]").tooltip({placement: "right"}), $("[data-toggle=tooltip-left]").tooltip({placement: "left"}), $("[data-toggle=popover]").click(function(e) {
        e.preventDefault()
    }), $("[data-toggle=popover]").popover(), $("[data-toggle=popover-bottom]").popover({placement: "bottom"}), $("[data-toggle=popover-right]").popover({placement: "right"}), $("[data-toggle=popover-left]").popover({placement: "left"}), $("a[data-scroll=true]").click(function(e) {
        e.preventDefault(), $(document.body).animate({scrollTop: $(this.hash).offset().top}, "slow")
    }), $("[data-chart=sparklines]").each(function() {
        var e = $(this), t = $(e).html(), n = t.split(","), r = e.attr("data-height"), i = e.attr("data-color"), s = function() {
            e.sparkline(n, {type: "bar", height: r, width: "100%", barColor: i, barWidth: 5})
        }, o;
        $(window).resize(function(e) {
            clearTimeout(o), o = setTimeout(s, 500)
        }), s()
    }), $('[data-dropdown="no-propagation"] *').click(function(e) {
        e.stopPropagation()
    }), $(".theme-switcher li a").click(function(e) {
        e.preventDefault();
        var t = $(this), n = t.parent().parent().attr("data-target"), r = t.parent().parent().attr("data-target-class"), i = t.attr("data-theme");
        $(n).attr("class", r).addClass(i)
    }), $(".pie-donat-text").each(function() {
        var e = $(this), t = e.parent().height() / 2 - e.height() / 2;
        e.css({top: t})
    }), $(".message-checked").bind("click", function() {
        $(this).parent().toggleClass("selected")
    });
    var u = function() {
        var e = $(".section-content").height(), t = $(".section-content > .content").height();
        $(".side-left").hasClass("side-left-fixed") || (e == t ? $(".side-left").css({"min-height": e + "px"}) : e > t && $(".side-left").css({"min-height": t + "px"}))
    };
    $(window).bind("load", function() {
        var e = $(".section-content").height();
        $(".side-left").css({"min-height": e + "px"})
    }), $(window).resize(function() {
        $(window).width() > 979 && u()
    })
});