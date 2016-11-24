<?php
import('ORG.Util.RBAC');
class IndexAction extends CommonAction {
    
	
	
	public function index(){
	
		$news = M('news');
		$list = $news->select();
		$this->assign('list',$list);

		
		$this->show();
	}
	
	
	
	
	public function newsview(){

		$news = D('news');
		$condition['id'] = $_GET['id'];
		
		$xianshi = $news->where($condition)->select();
		
		$this->assign('xianshi',$xianshi);
		
		$this->display();
	}
	
	
	
	
	
	
	
	
	
	

		
		

	
			
	
	
}