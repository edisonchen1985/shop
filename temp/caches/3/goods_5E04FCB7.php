<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:40:"/mnt/www/shop/themes/masamasuo/goods.dwt";i:1;s:54:"/mnt/www/shop/themes/masamasuo/library/page_header.lbi";i:2;s:62:"/mnt/www/shop/themes/masamasuo/library/category_tree_index.lbi";i:3;s:50:"/mnt/www/shop/themes/masamasuo/library/ur_here.lbi";i:4;s:56:"/mnt/www/shop/themes/masamasuo/library/goods_gallery.lbi";i:5;s:49:"/mnt/www/shop/themes/masamasuo/library/youhui.lbi";i:6;s:51:"/mnt/www/shop/themes/masamasuo/library/wei_code.lbi";i:7;s:56:"/mnt/www/shop/themes/masamasuo/library/goods_related.lbi";i:8;s:55:"/mnt/www/shop/themes/masamasuo/library/bought_goods.lbi";i:9;s:52:"/mnt/www/shop/themes/masamasuo/library/goods_nav.lbi";i:10;s:47:"/mnt/www/shop/themes/masamasuo/library/size.lbi";i:11;s:51:"/mnt/www/shop/themes/masamasuo/library/comments.lbi";i:12;s:54:"/mnt/www/shop/themes/masamasuo/library/page_footer.lbi";}s:7:"expires";i:1496541162;s:8:"maketime";i:1496537562;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品_黑科技系列_精品分类_形尚穿戴商城 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/masamasuo/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/left_goodslist.js"></script><script type="text/javascript" src="js/goods.js"></script><script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript">
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
                var id = 418;
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
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//收藏本站 
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div class="header_top">
      <div class="block">
      
              <div class="search_nav">
              
                     <ul class="brandBox">
                     
                           <li class="on"><a href="index.php">形尚商城</a></li>
                           
                     </ul>
              
              </div>
              
              <div class="top_right_box">
              
                  	      <ul class="index_login">
                           
                                <script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>                                
                                <script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/ecmoban_common.js"></script> 
                                
                                <font id="ECS_MEMBERZONE" style="display:block; float:left;">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca </font>
                                
                                <li id="topNav" class="clearfix">
</li>
          
                           </ul>
        
        
              </div>
      
      </div>
</div>
<div class="header_box">
       <div class="header">
       
               <div class="tel">
               
                       <div class="logo_masa">
                       
                               <div id="search">
                     
                                      <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()"  >
                            
                                              <div class="header_search">
                                    
                                                      <div class="input_box"><input name="keywords" type="text" id="keyword" value="" onclick="javascript:if(this.value=='')this.value=''"  /></div>
                                                      
                                                      <div class="search1"><input name="imageField" type="submit" value="" class="btn_s"/></div>
                                           
                                              </div>
          
                                      </form>
        
                               </div>
                               
                               <div class="phone_two">
                               
                                       <div class="phone_two_ico" onMouseOver="this.className='phone_two_ico phone_two_ico_on'" onMouseOut="this.className='phone_two_ico'">
                                       
                                               <div class="phone_ico">
                                               
                                                       <div class="phone_cen">
                                                       
                                                              <ul>
                                                              
                                                                     <li class="phone_line">手机WAP端口</li>
                                                                     
                                                                     <li>
                                                                     
                                                                          <p>扫描二维码直接访问</p>
                                                                          
                                                                          <img src="themes/masamasuo/images/two_wei_1.jpg" />
                                                                     
                                                                     </li>
                                                              
                                                              </ul>
                                                              
                                                              <div class="phone_bg_ft"></div>
                                                       
                                                       </div>
                                               
                                               </div>
                                       
                                       </div>
                               
                               </div> 
                               
                               <p class="cart " style=" overflow:hidden"><a href="flow.php" title="购物车">我的购物车（<span class="flowNum"><strong id="ECS_CARTINFO2">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</strong></span>）</a></p>
                       
                       </div>
               
               </div>
               
               <a href="index.php" ><img src="themes/masamasuo/images/logo.gif" width="513" height="112" /></a>
       
       </div>
</div>
<div class="menu_box">
       <div class="menu">
       
              <ul class="menu_box_hot">
                            
                                  <li> <a href="index.php">首页</a></li>
                                  
                                                                    
                                  <li>
                                  
                                        <a href="category.php?id=334" >鞋服私人订制</a>
                                       
                                  </li>
          
                                                                    
                            </ul>
                            
              <ul class="second_menu">
              
                      
                     <li class="mm15"><a href="#">会员专区</a></li>
                     
                     <li class="mm15"><a href="group_buy.php">团购</a></li>
                     
                     <li class="mm15"><a href="#">限时抢购</a></li>
                     
                     <li class="mm15"><a href="#">新装发布</a></li>
                     
                   
              
              </ul>
       
       </div>
