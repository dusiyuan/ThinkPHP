<?php
 


import('ORG.Util.RBAC');

	class NodeAction extends CommonAction {
    

	

	
	
		//添加权限
		public function addNode(){
			
	
			$node=  D('node');
			
			
			$pid = $node->select();
			
			$this->assign('pid',$pid);


		
			$this->show();
		
		
		
		
		}
	
		public function addNodeController(){
		
		

		
		$node = D('node'); // 实例化User对象
			
	
			

			if (!$node->create()){
    // 如果创建失败 表示验证没有通过 输出错误提示信息
				
			
			

				exit($node->getError());
			
			
			
			}
			
			
			else{
				
				
				$node->add($_POST);
				
				$this->success('添加权限成功！',U('Node/addNode'));
				
				
				}
		}
		
		//编辑节点
		public function editNode(){
			$this->show();
		}
		
	
	
		public function editNodeController(){
			
		//	$_GET['']
			
			$this->show();
		}
	
	
		
		
		
		
		
		
		
		
		
		
	
	

	
	
	
	
	
	
	

		
	}