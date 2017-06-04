<?php

/**
* 形尚手机端主页8个类模型
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class MobileMainModel extends BaseModel {
    /**
    *列表 
     */
    function get_all() {
        $sql = "SELECT goods_id, goods_img, goods_name, shop_price,row_number,row_number_name FROM " . $this->pre.'mobile_main';
        $res = $this->query($sql);
        $arr = array();
        foreach ($res as $key=>$row) {
            $row['url'] = url('goods/index', array('id' => $row['goods_id']));
            if($row['row_number'] == 1 ){
                $arr['one'][] = $row;
            }else if($row['row_number'] == 2 ){
                $arr['two'][] = $row;
            }else if($row['row_number'] == 3 ){
                $arr['three'][] = $row;
            }else if($row['row_number'] == 4 ){
                $arr['four'][] = $row;
            }
        }
        return $arr;
    }
    function get_row($num) {
        $num = intval($num);
        $sql = "SELECT goods_id, goods_img, goods_name, shop_price,row_number,row_number_name FROM " . $this->pre.'mobile_main where row_number = '."$num";
        $res = $this->query($sql);
        $arr = array();
        foreach ($res as $key=>$row) {
            $row['url'] = url('goods/index', array('id' => $row['goods_id']));
	    $row['img_url'] = "http://xingsom.com/shop/".$row['goods_img'];
            $arr[] = $row;
        }
        return $arr;
    }


}