</div>
<div id="topcontrol" class="get_buy">
	<div class="get_buy_go">
    	<div id="ECS_CARTINFO" class="carT" onMouseOver="this.className='carT carT_on'" onMouseOut="this.className='carT'">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</div>
    	<!--<a class="shop_get" href="javascript:;" title="购物车">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</a>-->
        <a class="new_get" href="./search.php?intro=new" title="新装发布"></a>
        <a id="kefu" class="serv_get" href="http://wpa.qq.com/msgrd?V=1&Uin=64321&Site=ECSHOP&Menu=yes"></a>
        <a id="sider_returntop" href="javascript:void(0);" class="top_get" style="display: block;"></a>
    </div>
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},0);
		return false;
	});
})
</script>
 <script type="text/javascript" src="js/magiczoomplus.js"></script><script type="text/javascript" src="js/miqi_goods.js"></script><div class="menu_box_navbg"></div>
<div class="menu_box_nav">
       <div class="menu" id="J_mainCata">
       
             <ul class="menu_box_list">
                                      
                   <li style=" float:left">
                   
                        <p class="leftNav_p01" style=" float:left"><a class="a1" href="category.php?id=339" title="精品分类">精品分类</a></p>
                        
			            <div class="wr_menu_box" id="J_subCata">
        
                               <div class="menu_box_g" >
                               
                                       <div class="menu_width">
                                       
                                               <div class="menu_box_info">
                                               
                                               		  <div class="menu_info_top">
                                               
                                                      		<div class="menu_info_nav">
                                                     			                                                  				<dl>
     
     															<dt>精品鞋垫专卖</dt>
       															     														
       															</dl>
                												                                                  				<dl>
     
     															<dt>时尚足部护理</dt>
       															     														
       															</dl>
                												                                                  				<dl>
     
     															<dt>儿童足部健康</dt>
       															     														
       															</dl>
                												                                                  				<dl>
     
     															<dt>鞋服私人订制</dt>
       															     														
       															</dl>
                												                                                  				<dl>
     
     															<dt>黑科技系列</dt>
       															     														
       															</dl>
                												                                                      		</div>
                                                            <div class="menu_info_pic">
                                                            
                                                            	      															554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"6";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca       															                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                                                                                
                                                                
                                                            </div>
                                                      
                                                      </div>
                                                      
                                                      <div class="menu_info_ft">
															<p>国家纺织制品质量监督检验中心</p>
															<p>中纺标（北京）检验认证中心有限公司　出具衬衣面 料检测报告，符合国家纺织品安全技术与质量标准，确保产品质量，保障您的消费权益。</p>
													  </div>
                                               
                                               </div>
                                       
                                       </div>
            
                               </div>
       
                        </div>
        
		                
                        
                   </li>
            
                                      
             </ul>
             
             <ul class="second_menu f12">
             		<li>
						<a target="_blank" href="#">vivian女装</a>
					</li>
					<li>
						<a target="_blank" href="#">汪小荷童装</a>
					</li>
					<li>
						<a target="_blank" href="#">玛亚诺</a>
					</li>
					<li>
						<a target="_blank" href="#">Nemow</a>
					</li>
					<li>
						<a target="_blank" href="#">Birryshop</a>
					</li>
             </ul>
          	 <div style=" clear:both"></div>
       </div>
       
