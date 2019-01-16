<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/login/login.html";i:1547277593;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $system['title']; ?>后台管理系统</title>
<meta name="renderer" content="webkit">
<link rel="icon" href="<?php echo $system['icon']; ?>" type="image/x-icon"/>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/static/login/login/bootstrap.min.css" />
<link rel="stylesheet" href="/static/login/login/css/camera.css" />
<link rel="stylesheet" href="/static/login/login/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/static/login/login/matrix-login.css" />
<link rel="stylesheet" href="/static/login/login/font-awesome.css" />
<script type="text/javascript" src="/static/login/login/js/jquery-1.5.1.min.js"></script>
<link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
<script src="/static/layuiadmin/layui/layui.js"></script>
 <style type="text/css">
      .cavs{
    	z-index:1;
    	position: fixed;
    	width:95%;
    	margin-left: 20px;
    	margin-right: 20px;
    }
  </style>
  <script>
  		//window.setTimeout(showfh,3000); 
  		var timer;
		function showfh(){
			fhi = 1;
			//关闭提示晃动屏幕，注释掉这句话即可
			timer = setInterval(xzfh2, 10); 
		};
		var current = 0;
		function xzfh(){
			current = (current)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current>360){current = 0;}
		};
		var fhi = 1;
		var current2 = 1;
		function xzfh2(){
			if(fhi>50){
				document.body.style.transform = 'rotate(0deg)';
				clearInterval(timer);
				return;
			}
			current = (current2)%360;
			document.body.style.transform = 'rotate('+current+'deg)';
			current ++;
			if(current2 == 1){current2 = -1;}else{current2 = 1;}
			fhi++;
		};
	</script>
</head>
<body>
	<div style="width:100%;text-align: center;margin: 0 auto;position: absolute;">
		<!-- 登录 -->
		<div id="windows1">
		<div id="loginbox" >
			<form method="post" class="layui-form">
				<div class="control-group normal_text" style="width:150px;height:150px;">
					<h3>
						<img src="<?php echo $system['logo']; ?>" alt="Logo" style="width:100%;border-radius: 50%;margin-top:20px;" />
					</h3>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_lg">
							<i><img height="37" src="/static/login/login/user.png" /></i>
							</span>
							<input type="text" name="user_name" id="LAY-user-login-username" lay-verify="required" placeholder="用户名" class="layui-input">
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="main_input_box">
							<span class="add-on bg_ly">
							<i><img height="37" src="/static/login/login/suo.png" /></i>
							</span>
							<input type="password" name="user_pwd" id="LAY-user-login-password" lay-verify="required" placeholder="密码" class="layui-input">
						</div>
					</div>
				</div>
				
				<div class="form-actions">
					<div class="layui-form-item">
	                      <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="login">登 入</button>
					</div>
				</div>
			</form>
			<div class="controls">
				<div class="main_input_box">
					<font color="white"><span id="nameerr">Copyright © <?php echo $system['title']; ?> 2019</span></font>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div id="templatemo_banner_slide" class="container_wapper">
		<div class="camera_wrap camera_emboss" id="camera_slide">
			<!-- 背景图片 -->
			<?php if(is_array($path) || $path instanceof \think\Collection || $path instanceof \think\Paginator): $i = 0; $__LIST__ = $path;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
			<div data-src="<?php echo $vv; ?>"></div>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<!-- #camera_wrap_3 -->
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			changeCode1();
			$("#codeImg").bind("click", changeCode1);
			$("#zcodeImg").bind("click", changeCode2);
		});

		$(document).keyup(function(event) {
			if (event.keyCode == 13) {
				$("#to-recover").trigger("click");
			}
		});

		function genTimestamp() {
			var time = new Date();
			return time.getTime();
		}

		function changeCode1() {
			$("#codeImg").attr("src", "code.do?t=" + genTimestamp());
		}
		function changeCode2() {
			$("#zcodeImg").attr("src", "code.do?t=" + genTimestamp());
		}




		
		jQuery(function() {
			var loginname = $.cookie('loginname');
			var password = $.cookie('password');
			if (typeof(loginname) != "undefined"
					&& typeof(password) != "undefined") {
				$("#loginname").val(loginname);
				$("#password").val(password);
				$("#saveid").attr("checked", true);
				$("#code").focus();
			}
		});	
	//js  日期格式
	</script>
	<script src="/static/login/login/js/bootstrap.min.js"></script>
	<script src="/static/login/js/jquery-1.7.2.js"></script>
	<script src="/static/login/login/js/jquery.easing.1.3.js"></script>
	<script src="/static/login/login/js/jquery.mobile.customized.min.js"></script>
	<script src="/static/login/login/js/camera.min.js"></script>
	<script src="/static/login/login/js/templatemo_script.js"></script>
	<script src="/static/login/login/js/ban.js"></script>
	<script type="text/javascript" src="/static/login/js/jQuery.md5.js"></script>
	<script type="text/javascript" src="/static/login/js/jquery.tips.js"></script>
	<script type="text/javascript" src="/static/login/js/jquery.cookie.js"></script>
	<script>
	    layui.use(['form'], function(){
	      var form = layui.form;
	      form.on('submit(login)', function(data){
	          $.ajax({
	              type:'POST',
	              url:'<?php echo url("login/login_action"); ?>',
	              data: {
	                  data:JSON.stringify(data.field)
	              },
	              success:function (data) {
	                  var status = JSON.parse(data);
	                  if (status.icon == 6){
	                      layer.msg(status.msg,{icon: status.icon,time:1000},function(){
	                          location.href='<?php echo url("index/index"); ?>';
	                      });
	                  } else {
	                      layer.msg(status.msg,{icon: status.icon,time:1000},function(){
	                      	window.location.reload();
	                      });
	                  }
	              }
	          });
	        return false;
	      });
	    });
  </script>
</body>

</html>