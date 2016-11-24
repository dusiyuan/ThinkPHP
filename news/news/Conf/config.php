<?php
return array(
	
	
// 添加数据库配置信息
 'DB_TYPE'   => 'mysql', // 数据库类型
 'DB_HOST'   => 'localhost', // 服务器地址
 'DB_NAME'   => 'news', // 数据库名
 'DB_USER'   => 'root', // 用户名
 'DB_PWD'    => 'dusiyuan', // 密码
 'DB_PORT'   => 3306, // 端口
 'DB_PREFIX' => '', // 数据库表前缀
 
 
		
	//RBAC配置信息
	
		'RBAC_SUPERADMIN'=>'admin',	//超级管理员名称	对应用户表中某一个用户名 username
		'ADMIN_AUTH_KEY'=>'superadmin',
		'USER_AUTH_ON'              =>true,
		
		
		'APP_AUTOLOAD_PATH'=>'@.TagLib',
        'SESSION_AUTO_START'=>true,
        'USER_AUTH_TYPE'            =>1,        // 默认认证类型 1 登录认证 2 实时认证
        'USER_AUTH_KEY'             =>'authId',    // 用户认证SESSION标记 认证识别号
		
		'NOT_AUTH_MODULE'           =>'Public,Index,Admin,Safe',    // 默认无需认证模块
        'NOT_AUTH_ACTION'           =>'insertController,addNodeController',        // 默认无需认证操作

	   
        'USER_AUTH_MODEL'           =>'user',    // 默认验证数据表模型
 
        
        

    



        'RBAC_ROLE_TABLE'           =>'role',
        'RBAC_USER_TABLE'           =>'role_user',
        'RBAC_ACCESS_TABLE'         =>'role_node',
        'RBAC_NODE_TABLE'           =>'node',

        'SHOW_PAGE_TRACE'=>0//显示调试信息
		
		
		
		
		
		
	   //     'REQUIRE_AUTH_ACTION'       =>'',        // 默认需要认证操作
	      // 'AUTH_PWD_ENCODER'          =>'',    // 用户认证密码加密方式
	//   'DB_LIKE_FIELDS'            =>'title|remark',	
	//    'GUEST_AUTH_ON'             =>true,    // 是否开启游客授权访问
   //   'GUEST_AUTH_ID'             =>0,        // 游客的用户ID
 	//	'USER_AUTH_GATEWAY'         =>'/Public/loginController',// 默认认证网关
      //   'REQUIRE_AUTH_MODULE'       =>'',        // 默认需要认证模块
);
?>