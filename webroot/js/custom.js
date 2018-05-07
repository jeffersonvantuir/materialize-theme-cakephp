$(document).ready(function () {
    $('.collapsible-header').click(function () {
        if ($('#slide-out').css('width') == '50px') {
            $("#slide-out").removeClass('sidebar-collapsed-desktop');
            $(".plugin-name").removeClass('hide');
            $(".collapsible-plugin-name").addClass('hide');
            $("div.card").removeClass('m12').addClass('m10 offset-m2');
            $(".action-name").removeClass('hide');
            $("a#collapsible-menu").children('.material-icons').html('keyboard_arrow_left');
            $(".collapsible-header").removeClass('no-after');
        }
    });

    $("a#collapsible-menu").click(function () {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $("#slide-out").addClass('col l3');
            $(this).children('.material-icons').html('keyboard_arrow_left');
            $(".action-name").removeClass('hide');
            $("#slide-out").removeClass('sidebar-collapsed-desktop');
            $(".plugin-name").removeClass('hide');
            $(".collapsible-plugin-name").addClass('hide');
            $("div.card").removeClass('m12').addClass('m10 offset-m2');

            $(".collapsible-header").removeClass('no-after');

        } else {
            $(this).addClass("active");
            $(this).children('.material-icons').html('keyboard_arrow_right');
            $("#slide-out").addClass('sidebar-collapsed-desktop');
            $("#slide-out").removeClass('col l3');
            $(".action-name").addClass('hide');
            $(".plugin-name").addClass('hide');
            $("ul.collapsible > li").removeClass('active');
            $("ul.collapsible > li > .collapsible-header").removeClass('active');
            $(".collapsible-body").css('display', 'none');
            $(".collapsible-plugin-name").removeClass('hide');
            $("div.card").removeClass('m10 offset-m2').addClass('m12');
            $(".collapsible-header").addClass('no-after');

        }
    });
});

$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 30) {
            $("nav").addClass("nav-scroll");
            $("#slide-out").addClass("sidenav-scroll");
            $("#actions-profile.dropdown-content").addClass("scroll-actions-gravatar");
            $("#gravatar").addClass("gravatar-scroll");
            $("#gravatar").removeClass("gravatar");
        } else {
            $("nav").removeClass("nav-scroll");
            $("#slide-out").removeClass("sidenav-scroll");
            $("#actions-profile.dropdown-content").removeClass("scroll-actions-gravatar");
            $("#gravatar").removeClass("gravatar-scroll");
            $("#gravatar").addClass("gravatar");
        }
    });
});

$('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: true, // Does not change width of dropdown to that of the activator
        hover: false, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'right', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    }
);