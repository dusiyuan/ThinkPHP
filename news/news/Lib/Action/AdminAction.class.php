<?php
import('ORG.Util.RBAC');




	class AdminAction extends CommonAction {
    
	
	

		
				
		//后台首页	

		public function houtai(){
			
			//临时测试
			
			
				
				
				
					$yonghu=$_SESSION['user'];
			
					$this->assign('yonghu',$yonghu);
					
					
					
					$this->show(); 
		
		
		}
	
	
	
	
	
	
	
	
	
	
		//注册界面
	
		public function register(){
			$this->show(); 
		}
	
	
	
		//检验注册
	
		public function registerController(){
		
		$user = D('user'); // 实例化User对象
			
	
			

			if (!$user->create()){
    // 如果创建失败 表示验证没有通过 输出错误提示信息
				
			
			

				exit($user->getError());
			
			
			
			}
			
			
			else{
				
				
				$user->add($_POST);
				
				$this->success('注册成功！请登录','login');
    // 验证通过 可以进行其他数据操作
				}
		
		
		}
	
	
	

		
	
	
		// 注销

		public function logout(){
			
			$_SESSION = array(); //清除SESSION值.
			
			session_destroy();  //清除服务器的sesion文件
			
			$this->success('注销成功',U('Public/login'));
			
		}
		
		
		

		
	}