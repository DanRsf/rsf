// Breakpoint variables used throughout to determine what viewport we're on.
var bp = 'lg';

var breakpoints = {
    xsmall: 479,
    small: 599,
    medium: 767,
    large: 959,
    xlarge: 1199
};
/**
 * Extend Number object to provide between functionality
 *
 * @param INT a
 * @param INT b
 * @returns BOOLEAN
 */
 Number.prototype.between = function (a, b) {
    var min = Math.min.apply(Math, [a, b]),
    max = Math.max.apply(Math, [a, b]);
    return this > min && this < max;
};


/**
 * Set the global bp variable to the represent the current media query breakpoint.
 */
 var set_breakpoint = function () {

    var winWidth = $(window).width();

    if (winWidth < breakpoints.xsmall) {
        bp = 'mb';
    }
    else if (winWidth.between(breakpoints.xsmall, breakpoints.small + 1)) {
        bp = 'xs';
    }
    else if (winWidth.between(breakpoints.small, breakpoints.medium + 1)) {
        bp = 'sm';
    }
    else if (winWidth.between(breakpoints.medium, breakpoints.large + 1)) {
        bp = 'md';
    }
    else if (winWidth.between(breakpoints.large, breakpoints.xlarge + 1)) {
        bp = 'lg';
    }
    else {
        bp = 'xl';
    }
};

/**
 * Calculates the height of the biggest element in the group, then sets the
 * min-height property on the rest of the elements in the group so they are
 * always at the same height.
 *
 * @param jQuery Object $group
 */
var set_max_height = function($group) {

    $group.each(function(index, elem) {

        var selectors = $(elem).data('height-determined-by').split(',');

        $.each(selectors, function(index, selector) {

            // If we're in the mobile view, honour the skip indicator "|" and
            // skip over the element
            if (bp == 'xs' || bp == 'mb') {
                if (selector.charAt(0) == '|') {
                    selector = selector.slice(1);
                    $(selector).css('min-height', 0);
                    return true;
                }
            }

            // Clean up the selector string ready for use
            selector = selector.charAt(0) == '|' ? selector.slice(1) : selector;

            // Get the height of the biggest element in the group
            var maxHeight = Math.max.apply(null, $(elem).find(selector).map(function() {

                // We have to wrap text node in span to allow height calculation
                if ($(this).children().length == 0) {
                    $(this).wrapInner('<span></span>');
                }

                totalHeight = 0;
                $(this).children().each(function() {
                    totalHeight += $(this).outerHeight(true);
                });
                return totalHeight;

            }).get());

            maxHeight = selector == '.image-container' ? maxHeight + 20 : maxHeight;

            // Set the min-height value on all elements in the group
            $(elem).find(selector).css('height', maxHeight);

        });
    });
}

/**
 * Add page scrolling
 * -----------------
 * Add a scrolling animation to all on-page anchors
 */
 var set_up_scroll_animation = function () {
    $('[href^="#"]').click(function (e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $($(this).attr('href')).offset().top - 72
        }, 1500, 'easeInOutQuart');
    });

};

/**
 * Returns true or false if the current breakpoint is considered to be a mobile device.
 * @returns bool
 */
 var mobile_device = function () {
    return $(window).width() < breakpoints.small ? true : false;
};

var intro_block_delay = function () {
    var multiplier = 6;
    return ($('html').height() / multiplier) * -1;
};

var positions = {
    tap: {
        mb: {delay: 200, start: -80, end: -200},
        xs: {delay: 200, start: -80, end: -200},
        sm: {delay: 200, start: -200, end: -180},
        md: {delay: 400, start: -250, end: -180},
        lg: {delay: 400, start: -250, end: -180},
        xl: {delay: 400, start: -250, end: -180}
    },
    montage: {
        mb: {duration: 600, delay: 200, start: '101%', end: '120%'},
        xs: {duration: 600, delay: 200, start: '101%', end: '120%'},
        sm: {duration: 600, delay: 250, start: '101%', end: '120%'},
        md: {duration: 800, delay: 300, start: '101%', end: '120%'},
        lg: {duration: 800, delay: 300, start: '101%', end: '115%'},
        xl: {duration: 800, delay: 350, start: '101%', end: '115%'}
    }
};

$(document).ready(function () {

    set_breakpoint();

    $('#ellipse').click(function () {
        $(this).next('ul').toggleClass('active');
    });

    // Initialise page scrolling animation
    set_up_scroll_animation();

    /**
     * Image gallery on homepage
     */
     $('#gallery-thumbs img').click(function () {
        var filename = $(this).data('image');
        $('#gallery-viewer').attr('src', '/resources/img/gallery/images/' + filename);
    });

     $('.video-thumb').click(function () {
        var iframe = $('<iframe src="http://www.youtube.com/embed/' + $(this).data('video') + '?fs=0&modestbranding=1&rel=0&showinfo=0&autoplay=1"></iframe>')
        $(this).html(iframe);
    });

     $('#products li')
        .mouseover(function(){
            $('#products li').not($(this)).addClass('dark');
            $(this).addClass('show');
        })
        .mouseout(function(){
            $('#products li').removeClass('dark');
            $(this).removeClass('show');
        });

    // Initialise product page lightbox
    $('#products ul').magnificPopup({
        delegate: 'li',
        closeOnContentClick: true,
        type: 'image',
        mainClass: 'mfp-fade'
    });

    setInterval(function(){
        $('#dn-intro .background').toggleClass('show');
    }, 5000);

 });

$(window).load(function () {
    resize_functions();

    // Manage the height of any height managed panels
    if ($('[data-height-determined-by]').length > 0) {
        set_max_height($('[data-height-determined-by]'));
    }
});

$(window).resize(function () {
    resize_functions();

    // Manage the height of any height managed panels
    if ($('[data-height-determined-by]').length > 0) {
        set_max_height($('[data-height-determined-by]'));
    }
});

var resize_functions = function () {
    set_breakpoint();
    resize_montage_images();
}

var resize_montage_images = function () {
    $left = typeof $left != 'undefined' ? $left : $('#hp-montage .left');
    $rightSmall = typeof $rightSmall != 'undefined' ? $rightSmall : $('#hp-montage .right.small');
    $rightBig = typeof $rightBig != 'undefined' ? $rightBig : $('#hp-montage .right.big');

    $left.css('height', $left.width() * 0.7);
    $rightSmall.css('height', $left.height() * 0.60714);
    $rightBig.css('height', $left.height() * 0.39285);
};
