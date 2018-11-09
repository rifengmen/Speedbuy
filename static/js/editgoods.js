// 解构赋值
let {form,$,jquery,upload,layer} = layui;
// 获取用于存放缩略图地址的隐藏input
let thumb = $("input:hidden[name=thumb]");
// 获取缩略图预览模块
let imgbox = $(".imgBox");
let gidBox = $("select[name=gid]");
// 监听select选中事件
form.on('select(filter)', function(data){
    $.ajax({
        url: "/speedbuy/index.php/managegoods/insert2",
        data: {sid:data.value},
        dataType: "json",
        success: function (res) {
            let str = ``;
            $(res).each(function (i, v) {
                str += `<option value="${v.gid}">${v.title}</option>`;
            })
            gidBox.html(str);
            // 刷新select选择框渲染
            form.render('select',"test");
        }
    })
});
// 图片上传
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
            thumb.val(res.msg);
        }
    }
});
// 删除图片-缩略图
imgbox.on("click",".layui-icon-delete",function () {
    $(this).closest("li").remove();
    thumb.val('');
    return false;
});
//放大图片-缩略图
imgbox.on("click",".layui-icon-search",function () {
    $(this).closest("li").css({"width":"300px","height":"300px"});
    return false;
});
// 提交数据到后台
form.on("submit(submit)",function (data) {
    let qs2 = $("form").serialize();
    if (!data.field.thumb) {
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
        url:'/speedbuy/index.php/managegoods/update',
        data: qs2,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                location.href="/speedbuy/index.php/managegoods";
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
                    content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">商品修改失败！</div>',
                });
            }
        }
    });
    return false;
})