'use strict';

$(document).ready(function()
{
    $('[data-fancybox]').fancybox({
        padding: 0
    });

    var gallery = $('#gallery .owl-carousel').owlCarousel({
        stagePadding: 0,
        items: 1,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: false,
        rewind: true,
        loop: true
    });

    $('#gallery [data-action="prev_gallery"]').on('click', function()
    {
        gallery.trigger('prev.owl.carousel');
        gallery.trigger('stop.owl.autoplay');

        setTimeout(function() { gallery.trigger('play.owl.autoplay'); }, '60000');
    });

    $('#gallery [data-action="next_gallery"]').on('click', function()
    {
        gallery.trigger('next.owl.carousel');
        gallery.trigger('stop.owl.autoplay');

        setTimeout(function() { gallery.trigger('play.owl.autoplay'); }, '60000');
    });
});
