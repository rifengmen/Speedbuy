let {form,$,jquery,layer} = layui;
// 设定验证条件
form.verify({
    username: function(value,item)  {
        if (!/[a-z]{3,6}/.test(value)) {
            return "用户名须为3-6位小写字母";
        }
    },
    password: [
    /^[\S]{6,12}$/,
    '密码必须6到12位，且不能出现空格'
]
});
// 发送登录请求，并登录
form.on('submit(formDemo)',function (data) {
    let qs = $("form").serialize();
    $.ajax({
        url: '/speedbuy/index.php/adminlogin/check',
        data: qs,
        success: function (res) {
            if (res == "success") {
                location.href = "/speedbuy/index.php/managecate";
                // layer.msg('登陆成功', {icon: 6});
            }
            else if (res == "fail") {
                layer.open({
                    type: 1,
                    title: ['提示', 'font-size:18px;background:red;color:#fff;'], //显示标题栏默认false
                    area: '300px;',
                    closeBtn: 2,
                    time: 5000,
                    anim: 1,
                    content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">登陆失败！</div>',
                });
            }
        }
    })
    return false;
});