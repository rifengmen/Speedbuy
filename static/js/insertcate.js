let {form,$,jquery,upload} = layui;
let thumb = $("input:hidden");
upload.render({
    elem: '#test1'
    ,url: '/speedbuy/index.php/upload/init'
    ,done: function(res, index, upload){ //上传后的回调
        thumb.val(res.url)
    }
    //,accept: 'file' //允许上传的文件类型
    //,size: 50 //最大允许上传的文件大小
    //,……
});
form.on("submit(submit)",function (data) {
    let qs = $("form").serialize();
    $.ajax({
        url:'/speedbuy/index.php/managecate/insert1',
        data: qs,
        success: function (res) {
            console.log(res);
        }
    });
    return false;
})