<?php if (!defined('THINK_PATH')) exit();?>﻿
<html>
   <head>
      <title>后台首页</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="js/bootstrap.min.js"></script>



		<div class="row clearfix">
							<div class="col-md-2 column">
							
							
							
							
							
							<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" 
                href="#collapseOne">
               <b>  权限管理 </b>
                </a>
            </h4>
        </div>
     

	 <div id="collapseOne" class="panel-collapse collapse in">
           

		   <div class="panel-body">
                 <ul>
            <li><a href="<?php echo U('Role/addRole');?>"  target="center" >添加角色</a></li>
            <li><a href="<?php echo U('Role/editRole');?>"  target="center" >角色管理</a></li>
			
			
			<li><a href="<?php echo U('Node/addNode');?>"  target="center" >添加权限</a></li>
			<li><a href="<?php echo U('Node/editNode');?>"  target="center" >权限管理</a></li>
			
			
			<li><a href="<?php echo U('User/addUser');?>"  target="center" >添加用户</a></li>
			
			<li><a href="<?php echo U('User/editUser');?>"  target="center" >用户管理</a></li>
          </ul>
        
            </div>
			
			
        </div>
    </div>
	
	
	
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" 
                href="#collapseTwo">
               <b>   新闻文章管理 </b>
            </a>
            </h4>
        </div>
		
		
		
        <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
             <ul>
			<li><a href="<?php echo U('Content/insert');?>"  target="center" >发表文章</a></li>
			<li><a href="<?php echo U('Content/edit');?>"  target="center" >修改文章</a></li>
			<li><a href="<?php echo U('Content/delete');?>"  target="center" >删除文章</a></li>
          </ul>
        </div>
        </div>
		
		
		
    </div>
    
</div>