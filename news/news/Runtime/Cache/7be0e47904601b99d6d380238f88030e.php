<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
</head>
<body>
    <?php echo ($hehe); ?><br>
<?php echo ($haha); ?>


	
	添加用户
		<form action="<?php echo U(User/addUserController);?>"  method="post"     >
		  <p>用户名称: <input type="text" name="username" /></p>
		  <p>用户密码: <input type="text" name="password" /></p>
		  <p>用户描述: <input type="text" name="remark" /></p>
		  
		  <p>是否开启:<br><br>
		  是：
			<input type="radio" checked="checked" name="status" value="1" />
			否：
			<input type="radio" name="status" value="0" />
			
			</p>
			  
			  
			<p>用户组: 
	   
		
		   <select name="role" >
			
			<?php if(is_array($manager)): $i = 0; $__LIST__ = $manager;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			
		
			</p>
		
			
			
		  <input type="submit" value="保存添加" />
		</form>
		
		
	
	
</body>

</html>