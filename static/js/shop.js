$(function () {
    let rightlis = $(".recommend-shop-ul > li");
    let leftlis = $("#leftscroll > .list > li");
    let arr = [];
    let arr1 = [];
    let heights = 0;
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
    arr.push(heights);
    for (let i = 0; i < rightlis.length; i++) {
        heights += rightlis[i].offsetHeight;
        arr.push(heights);
        arr1.push(rightlis[i].offsetTop);
    }
    rightscroll.on("scroll",function () {
        let y = this.y | 0;
        let index = scroll(y);
        leftlis.removeClass("hot").eq(index).addClass("hot");
    })
    function scroll(y) {
        for (let j = 0; j < arr.length; j++) {
            let top = arr[j];
            let bottom = arr[j+1];
            if (-y >= top && -y < bottom || y < 0 && !bottom) {
                return j;
            }
        }
        return 0;
    }
})