</div>
<div class="wrap_bg">
  <div class="wrap_1200">
    <div class="goods_box">
      <div class="sp_r_shadow">
        <div class="sp_l_shadow">
        
          <div class="goods_part">
           		<p class="info_nav" id="ur_here"><a href="." >首页</a> <code>&gt;</code> <a class="ch_1" href="category.php?id=339">精品分类</a> <code>&gt;</code> <a class="ch_1" href="category.php?id=158">黑科技系列</a> <code>&gt;</code> SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品</p>
            	<div class="goods_info_box clearfix">
            		
  <div class="goods_tp_box" id="goodsInfo"> 
    	 
    	<a href="images/201701/goods_img/418_P_1484106970160.jpg" class="MagicZoomPlus"  target="_blank" id="Zoom" rel="hint-text: ; selectors-effect: false; selectors-class: on; zoom-distance: 22;zoom-width: 430; zoom-height: 430;" >
    		<img src="images/201701/goods_img/418_P_1484106970160.jpg" alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品" style="width:478px; height:478px;" />
    	</a> 
    	        <p class="btn_goods_link_box">
        	<a id="show_big_img" target="_blank" href="images/201701/goods_img/418_P_1484106970160.jpg">
				<img alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品" src="themes/masamasuo/images/btn_big_goods_new.gif">
			</a>
        </p>
        <p class="goods_s_tp_title ">
			<img src="themes/masamasuo/images/goods_s_title.gif">
		</p> 
  		<div class="zoomList s_tp " >
    		<ul class="s_tpc clearfix">
      				 
              		              		<li> <a href="images/201701/goods_img/418_P_1484106970160.jpg" rel="zoom-id: Zoom" rev="images/201701/goods_img/418_P_1484106970160.jpg"><img src="images/201701/thumb_img/418_thumb_P_1484106970372.jpg" alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品"></a> </li>
              		              		<li> <a href="images/201701/goods_img/418_P_1484107947505.jpg" rel="zoom-id: Zoom" rev="images/201701/goods_img/418_P_1484107947505.jpg"><img src="images/201701/thumb_img/418_thumb_P_1484107947325.jpg" alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品"></a> </li>
              		              		<li> <a href="images/201701/goods_img/418_P_1484107947766.jpg" rel="zoom-id: Zoom" rev="images/201701/goods_img/418_P_1484107947766.jpg"><img src="images/201701/thumb_img/418_thumb_P_1484107947212.jpg" alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品"></a> </li>
              		              		<li> <a href="images/201701/goods_img/418_P_1484107947163.jpg" rel="zoom-id: Zoom" rev="images/201701/goods_img/418_P_1484107947163.jpg"><img src="images/201701/thumb_img/418_thumb_P_1484107947039.jpg" alt="SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品"></a> </li>
              		 
              		              </ul>
        </div>
  </div>
<script>
	$(".s_tpc a").click(function(){
		var a = $(this).attr("href");
		$("#show_big_img").attr("href",a);
	})
</script>                    <div class="goods_tp_rbox">
                    	<form action="javascript:addToCart(418)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                        	<div class="goods_gary">
                            	<div class="goods_ri_p1">
                                	<h1 class="goods_title">
                                    	<strong class="c_black">
                                        	                  						</strong>
                                        <em>SupBro防水喷雾防尘防污超级鞋面护理防脏神器纳米科技创意礼品</em>
                                    </h1>
                                    <div class="goods_ri_p2">
                                    	<p class="goods_artNo">
                                        	                  							商品货号：HKJ201616                  							 
                  						</p>
                                        <div class="f_l">
                                        
                                        	                                        	<strong class="price24" id="ECS_SHOPPRICE">
                                            	<span>￥</span>88                                            </strong>
                                                                                        <font>
                                               
                    						  原价:<span>￥</span>88 
                   							   |  已优惠¥0 | 10折
                                              
                    						</font>
                                        </div>
                                    </div>
                                    <div class="leaguer_price clearfix">
                                    	<p style="float: right">
											<a target="_blank" href="article.php?id=42">如何获取会员资格</a>
										</p>
                                        <p class="f_l">
                                        	 
                    						皇冠会员价：<strong  id="ECS_RANKPRICE_4" class="red bold"><span>￥</span>74</strong> 
                    						 
                                        </p>
                                        <span class="gray old_comments"> 已有评论（<a href="." style="color:#0033FF">554fcae493e564ee0dc75bdf2ebf94cacomments_count|a:3:{s:4:"name";s:14:"comments_count";s:4:"type";i:0;s:2:"id";i:418;}554fcae493e564ee0dc75bdf2ebf94ca</a>）</span>
                                    </div>
                                </div>
                                <div class="spe_info">
	<h3>优惠信息：</h3>
    <ul class="spe_cn">
		<li>
			<span>包邮 </span>
			1. 满200免邮费
		</li>
        <li>
        	<span>满赠</span>
			2. 乐享39元换购打底背心
        </li>
	</ul>
