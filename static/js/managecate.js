let {table,$,jquery} = layui;
table.render({
    elem: '#test',
    cols: [[
        {field: 'cid', width: 180, title: 'CID',},
         {field: 'title', width: 220, title: '栏目标题'},
        {field: 'thumb', width: 320, title: '缩略图', templet:'<div><img src="{{ d.thumb}}" width="50"></div>'},
        {field: 'pid', width: 220, title: 'PID'},
        {fixed: 'right', width:240, align:'center', toolbar: '#toolbar'}
    ]],
    url: '/speedbuy/index.php/managecate/query',
    page: { //支持传入 laypage 组件的所有参数（某些参数除外，如：jump/elem） - 详见文档
        prev: '上一页',
        next: '下一页',
        groups: 5,
        first: false, //不显示首页
        last: false, //不显示尾页
    },
    height: "full-230",
    limit: 3,
    loading: true

});
$("tbody").on("click",".edits",function () {

    // let str = $(".laytable-cell-1-0-0").text();
    // let num = $(this).closest("tr").index();
    // if (str.length == 6) {
    //     let cid = str[3+num];
    //     console.log(cid);
    // }
    // else if (str.length == 7) {
    //     let cid = str[3+num];
    //     console.log(cid);
    // }
    // else if (str.length == 8) {
    //     let cid = str[3+num];
    //     console.log(cid);
    // }
    // else if (str.length == 9) {
    //     let cid = str[3+num];
    //     console.log(cid);
    // }

    let num = $(this).closest("tr").index()+1;
    let len = 3;
    let size = $(".layui-laypage-em").next().get(0);
    let pages = size.innerText;
    let cid = len*(pages-1)+num;
    $.ajax({
        url: "/speedbuy/index.php/managecate/select",
        data: {
            cid: cid,
        },
        success: function (res) {
            console.log(res);
        }
    });


    return false;
});
table.on("click",".dels",function () {

    return false;
});
