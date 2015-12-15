
    function isTouchDevice(){
        return typeof window.ontouchstart !== 'undefined';
    }

var scrolled = true;
if (isTouchDevice()) {
    $(function () {
        $(".my_container").swipe({
            swipe: function (event, direction, distance, duration, fingerCount, fingerData) {

                if (direction == "up") {
                    scrollPage(event, 1, "next");
                } else if (direction == "down") {
                    scrollPage(event, 1, "prev");
                }
            },
            threshold: 0,
            fingers: 'all'
        });
    });
} else {
    $(".my_container").bind("mousewheel", function (event, delta) {

        if (scrolled == true) {
            if (delta < 1) {
                scrollPage(event, delta, "next");
            } else {
                scrollPage(event, delta, "prev");
            }
        }
    });
}
$(window).keydown(function (event) {
    arrowsKeysHandling(event);
});
function scrollPage(event, delta, act) {
    $(".my_container").bind("mousewheel", false);
    if (!scrolled)
        return;
    scrolled = false;
    getSection(act);
    setTimeout(function () {
        scrolled = true;
    }, 1200);

};

var curSection;
function getSection(dir) {
    if (dir == "next") {
        if ($(".Main-screen.active").next().length == 0) {
            return;
        }
        curSection = $(".Main-screen.active");
        $(".Main-screen.active").next().addClass("active");
        $(curSection).removeClass("active");

        var x = $(".Main-screen.active");
        var y = $(x).offset();
        $(".my_container").scrollTo(x, 1000);
        
    } else {
        if ($(".Main-screen.active").prev().length == 0) {
            return;
        }

        curSection = $(".Main-screen.active");
        $(".Main-screen.active").prev().addClass("active");
        $(curSection).removeClass("active");

        var x = $(".Main-screen.active");
        $(".my_container").scrollTo(x, 1000);
    }
    return;
}
function arrowsKeysHandling(event) {
    switch (event.keyCode) {
        case 33:
            { //page up
                event.stopPropagation();
                event.preventDefault();
                getSection("prev");
                break;
            }
        case 34:
            {// page down
                event.stopPropagation();
                event.preventDefault();
                getSection("next");
                break;
            }

        case 37:
            {//left
                event.stopPropagation();
                event.preventDefault();
                getSection("prev");
                break;

            }
        case 38:
            {//up
                event.stopPropagation();
                event.preventDefault();
                getSection("prev");
                break;

            }
        case 39:
            {//right
                event.stopPropagation();
                event.preventDefault();
                getSection("next");
                break;

            }
        case 40:
            {//down
                event.stopPropagation();
                event.preventDefault();
                getSection("next");
                break;

            }
    }
}