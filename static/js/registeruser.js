$(function () {
    // 设置密码验证方法
    $.validator.addMethod("password",function (val , ele) {
        return this.optional(ele) || /^[a-z0-9A-Z]{6,12}$/.test(val);
    });
    // validate验证表单
    $( "#myform" ).validate({
        errorElement: "div",
        rules: {
            phone: {
                required: true,
                digits: true,
                remote: {
                    url: "/speedbuy/index.php/my/phone",     //后台处理程序
                    type: "post",               //数据发送方式
                    dataType: "json",           //接受数据格式
                    data: {                     //要传递的数据
                        phone: function () {
                            return $("#phone").val();
                        }
                    }
                },
            },
            password: {
                required: true,
                password: true,
            },
            password1: {
                required: true,
                equalTo: "#password",
            },
        },
        messages: {
            phone: {
                required: "请输入手机号",
                digits: "手机号码格式错误",
                remote: "号码已被注册",
            },
            password: {
                required: "请输入密码",
                password: "密码格式错误",
            },
            password1: {
                required: "请再次输入密码",
                equalTo: "两次密码须一致",
            },
        },
        // 提交注册资料
        submitHandler: function () {
            let str = $("form").serialize();
            $.ajax({
                url: "/speedbuy/index.php/my/insert",
                type: "post",
                data: str,
                dataType: "json",
                success: function (res) {
                    if (res.code == 0) {
                        location.href = "/speedbuy/index.php/my";
                    }
                    else {
                        alert(res.msg);
                    }
                }
            })
        }
    });

})