</div>                                
                                                               
                                <div class="goods_ri_p3 bt">
                                	<h3 class="bold pb3">评论：</h3>
                                    <div class="goods_ri_p3_r clearfix">
                                    	<div class="msbar1 lv3">
                                        	<div>
                                            	<div class="bart">
                                                	<div class="point">
														<font color="#666">评论指数: </font>
														<strong>5</strong>
													</div>
                                                    <div style="float: left;"/>
                                                    	<div class="barcbg"><img src="themes/masamasuo/images/mensao5.jpg" alt="comment rank 5" /></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                
                                
                                                                
                                
                                <p class="num_box mt10">
                                	购买数量：
                                    <a onclick="buyNumber.minus()" href="javascript:;"><img src="themes/masamasuo/images/tg2_goods_cut.gif" ></a>
                    				<input name="number" type="text" value="1" defaultnumber="1" onblur="changePrice()" id="product_num" class="input">
                    				<a onclick="buyNumber.plus()" href="javascript:;"><img src="themes/masamasuo/images/tg2_goods_add.gif" /></a> 
                                    <span style="color: rgb(234, 77, 79);">今天17点前下单，配送至上海市，预计次日送达</span>
                                </p>
                                <p class="clear"></p>
                                
                                <div class="clearfix pt30">
                                	<a href="javascript:addToCart(418)" class="goods_buy_btn fl"><img src="themes/masamasuo/images/go_pur_btn.jpg"  /></a>
                                    <a href="javascript:addToCartShowDiv(418)" class="goods_ri_btn fl" ><img src="themes/masamasuo/images/go_buy_btn.jpg"  /></a>
                                    
                                    <p class="collect_goods">
										<a href="javascript:collect(418)">收藏此商品</a>
										<a href="http://wpa.qq.com/msgrd?V=1&Uin=64321&Site=ECSHOP&Menu=yes">在线咨询</a>
									</p>
                                </div>
                                
                                <div class="two_wei_code">
                                	<p class="two_mar">
微信扫一扫
<br>
看《闷骚先生》
</p>
<p>
	554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"60";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca</p>                                </div>
                                
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
                    	
                    </div>
                </div>
           </div>
            
        </div>
      </div>
    </div>
    <div class="goods_looked_part">
      		
      </div>
  </div>
  <div style="position:relative; z-index:999">
  		<div class="sp_l_shadow">
        	<div id="btns_bar" class="btns_bar" style="position: relative; top: 0px; left: 0px;">
            	<div class="btns_con clearfix">
                	<div class="f_r">
                    	<a href="javascript:addToCart(418)"><img src="themes/masamasuo/images/go_btn_mai_1.jpg" /></a>
                    </div>
                    <div class="f_l">
                    	<a href="#image_film">商品描述</a>
                        <a href="#product_display">商品展示</a>
                        <a href="#size_calculate">尺码试穿</a>
                        <a href="#customer_com">顾客评论</a>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <script type="text/javascript">
$(function(){	
	/*快捷菜单宽度自适应*/
	function win_ch(){
		if($('#btns_bar').css('position') ==='absolute'){
		var bar_l = $('.goods_box').offset().left;
		$('#btns_bar').css({'left':-bar_l,'width':$(window).width()});
		bar_left  = $('#btns_bar').css('left');}
	}
	
	//快捷菜单滚动后在顶部
	function show_bar(barTop) {
		var scrollTop = $(window).scrollTop();
		if(window.XMLHttpRequest)
		{
			if(scrollTop >= barTop)
			{
				$('#btns_bar').css({position: 'fixed', top: 0,left:0});
			}
			else {
				$('#btns_bar').css({position: 'relative', top: 0});
			}
		}
		else {
			if(scrollTop >= barTop)
			{	$('#btns_bar').css({top: scrollTop - barTop,position: 'absolute'});
				win_ch();
				$(window).resize(function(){
					win_ch();
				})
				
			}
			else {
				$('#btns_bar').css({top:0, 'left':0, position: 'relative','width':'auto'});
			}
		}
	}
	
	barTop = $('#btns_bar').offset().top;
	$(window).bind("scroll", function(){
		show_bar(barTop);
	});
	
	//计算尺码
	$("a.calculate_size").colorbox({
		transition: 'none',
		innerWidth:780,
		opacity: 0.8,
		scrolling: false,
		//close: "关闭",
		fixed:true
	});
	//计算尺码的按钮
	$('.show_size').account({
		sel1 : '#sel1' ,
		sel2 : '#sel2' ,
		table : '#table1',
		button : '#but1' ,
		tip : '.red_result'
	});
})	
</script>  <div class="wrap_1200">
  		<div class="goods_part1">
        	<div class="sp_r_shadow">
            	<div class="sp_l_shadow">
                	<a id="image_film"></a>
                	<h3 class="index_tit_lin" style="font-weight:400">商品描述</h3>
                    <div class="goods_niuzai_img">
                    	<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">-------------------------------------------------</span></p>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">&nbsp;</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">敬请留意：</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">1、因为罐体为金属，货物则需进口，因此在运输途中</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">罐体外层的漆面可能会有磕碰脱落的情况，但产品保证为全新，不影响使用。</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">2、喷涂时喷雾本身会有味道，晾干后味道即会去除。</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">3、喷涂时，需要确保距离鞋面20厘米，过近会便利纳</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">米涂料过度规程，形成白色涂层。</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">&nbsp;</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">-------------------------------------------------</div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;"><img src="/shop/images/upload/Image/1(39).jpg" width="950" height="418" alt="" /></div>
