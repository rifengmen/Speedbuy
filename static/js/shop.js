$(function () {
    let rightlis = $(".recommend-shop-ul > li");
    let leftlis = $("#leftscroll > .list > li");
    let leftcroll = new IScroll("#leftscroll" , {
        probeType: 3,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    });
    let rightscroll = new IScroll("#rightscroll" , {
        probeType: 3,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    });
    rightscroll.on("scroll",function () {
        for (let i = 0; i < rightlis.length; i++) {
            let top = rightlis[i].offsetTop;
            let bottom = rightlis[i+1].offset;
            let y = this.y | 0;
            if (-y >= top || -y < bottom) {
                leftlis.removeClass("hot").eq(i).addClass("hot");
            }
        }
    })
})