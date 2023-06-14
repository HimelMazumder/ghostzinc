$(function () {
    $('#hpage_slider').after('').cycle({
        timeout: 5000, // milliseconds between slide transitions (0 to disable auto advance)
        fx: 'fade', // choose a transition type, ex: fade, scrollUp, shuffle, etc...            
        // selector for element to use as pager container
        pause: 0, // true to enable "pause on hover"
        pauseOnPagerHover: 0 // true to pause when hovering over pager link
    });
});