


// ---------- PRE LOAD ----------
{
    $(window).load(function() {
        var delay=1000;
        $('#loading').removeClass('show').addClass('hidden');

        // ----- Changing a class (with delay) on Pageload -----
//        var delay=1350;
//        setTimeout(function(){
//            $('#menu').removeClass('dormant') .addClass('active');
//            $('#logo').removeClass('dormant') .addClass('active');
//        },delay);

    });
}




// ---------- DELAY A LINK ----------
// HTML NOTE, within the html, use: href="javascript:delay('URL')"
{
    function delay(URL) {
        setTimeout(function () {
            window.location = URL
        }, 1000);

        // ----- Changing a Class before Link Activates
//        $('#menu').removeClass('active').addClass('dormant');
//        $('#logo').removeClass('active').addClass('dormant');
        $('#loading').removeClass('hidden').addClass('show');

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

    $(window).scroll(function () {
        clearTimeout(scroll_time);
        var current_scroll = $(window).scrollTop();

//        HEADER BACKGROUND COLOR
//            if (current_scroll <= 1) {
//                $('header').removeClass('grey').addClass('trans');
//            }
//            else {
//                $('header').removeClass('trans').addClass('grey');
//            }

//        HEADER GOES AWAY
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

//        HEADER SHRINKS
                if (current_scroll <= 0) {
                    $('header').removeClass('scrolling');
                }
                else {
                    $('header').addClass('scrolling');
                }

        //TOTOP
//                if (current_scroll <= 550) {
//                    $('#toTop').removeClass('reveal');
//                }
//                else {
//                    $('#toTop').addClass('reveal');
//                }

                scroll_time = setTimeout(function () {
                    scroll_pos = $(window).scrollTop();
                }, 1);
    });

}



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



// ---------- TOGGLE BUTTON ----------
{
    function toggle(id) {
        var el = document.getElementById(id);
        var div = document.getElementById("menu");
        var container = el.getAttribute("class");
        if (container == "dormant") {
            $('#menu').removeClass('dormant').addClass('active');
//            $('body').removeClass('active').addClass('dormant');
            $('#closeFull').removeClass('dormant').addClass('active');
            $('header').removeClass('trans').addClass('grey');
        }
        else {
            $('#menu').removeClass('active').addClass('dormant');
//            $('body').removeClass('dormant').addClass('active');
            $('#closeFull').removeClass('active').addClass('dormant');
        }
    }
}






// ---------- Sample Toggle Function ----------

    function toggleBox(id) {
     var el = document.getElementById(id);
        var div = document.getElementById("box");
        var container = el.getAttribute("class");
        if (container == "small") {
            $('#box').removeClass('small') .addClass('big');

            $('#toggleSwitch').addClass('active');

            $('.innerBox').addClass('bold');

            $('#box2').removeClass('fadeIn') .addClass('fadeOutFast');
        }
        else {
            $('#box').removeClass('big') .addClass('small');

            $('#toggleSwitch').removeClass('active');

            $('.innerBox').removeClass('bold');

            $('#box2').removeClass('fadeOutFast') .addClass('fadeIn');
        }
    }

//    #toggleBox {
//        width: 2em;
//        height: 2em;
//        background: #f70;
//    }
//    #toggle2:hover {
//        background-color: #f90;
//    }
//    #box {
//        width: 5em;
//        height: 2em;
//        background-color: #0099ff;
//    }
//    #box.small{
//        margin-left: 1em;
//    }
//    #box.big{
//        margin-left: 3em;
//    }

// ---------- SLICK SLIDER ----------
