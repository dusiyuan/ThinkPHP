<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
</head>
<body>
    
	
	
	 <h3>用户管理</h3>
	
	<table border="1">
		
                <tr>
				
				<td><div align='center'><strong>ID</strong></div></td>
				<td><div align='center'><strong>用户名</strong></div></td>
				<td><div align='center'><strong>密码</strong></div></td>
				<td><div align='center'><strong>创建时间</strong></div></td>
				<td><div align='center'><strong>登陆时间</strong></div></td>
				<td><div align='center'><strong>登陆IP</strong></div></td>
				<td><div align='center'><strong>状态</strong></div></td>
				<td><div align='center'><strong>备注</strong></div></td>

                </tr>
             
			 <?php if(is_array($userlist)): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr>
                    
					
				<td><div align='center'><?php echo ($i["id"]); ?></div></td>
				<td><div align='center'><?php echo ($i["username"]); ?></div></td>
				<td><div align='center'><?php echo ($i["password"]); ?></div></td>
				<td><div align='center'><?php echo ($i["create_time"]); ?></div></td>
				<td><div align='center'><?php echo ($i["logintime"]); ?></div></td>
				<td><div align='center'><?php echo ($i["loginip"]); ?></div></td>
				<td><div align='center'><?php echo ($i["status"]); ?></div></td>
				<td><div align='center'><?php echo ($i["remark"]); ?></div></td>
				<td><div align='center'>更改密码</div></td>
				<td><div align='center'><a href="<?php echo U('User/deleteuser');?>?id=<?php echo ($i["id"]); ?>">删除</a></div></td>

                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
	
	
	
	
</body>

</html>