<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html>
   <head>
      <title>后台登录</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

      <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
  

 
	  
	  
	  <div class="container">
	  
	  
	  <div class="row clearfix">
		<div class="col-md-12 column">
			<h3 class="text-center">
				后台登录
			</h3>
		</div>
	</div>
	  
	  
	  
	<div class="row clearfix" >
		<div class="col-md-12 column">
			<form role="form"  method="post" action='__APP__/Public/loginController'  >
				<div class="form-group">
					 <label for="exampleInputEmail1"  >用户名</label>
					 
					 <input class="form-control" id="exampleInputEmail1"  name="username" placeholder="用户名" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">密码</label>
					 
					 <input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="密码" required="" type="password" />
				</div>
			 
				 
				</div > 
				
				<div align=center>
				
				<button class="btn btn-default" type="submit">提交</button>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<a href="<?php echo U('Public/register');?>">注册</a>
				
				</div>
			</form>
		</div>
	</div>
</div>



	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>