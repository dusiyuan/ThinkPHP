<?php if (!defined('THINK_PATH')) exit();?>﻿ <!doctype html>
 <html lang="zh-CN">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="__PUBLIC__/houtai/css/common.css">
   <link rel="stylesheet" href="__PUBLIC__/houtai/css/main.css">
   <script type="text/javascript" src="__PUBLIC__/houtai/js/jquery.min.js"></script>
   <script type="text/javascript" src="__PUBLIC__/houtai/js/colResizable-1.3.min.js"></script>
   <script type="text/javascript" src="__PUBLIC__/houtai/js/common.js"></script>
 
   <title>Document</title>
 </head>
 <body>
 
   <?php
 echo '<pre>'; print_r($_SESSION['_ACCESS_LIST']); echo '</pre>'; echo '<br>'; print_r($_SESSION['user']); echo '<br>'; print_r($_SESSION['loginip']); echo '<br>'; print_r($_SESSION['logintime']); echo '<br>'; print_r(C('DB_TYPE')); echo '<br>'; echo '<pre>'; print_r($_SESSION); echo '<br>'; echo '</pre>'; ?>
 
 
   
 </body>
 </html>