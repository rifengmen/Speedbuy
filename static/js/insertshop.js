let {form,$,jquery,upload,layer} = layui;
let sthumb = $("input:hidden[name=sthumb]");
let views = $("input:hidden[name=views]");
let imgbox = $(".imgBox");
let imgbox2 = $(".imgBox2");
upload.render({
    elem: '#test1',
    acceptMime: 'image/jpg, image/png, image/jpeg, image/webp, image/gif',
    exts: "jpg|jpeg|png|bmp|gif|webp",
    url: '/speedbuy/index.php/upload/init',
    done: function(res){ //上传后的回调
        let lis = $(".imgBox>li");
        if (lis.length) {
            $("img",lis).attr('src',res.msg);
            sthumb.val(res.msg);
        }
        else {
            let str = ` <li>
                            <img src="${res.msg}" width="100">
                            <div class="mask"></div>
                            <div class="button">
                                <i class="layui-icon layui-icon-search"></i>
                                <i class="layui-icon layui-icon-delete"></i>
                            </div>
                        </li>`;
            imgbox.append(str);
            sthumb.val(res.msg);
        }
    }
});
imgbox.on("click",".layui-icon-delete",function () {
    $(this).closest("li").remove();
    sthumb.val('');
    return false;
});
imgbox.on("click",".layui-icon-search",function () {
    $(this).closest("li").css({"width":"300px","height":"300px"});
    return false;
});
upload.render({
    elem: '#test2',
    acceptMime: 'image/jpg, image/png, image/jpeg, image/webp, image/gif',
    exts: "jpg|jpeg|png|bmp|gif|webp",
    url: '/speedbuy/index.php/upload/init',
    done: function(res){ //上传后的回调
        let lis = $(".imgBox2>li");
        if (lis.length) {
            $("img",lis).attr('src',res.msg);
            views.val(res.msg);
        }
        else {
            let str = ` <li>
                                 <img src="${res.msg}" width="100">
                                 <div class="mask"></div>
                                 <div class="button">
                                     <i class="layui-icon layui-icon-search"></i>
                                     <i class="layui-icon layui-icon-delete"></i>
                                 </div>
                             </li>`;
            imgbox2.append(str);
            views.val(res.msg);
        }
    }
});
imgbox2.on("click",".layui-icon-delete",function () {
    $(this).closest("li").remove();
    views.val('');
    return false;
});
imgbox2.on("click",".layui-icon-search",function () {
    $(this).closest("li").css({"width":"300px","height":"300px"});
    return false;
});
form.on("submit(submit)",function (data) {
    let qs2 = $("form").serialize();
    if (!data.field.sthumb || !data.field.views) {
        layer.open({
            type: 1,
            title: ['提示', 'font-size:18px;background:red;color:#fff;'], //显示标题栏默认false
            area: '300px;',
            closeBtn: 2,
            time: 5000,
            id: 'LAY_layuipro2', //设定一个id，防止重复弹出
            anim: 1,
            content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">请上传图片！</div>',
        });
        return false;
    }
    $.ajax({
        url:'/speedbuy/index.php/manageshop/insert1',
        data: qs2,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                layer.open({
                    type: 1,
                    title: ['提示', 'font-size:18px;background:#099668;color:#fff;'], //显示标题栏默认false
                    area: '300px;',
                    closeBtn: 2,
                    time: 5000,
                    id: 'LAY_layuipro0', //设定一个id，防止重复弹出
                    anim: 1,
                    content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">栏目添加成功！</div>',
                });
                location.href="/speedbuy/index.php/manageshop/insert";
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