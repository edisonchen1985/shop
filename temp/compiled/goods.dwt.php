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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,left_goodslist.js,goods.js,jquery-1.9.1.min.js')); ?>
<script type="text/javascript">
$(function(){
		(function(){
			$.fn.account = function(options){
				return this.each(function(){
					new account(this,options);
				})
			}
			var account = function(el,options){
				var defaults = {
					sel1 : 'select' ,
					sel2 : 'select' ,
					table : 'table' ,
					button : 'button' ,
					tip : 'red_result'
				}
				var settings = $.extend({},defaults , options||{});
				var select1 = $(settings.sel1,el);
				var select2 = $(settings.sel2,el);
				var but = $(settings.button,el);
				var tip = $(settings.tip,el) ;
				but.click(function(){
					
					var val1 =  select1.val();
					var val2 =  select2.val();
					var td = $('.'+val1+val2,el);
					$(settings.table + ' td',el).removeAttr('style');
					tip.text("");
					if(td.attr('tit')==''){
						tip.text("没找到适合您的尺码！");
						return false;
					}
					td.css({'background':td.attr('tit'),'color':'#fff'});
				})
			}
		})(jQuery);
		
		function getCookie(name) 
		{
			var bikky = document.cookie;
			name += "=";
			var i = 0; 
			while (i < bikky.length) 
			{
			  var offset = i + name.length;
			  if (bikky.substring(i, offset) == name) 
			  { 
				var endstr = bikky.indexOf(";", offset); 
				if (endstr == -1) endstr = bikky.length;
				  return unescape(bikky.substring(offset, endstr)); 
			  }
				i = bikky.indexOf(" ", i) + 1; 
				if (i == 0) break; 
			}
			return null; 
		}	
		
		
	
		var btn=$("#but1");
		btn.click(function(){
			var height=$("#sel1").val();
			
			var weight=$("#sel2").val();
			
			//alert(height);
		});
		
		$('.show_size').account({
		sel1 : '#sel1' ,
		sel2 : '#sel2' ,
		table : '#table1',
		button : '#but1' ,
		tip : '.red_result'
	});
		
		
		
	});
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();

	if( color ){
                var attr_id = t.lastChild.value;
                var id = <?php echo $this->_var['goods_id']; ?>;
      //	  alert(attr_id+"\n"+id);
                Ajax.call('goods.php?act=getInfo', 'id='+id+'&attr_id='+attr_id,getImgUrl,'POST', 'JSON');

              
          }
}

function getImgUrl(result)
{
   object = document.getElementById("zoom1").getElementsByTagName("img")[0];
//   alert(result.img );
   object.setAttribute("src",result.img);
}  
</script>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'magiczoomplus.js,miqi_goods.js')); ?>
<div class="menu_box_navbg"></div>
<?php echo $this->fetch('library/category_tree_index.lbi'); ?>
<div class="wrap_bg">
  <div class="wrap_1200">
    <div class="goods_box">
      <div class="sp_r_shadow">
        <div class="sp_l_shadow">
        
          <div class="goods_part">
           		<p class="info_nav" id="ur_here"><?php echo $this->fetch('library/ur_here.lbi'); ?></p>
            	<div class="goods_info_box clearfix">
            		<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
                    <div class="goods_tp_rbox">
                    	<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                        	<div class="goods_gary">
                            	<div class="goods_ri_p1">
                                	<h1 class="goods_title">
                                    	<strong class="c_black">
                                        	<?php if ($this->_var['promotion']): ?>
                  								 
                    								【<?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>  
                    								<?php if ($this->_var['item']['type'] == "snatch"): ?> 
                    								<?php echo $this->_var['lang']['snatch']; ?> 
                    								<?php elseif ($this->_var['item']['type'] == "group_buy"): ?> 
                   									<?php echo $this->_var['lang']['group_buy']; ?>
                    								<?php elseif ($this->_var['item']['type'] == "auction"): ?> 
                    								<?php echo $this->_var['lang']['auction']; ?>
                    								<?php elseif ($this->_var['item']['type'] == "favourable"): ?> 
                    								<?php echo $this->_var['lang']['favourable']; ?> 
                    								<?php endif; ?>】 
                    								<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                                    
                  							<?php endif; ?>
                  						</strong>
                                        <em><?php echo $this->_var['goods']['goods_style_name']; ?></em>
                                    </h1>
                                    <div class="goods_ri_p2">
                                    	<p class="goods_artNo">
                                        	<?php if ($this->_var['cfg']['show_goodssn']): ?>
                  							<?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?>
                  							<?php endif; ?> 
                  						</p>
                                        <div class="f_l">
                                        
                                        	<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                                            <strong class="price24"><?php echo $this->_var['goods']['promote_price']; ?></strong> 
                                            <?php else: ?>
                                        	<strong class="price24" id="ECS_SHOPPRICE">
                                            	<?php echo $this->_var['goods']['shop_price_formated']; ?>
                                            </strong>
                                            <?php endif; ?>
                                            <font>
                                              <?php if ($this->_var['cfg']['show_marketprice']): ?> 
                    						  原价:<?php echo $this->_var['goods']['market_price']; ?> 
                   							  <?php endif; ?> |  已优惠¥<?php echo $this->_var['goods']['jiesheng']; ?> | <?php echo $this->_var['goods']['zhekou']; ?>折
                                              
                    						</font>
                                        </div>
                                    </div>
                                    <div class="leaguer_price clearfix">
                                    	<p style="float: right">
											<a target="_blank" href="article.php?id=42">如何获取会员资格</a>
										</p>
                                        <p class="f_l">
                                        	<?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?> 
                    						<?php echo $this->_var['rank_price']['rank_name']; ?>：<strong  id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>" class="red bold"><?php echo $this->_var['rank_price']['price']; ?></strong> 
                    						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                                        </p>
                                        <span class="gray old_comments"> 已有评论（<a href="." style="color:#0033FF"><?php 
