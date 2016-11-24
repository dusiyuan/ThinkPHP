<?php
import('ORG.Util.RBAC');




	class SafeAction extends CommonAction {
    
	
	

		
				
	
		
	
	
		// 注销

		public function logout(){
			
			$_SESSION = array(); //清除SESSION值.
			
			session_destroy();  //清除服务器的sesion文件
			
			$this->success('注销成功',U('Public/login'));
			
		}
		
		
		

		
	}