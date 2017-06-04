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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="menu_box_navbg"></div>

<?php echo $this->fetch('library/category_tree_index.lbi'); ?>

<div class="wrap_bg">
<script>
$(function(){
	$("#group_box1").slide({mainCell:".group_l ul",titCell:".deal_brief_trigger .trigger",titOnClassName:"current",trigger:"click"});

	var datename = new Date();
	var Offset = datename.getTimezoneOffset() * 28800;
		
	setInterval(function(){
		$(".end_date").each(function(){
			var obj = $(this);
			var endTime = new Date(parseInt(obj.attr('value')) * 1000 - Offset) ;
			var show_day =  obj.attr('showday');
			var nowTime = new Date();
			var nMS=endTime.getTime() - nowTime.getTime();
			var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
			var myH_show=Math.floor(nMS/(1000*60*60) % 24)+5;
			var myH=Math.floor(nMS/(1000*60*60));
			var myM=Math.floor(nMS/(1000*60)) % 60;
			var myS=Math.floor(nMS/1000) % 60;
			var myMS=Math.floor(nMS/100) % 10;
			var myHZero = '';
 			var myMZero = '';
			var mySZero = '';
			if (myH < 10)
			{
				var myHZero = '0';
			}
			if (myM < 10)
			{
				var myMZero = '0';
			}
			if (myS < 10)
			{
				var mySZero = '0';
			}
			if(myH>=0){
				if(show_day == 'show')
				{
					var str = '<span class="times">'+myHZero+myH+'</span><em>时</em><span class="times">'+myMZero+myM+'</span><em>分</em><span class="times">'+mySZero+myS+'</span><em>秒</em>';
				}
				else
				{
					
					var str = '<strong class="font_size">'+myD+'</strong>天<strong class="font_size">'+myH_show+'</strong>小时<strong class="font_size">'+myM+'</strong>分';
				
				}
			}else{
				var str = "已结束！";	
			}
			obj.html(str);
		  });
	}, 100);
})
</script>
	<div class="wrap1002">
    	<div class="sp_r_shadow">
        	<div class="sp_l_shadow">
            	<div class="gr_wrap">
                	<div class="gr_search clearfix">
                    	<div class="gr_search_l">
                        	<em class="gr_sear_sel">
                            	<a target="_self" href="group_buy.php">今日团购</a>
                            </em>
                        </div>
                        <div class="gr_search_r">
                        	<form>
                            	<input type="text" id="user_email" class="gr_text" value="输入邮箱" onFocus="this.value=''" />
                                <input type="button" class="gr_submit"  onclick="add_email_list();" />
                            </form>
                            <script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
if (check_email())
{
Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
}
}
function rep_add_email_list(text)
{
alert(text);
}
function cancel_email_list()
{
if (check_email())
{
Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
}
}
function rep_cancel_email_list(text)
{
alert(text);
}
function check_email()
{
if (Utils.isEmail(email.value))
{
return true;
}
else
{
alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
return false;
}
}
</script>
                        </div>
                    </div>
                    <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['group_buy']):
        $this->_foreach['foo']['iteration']++;
?> 
                    <div class="gr_main clearfix">
                    	
                    	<div class="gr_mian_l">
                        	<h1>
                            	<a  href="<?php echo $this->_var['group_buy']['url']; ?>" style=" text-decoration:none; text-align:left" target="_blank">
                                	<strong><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></strong>
                                	<?php echo $this->_var['group_buy']['act_desc']; ?>
                                </a>
                            </h1>
                            <div class="gr_goods_detal clearfix">
                            	<div class="gr_goods_detall">
                                	<div class="gr_buy2 clearfix">
                                    	<span>￥<em><?php echo $this->_var['group_buy']['price_ladder']['0']['price']; ?></em></span>
                                         <a href="<?php echo $this->_var['group_buy']['url']; ?>" onfocus="this.blur()"></a>
                                    </div>
                                    <ul class="gr_price">
                                    	<li>
                                        	<strong>原价</strong>
											<del>￥<?php echo $this->_var['group_buy']['market_price']; ?></del>
                                        </li>
                                        <li>
                                        	<strong>折扣</strong>
                                            <b>
                                            	<span><?php echo $this->_var['group_buy']['zhekou']; ?></span>折
                                            </b>
                                        </li>
                                        <li>
                                        	<strong>节省</strong>
                                            <em>
												<span>¥<?php echo $this->_var['group_buy']['jiesheng']; ?></span>
											</em>
                                        </li>
                                    </ul>
                                    <p class="gr_share_t">
										<strong><?php echo $this->_var['group_buy']['cur_amount']; ?></strong>
										人已购买
									</p>
                                    <div class="gr_time">
                                    	<span class="gr_time_t">距离团购结束还有</span>
                  						<div id="timer" class="main_timer end_date" value="<?php echo $this->_var['group_buy']['end_time']; ?>"></div>
                                    </div>
                                    <div class="clearfix padl22">
                                    	<a target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>#image_film">
											<p class="gr_btnBot">商品描述</p>
										</a>
										<a target="_blank" href="<?php echo $this->_var['group_buy']['url']; ?>#customer_com">
											<p class="gr_btnBot">顾客评论</p>
										</a>
                                    </div>
                                </div>
                                <div class="gr_goods_detalr">
                                	<div class="goods_big_tp">
                                    	<a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="gr_mian_r">
                        	
<?php $this->assign('ads_id','61'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 
							
<?php $this->assign('ads_id','62'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

                        </div>
                        
                    </div>
                    
               		<div class="group_by_bg"></div>
                   
                	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
            </div>
        </div>
    </div>	
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
</body>
</html>
