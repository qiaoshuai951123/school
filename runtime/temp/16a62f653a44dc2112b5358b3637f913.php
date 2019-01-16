<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/index/photo.html";i:1547490429;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $systems['title']; ?>后台管理系统</title>
  <meta name="renderer" content="webkit">
  <link rel="icon" href="<?php echo $systems['icon']; ?>" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
  <script src="/static/layuiadmin/layui/layui.js"></script>
  <script src="/static/home/js/jquery.min.js"></script>
  <script src="/static/home/js/admin.js"></script>
  <script src="/static/home/js/layui-xtree.js"></script>
  <script type="text/javascript" charset="utf-8" src="/static/php/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/static/php/ueditor.all.js"> </script>
  <style>
  .page{
    margin-top: 20px;
    text-align: center;

}
.page a{
    display: inline-block;
    background: #fff url() 0 0 no-repeat;
    color: #888;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #E2E2E2;

}
.page span{
    display: inline-block;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #E2E2E2;
}
.page span.current{
    display: inline-block;
    background: #64e410 url() 0 0 no-repeat;
    color: #fff;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #64e410;
}
.page .pagination li{
    display: inline-block;
    margin-right: 5px;
    text-align: center;
}
.page .pagination li.active span{
    background: #64e410 url() 0 0 no-repeat;
    color: #fff;
    border: 1px solid #64e410;

}
.upload-icon-img{
    width:120px;
}
.upload-pre-item{
    position: relative;
}
.upload-pre-item .img{
    margin-top: 5px;
    width:150px;
    height:100px;
}
.upload-pre-item i {
    position: absolute;
    cursor: pointer;
    top: 5px;
    background: #2F4056;
    padding: 2px;
    line-height: 15px;
    text-align: center;
    color: #fff;
    margin-left: 1px;
    /* float: left; */
    filter: alpha(opacity=80);
    -moz-opacity: .8;
    -khtml-opacity: .8;
    opacity: .8;
    transition: 1s;
}
.upload-pre-item i:hover{transform:rotate(360deg);}
.upload-pre-item,.upload-icon-img{
    width:120px;
    float: left;
    margin-left: 55px;
}
</style>
</head>

<script type="text/javascript" src="/static/home/js/cropper.min.js"></script>
<link href="/static/home/css/cropper.min.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/ImgCropping.css" rel="stylesheet" type="text/css">
<body>
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">图片列表</div>
          <div class="layui-card-body" pad15>
              <button class="layui-btn layui-btn-sm" onclick="crm_admin_show('添加图片','<?php echo url('index/addphoto'); ?>')"><i class="layui-icon">&#xe608;</i>添加图片</button>
            <table class="layui-table">
                <thead>
                  <tr>
                    <th width="25" align="center">
                      <div class="layui-unselect header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
                    </th>
                    <th>图片名称</th>
                    <th>图片缩略图</th>
                    <th>点击量</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </thead>
                <tbody>
                  <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                   <tr align="center" style="height:500px;"><td colspan="6">暂无公告</td></tr>
                  <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                    <tr>
                      <td>
                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary" data-id='<?php echo $vv['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
                     </td>
                     <td><?php echo $vv['name']; ?></td>
                     <td> <div style="width:80px;height:50px;"><img src="<?php echo $vv['path']; ?>" alt="" style="width:100%;"></div></td>
                     <td><?php echo $vv['look']; ?></td>
                     <td><?php echo date('Y年m月d日 h:i:s',$vv['createtime']); ?></td>
                     <td>
                        <button class="layui-btn layui-btn-sm" onclick="crm_admin_show('修改图片信息','<?php echo url('index/updatephoto',['id'=>$vv['id']]); ?>')">
                          <i class="layui-icon">&#xe642;</i>
                        </button>
                        <button class="layui-btn layui-btn-sm" onclick="del('<?php echo $vv['id']; ?>')"><i class="layui-icon">&#xe640;</i></button>
                     </td>
                    </tr>
                  <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </tbody>
            </table>
            <div class="page">
             <?php echo $list->render(); ?>
            </div>
      </div>
    </div>
  </div>
  <script>
    function del(id)
    {
      layer.confirm("您确定删除此图片吗",function(){
          $.ajax({
            url:"<?php echo url('index/delphoto'); ?>",
            data:{id:id},
            type:"post",
            success:function(data)
            {
              var status = JSON.parse(data);
              layer.msg(status.msg,{icon: status.icon,time:1000},function () {window.location.reload();});
            }
          });
      });
    }
  </script>
</body>
</html>