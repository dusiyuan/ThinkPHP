<?php
import('ORG.Util.RBAC');




	class UserAction extends CommonAction {
    

	
	
	
	
	
	
	
		//添加用户
		public function addUser(){
			
			$role =  D('role');
			
			
			$manager = $role->select();
			
			$this->assign('manager',$manager);
			
			$this->show();
		}
	
	
	
	
	
	
	
	
	
		public function addUserController(){
		
		

		
			$user = D('user'); // 实例化User对象
			
	
			

			if (!$user->create()){
    // 如果创建失败 表示验证没有通过 输出错误提示信息
				
			
			

				exit($user->getError());
			
			
			
			}
			
			
			else{
				
				
				$user->add($_POST);
				
				$this->success('用户添加成功',U('User/addUser'));
				// 验证通过 可以进行其他数据操作
				}
				
		}
	
		
		
		
		
		//编辑用户
		
		
		public function editUser(){
			
			$user=D('user');
			
			
			$userlist=$user->select();
			
			
			$this->assign('userlist',$userlist);
			
			
			$this->show();
		}
	
		
		
		
	
		
		
		
		//删除用户
		public function deleteuser(){
	
			$user = D('user');
			
			$deId=$_GET['id'];
			
			
			$user->where("id=$deId")->delete();
			
			$this->success('删除用户成功',U('User/editUser'));
	
		
		}
	
		
		


		
	}