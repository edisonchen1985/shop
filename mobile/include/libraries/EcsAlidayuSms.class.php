<?php
defined('IN_ECTOUCH') or die('Deny Access');
class EcsAlidayuSms{
     function send($mobile,$mobile_code){
	require "alidayu/TopSdk.php";
	date_default_timezone_set('Asia/Shanghai'); 
/*
	$httpdns = new HttpdnsGetRequest;
	$client = new ClusterTopClient("23298983","7b7f47148d415f37c7b07c26dd34d2df");
	$client->gatewayUrl = "http://api.daily.taobao.net/router/rest";
	var_dump($client->execute($httpdns,"6100e23657fb0b2d0c78568e55a3031134be9a3a5d4b3a365753805"));
	*/
	//阿里大鱼后台系统的appkey和appSecret
	if(empty($mobile))exit(json_encode(array('res'=>'missing mobile')));
	if(empty($mobile_code))exit(json_encode(array('res'=>'missing mobile_code')));
	$appkey = '23321505';
	$secret = 'a217abcd9958b95a1d2a123d7ab95690';
	$c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend("123456");
	$req->setSmsType("normal");
	$req->setSmsFreeSignName("注册验证");
	$array = array('code'=>$mobile_code,'product'=>'形尚');
	$req->setSmsParam(json_encode($array));
	$req->setRecNum($mobile);
	$req->setSmsTemplateCode("SMS_5485178");
	$resp = $c->execute($req);
	if($resp.result.err_code == 0)return true;
	return $resp;
      }
}
?>
