<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">


</head>
<body>
    添加角色
	
		<form action="<?php echo U('Admin/addRoleController');?>"  method="post"     >
		
		  <p>角色名称: <input type="text" name="name" /></p>
		  <p>角色描述: <input type="text" name="remark" /></p>
		  <input type="hidden" name="pid" value="0" />
		  
		  <p>是否开启:<br><br>
		  是：
			<input type="radio" checked="checked" name="status" value="1" />
			否：
			<input type="radio" name="status" value="0" />
			
			</p>
		  <input type="submit" value="保存添加" />
		</form>
			
	
	
	
	
	
	
	
	
	

				
	
	

	
	
	
</body>

</html>