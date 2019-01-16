$(function () {
    //加载弹出层
    layui.use(['form','element'],
    function() {
        layer = layui.layer;
        element = layui.element;
    });
    $('.layui-nav-bar').css({"height":"56px"})
})
/*弹出层*/
function crm_admin_show(title,url,w,h){
    var index;
    if (title == null || title == '') {
        title=false;
    };
    if (url == null || url == '') {
        url="404.html";
    };
    if (w == null || w == '') {
        w=($(window).width()*0.9);
    };
    if (h == null || h == '') {
        h=($(window).height() - 50);
    };
    index = layer.open({
        type: 2,
        area: [w+'px', h +'px'],
        fix: false, //不固定
        title: title,
        content: url,
        success : function(){
            setTimeout(function(){
                layui.layer.tips('点击此处返回上一级', '.layui-layer-setwin .layui-layer-close', {
                    tips: 3
                });
            },500)
        }
    });
    layui.layer.full(index);
    //改变窗口大小时，重置弹窗的宽高，防止超出可视区域（如F12调出debug的操作）
    $(window).on("resize",function(){
        layui.layer.full(index);
    })
}

/*关闭弹出框口*/
function crm_admin_close(){
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.close(index);
}
