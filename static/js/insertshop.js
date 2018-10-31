let {form,$,jquery,upload,layer} = layui;
let sthumb = $("input:hidden[name=sthumb]");
let views = $("input:hidden[name=views]");
let imgbox = $(".imgBox");
let imgbox2 = $(".imgBox2");
let arr = []; // 空数组用来存储图片路径，方便修改
// 缩略图上传图片（只一张）
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
// 删除图片
imgbox.on("click",".layui-icon-delete",function () {
    $(this).closest("li").remove();
    sthumb.val('');
    return false;
});
// 放大图片
imgbox.on("click",".layui-icon-search",function () {
    $(this).closest("li").css({"width":"300px","height":"300px"});
    return false;
});
// 实景图上传图片（上传多张）
upload.render({
    elem: '#test2',
    acceptMime: 'image/jpg, image/png, image/jpeg, image/webp, image/gif',
    exts: "jpg|jpeg|png|bmp|gif|webp",
    url: '/speedbuy/index.php/upload/init',
    multiple: true,
    done: function(res){ //上传后的回调
        let str = `<li>
                             <img src="${res.msg}" width="100">
                             <div class="mask"></div>
                             <div class="button">
                                 <i class="layui-icon layui-icon-search"></i>
                                 <i class="layui-icon layui-icon-delete"></i>
                             </div>
                       </li>`;
        imgbox2.append(str);
        let val = views.val();
        arr.push(res.msg);
        let nstr = arr.join(",");
        views.val(nstr);
    }
});
// 删除图片
imgbox2.on("click",".layui-icon-delete",function () {
    let index = $(this).closest("li").index();
    $(this).closest("li").remove();
    arr.splice(index,1);
    let nstr = arr.join(",");
    views.val(nstr);
    return false;
});
// 放大图片
imgbox2.on("click",".layui-icon-search",function () {
    $(this).closest("li").css({"width":"300px","height":"300px"});
    return false;
});
// 获取表单填写数据并发送
form.on("submit(submit)",function (data) {
    delete data.field.file;
    if (!data.field.sthumb || !data.field.views) {
        layer.open({
            type: 1,
            title: ['提示', 'font-size:18px;background:red;color:#fff;'], //显示标题栏默认false
            area: '300px;',
            closeBtn: 2,
            time: 5000,
            anim: 1,
            content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">请上传图片！</div>',
        });
        return false;
    }
    // 发送上传数据
    $.ajax({
        type: "post",
        url:'/speedbuy/index.php/manageshop/insert1',
        data: data.field,
        dataType: 'json',
        success: function (res) {
            if (res.code == 0) {
                location.href="/speedbuy/index.php/manageshop/insert";
            }
            else if (res.code == 1) {
                layer.open({
                    type: 1,
                    title: ['提示', 'font-size:18px;background:#red;color:#fff;'], //显示标题栏默认false
                    area: '300px;',
                    closeBtn: 2,
                    time: 5000,
                    anim: 1,
                    content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">栏目添加失败！</div>',
                });
            }
        }
    });
    return false;
})