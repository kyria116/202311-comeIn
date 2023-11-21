


$(function(){
    //@prepros-prepend template/top_menu.js
    // @prepros-prepend plugin/dataTables.min.js

    window.setTimeout(function () {
        slider_ul_list("top-menu-ul-2");
    }, 1);
    window.setTimeout(function () {
        slider_ul_list("top-menu-ul-3");
    }, 1);

    let newIndex = 0
    $('.information_topMenu .item_menu_list li').on('click', function(){
        newIndex = $(this).index()
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        $('.topMenuContain > li').eq(newIndex).addClass('active')
        $('.topMenuContain > li').eq(newIndex).siblings().removeClass('active')
    })
    $('.information_topMenu select').on('change', function () {
        newIndex = $(this).val()
        $('.topMenuContain > li').eq(newIndex).addClass('active')
        $('.topMenuContain > li').eq(newIndex).siblings().removeClass('active')
    });
    $('#example').DataTable({
        fixedColumns: {
            leftColumns: 2
        },
        scrollY:        400,
        scrollX:        true,
        fixedColumns:   true,
        searching: false,
        paging: false,
        info: false,
        ordering: false,
    });
});