$k = array (
  'name' => 'comments_count',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>）</span>
                                    </div>
                                </div>
                                <?php echo $this->fetch('library/youhui.lbi'); ?>
                                
                                <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
                      			<?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                      			<div class="goods_ri_p3 bt">
                        			<h3 class="bold pb3"><?php echo htmlspecialchars($this->_var['property']['name']); ?>：</h3>
                        			<div class="goods_ri_p3_r clearfix">
                                    	<p class="left"><?php echo $this->_var['property']['value']; ?></p>
                                    </div>
                      			</div>
                      			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                      			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                               
                                <div class="goods_ri_p3 bt">
                                	<h3 class="bold pb3">评论：</h3>
                                    <div class="goods_ri_p3_r clearfix">
                                    	<div class="msbar1 lv3">
                                        	<div>
                                            	<div class="bart">
                                                	<div class="point">
														<font color="#666">评论指数: </font>
														<strong><?php echo $this->_var['goods']['comment_rank']; ?></strong>
													</div>
                                                    <div style="float: left;"/>
                                                    	<div class="barcbg"><img src="themes/masamasuo/images/mensao<?php echo $this->_var['goods']['comment_rank']; ?>.jpg" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
                                <div class="goods_ri_p3 bt">
                                	<h3 class="bold pb3"><?php echo $this->_var['spec']['name']; ?>：</h3>
                                    
                                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                                    <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
                                    <div class="goods_ri_p3_r clearfix">
                                    	<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?> 
                      					<a <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this,<?php echo $this->_var['value']['id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="<?php echo $this->_var['value']['label']; ?>" style=" text-decoration:none"><?php echo $this->_var['value']['label']; ?><font style=" color:#CCCCCC;"></font></a>
                      					<input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> />
                      					
                      					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                    <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    				<?php else: ?>
                    				<select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                   					<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    				<?php endif; ?> 
                    				<?php else: ?> 
                    				<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                    				<label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
                    				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    				<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                                    <?php endif; ?>
                                    
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                
                                
                                <p class="num_box mt10">
                                	购买数量：
                                    <a onclick="buyNumber.minus()" href="javascript:;"><img src="themes/masamasuo/images/tg2_goods_cut.gif" ></a>
                    				<input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num" class="input">
                    				<a onclick="buyNumber.plus()" href="javascript:;"><img src="themes/masamasuo/images/tg2_goods_add.gif" /></a> 
                                    <span style="color: rgb(234, 77, 79);">今天17点前下单，配送至上海市，预计次日送达</span>
                                </p>
                                <p class="clear"></p>
                                
                                <div class="clearfix pt30">
                                	<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="goods_buy_btn fl"><img src="themes/masamasuo/images/go_pur_btn.jpg"  /></a>
                                    <a href="javascript:addToCartShowDiv(<?php echo $this->_var['goods']['goods_id']; ?>)" class="goods_ri_btn fl" ><img src="themes/masamasuo/images/go_buy_btn.jpg"  /></a>
                                    
                                    <p class="collect_goods">
										<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)">收藏此商品</a>
										<a href="http://wpa.qq.com/msgrd?V=1&Uin=64321&Site=ECSHOP&Menu=yes">在线咨询</a>
									</p>
                                </div>
                                
                                <div class="two_wei_code">
                                	<?php echo $this->fetch('library/wei_code.lbi'); ?>
                                </div>
                                
                                <script>
                       
                                // add by liuguichun 2011-7-19
                                var buyNumber = {
                                    maxNumber : 100,
                                    minNumber : 1,
                                    defaultNumber : function(){
                                        var defaultnumber = $('#product_num').attr('defaultnumber');
                                        defaultnumber = parseInt(defaultnumber)
                                        if(defaultnumber < 1){
                                            defaultnumber = 1;
                                        }
                                        return defaultnumber;
                                    },
                                                                                                                                    
                                    goodNumber : function(num){
                                        if(typeof(num) == 'number'){
                                            return $('#product_num').val(num);
                                        }else{
                                            return parseInt($('#product_num').val());
                                        }
                                                                                                                                        
                                    },
                                    plus : function(){
                                        var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
                                        if(num <= buyNumber.maxNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    },
                                    minus : function(){
                                        var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
                                        if(num >= buyNumber.minNumber){
                                            buyNumber.goodNumber(num);
                                        }
                                    }
                                                                                                                                    
                                }
                            </script>
                            </div>
                        </form>
                    </div>
                    <div class="go_tlei_top">
                    	
<?php echo $this->fetch('library/goods_related.lbi'); ?>

                    </div>
                </div>
           </div>
            
        </div>
      </div>
    </div>
    <div class="goods_looked_part">
      		
<?php echo $this->fetch('library/bought_goods.lbi'); ?>

      </div>
  </div>
  <?php echo $this->fetch('library/goods_nav.lbi'); ?>
  <div class="wrap_1200">
  		<div class="goods_part1">
        	<div class="sp_r_shadow">
            	<div class="sp_l_shadow">
                	<a id="image_film"></a>
                	<h3 class="index_tit_lin" style="font-weight:400">商品描述</h3>
                    <div class="goods_niuzai_img">
                    	<?php echo $this->_var['goods']['goods_desc']; ?>
                    </div>
                    
                    <a id="product_display"></a>
                    <h3 class="index_tit_lin" style="font-weight:400;">商品展示</h3>
                    <div class="goods_niuzai_img n_pt0">
                    	<?php echo $this->_var['goods']['goods_shipai']; ?>
                    </div>
                    
                    <a id="size_calculate"></a>
					<h3 class="index_tit_lin" style="font-weight:400">尺码试穿</h3>
                    <div class="goods_part_size">
                    	<?php echo $this->fetch('library/size.lbi'); ?>
                    </div>
                    
                    <a id="customer_com"></a>
					<h3 class="index_tit_lin" style="font-weight:400">顾客评论</h3>
                    
                    <div class="mt10" ></div>
                    
                    <div class="comment" id="i-comment">
                    	<div class="comment_box">
                        	<div class="comment_main">
                            	<div class="ztpf">
                                	<div class="ztpf_1">
                                    	<div class="pingfen">
                                        	<table cellspacing="0" cellpadding="0" border="0">
                                            	<tr>
                                                	<td valign="top">
                                                    	<div class="txt">
															<p>综合评分：</p>
														</div>
                                                    </td>
                                                    <td class="pingfe_star">
                                                    	<p class="clearfix">
                                                        	<sub class="SpriteStar2_on">好评</sub>
                                                    		<sup>
                                                        		<strong style="width: <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</a>
                                                        </p>
                                                        <p class="clearfix">
                                                        	<sub class="SpriteStar2_on">中评</sub>
                                                    		<sup>
                                                        		<strong style="width: <?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a><?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</a>
                                                        </p>
                                                        <p class="clearfix">
                                                        	<sub class="SpriteStar2_on">差评</sub>
                                                    		<sup>
                                                        		<strong style="width: <?php echo $this->_var['comment_percent']['chaping_percent']; ?>%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a><?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="ztpf_1">
                                    	<p class="ztpf_p">
                                        	<img src="themes/masamasuo/images/commentall.png" alt="">
                                            已购买用户可在当前页以及"会员中心"中进行评论
                                        </p>
                                        <p class="ztpf_p">
											<img src="themes/masamasuo/images/fractiondesc.png" alt="">
											查看详细积分使用规则
										</p>
                                    </div>
                                    <div class="ztpf_r">
                                    	<p>与其他人分享您的观点</p>
                                        <p>
											<a href="javascript:void(0);" class="btn_comm" id="showcommentform">我要写评价</a>
										</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" clearfix"></div>
                    <div id="comment_date">
                    	<?php echo $this->fetch('library/comments.lbi'); ?>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

 <?php echo $this->fetch('library/page_footer.lbi'); ?> 
  
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>



</html>
