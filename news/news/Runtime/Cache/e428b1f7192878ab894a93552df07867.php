<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
</head>
<body>
    
	
		添加权限
		<form action="<?php echo U('Node/addNodeController');?>"  method="post"     >
		  <p>英文名称: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="name" /></p>
		  <p>显示中文名称: <input type="text" name="title" /></p>
		  
		  
					
					
		  <p>父节点: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				<select name="pid">
				 
				 <?php if(is_array($pid)): $i = 0; $__LIST__ = $pid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value ="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select></p>
				
		  <p>层级:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
					<select name="level">
					  <option value ="1">1</option>
					  <option value ="2">2</option>
					  <option value="3">3</option>
					
					</select></p>
		  
		  
		  
		  <p>状态:<br><br>
		  开：
			<input type="radio" checked="checked" name="status" value="1" />
			关：
			<input type="radio" name="status" value="0" />
			
			</p>
		  <input type="submit" value="保存添加" />
		</form>
	

	
	
	
	
	
	
</body>

</html>