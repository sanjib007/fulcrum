(function($) {
    $(document).ready(function() {
        
        // panel section
        $('.btn-plus-js').on('click', function(e) {
            e.preventDefault();
            $(this).closest('.panel-block').toggleClass('panel-overlay');
            $(this).toggleClass('btn-plus-rotate');
        });

        // slider
        $('.slider-container').owlCarousel({
            loop:true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 800,
            margin:10,
            items: 1,
            nav: true,
            navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        });

        // projects masonry grid
        $('.project-grid').masonry({
            itemSelector: '.project-item',
            // columnWidth: 25%,
        });
    });
})(jQuery);
