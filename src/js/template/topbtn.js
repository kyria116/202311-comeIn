
let topbtnH = $('.fixBoxBtn').outerHeight();


$(window).on('scroll', gotop);
$(window).on('resize', gotop);
function gotop(){
    let winH = $(window).height();
    let winscroll = $(window).scrollTop();
    let topBtnStop = $(document).height() - winH - $('footer').outerHeight() + ($('.fixBtn').outerHeight() / 2) + 20;
    let topPc = $(document).height() - $('footer').outerHeight() - topbtnH + ($('.fixBtn').outerHeight() / 2) - 20;
    let topMo = $(document).height() - $('footer').outerHeight() - topbtnH + ($('.fixBtn').outerHeight() / 2);
    
    //show info icon
    
    if(winscroll > 0){
        $('.fixBoxBtn').addClass('show');
        $('.fixBoxBtn2').addClass('show');
    }else{
        $('.fixBoxBtn').removeClass('show');
        $('.fixBoxBtn2').removeClass('show');
    }
    if(winscroll >= topBtnStop){
        $('.fixBoxBtn').addClass('change');
        $('.change').css('bottom', 'auto');
        if($(window).width() > 991){
            $('.change').css('top', topPc);
        }else{
            $('.change').css('top', topMo);
        }
    }else{
        $('.fixBoxBtn').removeClass('change');
        $('.fixBoxBtn').removeAttr('style');
    } 

    //向上scroll
    $('.fixBtn').on('click',function(){
        $('html,body').stop(true).animate({
            scrollTop: 0
        }, 1000);
    })
}