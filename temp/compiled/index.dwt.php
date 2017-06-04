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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="menu_box_navbg"></div>

<?php echo $this->fetch('library/category_tree_index.lbi'); ?>

<div class="wrap_bg">

	<?php echo $this->fetch('library/index_ad.lbi'); ?>
    
    <div class="wrap_1200">
    
    	<div class="index_lump">
        	<div class="lump_right">
            	
<?php $this->assign('articles',$this->_var['articles_13']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_13']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

			
<?php echo $this->fetch('library/group_buy.lbi'); ?>

            </div>
            <div class="hot_odd">
            <?php echo $this->fetch('library/hot_sail_goods.lbi'); ?>	
            </div>
        </div>
        
        <div class="index_lump">
        	<div class="lump_right">
            	<div class="mend_topic">
                	<h3 class="index_tit_lin">专题推荐</h3>
                    <div class="mend_topic_info">
                    	
<?php $this->assign('ads_id','25'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


<?php $this->assign('ads_id','26'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                    </div>
                </div>
            </div>
            <div class="new_exper">
            	
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

            </div>
        </div>
        
        
        <div class="index_lump">
        	<div class="shoes">
            	<?php echo $this->fetch('library/tit1.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','32'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div id="testtab139" class="testtab">
                	<?php echo $this->fetch('library/change_tit1.lbi'); ?>
                    <div id="tabcon139" class="tabcon">
                    	<div class="index_info">
                    		<ul>
                        		
<?php $this->assign('cat_goods',$this->_var['cat_goods_330']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_330']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        	</ul>
                            <ul style=" display:none">
                        		
<?php $this->assign('cat_goods',$this->_var['cat_goods_331']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_331']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        	</ul>
                        </div>
                    </div>
                </div>
                <script>
$(document.body).ready(function(){
var tab_nav = $('#tabtag139 li');
var nav_num = tab_nav.length;
var i = 0;
function loop_tab(num){
$('#tabcon139 ul').each(function(index,data){
if(index == num){
tab_nav.eq(index).attr('class','cur');
$(data).css('display','');

}else{
tab_nav.eq(index).attr('class','');
$(data).css('display','none');
}
})
};
var auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
tab_nav.mouseover(function(){
i = $(this).attr('index');
loop_tab(i);
window.clearInterval(auto);
}).mouseout(function(){
auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
})

});
</script>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	
        	<div class="sweater">
            	<?php echo $this->fetch('library/tit2.lbi'); ?>
                <div class="sweater_info">
                
<?php $this->assign('ads_id','33'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_271']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_271']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
        	
            
            
            <div class="t_shirt">
            	<?php echo $this->fetch('library/tit3.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','34'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_278']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_278']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
        </div>
        
        
        
        <div class="index_lump">
        	<div class="shoes">
            	<?php echo $this->fetch('library/tit4.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','35'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div id="testtab123" class="testtab">
                	<?php echo $this->fetch('library/change_tit2.lbi'); ?>
                    <div id="tabcon123" class="tabcon">
                    	<div class="index_info">
                    		<ul>
                        		
<?php $this->assign('cat_goods',$this->_var['cat_goods_332']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_332']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        	</ul>
                            <ul style=" display:none">
                        		
<?php $this->assign('cat_goods',$this->_var['cat_goods_333']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_333']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        	</ul>
                        </div>
                    </div>
                    <script>
$(document.body).ready(function(){
var tab_nav = $('#tabtag123 li');
var nav_num = tab_nav.length;
var i = 0;
function loop_tab(num){
$('#tabcon123 ul').each(function(index,data){
if(index == num){
tab_nav.eq(index).attr('class','cur');
$(data).css('display','');
}else{
tab_nav.eq(index).attr('class','');
$(data).css('display','none');
}
})
};
var auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
tab_nav.mouseover(function(){
i = $(this).attr('index');
loop_tab(i);
window.clearInterval(auto);
}).mouseout(function(){
auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
})

});
</script>
                </div>	
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	
        	<div class="sweater">
            	<?php echo $this->fetch('library/tit5.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','36'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_272']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_272']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
            
            
            <div class="t_shirt">
            	<?php echo $this->fetch('library/tit6.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','37'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	
<?php $this->assign('cat_goods',$this->_var['cat_goods_270']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_270']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                </div>
            </div>
            
        </div>
        
        
        
        <div class="index_lump">
        	<div class="pants_left">
            	<?php echo $this->fetch('library/tit7.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','38'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
            </div>
            <div class="pants_right">
            	<div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_177']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_177']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	<div class="shoes">
            	<?php echo $this->fetch('library/tit8.lbi'); ?>
                <div class="pants_info pants_f">
      
                	
<?php $this->assign('ads_id','39'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>



<?php $this->assign('ads_id','40'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>



<?php $this->assign('ads_id','41'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>


                </div>
                <div style=" clear:both"></div>
                <div id="testtab116" class="testtab">
                	<?php echo $this->fetch('library/change_tit3.lbi'); ?>
                    <div id="tabcon116" class="tabcon">
                     <div class="index_info">
                    	<ul>
                        
<?php $this->assign('cat_goods',$this->_var['cat_goods_295']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_295']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        </ul>
                        <ul style=" display:none">
                        
<?php $this->assign('cat_goods',$this->_var['cat_goods_294']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_294']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        </ul>
                        <ul style=" display:none">
                        
<?php $this->assign('cat_goods',$this->_var['cat_goods_296']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_296']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        </ul>
                        <ul style=" display:none">
                        
<?php $this->assign('cat_goods',$this->_var['cat_goods_297']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_297']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        </ul>
                        <ul style=" display:none">
                        
<?php $this->assign('cat_goods',$this->_var['cat_goods_298']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_298']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                        </ul>
                        </div>
                    </div>
                </div>
                <script>
$(document.body).ready(function(){
var tab_nav = $('#tabtag116 li');
var nav_num = tab_nav.length;
var i = 0;
function loop_tab(num){
$('#tabcon116 ul').each(function(index,data){
if(index == num){
tab_nav.eq(index).attr('class','cur');
$(data).css('display','');
}else{
tab_nav.eq(index).attr('class','');
$(data).css('display','none');
}
})
};
var auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
tab_nav.mouseover(function(){
i = $(this).attr('index');
loop_tab(i);
window.clearInterval(auto);
}).mouseout(function(){
auto = window.setInterval(function(){
if(nav_num == i){
i-=nav_num;
}
loop_tab(i);
i++;

}, 2000);
})

});
</script>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	
            <div class="sweater">
            	<?php echo $this->fetch('library/tit9.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','42'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_257']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_257']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
            
            
            <div class="t_shirt">
            	<?php echo $this->fetch('library/tit10.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','43'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_190']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_190']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
        </div>
        
        
        
        <div class="index_lump">
        	
            <div class="sweater">
            	<?php echo $this->fetch('library/tit11.lbi'); ?>
                <div class="sweater_info">
                	
<?php $this->assign('ads_id','44'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_315']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_315']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
            
            
            <div class="t_shirt">
            	<?php echo $this->fetch('library/tit12.lbi'); ?>
                <div class="sweater_info">
                	

                </div>
                <div class="index_info">
                	<ul>
                    	
<?php $this->assign('ads_id','45'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_301']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_301']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
            
        </div>
        
        
        
        <div class="index_lump">
        	<div class="pants_left">
            	<?php echo $this->fetch('library/tit13.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','46'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
            </div>
            <div class="pants_right">
            	<div class="index_info">
                	<ul>
                    
<?php $this->assign('cat_goods',$this->_var['cat_goods_316']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_316']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
	
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	<div class="pants_left">
            	<?php echo $this->fetch('library/tit14.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','47'); ?><?php $this->assign('ads_num','0'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
            </div>
            <div class="pants_right">
            	<div class="index_info">
                	<ul>
                    
<?php $this->assign('cat_goods',$this->_var['cat_goods_302']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_302']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
	
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	<div class="pants_left">
            	<?php echo $this->fetch('library/tit15.lbi'); ?>
                <div class="pants_info">
                	
<?php $this->assign('ads_id','48'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
            </div>
            <div class="pants_right">
            	<div class="index_info">
                	<ul>
                    
<?php $this->assign('cat_goods',$this->_var['cat_goods_196']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_196']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
	
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="index_lump">
        	<div class="topics_ded">
            	<div class="index_tit2" style="padding-bottom:10px">
					<h3>专题推荐</h3>
				</div>
               
<?php $this->assign('ads_id','49'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
<div class="mt20"></div>

<?php $this->assign('ads_id','50'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
            </div>
            <div class="vivian_index">
            	<?php echo $this->fetch('library/tit16.lbi'); ?>
                <div class="vivian_info">
                	
<?php $this->assign('ads_id','51'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                </div>
                <div class="new_exper_info mt20">
                	<ul>
                    	
<?php $this->assign('cat_goods',$this->_var['cat_goods_266']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_266']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

                    </ul>
                </div>
            </div>
        </div>
        
        
        
        <div class="foot_add">
        	
<?php $this->assign('ads_id','52'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

        </div>
        
        
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?> 

<script type="text/javascript">

<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</body>
</html>
