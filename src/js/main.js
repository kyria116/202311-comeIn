
$(function () {

    //@prepros-prepend plugin/jquery_min.js
    //@prepros-prepend template/header.js
    //@prepros-prepend template/topbtn.js
    //@prepros-prepend template/animation.js
    //@prepros-prepend template/cookies.js


    // --------------------main min-height---------------------
    var windowHeight = $(window).height();
    var miniHeight = windowHeight - $('footer').outerHeight() + $('header').outerHeight();
    $('main').css({
        "min-height": miniHeight + "px"
    });

    $(window).on('resize', function (e) {
        var windowHeight = $(this).height();
        var miniHeight = windowHeight - $('footer').outerHeight() + $('header').outerHeight();

        $('main').css({
            "min-height": miniHeight + "px"
        });
    });

    
    //footer
    $('footer .mailBox a').on('click', function(){
        if($('body').hasClass('popupOpen')){
            $('body').removeClass('popupOpen')
            $('body, html').css('overflow-y', 'auto')
        }else{
            $('body').addClass('popupOpen')
            $('body, html').css('overflow-y', 'hidden')
        }
    })
    $('.popup_mailbox .closeIcon').on('click', function () {
        $('body').removeClass('popupOpen')
        $('body, html').css('overflow-y', 'auto')
    });

});
