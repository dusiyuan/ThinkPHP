<?php if (!defined('THINK_PATH')) exit();?>﻿修改文章
<br><br>

<div class="content">



<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>&nbsp&nbsp
<a href="<?php echo U('News/newsedit');?>?id=<?php echo ($vo["id"]); ?>">
<?php echo ($vo["title"]); ?>
</a>
&nbsp&nbsp&nbsp
 
<?php echo ($vo["create_time"]); ?>



<br><br><?php endforeach; endif; else: echo "" ;endif; ?>



<br><br>
</div>