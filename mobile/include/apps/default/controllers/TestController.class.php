<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：PublicControoller.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：公用方法控制器类
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */

class TestController extends CommonController {

	public $cache;
	public function __construct($options){
		$this->cache = new Cache();
	}
	public function index(){
		echo 'hh';
		$this->cache->test();
	}

}
