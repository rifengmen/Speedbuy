let {table,$,jquery,layer} = layui;
table.render({
    elem: '#test',
    cols: [[
        {type: 'checkbox', fixed: 'left'},
        {field: 'cid', width: 180, title: 'CID',},
         {field: 'title', width: 220, title: '栏目标题'},
        {field: 'thumb', width: 320, title: '缩略图', templet:'<div><img src="{{ d.thumb}}" width="50"></div>'},
        {field: 'pid', width: 220, title: 'PID'},
        {fixed: 'right', width:240, align:'center', toolbar: '#toolbar',title: "操作"}
    ]],
    url: '/speedbuy/index.php/managecate/query',
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
                url: "/speedbuy/index.php/managecate/delete",
                data: {cid: data.cid},
                dataType: 'json',
                success: function (res) {
                }
            })
            obj.del();
            layer.close(index);
        });
    } else if(obj.event === 'edit') {
        location.href = "/speedbuy/index.php/managecate/edit?cid=" + data.cid;
    }
});
let active = {
    reload: function() {
        let cid = $('#cid').val();
        let title = $('#title').val();
        let pid = $('#pid').val();
        //执行重载
        table.reload('table1', {
            page: {
                curr: 1 //重新从第 1 页开始
            },
            where: {
                cid: cid,
                title: title,
                pid: pid
            }
        });
    }
};
$('.demoTable .layui-btn').on('click', function(){
    let type = $(this).data('type');
    active[type] ? active[type].call(this) : '';
});
