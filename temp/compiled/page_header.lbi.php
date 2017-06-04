<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
                           
                                <?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
                                
                                <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,ecmoban_common.js')); ?> 
                                
                                <font id="ECS_MEMBERZONE" style="display:block; float:left;"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
                                
                                <li id="topNav" class="clearfix">
<?php if ($this->_var['navigator_list']['top']): ?>
<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>

<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<?php endif; ?>

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
                               
                               <p class="cart " style=" overflow:hidden"><a href="flow.php" title="购物车">我的购物车（<span class="flowNum"><strong id="ECS_CARTINFO2"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></strong></span>）</a></p>
                       
                       </div>
               
               </div>
               
               <a href="index.php" ><img src="themes/masamasuo/images/logo.gif" width="513" height="112" /></a>
       
       </div>

</div>

<div class="menu_box">

       <div class="menu">
       
              <ul class="menu_box_hot">
                            
                                  <li> <a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
                                  
                                  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                                  
                                  <li>
                                  
                                        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                                       
                                  </li>
          
                                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                  
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
    	<div id="ECS_CARTINFO" class="carT" onMouseOver="this.className='carT carT_on'" onMouseOut="this.className='carT'"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    	<!--<a class="shop_get" href="javascript:;" title="购物车"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>-->
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

