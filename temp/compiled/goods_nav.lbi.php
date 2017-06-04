<div style="position:relative; z-index:999">
  		<div class="sp_l_shadow">
        	<div id="btns_bar" class="btns_bar" style="position: relative; top: 0px; left: 0px;">
            	<div class="btns_con clearfix">
                	<div class="f_r">
                    	<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/masamasuo/images/go_btn_mai_1.jpg" /></a>
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
</script>