


$(function(){
    let numMenu = $('main').attr('data-health')
    $('#top-menu-ul li').removeClass('active')
    $('#top-menu-ul li').eq(numMenu).addClass('active')

    //@prepros-prepend template/top_menu.js

    window.setTimeout(function () {
        slider_ul_list("top-menu-ul-2");
    }, 1);

    // let newIndex = 0
    // $('.health_topMenu .item_menu_list li').on('click', function(){
    //     newIndex = $(this).index()
    //     $(this).addClass('active')
    //     $(this).siblings().removeClass('active')
    //     $('.healthContain > li').eq(newIndex).addClass('active')
    //     $('.healthContain > li').eq(newIndex).siblings().removeClass('active')
    // })
    // $('.health_topMenu select').on('change', function () {
    //     newIndex = $(this).val()
    //     $('.healthContain > li').eq(newIndex).addClass('active')
    //     $('.healthContain > li').eq(newIndex).siblings().removeClass('active')
    // });


    //音樂
    $('.healthMusic li').on('click', function(){
        $(this).siblings().removeClass('active')
        $(this).toggleClass('active')
    });
    var songList = document.querySelectorAll(".healthMusic li");
    var audioPlay = document.querySelector(".song_music");
    var audioSrc = document.querySelector(".song_music source");
    var musicList = document.querySelectorAll(".musicList li")
    songList.forEach((i,idx) => {
        i.addEventListener('click', function(){
            if(i.classList.contains('playNow')){
                i.classList.remove('playNow')
                audioPlay.pause()
            }else{
                i.classList.add('playNow')
                audioSrc.src = musicList[idx].dataset.src
                audioPlay.load()
                audioPlay.play()
                siblings(i)
            }
        })
    })
    function siblings(item){
        var p = item.parentNode.children;
        for(var i=0, pl=p.length; i<pl ;i++){
            if(p[i] !== item){
                p[i].classList.remove('playNow')
            }
        }
    }

    //影片
    $('.healthVideo li').on('click', function(){
        let ytLink = $(this).find('>a').attr('data-yt')
        $('#popup iframe').attr('src', `https://www.youtube.com/embed/${ytLink}`)
        $('html').addClass('popupOpen')
    })
    $('.closeIcon').on('click', function () {
        $('html').removeClass('popupOpen')
        $('#popup iframe').attr('src', ``)
    });
});