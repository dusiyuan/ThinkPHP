<?php
class CommonAction extends Action{
    public function _initialize(){
       import('ORG.Util.Auth');//�������
       $auth=new Auth();
       if(!$auth->check(MODULE_NAME.'-'.ACTION_NAME,session('uid'))){
            $this->error('��û��Ȩ��');
       }
    }
}