<div style="font-family: tahoma, arial, 宋体, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">
<p style="margin: 1.12em 0px; padding: 0px;">SupBro通过革命性的纳米技术，在球鞋表面创建一个为无形的保护层，</p>
<p style="margin: 1.12em 0px; padding: 0px;">可以防止水，酱油，污渍及多种灰层。</p>
<p style="margin: 1.12em 0px; padding: 0px;">通过SupBro超级喷雾处理过的表面会阻断大多数液体的侵蚀，</p>
<p style="margin: 1.12em 0px; padding: 0px;">便于平时清洗，这种持久耐用的效果可以持续2周左右，</p>
<p style="margin: 1.12em 0px; padding: 0px;">视实际使用而定，失效时需重新喷雾方可产生同样效用。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/2(42).jpg" width="950" height="418" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">这款喷雾采用革命性的纳米技术，</p>
<p style="margin: 1.12em 0px; padding: 0px;">喷上之后，在不伤鞋子的前提下，</p>
<p style="margin: 1.12em 0px; padding: 0px;">令鞋子的表面，形成一层透明的保护层，</p>
<p style="margin: 1.12em 0px; padding: 0px;">就好像是荷叶表面的疏水结构，</p>
<p style="margin: 1.12em 0px; padding: 0px;">防水、防尘、防污，还很透气。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/3(36).jpg" width="950" height="421" alt="" /><img src="/shop/images/upload/Image/4(34).jpg" width="950" height="418" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">纳米材料可以深入纤维层形成透明保护层，水滴在鞋面就像雨水打在荷叶上，会呈水珠状滚落。</p>
<p style="margin: 1.12em 0px; padding: 0px;">在布面上做实验，可以清晰地看到荷叶拨水的效果。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/5(1).gif" width="800" height="600" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">撒个水啥的简直就是小意思了&nbsp;</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/6(2).gif" width="800" height="600" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">即使是粘稠的番茄酱，也丝毫没染色。用水一冲，干净依旧，抗污效果惊人。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/7.gif" width="600" height="338" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/8.gif" width="600" height="338" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">&nbsp;没有喷过 Supbro 的纸张</p>
<p style="margin: 1.12em 0px; padding: 0px;">&nbsp;已经开始湿开了</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/9(1).gif" width="500" height="281" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">而喷过 Supbro 的纸张</p>
<p style="margin: 1.12em 0px; padding: 0px;">让水在纸张表面上形成了露珠效果</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/10(1).gif" width="500" height="281" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">沾过有颜色的水以后鞋子啥事儿木有</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/12(3).gif" width="400" height="225" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">&nbsp;使用前先摇匀</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/13.gif" width="640" height="360" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">将 SupBro 喷于鞋面两遍，第一遍：清洁鞋面后， 在距离鞋面 20cm 处喷洒均匀， 放置 10 分钟</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/14.gif" width="640" height="360" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">&nbsp;第二遍：10分钟后，再次距鞋面 20cm 处喷洒均匀，放置 10 分钟后，这时鞋面的透明战衣已经成型了，大功告成。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/15.gif" width="640" height="360" alt="" /></p>
<p style="margin: 1.12em 0px; padding: 0px;">300ml装，一支可以使用15次左右，一次差不多可以持续两周，半年都够用了。</p>
<p style="margin: 1.12em 0px; padding: 0px;">鞋子的日常护理从此只需喷一喷，擦一擦，就能保持焕然如新。</p>
<p style="margin: 1.12em 0px; padding: 0px;"><img src="/shop/images/upload/Image/16(22).jpg" width="640" height="427" alt="" /><img src="/shop/images/upload/Image/17(20).jpg" width="750" height="422" alt="" /></p>
</div>                    </div>
                    
                    <a id="product_display"></a>
                    <h3 class="index_tit_lin" style="font-weight:400;">商品展示</h3>
                    <div class="goods_niuzai_img n_pt0">
                    	                    </div>
                    
                    <a id="size_calculate"></a>
					<h3 class="index_tit_lin" style="font-weight:400">尺码试穿</h3>
                    <div class="goods_part_size">
                    	<div class="show_size">
	<p class="show_size_title">
		<span>试穿尺码计算器：</span>
	</p>
    <div class="goods_size_js">
    	<label>
        	身高： 
            <select id="sel1">
            	<option>---请选择---</option>
				<option value="160-165CM">160-165CM</option>
				<option value="165-170CM">165-170CM</option>
				<option value="170-175CM">170-175CM</option>
				<option value="175-180CM">175-180CM</option>
				<option value="180-185CM">180-185CM</option>
				<option value="185-190CM">185-190CM</option>
            </select>
        </label>
        <label>
        	体重：  
            <select id="sel2">
            	<option>---请选择---</option>
				<option value="55-60KG">55-60KG</option>
				<option value="60-65KG">60-65KG</option>
				<option value="65-70KG">65-70KG</option>
				<option value="70-75KG">70-75KG</option>
				<option value="75-80KG">75-80KG</option>
				<option value="80-85KG">80-85KG</option>
				<option value="85-90KG">85-90KG</option>
				<option value="90-95KG">90-95KG</option>
				<option value="95-100KG">95-100KG</option>
            </select>
        </label>
        <img id="but1" align="top" src="themes/masamasuo/images/btn_light_count2.gif" value="" style="cursor: pointer;">
        <font id="result" class="red red_result">没找到适合您的尺码！</font>
    </div>
    <div class="show_size_title">
		<p class="floatright">
			<span>
				<img src="themes/masamasuo/images/color_01.gif">
				合体
			</span>
			<span>
				<img src="themes/masamasuo/images/color_02.gif">
				修身
			</span>
			<span>
				<img src="themes/masamasuo/images/color_03.gif">
				宽松
			</span>
		</p>
		<p class="floatleft">产品标准尺码</p>
	</div>
    <div class="size_form font_zt">
    	<table id="table1" width="100%" cellspacing="1" cellpadding="0" border="0">
        	<tr class="form_title">
            	<td class="size_title"></td>
                <td><p>55-60KG</p></td>
				<td><p>60-65KG</p></td>
				<td><p>65-70KG</p></td>
				<td><p>70-75KG</p></td>
				<td><p>75-80KG</p></td>
				<td><p>80-85KG</p></td>
				<td><p>85-90KG</p></td>
				<td><p>90-95KG</p></td>
				<td><p>95-100KG</p></td>
            </tr>
            <tr>
				<td>160-165CM</td>
				<td class="160-165CM55-60KG" tit="#CEC1BD">S</td>
				<td class="160-165CM60-65KG" tit="#CEC1BD">M</td>
				<td class="160-165CM65-70KG" tit="">/</td>
				<td class="160-165CM70-75KG" tit="">/</td>
				<td class="160-165CM75-80KG" tit="">/</td>
				<td class="160-165CM80-85KG" tit="">/</td>
				<td class="160-165CM85-90KG" tit="">/</td>
				<td class="160-165CM90-95KG" tit="">/</td>
				<td class="160-165CM95-100KG" tit="">/</td>
			</tr>
            <tr class="trow_bg">
				<td>165-170CM</td>
				<td class="165-170CM55-60KG" tit="#b5dcc9">S</td>
				<td class="165-170CM60-65KG" tit="#CEC1BD">M</td>
				<td class="165-170CM65-70KG" tit="#bfd6ed">M</td>
				<td class="165-170CM70-75KG" tit="#bfd6ed">L</td>
				<td class="165-170CM75-80KG" tit="#bfd6ed">XL</td>
				<td class="165-170CM80-85KG" tit="#bfd6ed">XL</td>
				<td class="165-170CM85-90KG" tit="">/</td>
				<td class="165-170CM90-95KG" tit="">/</td>
				<td class="165-170CM95-100KG" tit="">/</td>
			</tr>
            <tr>
				<td>170-175CM</td>
				<td class="170-175CM55-60KG" tit="#CEC1BD">M</td>
				<td class="170-175CM60-65KG" tit="#b5dcc9">M</td>
				<td class="170-175CM65-70KG" tit="#b5dcc9">M</td>
				<td class="170-175CM70-75KG" tit="#bfd6ed">L</td>
				<td class="170-175CM75-80KG" tit="#bfd6ed">XL</td>
				<td class="170-175CM80-85KG" tit="#bfd6ed">XL</td>
				<td class="170-175CM85-90KG" tit="#bfd6ed">XXL</td>
				<td class="170-175CM90-95KG" tit="">/</td>
				<td class="170-175CM95-100KG" tit="">/</td>
			</tr>
            <tr class="trow_bg">
				<td>175-180CM</td>
				<td class="175-180CM55-60KG" tit="">/</td>
				<td class="175-180CM60-65KG" tit="#CEC1BD">L</td>
				<td class="175-180CM65-70KG" tit="#b5dcc9">L</td>
				<td class="175-180CM70-75KG" tit="#b5dcc9">L</td>
				<td class="175-180CM75-80KG" tit="#b5dcc9">XL</td>
				<td class="175-180CM80-85KG" tit="#b5dcc9">XL</td>
				<td class="175-180CM85-90KG" tit="#bfd6ed">XXL</td>
				<td class="175-180CM90-95KG" tit="#bfd6ed">XXL</td>
				<td class="175-180CM95-100KG" tit="">/</td>
			</tr>
            <tr>
				<td>180-185CM</td>
				<td class="180-185CM55-60KG" tit="">/</td>
				<td class="180-185CM60-65KG" tit="">/</td>
				<td class="180-185CM65-70KG" tit="#CEC1BD">L</td>
				<td class="180-185CM70-75KG" tit="#CEC1BD">L</td>
				<td class="180-185CM75-80KG" tit="#b5dcc9">XL</td>
				<td class="180-185CM80-85KG" tit="#b5dcc9">XL</td>
				<td class="180-185CM85-90KG" tit="#b5dcc9">XXL</td>
				<td class="180-185CM90-95KG" tit="#b5dcc9">XXL</td>
				<td class="180-185CM95-100KG" tit="#b5dcc9">XXXL</td>
			</tr>
            <tr class="trow_bg">
				<td>185-190CM</td>
				<td class="185-190CM55-60KG" tit="">/</td>
				<td class="185-190CM60-65KG" tit="">/</td>
				<td class="185-190CM65-70KG" tit="#CEC1BD">XL</td>
				<td class="185-190CM70-75KG" tit="#CEC1BD">XL</td>
				<td class="185-190CM75-80KG" tit="#CEC1BD">XL</td>
				<td class="185-190CM80-85KG" tit="#CEC1BD">XL</td>
				<td class="185-190CM85-90KG" tit="#b5dcc9">XXL</td>
				<td class="185-190CM90-95KG" tit="#b5dcc9">XXL</td>
				<td class="185-190CM95-100KG" tit="#b5dcc9">XXXL</td>
			</tr>
        </table>
    </div>
