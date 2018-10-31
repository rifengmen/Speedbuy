let {table,$,jquery,layer} = layui;
table.render({
    elem: '#test',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'sid', width: 50, title: 'SID',},
         {field: 'shopname', width: 100, title: '店铺名称'},
        {field: 'thumb', width: 100, title: '缩略图', templet:'<div><img src="{{ d.sthumb}}" width="50"></div>'},
        {field: 'sale', width: 80, title: '销量'},
        {field: 'score', width: 80, title: '评分'},
        {field: 'notice', width: 220, title: '公告'},
        {field: 'fee', width: 80, title: '配送费'},
        {field: 'views', width: 80, title: '实景图片', templet:'<div><img src="{{ d.views}}" width="50"></div>'},
        {field: 'slogan', width: 220, title: '口号'},
        {field: 'stype', width: 80, title: '类型'},
        {field: 'sphone', width: 150, title: '店铺电话'},
        {field: 'cid', width: 100, title: '所属分类'},
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
    id: 'table1'
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
        location.href = "/speedbuy/index.php/manageshop/edit?sid=" + data.sid + "&cid=" + data.cid;
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
