<?php if (!defined('THINK_PATH')) exit();?>﻿
<html>
<head>
<meta charset="utf-8">
<link href="__PUBLIC__/register/css/register.css" type="text/css" rel="stylesheet"> 

<title>用户注册</title>
</head>




<body>


<div class="register">

		<h1>
		<a href=<?php echo U('Index/index');?>>新闻发布</a>
		</h1>
	<form method=post action='registerController'>
	
    	<h2><p>用户注册</p></h2>
		
        	<p>用户名：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" ></p>
            <p>密码：&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password"  name="password"></p>
			<p>重复密码：&nbsp&nbsp<input type="password"  name="repassword"></p>
    
    	<p><input type="submit" value="注册" class="submit666">&nbsp&nbsp&nbsp <a href="<?php echo U('Public/login');?>">返回登陆</a></p>
    
	
	</form>
</div>	
	
</body>
</html>