</div>
<div id="below_size_async_13357" class="goods_part">
	<div>
    	<p>
			<img src="themes/masamasuo/images/size.jpg">
		</p>
    </div>
    <div id="goods_div_1">
    	<div class="show_size">
        	<p class="show_size_title">
				<span>产品标准尺码</span>
			</p>
            <div class="size_form font_zt">
            	<table width="100%" cellspacing="1" cellpadding="0" border="0">
                	<tr class="form_title">
						<td class="size_title1"></td>
						<td><p>S</p><p>(165/88)</p></td>
						<td><p>M</p><p>(170/92)</p></td>
						<td><p>L</p><p>(175/96)</p></td>
						<td><p>XL</p><p>(180/100)</p></td>
						<td><p>XXL</p><p>(185/104)</p></td>
						<td><p>XXXL</p><p>(190/108)</p></td>
					</tr>
                    <tr>
						<td>肩宽 </td>
						<td>42.2 </td>
						<td>43.5 </td>
						<td>45 </td>
						<td>46.5 </td>
						<td>48 </td>
						<td> / </td>
					</tr>
                    <tr class="trow_bg">
						<td>胸围 </td>
						<td>98 </td>
						<td>102 </td>
						<td>106 </td>
						<td>110 </td>
						<td>114 </td>
						<td> / </td>
					</tr>
                    <tr>
						<td>袖长 </td>
						<td>22 </td>
						<td>23 </td>
						<td>24 </td>
						<td>25 </td>
						<td>26 </td>
						<td> / </td>
					</tr>
                    <tr class="trow_bg">
						<td>衣长 </td>
						<td>69 </td>
						<td>71 </td>
						<td>73 </td>
						<td>75 </td>
						<td>77 </td>
						<td> / </td>
					</tr>
                </table>
            </div>
			<p class="clear"></p>
        </div>
    </div>
