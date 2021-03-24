/* =========================================================================
                                login.html
============================================================================ */

$("#login div.eye .eye-img").click(function () {
    var input1 = $("#password-field").attr("type");

    if (input1 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

$("#sign-up form .form-group:nth-child(4) div.eye .eye-img").click(function () {
    var input1 = $("#password-field").attr("type");

    if (input1 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

$("#sign-up form .form-group:nth-child(5) div.eye .eye-img").click(function () {
    var input1 = $("#password-field").attr("type");

    if (input1 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

$("#change-pswd form .form-group:nth-child(1) div.eye .eye-img").click(function () {
    var input4 = $("#password-field").attr("type");

    if (input4 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

$("#change-pswd form .form-group:nth-child(2) div.eye .eye-img").click(function () {
    var input5 = $("#password-field").attr("type");

    if (input5 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

$("#change-pswd form .form-group:nth-child(3) div.eye .eye-img").click(function () {
    var input6 = $("#exampleInputPassword1").attr("type");

    if (input6 == "password") {
        $("#password-field").attr("type", "text");
    } else {
        $("#password-field").attr("type", "password");
    }
});

// navbar

function sticky_header() {
    var header_height = jQuery('.site-header').innerHeight();
    var scrollTop = jQuery(window).scrollTop();
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-header');
        $("#home-header .logo-wrapper img").attr("src", "images/Logo/dark-logo.png");
    } else {
        jQuery('body').removeClass('sticky-header');
        $("#home-header .logo-wrapper img").attr("src", "images/Logo/white-logo.png");
    }
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-header');
        $("#home-header .white-nav .site-header .header-wrapper .navigation-wrapper .main-navigation .menu-navigation > li a ").css("color", "#333333");
    } else {
        jQuery('body').addClass('sticky-header');
        $("#home-header .white-nav .site-header .header-wrapper .navigation-wrapper .main-navigation .menu-navigation > li a ").css("color", "#fff");
    }
    if (scrollTop > header_height) {
        jQuery('body').addClass('sticky-header');
        $("#home-header .white-nav .site-header .header-wrapper .navigation-wrapper .main-navigation .menu-navigation > li a.btn-general ").css("color", "#fff");
    } else {
        jQuery('body').addClass('sticky-header');
        $("#home-header .white-nav .site-header .header-wrapper .navigation-wrapper .main-navigation .menu-navigation > li a.btn-general ").css("color", "#fff");
    }
    if (scrollTop > header_height) {
        // Show white nav
        $("#home-header").addClass("white-nav-top");
        $(".site-header").css("background-color", "#fff");
    } else {
        // Hide white nav
        $("#home-header").removeClass("white-nav-top");
        $(".site-header").css("background-color", "transparent");
    }

}

jQuery(document).ready(function () {
    sticky_header();
});

jQuery(window).scroll(function () {
    sticky_header();
});
jQuery(window).resize(function () {
    sticky_header();
});


/* =========================================
              Mobile Menu
============================================ */
$(function () {

    // Show mobile nav
    $("#mobile-nav-open-btn").click(function () {
        $("#mobile-nav").css("height", "100%");
    });

    // Hide mobile nav
    $("#mobile-nav-close-btn, #mobile-nav a").click(function () {
        $("#mobile-nav").css("height", "0%");
    });
    $("#mobile-nav a").click(function () {
        $("#mobile-nav").css("height", "100%");
    });

});


/* =========================================================================
                                faq.html
============================================================================ */

// 1
$("#faq .faq1 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq1 .faq-plus")[0].style.display = "none";
    $("#faq .faq1 .faq-minus")[0].style.display = "block";
});

$("#faq .faq1 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq1 .faq-minus")[0].style.display = "none";
    $("#faq .faq1 .faq-plus")[0].style.display = "block";
});

// 2

$("#faq .faq2 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq2 .faq-plus")[0].style.display = "none";
    $("#faq .faq2 .faq-minus")[0].style.display = "block";
});

$("#faq .faq2 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq2 .faq-minus")[0].style.display = "none";
    $("#faq .faq2 .faq-plus")[0].style.display = "block";
});

// 3

$("#faq .faq3 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq3 .faq-plus")[0].style.display = "none";
    $("#faq .faq3 .faq-minus")[0].style.display = "block";
});

$("#faq .faq3 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq3 .faq-minus")[0].style.display = "none";
    $("#faq .faq3 .faq-plus")[0].style.display = "block";
});

// 4

$("#faq .faq4 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq4 .faq-plus")[0].style.display = "none";
    $("#faq .faq4 .faq-minus")[0].style.display = "block";
});

$("#faq .faq4 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq4 .faq-minus")[0].style.display = "none";
    $("#faq .faq4 .faq-plus")[0].style.display = "block";
});

// 5

$("#faq .faq5 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq5 .faq-plus")[0].style.display = "none";
    $("#faq .faq5 .faq-minus")[0].style.display = "block";
});

$("#faq .faq5 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq5 .faq-minus")[0].style.display = "none";
    $("#faq .faq5 .faq-plus")[0].style.display = "block";
});

// 6

$("#faq .faq6 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq6 .faq-plus")[0].style.display = "none";
    $("#faq .faq6 .faq-minus")[0].style.display = "block";
});

$("#faq .faq6 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq6 .faq-minus")[0].style.display = "none";
    $("#faq .faq6 .faq-plus")[0].style.display = "block";
});

// 7

$("#faq .faq7 .faq-plus")[0].addEventListener("click", function () {
    $("#faq .faq7 .faq-plus")[0].style.display = "none";
    $("#faq .faq7 .faq-minus")[0].style.display = "block";
});

$("#faq .faq7 .faq-minus")[0].addEventListener("click", function () {
    $("#faq .faq7 .faq-minus")[0].style.display = "none";
    $("#faq .faq7 .faq-plus")[0].style.display = "block";
});