<?php
import('ORG.Util.RBAC');





	class ContentAction extends CommonAction {
    
	
		
	public function insert(){
			
			
			//测试
			$hehe=MODULE_NAME;
			$haha=ACTION_NAME;
			
			
			$this->assign('hehe',$hehe);
			$this->assign('haha',$haha);

			
			
		
			
			
			
			
			
			
		
			$this->show();
			
			
			
			
	
	
	
	}

	
	
	
	
	
	public function insertController(){

		$news = D('news');        
	
			if($news->create()) {					 
					 $result =   $news->add();		


					 if($result) {				
					   $this->success('新闻发表成功！');
					 }else{
						 $this->error('写入错误！');
					 }
				 }else{
					 $this->error($news->getError());
				 }

	

			
			}

			
	
	
	
	
	
	
	
	
	
	
	
	
	public function edit(){
		
		$news = D('news');
		$list = $news->select();
		
		$this->assign('list',$list);

		
		 
						
								
					
		$this->show();
			 
		
		
		
		
		
		}
	
	
	
	public function editController(){
		
		$news = D('news');
			
		$data['id']=$_POST['id'];
		
		$data['source']=$_POST['source'];
		
		$data['title']=$_POST['title'];
		
		$data['content']=$_POST['content'];
			
	
		
		
		
		$news->save($data);
		
		$this->success('更新完成','edit');
		
		
		
		}
	
		
		
		
		
		
	public function newsedit(){

		$news = D('news');
		$condition['id'] = $_GET['id'];
		
		$xianshi = $news->where($condition)->select();
		
		$this->assign('xianshi',$xianshi);
		
		$this->display();
	}
	
	
	
	
	
	
	
	
	
	
	
	
		
		
	public function delete(){
		
		$news = D('news');
		
		$list = $news->select();
		$this->assign('list',$list);
		
		$this->show();
		
		}
	
	
	
	
	
	public function deleteController(){
	
		$news = D('news');
		
		$deId=$_POST['deId'];
		
		
		$news->where("id=$deId")->delete();
		
		$this->success('删除成功','delete');
	
		
	}
	
	
	

		
	}