<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
</head>
<body>


<pre>
<?php  for ($i=0;$i<count($showNodeThird);$i++){ print_r($showNodeThird[$i]) ; } ?>
</pre>


<br /><br />


你配置的权限是：<b><?php echo ($showRoleName["name"]); ?></b>


<br /><br /><br />





	<form  method="post"  action="<?php echo U('Role/setRoleController');?>">
 


 

		操作：<br/>





			
添加权限
 
				<input  type="checkbox" value="6"  name= "a1[node_id]" >
				<br />
				


				<input    type="hidden" value="<?php echo ($showRoleName["id"]); ?>"  name= "a1[role_id]" >
				
				<br />
		 
 
		 
		 
		 
管理权限		 
 
				<input  type="checkbox" value="7"   name= "a2[node_id]" >
				<br />
				


				<input      type="hidden" value="<?php echo ($showRoleName["id"]); ?>"  name= "a2[role_id]" >
				
				<br />
		 
 
		  
			 
			
			
		
			<input type="submit" value="提交">
			
		</form>
		
	 
		
		
</body>

</html>