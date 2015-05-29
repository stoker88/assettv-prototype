$(document).ready(function() {

    var popout = $("#site-menu");
    var POPOUT_SPEED = 450;
    var windowScrollTop = 0;

    //WHEN NAVBAR BUTTON PUSHED
    $(".toggle-nav").on("click", function() {
        togglePopout();
    });
    
    /**
     * Close popout menu
     * @returns {undefined}
     */
    function closePopup() {
        
        $("body").css({
            "overflow": "visible"
        });

        //console.log('closePopup() -start-');
        //console.log($(window).scrollTop());
        //console.log($('#body-container').offset().top);
        //console.log('closePopup() -end-');

        //REPOSITION BODY
        $("#body-container").stop().animate({
            "left": 0
        }, POPOUT_SPEED).css({
            "position": "relative" // set the body-container's position back to relative.
        });
        $(window).scrollTop(windowScrollTop); // scroll the window back to its position before openPopup() was called.

        $(document).off('touchmove');

        $(".navbar-fixed-top").stop().animate({
            "left": 0
        }, POPOUT_SPEED);

        popout.stop().removeClass("open");
    }

    /**
     * Open popuout menu
     * @returns {undefined}
     */
    function openPopup() {
        
        $("body").css({
            "overflow": "hidden"
        });
        
//        $("#site-menu").animate({
//            "width": $(document).width()
//        });
        
        windowScrollTop = $(window).scrollTop(); 

        //ANIMATE BODY
        $("#body-container").stop().animate({
            "left": $(document).width()
        }, POPOUT_SPEED, function(){
            $(this).css('position','fixed'); // set the body-container's position AFTER its animation.
        });

        $(".navbar-fixed-top").stop().animate({
            "left": $(document).width()
        }, POPOUT_SPEED);

        //ANIMATE POPOUT IN
        popout.addClass("open");
    }

    /**
     * Toggle popout menu
     * @param {type} mode
     * @returns {undefined}
     */
    function togglePopout(mode) {
        //IF NOT OPEN, THEN OPEN
        if (!popout.hasClass("open")) {
            openPopup();
        }
        //ELSE HIDE POPOUT
        else {
            closePopup();
        }
    }

});