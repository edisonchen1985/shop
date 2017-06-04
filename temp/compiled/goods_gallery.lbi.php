
  <div class="goods_tp_box" id="goodsInfo"> 
    	<?php if ($this->_var['pictures']): ?> 
    	<a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus"  target="_blank" id="Zoom" rel="hint-text: ; selectors-effect: false; selectors-class: on; zoom-distance: 22;zoom-width: 430; zoom-height: 430;" >
    		<img src="<?php echo $this->_var['pictures']['0']['img_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" style="width:478px; height:478px;" />
    	</a> 
    	<?php endif; ?>
        <p class="btn_goods_link_box">
        	<a id="show_big_img" target="_blank" href="<?php echo $this->_var['pictures']['0']['img_url']; ?>">
				<img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" src="themes/masamasuo/images/btn_big_goods_new.gif">
			</a>
        </p>
        <p class="goods_s_tp_title ">
			<img src="themes/masamasuo/images/goods_s_title.gif">
		</p> 
  		<div class="zoomList s_tp " >
    		<ul class="s_tpc clearfix">
      				<?php if ($this->_var['pictures']): ?> 
              		<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['foo']['iteration']++;
?>
              		<li> <a href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoom" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a> </li>
              		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              		<?php endif; ?>
              </ul>
        </div>
  </div>

<script>

	$(".s_tpc a").click(function(){
		var a = $(this).attr("href");
		$("#show_big_img").attr("href",a);
	})

</script>