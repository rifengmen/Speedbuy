let {table,$,jquery,layer} = layui;
table.render({
    elem: '#test',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'sid', width: 120, title: 'SID', sort: true},
         {field: 'shopname', width: 100, title: '店铺名称', sort: true},
        {field: 'thumb', width: 120, title: '缩略图', templet:'<div><img src="{{ d.sthumb}}" width="50" height="50"></div>'},
        {field: 'sale', width: 100, title: '销量', sort: true},
        {field: 'score', width: 100, title: '评分', sort: true},
        {field: 'notice', width: 120, title: '公告'},
        {field: 'fee', width: 120, title: '配送费', sort: true},
        {field: 'views', width: 200, title: '实景图片', templet:function (d) {
                let arr = d.views.split(",");
                let str = "<div>";
                arr.forEach(val => {
                    str += `<img src="${val}" alt="${val}" width="50" height="50" style="margin: 0 10px">`
                })
                str += "</div>";
                return str;
            }},
        {field: 'slogan', width: 120, title: '口号'},
        {field: 'stype', width: 120, title: '经营范围'},
        {field: 'sphone', width: 120, title: '店铺电话'},
        {field: 'cid', width: 120, title: '所属分类', sort: true},
        {fixed: 'right', width:200, align:'center', toolbar: '#toolbar', title: '操作'}
    ]],
    url: '/speedbuy/index.php/manageshop/query',
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
        case 'Alldelete':
            let data3 = checkStatus.data;
            let arr = data3.map(ele => ele.sid);
            $.ajax({
                url: "/speedbuy/index.php/manageshop/deletes",
                data: {sid:arr.join()},
                dataType: "json",
                success: function (res) {
                    if (res.code == 0) {
                        location.href = "/speedbuy/index.php/manageshop";
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
table.on('tool(test)', function(obj){
    let data = obj.data;
    if(obj.event === 'del'){
        layer.confirm('真的删除行么', function(index){
            $.ajax({
                url: "/speedbuy/index.php/manageshop/delete",
                data: {sid: data.sid},
                dataType: 'json',
                success: function (res) {
                }
            })
            obj.del();
            layer.close(index);
        });
    } else if(obj.event === 'edit') {
        location.href = "/speedbuy/index.php/manageshop/edit?sid=" + data.sid;
    }
});
let active = {
    reload: function() {
        let sid = $('#sid').val();
        let shopname = $('#shopname').val();
        let cid = $('#cid').val();
        //执行重载
        table.reload('table1', {
            page: {
                curr: 1 //重新从第 1 页开始
            },
            where: {
                sid: sid,
                shopname: shopname,
                cid: cid
            }
        });
    }
};
$('.demoTable .layui-btn').on('click', function(){
    let type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});
