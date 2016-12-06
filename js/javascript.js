// Replace all SVG images with inline SVG
 jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {

        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }

        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

        }, 'xml');
    });

$(window).load(function() {
    if (window.pageYOffset > 10) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-brand").addClass("brand-black");
        $(".navbar-fixed-top").addClass("navbar-scroll");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-brand").removeClass("brand-black");
        $(".navbar-fixed-top").removeClass("navbar-scroll");
    }
});
// invers Hover Navbar
$(window).load(function() {
   if (($("#header").hasClass("intro-post")) || ($("#header").hasClass("intro-blog"))){
        $(".navbar-fixed-top").addClass("invers-hover");
    } else {
        $(".navbar-fixed-top").removeClass("invers-hover");
    }
});

// invers Hover scroll fix
$(window).scroll(function() {
if ((window.pageYOffset > 10) && ($(".navbar").hasClass("invers-hover"))){
      $(".navbar-fixed-top").removeClass("invers-hover");
   }
});

$(window).scroll(function() {
    if ((window.pageYOffset < 10) && (($("#header").hasClass("intro-post")) || ($("#header").hasClass("intro-blog")))){
        $(".navbar-fixed-top").addClass("invers-hover");
    }
});

// fadeout navbar on scroll
$(window).scroll(function() {
    if (window.pageYOffset > 10) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-brand").addClass("brand-black");
        $(".navbar-fixed-top").addClass("navbar-scroll");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-brand").removeClass("brand-black");
        $(".navbar-fixed-top").removeClass("navbar-scroll");
    }
});

// jQuery easing scrolling
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 30
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// auto-close responsive navbar on click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

// img center hover 
$(".img-container<img").each(function(i, img) {
    $(img).css({
        position: "relative",
        left: ($(img).parent().width() - $(img).width()) / 2
    });
});

