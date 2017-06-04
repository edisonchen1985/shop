<?php
/*调用阿里大鱼的短信验证接口*/
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

$mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
if(empty($mobile) || strlen($mobile) != 11){
	exit(json_encode(array('result'=>array('err_code'=>'2','success'=>false,'reason'=>'mobile number wrong'))));
}
$sql = "SELECT COUNT(`user_name`) from ecs_users where user_name = ".$mobile;
if($db->getOne($sql)){
	exit(json_encode(array('result'=>array('err_code'=>'1','success'=>false,'reason'=>'mobile number exist'))));
}
$alidayu = new Alidayu();
$alidayu->register($mobile);
class Alidayu {
    private $mem;
    public function __construct(){
    	$this->mem = new Memcache;
	$this->mem->connect('localhost',11211);
    }
    public function __destruct(){
    	$this->mem->close();
    }
    public function register($mobile){
	    require(dirname(__FILE__) . '/alidayu/TopSdk.php');
	    date_default_timezone_set('Asia/Shanghai'); 
	    $code = $this->createCode();
	    $this->set_memcache($mobile,$code);
	   //阿里大鱼后台系统的appkey和appSecret
	    $appkey = '23321505';
	    $secret = 'a217abcd9958b95a1d2a123d7ab95690';
	    $c = new TopClient;
	    $c->appkey = $appkey;
	    $c->secretKey = $secret;
	    $req = new AlibabaAliqinFcSmsNumSendRequest;
	    $req->setExtend("123456");
	    $req->setSmsType("normal");
	    $req->setSmsFreeSignName("注册验证");
	    $array = array('code'=>$code,'product'=>'形尚');
	    $req->setSmsParam(json_encode($array));
	    $req->setRecNum($mobile);
	    $req->setSmsTemplateCode("SMS_5485178");
	    $resp = $c->execute($req);
	    echo json_encode($resp);    
    }
    private function createCode($length = 6){
    	$numbers = '0123456789';
	$code = '';
	for($i = 1;$i<= $length;$i++){
		$code .= substr(str_shuffle($numbers),0,1);
	}
	return trim($code);

    }
    private function set_memcache($mobile,$code,$time=3600){
    	if(empty($mobile)||empty($code)) {
		return false;
	}else{
		$result = $this->mem->set($mobile,$code,$time);
		return $result;
	}
    }
    public function test(){
    	$this->display();
	}
}
?>
