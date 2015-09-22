


// ---------- PRE LOAD ----------
{
//    $(window)(function(){
//        $('body').addClass('fadeInDelay');
//    });

    $(window).load(function() {
        setTimeout(function(){
            $('#loading').addClass('hidden');
        }, 200);
    });
    // To add a delay, change ending 0
}

// ---------- DELAY A LINK ----------
// HTML NOTE, within the html, use: href="javascript:delay('URL')"
{
    function delay(URL) {
        setTimeout(function () {
            window.location = URL
        }, 200);

        $('#loading').removeClass('hidden');

        // ----- Disable Links After one is Clicked (prevent click confusion)
        var all_links = document.getElementsByTagName("a");
        for(var i=0; i<all_links.length; i++){
            all_links[i].removeAttribute("href");
        }
    }
}




// ---------- (TOP) ON SCROLL EFFECTS ----------
{
    var scroll_pos = 0;
    var scroll_time;


    $(window).on('scroll', function () {
        var current_scroll = $(window).scrollTop();

//  HEADER SHRINKS
            if (current_scroll <= 0) {
                $('header').removeClass('notTop');
            }
            else {
                $('header').addClass('notTop');
            }

//  HEADER HIDES
            if (current_scroll >= 300) {
                if (current_scroll <= scroll_pos) {
                    $('header').removeClass('hidden');
                }
                else {
                    $('header').addClass('hidden');
                }
            }
            else {
                $('header').removeClass('hidden');
            }

//    MOBILE MENU HIDES ON SCROLL
            if (current_scroll !== scroll_pos) {
                $('nav').removeClass('active'),
                $('#menuToggle').removeClass('active'),
                $("#fullClose").removeClass('active');
            }

//    TIMEOUT
            scroll_time = setTimeout(function () {
                scroll_pos = $(window).scrollTop();
            }, 1);

    });





}

// ---------- MENU TOGGLE & NAV CLICKS ----------

    $("#menuToggle").click(function(){
        $("nav").toggleClass('active'),
        $("#menuToggle").toggleClass('active'),
        $("#fullClose").toggleClass('active');
    });
    $("nav ul li a").click(function(){
        $("nav").removeClass('active');
        $("#fullClose").removeClass('active');
    });
    $("#fullClose").click(function() {
        $("nav").removeClass('active'),
        $("#menuToggle").removeClass('active');
        $("#fullClose").removeClass('active');
    });




// ---------- SMOOTH SCROLL ----------
{
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
}



