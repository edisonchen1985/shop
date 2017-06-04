
<?php if ($this->_var['related_goods']): ?>
<div class="go_tlei_width">
	<h3>同类推荐</h3>
    <ul class="piclist mainlist">
    	
        <li>
        	<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['no']['iteration']++;
?>
            <?php if ($this->_foreach['no']['iteration'] < 4): ?> 
        	<div class="tlei_info">
        		<a href="<?php echo $this->_var['releated_goods_data']['url']; ?>" class="pro_pic"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['releated_goods_data']['goods_name']; ?>"  /></a>
            	<p>
            		<?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?>
                	<span><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?></span>
                	<?php else: ?>
                	<span><?php echo $this->_var['releated_goods_data']['shop_price']; ?></span>
                	<?php endif; ?>
            	</p>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </li>
        
    </ul>
</div>
<?php endif; ?>