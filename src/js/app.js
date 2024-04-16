jQuery(function () {

    // Auto target _blank external links
    // targetBlankExternalLinks();

    jQuery('.owl-carousel').owlCarousel({
        loop:true,
        items:1,
        margin:10,
        nav:true,
        autoplay: 'true',
        slideTransition: 'ease-out',
        smartSpeed: 500,
        autoplaySpeed: 500,
        navText: []
    })

    // Remove WP Block element iframe classes
    if (jQuery('.wp-block-embed-youtube').length) {
        jQuery('.wp-block-embed-youtube').removeClass().addClass('embed-responsive-item');
    }

    // Scrolling anchors
    jQuery('.scrollable-anchor').on('click', function (e) {
        e.preventDefault();

        jQuery('html,body').animate({
            scrollTop: jQuery(this.hash).offset().top
        }, 1000);
    });
});

var trackEvent = function (name, options) {
    trackGA(name, options);
    trackPixel(name, options);
};

var trackGA = function (name, options) {
    if (typeof gtag !== 'undefined') {
        gtag('event', name, {
            'event_category': options.category,
            'event_label': options.label,
            'value': options.value || 0
        });
    }
};

var trackPixel = function (name, options) {
    if (typeof gtag !== 'undefined') {
        fbq('track', 'Lead', {
            'event_category': options.category,
            'event_action': name,
            'value': options.value || 0,
            'currency': 'CAD'
        });
    }
};

var targetBlankExternalLinks = function () {
    var internalLinkRegex = new RegExp('^((((http:\\/\\/|https:\\/\\/)(www\\.)?)?'
        + window.location.hostname
        + ')|(localhost:\\d{4})|(\\/.*))(\\/.*)?$', '');

    jQuery('a').filter(function () {
            var href = jQuery(this).attr('href');
            return !internalLinkRegex.test(href);
        })
        .each(function () {
            jQuery(this).attr('target', '_blank');
        });
};

// Function to apply styles to sequences of 3 or more uppercase letters, allowing spaces
document.addEventListener('DOMContentLoaded', () => {
function styleUppercaseSequences() {
    // Find all elements with the class 'colorUps'
    const elements = document.querySelectorAll('.colorUps, .blog-article-header');

    elements.forEach(element => {
        // Using regular expression to find sequences of 3 or more uppercase letters, allowing spaces
        const regex = /([A-Z][A-Z\s]{2,})/g;
        let innerHTML = element.innerHTML;
        let match;

        // Loop through all matches in the element's text
        while ((match = regex.exec(element.textContent)) !== null) {
            // Trim the match to remove leading/trailing spaces and then exclude the last character
            const matchedText = match[0].trim();
            const styledText = matchedText.substring(0, matchedText.length - 1);

            // Replace the original text with a span that includes the styled text
            // Escape special characters in 'styledText' to use it in a RegExp safely
            // The negative lookahead ensures we match directly before another uppercase or the end of the match
            const escapedStyledText = styledText.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
            innerHTML = innerHTML.replace(new RegExp(escapedStyledText + '(?=[A-Z\\s])'), `<span style="color: #00b5cc">${styledText}</span>`);
        }

        // Update the innerHTML of the element with the styled text
        element.innerHTML = innerHTML;
    });
}

// Call the function to style uppercase sequences
styleUppercaseSequences();
});
