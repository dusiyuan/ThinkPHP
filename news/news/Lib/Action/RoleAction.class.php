<?php
import('ORG.Util.RBAC');




	class RoleAction extends CommonAction {
    
	

	
	
		//添加角色
	
		public function addRole(){
			$this->show();
		}
		
		public function addRoleController(){

			$role = D('role'); // 实例化User对象
	
			$role->add($_POST);
			
			$this->success('添加用户组成功！',U('Role/addRole'));
		
		}
	
	
		//编辑角色
		public function editRole(){
	
			$role = D('role');
			
			
			$list=$role->select();
			
			$this->assign('list',$list);
			
			$this->show();
		}

		
		
		public function setRole(){
			
			
			$role = D('role');
			
			
			
			
	
			
			$node = D('node');
			
			
			 
			$showNodeFirst = $node->where('level=1')->select();
			
			$showNodeSecond = $node->where('level=2')->select();	//返回数组 查询二层的模块
			
			$showNodeThird = $node->where('level=3')->select();    //返回数组 查询三层的模块
			
			
			
			
			
			
			
			
			
			$this->assign('showNodeFirst',$showNodeFirst); //模板输出二级
			
			$this->assign('showNodeSecond',$showNodeSecond); //模板输出二级
			
			$this->assign('showNodeThird',$showNodeThird);	//模板输出三级
			
			
			
			
			
			$con['id']=$_GET['rid'];
			
			$showRoleName = $role->where($con)->find()	;		//getField()查询字段
			
			
			$this->assign('showRoleName',$showRoleName);
			
			$this->show();
		}

		
		
		
		
		
		public function setRoleController(){
			
			$role_node = D('role_node');
			
	//		if (!$role_node->create()){
   
   // 如果创建失败 表示验证没有通过 输出错误提示信息
				
			
			

	//		exit($role_node->getError());
			
			
			
	//	}
			
			
	//	else{
				
			 
				
				
				//		for($i=0;$i< count($shuzhi);$i++){
					//			echo $shuzhi[$i];  
					//				}
				
				
				
				$role_node->add($_POST['a1']);
				$role_node->add($_POST['a2']);
				
				$this->success('编辑角色权限成功！',U('Role/editRole'));
				
				
				
				
				//		$this->show(dump($_POST['a1']));
				
				
	//				}
			
			
			
			
			
			
		


		
		
		
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		}

	

		
	}