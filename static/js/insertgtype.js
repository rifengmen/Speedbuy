let {form,$,jquery,layer} = layui;

form.on("submit(submit)",function (data) {
    let qs = $("form").serialize();
    $.ajax({
        url:'/speedbuy/index.php/managegtype/insert1',
        data: qs,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                location.href="/speedbuy/index.php/managegtype/insert";
            }
            else if (res.code == 1) {
                layer.open({
                    type: 1,
                    title: ['提示', 'font-size:18px;background:#red;color:#fff;'], //显示标题栏默认false
                    area: '300px;',
                    closeBtn: 2,
                    time: 5000,
                    id: 'LAY_layuipro1', //设定一个id，防止重复弹出
                    anim: 1,
                    content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">栏目添加失败！</div>',
                });
            }
        }
    });
    return false;
})