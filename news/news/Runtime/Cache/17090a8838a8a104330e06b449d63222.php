<?php if (!defined('THINK_PATH')) exit();?>﻿模块测试：<br>
<?php echo ($hehe); ?><br>
<?php echo ($haha); ?><br>



  <?php
 echo '<pre>'; print_r($_SESSION['_ACCESS_LIST']); echo '</pre>'; echo '<br>'; print_r($_SESSION['user']); echo '<br>'; print_r($_SESSION['loginip']); echo '<br>'; print_r($_SESSION['logintime']); echo '<br>'; print_r(C('DB_TYPE')); echo '<br>'; echo '<pre>'; print_r($_SESSION); echo '<br>'; echo '</pre>'; ?>

<form action="__URL__/insertController" method="post" ">





来源：

<textarea id="source" name="source" cols=40 rows=1 style=overflow:hidden placeholder="请输入来源"></textarea>


<br><br>


标题：

<textarea id="title" name="title" cols=40 rows=1 style=overflow:hidden placeholder="请在这里输入标题"></textarea>

<br><br>
<textarea id="content" name="content" cols=50 rows=10 placeholder="请在这里输入内容"></textarea>

<br><br>
<input type="submit" class="button" value="提交" action='' />

</form>



<br><br>