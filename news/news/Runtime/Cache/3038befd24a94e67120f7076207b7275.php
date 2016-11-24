<?php if (!defined('THINK_PATH')) exit();?>﻿删除文章<br/><br/>


<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>&nbsp&nbsp&nbsp<?php echo ($vo["title"]); ?> &nbsp&nbsp 

<form method='post' action='./deleteController'  >

<input type='hidden' value='<?php echo ($vo["id"]); ?>' name='deId' />
<br/>
<input type='submit' value='删除'  />


</form><br/><?php endforeach; endif; else: echo "" ;endif; ?>