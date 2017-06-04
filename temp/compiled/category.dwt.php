<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php if ($this->_var['cat_style']): ?>
<link href="<?php echo $this->_var['cat_style']; ?>" rel="stylesheet" type="text/css" />
<?php endif; ?>

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,global.js,compare.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="menu_box_navbg"></div>

<?php echo $this->fetch('library/category_tree_index.lbi'); ?>

<div class="wrap_bg">
	<div class="in_banner">
    	<div class="banner_m" style="position:relative; z-index:1">
    		<?php echo $this->fetch('library/index_ad_category.lbi'); ?>
        </div>
    </div>
    <div class="wrap_1200">
    	<div class="in_menu_wr">
        	<a class="in_menu_jia" href="javascript:;"></a>
            <div class="in_menu">
            	<?php echo $this->fetch('library/zuhesousuo.lbi'); ?>
                <?php echo $this->fetch('library/paixu.lbi'); ?>
            </div>
        </div>
        <script type="text/javascript">
                                $(function(){
                                    $(".in_menu_left ul li").hover(
                                    function(){
                                        $(this).css("background","#90a062")
                                        .children("a").css({"color":"#fff","background":"url(themes/masamasuo/images/masa_chi_02.jpg) no-repeat right 19px"});
                                        },function(){
                                            $(this).removeAttr("style").children("a").removeAttr("style")
                                            });
                                    $(".in_menu_jia").click(function(){
                                        $(this).toggleClass("in_menu_jian");
                                        $(".in_selr").toggle();
                                        });
                                    $(".in_menu_left").click(function(){
                                            $(".in_selr").toggle()
                                            $(".in_menu_jia").toggleClass("in_menu_jian")
                                        })	
                                    
							
                                 });
                                   
                                
                               
                            </script>
        <div class="in_masa">
        <?php echo $this->fetch('library/goods_list.lbi'); ?>
        </div>
        <div class="foot_add">
        	
<?php $this->assign('ads_id','59'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
	
        </div>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
