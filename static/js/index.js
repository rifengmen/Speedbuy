$(function () {
    let sbanner = new Swiper ('.banner', {
        loop: true, // 循环模式选项
        autoplay:true,// 自动
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },
    });
    let slist = new Swiper ('.foodentry-wrapper', {
        loop: true, // 循环模式选项
        autoplay:true,// 自动
    })
})