</div>
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
                                                        		<strong style="width: 100%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a>100%</a>
                                                        </p>
                                                        <p class="clearfix">
                                                        	<sub class="SpriteStar2_on">中评</sub>
                                                    		<sup>
                                                        		<strong style="width: 0%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a>0%</a>
                                                        </p>
                                                        <p class="clearfix">
                                                        	<sub class="SpriteStar2_on">差评</sub>
                                                    		<sup>
                                                        		<strong style="width: 0%;">
                                                            	
                                                            	</strong>
                                                        	</sup>
                                                            <a>0%</a>
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
                    	<script type="text/javascript" src="js/transport.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:418;}554fcae493e564ee0dc75bdf2ebf94ca</div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
 
<div class="footer">
	<div class="footer_logo">
    	<img src="themes/masamasuo/images/footer_link_3.jpg" border="0" /> 
    </div>
    <div class="footer_box">
    	<div class="footer_promise">
        	<img src="themes/masamasuo/images/footer_m_6.jpg" border="0" />
        </div>
    </div>
        <div class="help_link_list">
    	    	<ul class="help_link">
        	<p>
            	新手上路             </p>
                		<li><a href="article.php?id=9" title="售后流程">售后流程</a></li>
    		    		<li><a href="article.php?id=10" title="购物流程">购物流程</a></li>
    		    		<li><a href="article.php?id=11" title="订购方式">订购方式</a></li>
    		    		<li><a href="article.php?id=36" title="隐私声明">隐私声明</a></li>
    		        </ul>
            	<ul class="help_link">
        	<p>
            	手机常识             </p>
                		<li><a href="article.php?id=12" title="如何分辨原装电池">如何分辨原装电池</a></li>
    		    		<li><a href="article.php?id=13" title="如何分辨水货手机 ">如何分辨水货手机</a></li>
    		    		<li><a href="article.php?id=14" title="如何享受全国联保">如何享受全国联保</a></li>
    		        </ul>
            	<ul class="help_link">
        	<p>
            	配送与支付             </p>
                		<li><a href="article.php?id=15" title="货到付款区域">货到付款区域</a></li>
    		    		<li><a href="article.php?id=16" title="配送支付智能查询 ">配送支付智能查询</a></li>
    		    		<li><a href="article.php?id=17" title="支付方式说明">支付方式说明</a></li>
    		        </ul>
            	<ul class="help_link">
        	<p>
            	会员中心            </p>
                		<li><a href="article.php?id=18" title="资金管理">资金管理</a></li>
    		    		<li><a href="article.php?id=19" title="我的收藏">我的收藏</a></li>
    		    		<li><a href="article.php?id=20" title="我的订单">我的订单</a></li>
    		    		<li><a href="article.php?id=42" title="如何获取会员资格">如何获取会员资格</a></li>
    		        </ul>
            	<ul class="help_link">
        	<p>
            	服务保证             </p>
                		<li><a href="article.php?id=21" title="退换货原则">退换货原则</a></li>
    		    		<li><a href="article.php?id=22" title="售后服务保证 ">售后服务保证</a></li>
    		    		<li><a href="article.php?id=23" title="产品质量保证 ">产品质量保证</a></li>
    		        </ul>
            	<ul class="help_link">
        	<p>
            	联系我们             </p>
                		<li><a href="article.php?id=24" title="网站故障报告">网站故障报告</a></li>
    		    		<li><a href="article.php?id=25" title="选机咨询 ">选机咨询</a></li>
    		    		<li><a href="article.php?id=26" title="投诉与建议 ">投诉与建议</a></li>
    		        </ul>
         
    </div>
    </div>
