<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/member/index.html";i:1547307161;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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
          <div class="layui-card-header">加盟商申请管理</div>
          <div class="layui-card-body" pad15>
            <div class="layui-tab">
            <ul class="layui-tab-title">
              <li class="layui-this">待处理</li>
              <li>已联系</li>
              <li>已加盟</li>
              <li>未加盟</li>
            </ul>
            <div class="layui-tab-content">
              <div class="layui-tab-item   layui-show">
                <button class="layui-btn layui-btn-sm" onclick="crm_admin_show('添加加盟商申请','<?php echo url('member/add'); ?>')"><i class="layui-icon">&#xe608;</i>添加加盟商申请</button>
                <table class="layui-table">
                    <thead>
                      <tr>
                        <th>加盟商姓名</th>
                        <th>加盟手机号</th>
                        <th>加盟微信</th>
                        <th>申请时间</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr align="center" style="height:500px;"><td colspan="5">暂无数据</td></tr>
                      <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                          <tr>
                            <td><?php echo $vv['name']; ?></td>
                            <td><?php echo $vv['tel']; ?></td>
                            <td><?php echo $vv['wechat']; ?></td>
                            <td><?php echo(date('Y年m月d日 h:i:s',$vv['createtime']));?></td>
                            <td>
                              <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe715;</i></button>
                              <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe705;</i></button>
                              <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe613;</i></button>
                            </td>
                          </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
                <div class="page">
	             <?php echo $list->render(); ?>
	            </div>
              </div>
              <div class="layui-tab-item">
                  <table class="layui-table">
                <thead>
                  <tr>
                    <th>加盟商姓名</th>
                    <th>加盟手机号</th>
                    <th>加盟微信</th>
                    <th>申请时间</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(empty($list2) || (($list2 instanceof \think\Collection || $list2 instanceof \think\Paginator ) && $list2->isEmpty())): ?>
                    <tr align="center" style="height:500px;"><td colspan="5">暂无数据</td></tr>
                  <?php else: if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                      <tr>
                        <td><?php echo $vv['name']; ?></td>
                        <td><?php echo $vv['tel']; ?></td>
                        <td><?php echo $vv['wechat']; ?></td>
                        <td><?php echo(date('Y年m月d日 h:i:s',$vv['createtime']));?></td>
                        <td>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe715;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe705;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe613;</i></button>
                        </td>
                      </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </tbody>
            </table>
            <div class="page">
	             <?php echo $list2->render(); ?>
	            </div>
              </div>
              <div class="layui-tab-item">
                <table class="layui-table">
                <thead>
                  <tr>
                    <th>加盟商姓名</th>
                    <th>加盟手机号</th>
                    <th>加盟微信</th>
                    <th>申请时间</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(empty($list3) || (($list3 instanceof \think\Collection || $list3 instanceof \think\Paginator ) && $list3->isEmpty())): ?>
                    <tr align="center" style="height:500px;"><td colspan="5">暂无数据</td></tr>
                  <?php else: if(is_array($list3) || $list3 instanceof \think\Collection || $list3 instanceof \think\Paginator): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                      <tr>
                        <td><?php echo $vv['name']; ?></td>
                        <td><?php echo $vv['tel']; ?></td>
                        <td><?php echo $vv['wechat']; ?></td>
                        <td><?php echo(date('Y年m月d日 h:i:s',$vv['createtime']));?></td>
                        <td>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe715;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe705;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe613;</i></button>
                        </td>
                      </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </tbody>
            </table>
            <div class="page">
	             <?php echo $list3->render(); ?>
	            </div>
              </div>
              <div class="layui-tab-item">
                <table class="layui-table">
                <thead>
                  <tr>
                    <th>加盟商姓名</th>
                    <th>加盟手机号</th>
                    <th>加盟微信</th>
                    <th>申请时间</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(empty($list4) || (($list4 instanceof \think\Collection || $list4 instanceof \think\Paginator ) && $list4->isEmpty())): ?>
                    <tr align="center" style="height:500px;"><td colspan="5">暂无数据</td></tr>
                  <?php else: if(is_array($list4) || $list4 instanceof \think\Collection || $list4 instanceof \think\Paginator): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                      <tr>
                        <td><?php echo $vv['name']; ?></td>
                        <td><?php echo $vv['tel']; ?></td>
                        <td><?php echo $vv['wechat']; ?></td>
                        <td><?php echo(date('Y年m月d日 h:i:s',$vv['createtime']));?></td>
                        <td>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe715;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe705;</i></button>
                          <button class="layui-btn layui-btn-sm"><i class="layui-icon">&#xe613;</i></button>
                        </td>
                      </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </tbody>
            </table>
            <div class="page">
	             <?php echo $list4->render(); ?>
	            </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <script>
    function del(id)
    {
      layer.confirm("您确定删除吗？可能会影响到已上线文章",function(){
          $.ajax({
            url:"<?php echo url('art/type'); ?>",
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