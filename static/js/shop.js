$(function () {
    let leftlis = $("#leftscroll > .list");
    let typebox = $("#rightscroll > .recommend-shop-ul");
    // 创一个数组用来存放所有模块的高度，用来设定iscroll时用
    let arr = [];
    // 商品分类用的iscroll
    let leftcroll = null;
    // 商品用的iscroll
    let rightscroll = null;
    // 购物单用的iscroll
    let shopscroll = null;
    // 模拟购物车
    let cars = {
        total: "",
        discount:"",
        fee:"11",
        numbers:"",
        goods:[]

    };
    // 页面加载时发送ajax请求，获取页面内容
    $.ajax({
        url: "/speedbuy/index.php/shop/detail",
        data: {sid:location.search.split("=")[1]},
        dataType: "json",
        success: function (res) {
            rander(res);
            scrolllist();
            calcheight();
        }
    });
   // 添加页面滚动
    function scrolllist() {
        leftcroll = new IScroll("#leftscroll" , {
            probeType: 3,
            scrollbars: true,
            click: true,
            fadeScrollbars: true
        });
        rightscroll = new IScroll("#rightscroll" , {
            probeType: 3,
            scrollbars: true,
            click: true,
            fadeScrollbars: true
        });
        leftlis.on("click","li",function () {
            let index = $(this).index();
            $("li",leftlis).removeClass("hot").filter(this).addClass("hot");
            rightscroll.scrollTo(0,-arr[index],500,IScroll.utils.ease.quadratic);
        });
        rightscroll.on("scroll",function () {
            let y = Math.abs(Math.round(this.y)) + 10;
            let index = scroll(y);
            $("li",leftlis).removeClass("hot").eq(index).addClass("hot");
        });
    }
    function scroll(y) {
        for (let j = 0; j < arr.length; j++) {
            let top = arr[j];
            let bottom = arr[j+1];
            if (y >= top && y < bottom) {
                return j;
            }
        }
        return 0;
    }
    // 获取所有模块高度
    function calcheight() {
        let heights = 0;
        let rightlis = $(".recommend-shop-ul > li");
        arr.push(heights);
        for (let i = 0; i < rightlis.length; i++) {
            heights += rightlis[i].offsetHeight;
            arr.push(heights);
        }
    }
    // 页面渲染内容的方法
    function rander(res) {
        let goods = "";
        let type = "";
        for (let i = 0; i < res.length; i++) {
            if (i == 0) {
                type += `<li class="hot">${res[i].title}</li>`;
            }
            else {
                type += `<li>${res[i].title}</li>`;
            }
            leftlis.html(type);
            goods += `<li>
					       	   <h2>${res[i].title}</h2>
					       	   <ul>
					       	   ${randerlist(res[i]["goods"])}
                               </ul>
					       </li>`;
            typebox.html(goods);
        }
    }
    function randerlist(arr) {
        let str = "";
        for (let j=0;j<arr.length;j++) {
            str += `<li id="${arr[j].id}" data='${JSON.stringify(arr[j])}'>
								<a href="javascript:void (false)">
									<div class="left-img">
										<img src="${arr[j].thumb}" alt="">
									</div>
									<div class="right-text">
										<h3>${arr[j].title}</h3>
										<p class="iconxx">
											<span class="yj">月售${arr[j].count}单</span>
											<span class="v">好评${arr[j].score}</span>
										</p>
										<p class="delivery">
											<span class="delivery-left">
											    &yen;${arr[j].discount}
											    <del class="delivery-left">&yen;${arr[j].price}</del>
											</span>
											<span>
											<i class="iconfont icon-jian-copy"></i>
											<span class="num">1</span>
											<i class="iconfont icon-jjia-"></i>
										</span>
										</p>
									</div>
								</a>
							</li>`;
        }
        return str;
    }
    // 事件委派，点击加，添加商品
    typebox.on("click",".icon-jjia-",function () {
        let data = JSON.parse($(this).closest("li").attr("data"));
        let ids = $(this).closest("li").attr("id");
        let index = cars.goods.filter(ele => ele.id==ids);
        if (index.length) {
            let numbers = ++index[0]["numbers"];
            $(this).prev("span.num").text(numbers)
        }
        else {
            $(this).prev("span.num").css("display", "inline-block");
            $(this).prevAll("i.icon-jian-copy").css("display", "inline-block");
            data.numbers = 1;
            cars.goods.push(data);
        }
        carsum();
        cartotal();
        cardiscount();
        carslist();
        saveCar();
    });
    // 事件委派，点击减，减少商品
    typebox.on("click",".icon-jian-copy",function () {
        let ids = $(this).closest("li").attr("id");
        let index = cars.goods.filter(ele => ele.id==ids);
        let numbers = --index[0]["numbers"];
        if (index.length) {
            if (numbers) {
                $(this).next("span.num").text(numbers);
            }
            else {
                $(this).css("display", "none").next("span.num").css("display", "none");
                cars.goods = cars.goods.filter(ele => ele.id != ids);
            }
        }
        carsum();
        cartotal();
        cardiscount();
        carslist();
        saveCar();
    })
    // 购物车出现商品数字的方法
    function carsum() {
        // 获取购物车
        let sum = 0;
        cars.goods.forEach(ele => {
            sum += ele.numbers;
        });
        cars.numbers = sum;
        $(".cart > span").text(sum);
        if (sum > 0) {
            $(".pay").addClass("hot");
            $(".cart").addClass("hot");
        }
        else if (sum <= 0) {
            $(".pay").removeClass("hot");
            $(".cart").removeClass("hot");
        };
    }
    // 购物车计算总价的方法
    function cartotal() {
        let sum = 0;
        cars.goods.forEach(ele => {
            sum += ele.numbers*ele.price;
        })
        cars.total = sum.toFixed(2);
        if (sum == 0) {
            $(".price").text("");
        }
        else if (sum > 0) {
            $(".price").text(`¥${sum.toFixed(2)}`);
        }
    }
    // 购物车计算折扣价的方法
    function cardiscount() {
        let sum = 0;
        cars.goods.forEach(ele => {
            sum += ele.numbers*ele.discount;
        })
        cars.discount = sum.toFixed(2);
        if (sum == 0) {
            $(".pay > .right").text("15元起配送");
            $("span.discount").text("未选购商品");
        }
        else if (sum > 0) {
            $("span.discount").text(`¥${sum.toFixed(2)}`);
            if (sum < 20) {
                $(".pay > .right").text(`还差¥${(20-sum).toFixed(2)}`).removeClass("hot");
            }
            else if (sum >= 20) {
                $(".pay > .right").text(`去支付`).addClass("hot");
            }
        }
    }
    // 事件委派，点击支付跳转
    $(".pay").on("click","div.right.hot",function () {
        let nums = location.search.split("=")[1];
        $.ajax({
            url: "/speedbuy/index.php/shop/car",
            type: "post",
            data: cars,
            dataType: "json",
            success: function (res) {
                if (res.code == 1) {
                    location.href = "/speedbuy/index.php/my?urls=/shop?sid=" + nums;
                }

            }
        })
    })
    // 事件委派，点击购物车出现购物单
    let flag = true;
    $(".pay").on("click","div.cart.hot",function () {
        let height = $(".shopping > .discount").outerHeight() - $(".shopping").outerHeight();
        if (flag) {
            $(".shopping").css("transform",`translate3d(0,${height}px,0)`);
        }
        else {
            $(".shopping").css("transform","translate3d(0,0,0)");
        }
        flag = !flag;
        sscroll();
    });
    // 事件委派，点击购物单加，添加商品
    $(".shopping").on("click",".icon-jjia-",function () {
        let carid = $(this).closest("li").attr("carid");
        //加号本身上边没有click事件，此处不能用triggerHandler，用trigger冒泡触发它父辈身上的click事件
        typebox.find(`#${carid} .icon-jjia-`).trigger("click");
    })
    // 事件委派，点击购物单减，减少商品
    $(".shopping").on("click",".icon-jian-copy",function () {
        let carid = $(this).closest("li").attr("carid");
        typebox.find(`#${carid} .icon-jian-copy`).trigger("click");
    })
    // 点击清空购物车按钮
    $(".shopping").on("click",".icon-shanchu",function () {
        flag = true;
        $(".shopping").css("transform","translate3d(0,0,0)");
        $(".shopping").one("webkitTransitionEnd",function () {
            clearCar();
            cancelCar();
        });
    })
    // 清空购物车的方法
    function clearCar() {
        cars = {
            total: "",
            discount:"",
            price:"",
            fee:"",
            numbers:"",
            goods:[]

        };
        $(".icon-jian-copy").css("display","none");
        $("span.num").text(1).css("display", "none");
        $(".pay > .right").text("20元起配送").removeClass("hot");
        $("span.discount").text("未选购商品");
        $(".price").text("");
        $(".pay").removeClass("hot");
        $(".cart").removeClass("hot");
    }
    // 渲染购物单
    function carslist() {
        $(".iscroll>ul").empty();
        let str = "";
        cars.goods.forEach(ele => {
            str += `<li carid="${ele.id}">
				        	<div class="left">${ele.title}</div>
				        	<div class="right">
				        		<div class="money">&yen;${(ele.numbers*ele.discount).toFixed(2)}</div>
				        		<div class="icon">
				        			<i class="iconfont icon-jian-copy"></i>
				        			<span>${ele.numbers}</span>
				        			<i class="iconfont icon-jjia-"></i>
				        		</div>
				        	</div>
				        </li>`;
        })
        $(".iscroll>ul").html(str);
    }
    // 购物单添加页面滚动
    function sscroll() {
        shopscroll = new IScroll("#shopscroll" , {
            probeType: 3,
            scrollbars: true,
            click: true,
            fadeScrollbars: true
        });
    }
    // 购物车保存到本地存储
    function saveCar() {
        localStorage.cars = JSON.stringify(cars);
    }
    // 清空购物车本地存储
    function cancelCar() {
        let cars = {
            total: "",
            discount:"",
            price:"",
            fee:"",
            numbers:"",
            goods:[]

        };
        localStorage.cars = JSON.stringify(cars);
    }
})