$(document).ready(function($) {
    $('.bars-parent, #bars').on('click', function() {
        $('.menu').toggleClass('widthToggle');
        $('.menu-list').fadeToggle();
        $('a').toggleClass('white-hover');
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
    $('.bars-parent').on('click', function() {
        if ($(this).hasClass('change')) {
            $(this).removeClass('change');
            $('#bars').text('MENU');
        } else {
            $(this).addClass('change');
            $('#bars').text('CLOSE');
        }
    });
    $('.dotOne').hover(function() {
        $('.dot-one-img').toggle();
    });
    var $grid = $('.grid').imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item',
            percentPosition: true,
            columnWidth: '.grid-sizer'
        });
    });
    //toggle fade for main text 
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
    /* Toggle map and aerial  */
    $('#showAerial').on('click', function() {
        $('#aerial').show();
        $('#map').hide();
        $(this).addClass('white').children("img:first-of-type").show().next("img").hide();
        $('#showMap').removeClass('white').children("img:first-of-type").hide().next("img").show();
    });
    $('#showMap').on('click', function() {
        $('#aerial').hide();
        $('#map').show();
        $(this).addClass('white').children("img:first-of-type").show().next("img").hide();
        $('#showAerial').removeClass('white').children("img:first-of-type").hide().next("img").show();
    });
});