<?php

/**
 * ECTouch E-Commerce Project
 * ============================================================================
 * Copyright (c) 2012-2015 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：index.php
 * ----------------------------------------------------------------------------
 * API接口
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

define('IN_ECTOUCH', true);
define('ROOT_PATH', str_replace('\\', '/', dirname(dirname(dirname(__FILE__)))) . '/');
define('BIND_MODULE', 'apis');
require ROOT_PATH . 'include/bootstrap.php';
