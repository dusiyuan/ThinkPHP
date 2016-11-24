<?php
namespace Home\Model ;

use     Think\Model;

class UserModel extends Model{
   protected $_validate = array(

		array('username','require','用户名必须填写！',1),
	
		array('username', '', '用户名是唯一的！', self::EXISTS_VALIDATE, 'unique', self::MODEL_INSERT),
		
		array('password','require','密码必须填写！'),
		
		array('repassword', 'password', '重复密码不正确！', self::EXISTS_VALIDATE, 'confirm', self::MODEL_INSERT),
   
   );
}


?>