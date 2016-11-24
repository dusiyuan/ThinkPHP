<?php
class CommonAction extends Action{
    public function _initialize(){
       import('ORG.Util.Auth');//加载类库
       $auth=new Auth();
       if(!$auth->check(MODULE_NAME.'-'.ACTION_NAME,session('uid'))){
            $this->error('你没有权限');
       }
    }
}