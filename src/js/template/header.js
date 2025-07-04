
let winscroll = $(window).scrollTop();
let winH = $(window).height();
let winW = $(window).width();
    
//--------------MENU-------------------
$('.searchBox .img').on('click', function () {
    $(this).parent().toggleClass('open')
});


let num = $('body').data('menu')
$('.menu > li').eq(num).addClass('active')
let numSec = $('body').data('child')
$('li.active .menu-second > li').eq(numSec).addClass('active')
$('.menu-list').on('click',function(){
    if(winW < 992){
        $(this).parent().addClass('active')
        $(this).siblings().addClass('active')
        $('.closeMenu').addClass('open')
        $('.menu-ham').addClass('close')
    }
    $(this).parent().siblings().removeClass('active')
})

$('.closeMenu').on('click', function () {
    $('.closeMenu').removeClass('open')
    $('.menu-ham').removeClass('close')
    $('.menu li').removeClass('active')
    $('.menu-second').removeClass('active')
});
$(window).on('scroll', function () {
    if(winW < 992){
        $('.container-menu').css('height', `${window.innerHeight - 88}px`)
    }
});

//-------------------HAMBUR 開合--------------------
$('.menu-ham').on('click', function () {
    $(this).toggleClass('hamActive');
    $('body').toggleClass('openMenu');
    $('.container-menu').css('height', `${window.innerHeight - 88}px`)

    if ($(this).hasClass('hamActive')) {
        $('html').css('overflow', 'hidden');
        $('body').css('overflow', 'hidden');
    } else {
        $('html').css('overflow', 'hidden auto');
        $('body').css('overflow', 'hidden auto');
        $('.menu li').removeClass('active')
    }
});


//當畫面大於991時，移除漢堡選單目前開闔的情況
$(window).on('resize', function () {
    winW = $(window).width();
    if (winW > 991) {
        // $('.menu li').removeClass('active')
        $('body').removeClass('openMenu');
        $('.menu-ham').removeClass('hamActive');
    }
});



if (winW < 992) {

    $('footer .f_top ul li').on('click', function(){
        $(this).addClass('open')
        $(this).siblings().removeClass('open')
    })
    
    $(window).on('click', function(e){
        var icon = $('footer .f_top ul'); 
        if(!icon.is(e.target) && icon.has(e.target).length === 0){
            $('footer .f_top ul li').removeClass('open');
        }
    });
}

