<?php
import('ORG.Util.RBAC');
class PublicAction extends CommonAction {
    
	
		
		//登陆页面
	
		public function login(){
			$this->show(); 
		}
	
	
		//检验登陆
	
		public function loginController(){
		
						$user = M('user');					
							
						
						$map=array();
							
						$map['username']=$_POST['username'];

						$authinfo=RBAC::authenticate($map);
						
						
		
						$authId=C('USER_AUTH_KEY');
						

						if($authinfo['password']==$_POST['password']){
							
							
							
								session_start();
								
								$_SESSION[$authId]=$authinfo['id'];
								
								
								
								$_SESSION['user']=$authinfo['username'];
								
								
								$_SESSION['loginip']=$_SERVER["REMOTE_ADDR"];
								
								$_SESSION['logintime']=date('Y-m-d h:i:s');
								
								
								
								RBAC::saveAccessList($_SESSION['id']);
								
								
						
								
								
								$data['id']=$authinfo['id'];

								$data['logintime']=date('Y-m-d h:i:s'); //保存日期和时间
								
								$data['loginip']=$_SERVER["REMOTE_ADDR"]; //保存ip地址
								

								$user->save($data);
								
								
								
								$this->success( '登陆成功',U('Admin/houtai'));
							
								
							
							
								
						}
						else{
							
								$this->error( '登陆失败',U('Public/login'));
							
						}
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
				
				$this->success('注册成功！请登录',U('Public/login'));
    // 验证通过 可以进行其他数据操作
				}
		
		
		}
	
	
	
	
			
	
	
}