document.addEventListener('DOMContentLoaded', function () {
    var elements = document.querySelectorAll('.fade-in');

    function fadeIn(elements) {
        elements.forEach(function (element) {
            if (!element.classList.contains('show') && isElementInViewport(element)) {
                element.classList.add('show');
            }
        });
    }

    function isElementInViewport(element) {
        var rect = element.getBoundingClientRect();
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;
        var windowWidth = window.innerWidth || document.documentElement.clientWidth;

        var verticalVisible = rect.top <= windowHeight && rect.bottom >= 0;
        var horizontalVisible = rect.left <= windowWidth && rect.right >= 0;

        return verticalVisible && horizontalVisible;
    }

    fadeIn(elements);

    window.addEventListener('scroll', function () {
        fadeIn(elements);
    });
});