<div class="footer_nav_box">
	<div class="footer_nav">
    	    	<ul style="width:1018px; margin:0 auto;">
        	<li>
            	 
      			<a href="article.php?id=1">免责条款</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="article.php?id=2">隐私保护</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="article.php?id=3">咨询热点</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="article.php?id=4">联系我们</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="article.php?id=5">公司简介</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="wholesale.php">批发方案</a> 
      			 
      				<span> | </span>
      			 
      			 
      			<a href="myship.php">配送方式</a> 
      			 
      			            </li>
            <li class="integrity">
            	<span> | </span>
				<a href="#">
					<img width="83" height="22" src="themes/masamasuo/images/integrity_logo.gif">
				</a>
			</li>
        </ul>
            </div>
    <p style="text-align:center; margin-top:15px; color:#999;">
    	 
    	554fcae493e564ee0dc75bdf2ebf94caquery_info|a:1:{s:4:"name";s:10:"query_info";}554fcae493e564ee0dc75bdf2ebf94ca<br />
    	<a href="http://www.ecshop.com" target="_blank" style=" font-family:Verdana; font-size:11px;">Powered&nbsp;by&nbsp;<strong><span style="color: #3366FF">ECShop</span>&nbsp;<span style="color: #FF9966">v2.7.3</span></strong></a>&nbsp;<a href="http://www.ecshop.com/license.php?product=ecshop_b2c&url=http%3A%2F%2Fwww.xingsom.net%2Fshop%2F" target="_blank"
>&nbsp;&nbsp;Licensed</a><br />
    	    	
    </p>
</div>
 
  
</body>
<script type="text/javascript">
var goods_id = 418;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 418;
var now_time = 1496508762;
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
