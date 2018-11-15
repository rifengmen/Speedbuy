$(function () {
    let oid = location.search.split("=")[1];
    let discount = 0;
    let uid = 0;
    // 发送ajax请求页面内容
    $.ajax({
        url: "/speedbuy/index.php/shop/orderdetail",
        data: {oid:oid},
        dataType: "json",
        success: function (res) {
            setshopname(res.shopname);
            setorder(res.order);
            setgoods(res.goods);
            discount = res.order.total;
            uid = res.order.uid;
        }
    })
    // 点击支付
    $("a.right").on("click",function () {
        location.href = "/speedbuy/index.php/pay?discount=" + discount + "&uid=" + uid;
    })
    // 设置跳转时携带信息

    // 输出店铺名称
    function setshopname(value) {
        $(".list > h1").text(value);
    }
    // 输出订单信息
    function setorder(order) {
        $(".pay > .number > span").text(order.total);
        $(".pay > .left > .down > span").text((order.price - order.total).toFixed(2));
        $(".pay > .left > .up > span").text(order.fee);
        $("div.total .sum").text(order.total);
    }
    // 输出商品信息
    function setgoods(arr) {
        let str = "";
        arr.forEach(ele => {
            str += `<li>
                            <a href="/speedbuy/index.php/shop/goodsdetail?id=${ele.id}">
                                <div class="left-img">
                                    <img src="${ele.thumb}" alt="">
                                </div>
                                <div class="right-text">
                                    <h3>${ele.title}</h3>
                                    <p class="iconxx">
                                        <span></span>
                                        <span class="num">
                                            <span>${ele.numbers}</span>份
                                        </span>
                                        <span class="money">
                                            <del class="price">
                                                &yen;<span>${ele.price}</span>
                                            </del>
                                            <span class="discount">
                                                &yen;<span>${ele.discount}</span>
                                            </span>
                                        </span>
                                    </p>
                                </div>
                            </a>
                        </li>`;
        })
        $(".list > .food").html(str);
    }


})