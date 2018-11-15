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
    });
    // 上方隐藏块
    let scrollup = $(".scrollup");
    // 下方隐藏块
    let scrolldown = $(".scrolldown");
    // 店铺盒子
    let shops = $(".recommend-shop-ul");
    //设置化页码  步进值  排序方式   分类级别  初始化总页码
    let page = 0, limit = 5, key = "sid", pages = 1;
    // 排列方式列表
    let shoplist = $(".recommend-fl > li");
    // 获取搜索框
    let seach = $("header > .sousuo > .icon-sousuo");
    // 初始化开关
    let flag = false;
    let flag1 = true;
    // 店铺排序方式列表点击时
    shoplist.on("click",function () {
        shoplist.removeClass("hot").filter(this).addClass("hot");
        page = 0;
        pages = 1
        key = $(this).attr("type");
        shops.empty();
        getCate();
    })
    // 加载时先执行一次分类列表点击事件
    shoplist.triggerHandler("click");
    // 初始化iscroll页面滚动效果
    let iscroll = new IScroll("#wrapper" , {
        probeType: 3,
        scrollbars: true,
        click: true,
        fadeScrollbars: true
    })
    // 页面滚动时
    iscroll.on("scroll",function () {
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
    // 页面滚动结束时执行的函数
    function getCate() {
        flag = false;
        flag1 = false;
        page++;
        if (page > pages) {
            alert("我是有底线的！");
            return;
        }
        $.ajax({
            url: "/speedbuy/index.php/index/query",
            data: {
                page: page,
                limit: limit,
                key: key,
            },
            dataType: "json",
            success: function (res) {
                pages = res.pages;
                reder(res.result);
            }
        })
    }
    let local = "/speedbuy/index.php/shop?sid=";
    // ajax请求完成时执行的函数
    function reder(data) {
        flag1 = true;
        let html = "";
        data.forEach(v => {
            html += `<li>
				           	<a href="${local + v.sid}">
				           		<div class="left-img">
				           			<img src="${v.sthumb}" alt="${v.shopname}">
				           		</div>
				           		<div class="right-text">
				           			<h3>${v.shopname}</h3>
				           			<div class="star">
					             	<div class="star1">
					             		<img src="/speedbuy/static/images/star_02.png" alt="">
					             	</div>
					             	<div class="star2" style="width: ${v.score/5*100}%">
					             		<img src="/speedbuy/static/images/star_01.png" alt="">
					             	</div>
					             	<p class="iconxx">
					             		<span></span>
					             		<span></span>
					             		<span></span>
					             		<span>${v.score}</span>
				           				    <span class="yj">月售${v.sale}单</span>
				           				    <span class="v">蜂鸟专送</span>
					             	</p>
					             </div>
				           			<p class="delivery">
				           				<div class="delivery-left">
				           					<span>起送&yen;30</span>
				           					<span>派送费&yen;${v.fee}</span>
           
				           				</div>
				           				<div class="delivery-right">
				           					<span>2.3km</span>
				           					<span>28分钟</span>
				           				</div>
				           			</p>
				           			<p class="label">
				           				<span class="black">${v.stype}</span>
				           				<span class="black">品质联盟</span>
				           				<span class="red">
				           					<i class="iconfont icon-koubei"></i>
				           					<span>口碑人气好店</span>
				           				</span>
				           			</p>
				           			<div class="youhui">
				           				<div>
				           					<span class="new">首</span>
				           					<span>新用户下单立减14元</span>
				           				</div>
				           				<div>
				           					<span class="subtract">减</span>
				           					<span>满35减15，满55减20</span>
				           				</div>
				           			</div>
				           		</div>
				           	</a>
				           </li>`;
        })
        let str = shops.html();
        shops.html(str+html);
        iscroll.refresh();
    }
})