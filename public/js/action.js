$(document).ready(function() {

    "use strict";

    $("#back-top").on("click", function() {
        $("html, body").animate({ scrollTop: 0 }, "slow")
    });

    $(window).scroll(function() {
        if ($(window).scrollTop() > 200) {
            if ($(window).scrollTop() > 180)   
                $("#back-top").css("display", "block");
        } else {
            $("#back-top").hide(200);
        }
    });

});


 