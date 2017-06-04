<?php

/**
*用于配置手机端主页轮播图下的分类图片显示
*/
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

$exc = new exchange($ecs->table("mobile_main"), $db, 'id', 'goods_id');

/*------------------------------------------------------ */
//-- 品牌列表
/*------------------------------------------------------ */
if ($_REQUEST['act'] == 'list')
{
    $sql = "SELECT id,goods_id, goods_name, shop_price, admin_name ,goods_img ".
            "FROM " .$ecs->table('mobile_main');
    $all = $db->GetAll($sql);

    $smarty->assign('brand_list',   $all);
    assign_query_info();
    $smarty->display('mobile_main_list.htm');
}

/*------------------------------------------------------ */
//-- 添加品牌
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'add')
{
    /* 权限判断 */
    admin_priv('brand_manage');

    $smarty->assign('ur_here',     $_LANG['07_brand_add']);
    $smarty->assign('action_link', array('text' => $_LANG['06_goods_brand_list'], 'href' => 'brand.php?act=list'));
    $smarty->assign('form_action', 'insert');

    assign_query_info();
    $smarty->assign('brand', array('sort_order'=>50, 'is_show'=>1));
    $smarty->display('mobile_main_info.htm');
}
elseif ($_REQUEST['act'] == 'insert')
{
    /*检查品牌名是否重复*/
    admin_priv('brand_manage');

    $is_show = isset($_REQUEST['is_show']) ? intval($_REQUEST['is_show']) : 0;

    $is_only = $exc->is_only('brand_name', $_POST['brand_name']);

    if (!$is_only)
    {
        sys_msg(sprintf($_LANG['brandname_exist'], stripslashes($_POST['brand_name'])), 1);
    }

    /*对描述处理*/
    if (!empty($_POST['brand_desc']))
    {
        $_POST['brand_desc'] = $_POST['brand_desc'];
    }

     /*处理图片*/
    $img_name = basename($image->upload_image($_FILES['brand_logo'],'brandlogo'));

     /*处理URL*/
    $site_url = sanitize_url( $_POST['site_url'] );

    /*插入数据*/

    $sql = "INSERT INTO ".$ecs->table('brand')."(brand_name, site_url, brand_desc, brand_logo, is_show, sort_order) ".
           "VALUES ('$_POST[brand_name]', '$site_url', '$_POST[brand_desc]', '$img_name', '$is_show', '$_POST[sort_order]')";
    $db->query($sql);

    admin_log($_POST['brand_name'],'add','brand');

    /* 清除缓存 */
    clear_cache_files();

    $link[0]['text'] = $_LANG['continue_add'];
    $link[0]['href'] = 'brand.php?act=add';

    $link[1]['text'] = $_LANG['back_list'];
    $link[1]['href'] = 'brand.php?act=list';

    sys_msg($_LANG['brandadd_succed'], 0, $link);
}

/*------------------------------------------------------ */
//-- 编辑品牌
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'edit')
{
    /* 权限判断 */
    $sql = "SELECT id,goods_id, goods_name, shop_price, admin_name ".
            "FROM " .$ecs->table('mobile_main'). " WHERE id='$_REQUEST[id]'";
    $brand = $db->GetRow($sql);
    $smarty->assign('ur_here',     '首页4分类汇总');
    $smarty->assign('action_link', array('text' => '首页4分类汇总', 'href' => 'mobile_main.php?act=list' ));
    $smarty->assign('brand',       $brand);

    assign_query_info();
    $smarty->display('mobile_main_info.htm');
}
elseif ($_REQUEST['act'] == 'update')
{
    

    /* 处理图片 */
    $id = intval($_POST['id']);
    $goods_id = $_POST['goods_id'];
    $goods_name = $_POST['goods_name'];
    $shop_price = $_POST['shop_price'];
    if($_FILES['goods_img']['tmp_name']){
        $goods_img = $image->upload_image($_FILES['goods_img'],'brandlogo');
    }
    if($goods_img){
        $sql = "UPDATE".$ecs->table('mobile_main')."SET goods_id = '$goods_id', goods_name = '$goods_name', shop_price = '$shop_price' ,goods_img = '$goods_img' WHERE id = $id";
    }else{
        $sql = "UPDATE".$ecs->table('mobile_main')."SET goods_id = '$goods_id', goods_name = '$goods_name', shop_price = '$shop_price' WHERE id = $id";
    }
    $db->query($sql);
    /* 清除缓存 */
    clear_cache_files();
    header('Location: mobile_main.php?act=list');

}

?>
