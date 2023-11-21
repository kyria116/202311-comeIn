


$(function(){
    //@prepros-prepend template/top_menu.js

    window.setTimeout(function () {
        slider_ul_list("top-menu-ul-2");
    }, 1);

    let newIndex = 0
    $('.health_topMenu .item_menu_list li').on('click', function(){
        newIndex = $(this).index()
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        $('.healthContain > li').eq(newIndex).addClass('active')
        $('.healthContain > li').eq(newIndex).siblings().removeClass('active')
    })
    $('.health_topMenu select').on('change', function () {
        newIndex = $(this).val()
        $('.healthContain > li').eq(newIndex).addClass('active')
        $('.healthContain > li').eq(newIndex).siblings().removeClass('active')
    });
});