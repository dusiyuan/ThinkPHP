<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
   <head>
      <title>新闻</title>
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
			<h1 class="text-center">
				 新闻 
			</h1>
			<p class="lead text-center">
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Index/newsview');?>?id=<?php echo ($vo["id"]); ?>">
					<?php echo ($vo["title"]); ?>
					</a>
					&nbsp&nbsp&nbsp
					 
					<?php echo ($vo["create_time"]); ?>



					<br><br><?php endforeach; endif; else: echo "" ;endif; ?>
			</p>
			
			
			<p class="text-center">
				<div class='fanhui'  align='center'><a href="http://www.dusiyuan.cc/ ">返回我的主页</a>&nbsp&nbsp&nbsp 

				<a href="<?php echo U('Public/login');?> ">后台登陆</a></div>

					</div>
			</p>
		</div>
	</div>
</div>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
      <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="js/bootstrap.min.js"></script>
	    
	  
   </body>
</html>