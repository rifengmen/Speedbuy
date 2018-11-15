$(function () {
    let page = 0;
    let pages = 1;
    let limit = 10;
    let flag = false;
    let flag1 = true;
    // 上方隐藏块
    let scrollup = $(".scrollup");
    // 下方隐藏块
    let scrolldown = $(".scrolldown");
    // 初始化iscroll页面滚动效果
    let iscroll = new IScroll("#wrapper" , {
        probeType: 3,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    });
    getCate();
    // 页面滚动时
    iscroll.on("scroll",function () {
        if (this.y > 60) {
            scrollup.css("display","block");
            return;
        }
        else if (this.y <= 60 && this.y > 0) {
            scrollup.css("display","none");
            return;
        }
        if (this.maxScrollY - this.y > 100) {
            scrolldown.css("display","block");
            flag = true;
            return;
        }
        else if (this.maxScrollY - this.y <= 100 && this.maxScrollY - this.y > 0) {
            scrolldown.css("display","none");
            return;
        }
    })
    // 页面滚动结束时
    iscroll.on("scrollEnd",function () {
        if (flag && flag1) {
            getCate();
        }
    })
    // 获取历史订单的方法
    function getCate() {
        flag = false;
        flag1 = false;
        page++;
        if (page > pages) {
            alert("我是有底线的！");
            return;
        }
        $.ajax({
            url: "/speedbuy/index.php/order/query",
            data: {
                page,
                limit
            },
            dataType: "json",
            success: function (res) {
                pages = res.pages;
                reder(res.orders);
            }
        })
    }
    // ajax请求完成时页面写入内容的方法
    function reder(data) {
        flag1 = true;
        let str = "";
        data.forEach(ele => {
            str += `<li>
			                	<a href="/speedbuy/index.php/shop?sid=${ele.sid}">
			                		<div class="left-img">
			                			<img src="${ele.sthumb}" alt="">
			                		</div>
			                		<div class="right-text">
			                			<h3>${ele.shopname}</h3>
			                			<p class="iconxx">
			                			    <span class="yj">月售968单</span>
			                			    <span class="v">订单已送达</span>
			                			</p>
			                			<p>
			                				<span>
			                					<i class="iconfont icon-hongbao"></i>
			                					<span>${ele.ctime}</span>
			                				</span>
			                				<span>&yen;${ele.total}</span>
			                			</p>
			                		</div>
			                	</a>
			                </li>`;
        })
        let html = $(".history-list").html();
        $(".history-list").html(html+str);
        iscroll.refresh();
    }
})