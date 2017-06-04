<?php
	include "TopSdk.php";
	date_default_timezone_set('Asia/Shanghai'); 
/*
	$httpdns = new HttpdnsGetRequest;
	$client = new ClusterTopClient("23298983","7b7f47148d415f37c7b07c26dd34d2df");
	$client->gatewayUrl = "http://api.daily.taobao.net/router/rest";
	var_dump($client->execute($httpdns,"6100e23657fb0b2d0c78568e55a3031134be9a3a5d4b3a365753805"));
	*/
	$mobile = $_POST['number'];
	//阿里大鱼后台系统的appkey和appSecret
	$appkey = '23298983';
	$secret = '7b7f47148d415f37c7b07c26dd34d2df';
	$c = new TopClient;
	$c->appkey = $appkey;
	$c->secretKey = $secret;
	$req = new AlibabaAliqinFcSmsNumSendRequest;
	$req->setExtend("123456");
	$req->setSmsType("normal");
	$req->setSmsFreeSignName("形尚商城");
	$req->setSmsParam('{"code":"777333","product":"形尚商城"}');
	//$req->setRecNum("13501858434");
	$req->setRecNum($mobile);
	$req->setSmsTemplateCode("SMS_3685079");
	$resp = $c->execute($req);
	echo json_encode($resp);	
?>
