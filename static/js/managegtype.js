let {table,$,jquery,layer} = layui;
table.render({
    elem: '#test',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'gid', width: 180, title: 'GID', sort: true},
        {field: 'title', width: 220, title: '栏目标题', edit: 'text', sort: true},
        {field: 'sid', width: 220, title: 'SID', sort: true},
        {fixed: 'right', width:240, align:'center', toolbar: '#toolbar',title: "操作"}
    ]],
    url: '/speedbuy/index.php/managegtype/query',
    page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
        prev: '上一页',
        next: '下一页',
        groups: 5,
        first: false, //不显示首页
        last: false, //不显示尾页
    },
    height: "full-270",
    limit: 8,
    limits: [5,8,15,20,30],
    loading: true,
    toolbar: "#toolbar2",
    id: 'table1',
    autoSort: false
});
//监听排序事件
table.on('sort(test)', function(obj){ //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
    table.reload('table1', {
        initSort: obj ,//记录初始排序，如果不设的话，将无法标记表头的排序状态。
        where: { //请求参数（注意：这里面的参数可任意定义，并非下面固定的格式）
            field: obj.field, //排序字段
            order: obj.type //排序方式
        },
        page: {
            curr: 1 //重新从第 1 页开始
        },
    });
});
//头工具栏事件
table.on('toolbar(test)', function(obj){
    let checkStatus = table.checkStatus(obj.config.id);
    switch(obj.event){
        case 'getCheckData':
            let data1 = checkStatus.data;
            layer.alert(JSON.stringify(data1));
            break;
        case 'getCheckLength':
            let data2 = checkStatus.data;
            layer.msg('选中了：'+ data2.length + ' 个');
            break;
        case 'isAll':
            layer.msg(checkStatus.isAll ? '全选': '未全选');
            break;
        case 'allDelete':
            let data3 = checkStatus.data;
            let arr = data3.map(ele => ele.gid);
            $.ajax({
                url: "/speedbuy/index.php/managegtype/deletes",
                data: {gid:arr.join()},
                dataType: "json",
                success: function (res) {
                    if (res.code == 0) {
                        location.href = "/speedbuy/index.php/managegtype";
                    }
                    else {
                        layer.open({
                            type: 1,
                            title: ['提示', 'font-size:18px;background:red;color:#fff;'], //显示标题栏默认false
                            area: '300px;',
                            closeBtn: 2,
                            time: 3000,
                            anim: 1,
                            content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;font-size: 20px;">店铺删除失败！</div>',
                        });
                    }
                }
            })
            break;
    };
});
//监听行工具事件
table.on('tool(test)', function(obj) {
    let data = obj.data;
    if (obj.event === 'del') {
        layer.confirm('真的删除行么', function (index) {
            $.ajax({
                url: "/speedbuy/index.php/managegtype/delete",
                data: {gid: data.gid},
                dataType: 'json',
                success: function (res) {
                }
            })
            obj.del();
            layer.close(index);
        });
    } else if (obj.event === 'edit') {
        $.ajax({
            url: "/speedbuy/index.php/managegtype/update",
            data: {
                gid:data.gid,
                title:data.title,
                sid:data.sid,
            },
            type: "post",
            dataType: 'json',
            success: function (res) {
                if (res.code == 0) {
                    layer.open({
                        type: 1,
                        title: ['提示', 'font-size:18px;background:#red;color:#fff;'], //显示标题栏默认false
                        area: '300px;',
                        closeBtn: 2,
                        time: 3000,
                        anim: 1,
                        content: '<div style="padding: 50px; line-height: 22px; background-color: #099668; color: #fff; font-weight: 300;font-size: 20px;">修改成功！</div>',
                    });
                }
                else if (res.code == 1) {
                    layer.open({
                        type: 1,
                        title: ['提示', 'font-size:18px;background:#red;color:#fff;'], //显示标题栏默认false
                        area: '300px;',
                        closeBtn: 2,
                        time: 3000,
                        anim: 1,
                        content: '<div style="padding: 50px; line-height: 22px; background-color: red; color: #fff; font-weight: 300;font-size: 20px;">修改失败！</div>',
                    });
                }
            }
        })
    }
})
let active = {
    reload: function() {
        let gid = $('#gid').val();
        let title = $('#title').val();
        let sid = $('#sid').val();
        //执行重载
        table.reload('table1', {
            page: {
                curr: 1 //重新从第 1 页开始
            },
            where: {
                gid: gid,
                title: title,
                sid: sid
            }
        });
    }
};
$('.demoTable .layui-btn').on('click', function(){
    let type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});
