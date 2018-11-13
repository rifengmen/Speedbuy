$(function () {
    // 设置密码验证方法
    $.validator.addMethod("password",function (val , ele) {
        return this.optional(ele) || /^[a-z0-9A-Z]{6,12}$/.test(val);
    },"helloworld");
    // validate验证表单
    $( "#myform" ).validate({
        errorElement: "div",
        rules: {
            phone: {
                required: true,
                digits: true,
            },
            password: {
                required: true,
                password: true,
            },
            code: {
                required: true,
                remote: {
                    url: "/speedbuy/index.php/my/remotecode",     //后台处理程序
                    type: "post",               //数据发送方式
                    dataType: "json",           //接受数据格式
                    data: {                     //要传递的数据
                        code: function () {
                            return $("#code").val();
                        }
                    }
                },
            }
        },
        messages: {
            phone: {
                required:"请输入手机号",
                digits: "手机号码格式错误",
            },
            password: {
                required: "请输入密码",
                password: "密码格式错误",
            },
            code: {
                required: "请输入验证码",
                remote: "验证码错误",
            },
        },
        // 提交登录资料
        submitHandler: function (forms) {
            let str = $("form").serialize();
            $.ajax({
                url: "/speedbuy/index.php/my/login",
                type: "post",
                data: str,
                dataType: "json",
                success: function (res) {
                    if (res.code == 0) {
                       if (location.search) {
                           let urls = location.search.substring(location.search.indexOf("=")+1);
                           location.href="/speedbuy/index.php" + urls;
                       }
                       else {
                           location.href="/speedbuy/index.php/index";
                       }
                    }
                    else if (res.code == 1) {
                        alert(res.msg);
                    }
                }
            })
        }
    });


})