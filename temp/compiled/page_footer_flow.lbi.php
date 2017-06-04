

<div <div id="footer_box" style="margin-top:12px">
    <p style="text-align:center; margin-top:15px; color:#999;">
    	<?php if ($this->_var['icp_number']): ?> 
    	<?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
    	<?php endif; ?> 
    	<?php 
$k = array (
  'name' => 'query_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><br />
    	<?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php echo $this->_var['licensed']; ?><br />
    	<?php if ($this->_var['stats_code']): ?>
    	<div align="left"><?php echo $this->_var['stats_code']; ?></div>
    	<?php endif; ?>
    	
    </p>
</div>

<div id="topcontrol" class="get_buy">
	<div class="get_buy_go">
    	<a class="shop_get" href="javascript:;" title="购物车"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a>
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