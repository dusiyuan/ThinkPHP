<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
   <head>
      <title>后台首页</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
		<script type="text/javascript">
				function switchSysBar() {
					var ssrc = document.all("frmTitle").style.display;
					if (ssrc == "none") {
						document.all("frmTitle").style.display = "";
					}
					else {
						document.all("frmTitle").style.display = "none"
					}
				} 
			</script>


<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
        
		
		<tr>
            <td colspan="3" height="100" bgcolor="white" > 
			
			
			<h1>后台管理</h1> 
	  
	  
	  <div class="info_center">
              
              <span id="nt"> <?php echo ($yonghu); ?></span>  <a href="<?php echo U('Safe/logout');?>"    >安全退出</a> 
            </div>
			
			
			
			</td>
			
			
        </tr>
		
		
		
        <tr>
            <td width="190" id="frmTitle" noWrap="noWrap"  name=fmTitle" valign="top" height="100%">
                <iframe height="100%" width="100%"  scrolling='no'frameborder="0" src="sidemenu.html"
                    name="leftFrame"></iframe>
            </td>
			
			
			
            <td width="6" style="width: 6px; background:white" valign="middle" 
                height="100%">
                <span  id="switchPoint" title="关闭/打开侧边栏">
                    <label onclick="switchSysBar()" style="cursor:pointer;">收起</label>
                </span>
            </td>
			
			
			
            <td valign="top" width="100%" height="100%">
                <iframe height="100%" width="100%" frameborder="0" name="center" src="main.html">
                </iframe>
            </td>
			
			 
			
        </tr>
    </table>
	
	<!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="js/bootstrap.min.js"></script>
   </body>
   
   
   
</html>