<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
</head>
<body>
    
	<table>
	
		<tr>
		
		<th>角色管理</th>
	
		<tr>
		<tr>
			<td><div align='center'><strong>序号</strong></div></td>
			<td><div align='center'><strong>角色名称</strong></div></td>
			<td><div align='center'><strong>开启状态</strong></div></td>
			<td><div align='center'><strong>操作</strong></div></td>
		<tr>
	
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		
		
			<td><div align=center><?php echo ($vo["id"]); ?></div></td>
			<td><div align=center><?php echo ($vo["name"]); ?></div></td>
			<td><div align=center>
			
			<?php if($vo.status): ?>开启<?php else: ?>关闭<?php endif; ?>
			</div></td>
			
			
			<td><div align=center><a href="<?php echo U('Role/setRole',array('rid'=>$vo['id']));?>">配置权限</a></div></td>
		
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	
	
	</table>
	
</body>

</html>