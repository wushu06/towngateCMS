$(document).ready(function($) {
    $('#bars, .bars-parent').on('click', function() {
        $('.menu').toggleClass('widthToggle');
        var text = $('#bars').text();
        $('#bars').text(text == "MENU" ? "CLOSE" : "MENU");
        $('.menu-list').fadeToggle();
        $('a').toggleClass('white-hover');
        if ($('.download').hasClass('active-two')) {
            $('.download').toggleClass('active-two');
        }
        if ($('.view').hasClass('active-two')) {
            $('.view').toggleClass('active-two');
        }
        if ($('.bars-parent').hasClass('change')) {
            $('.bars-parent').removeClass('change');
        } else {
            $('.bars-parent').addClass('change');
        }
        //$('.view, .download').toggleClass('active-two');
    });
    $(window).on('load', function() {
        var url = window.location.href;
        var link = $(".menu-list > ul > li > a");
        // passes on every "a" tag 
        link.each(function() {
            // checks if its the same on the address bar
            if (url == link.attr("href")) {
                $(this).addClass("active");
            }
        });
        console.log(link.attr("href"));
    });
    $(' #bars').on('click', function() {
        if ($(this).hasClass('change')) {
            $(this).removeClass('change');
        } else {
            $(this).addClass('change');
        }
    });
    // siteplan page/ show images 
    $('.dotOne, .text-one').hover(function() {
        $('.dot-one-img').toggle();
    });
    var $grid = $('.grid').imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer'
        });
    });
    //Homepage toggle fade for main text 
    var slider = $('.overlay'),
        children = slider.children('div'),
        lenght = children.length,
        i = 0,
        mySlider = function() {
            children.eq(i).fadeOut(100, function() {
                i++;
                if (i === lenght) {
                    i = 0;
                }
                children.eq(i).fadeIn();
            });
        };
    children.not(':first').hide();
    setInterval(mySlider, 3000);
    /* LocationPage Toggle map and aerial  */
    $('#showAerial').on('click', function() {
        $('#aerial').show();
        $('#map').hide();
        $(this).addClass('white');
        $('#showMap').removeClass('white')
        $('path').css('fill', '#ffffff !important');
        $('.st0').css('fill', '#2c2c2b');
    });
    $('#showMap').on('click', function() {
        $('#aerial').hide();
        $('#map').show();
        $(this).addClass('white');
        $('#showAerial').removeClass('white')
        $('.st0').css('fill', '#ffffff !important');
        $('.st1').css('fill', '#2c2c2b');
    });
});