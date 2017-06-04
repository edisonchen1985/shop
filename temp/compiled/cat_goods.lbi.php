<?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_13411800_1496555764');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_13411800_1496555764']):
?>
<li>
	<a href="<?php echo $this->_var['goods_0_13411800_1496555764']['url']; ?>"><img src="<?php echo $this->_var['goods_0_13411800_1496555764']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_13411800_1496555764']['name']); ?>" width="170" height="227" /></a>
    <div class="exper_text">
    	<a href="<?php echo $this->_var['goods_0_13411800_1496555764']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_13411800_1496555764']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_13411800_1496555764']['short_name']); ?></a>
        <div class="info_money">
        	<span class="f_r">
				原价：<?php echo $this->_var['goods_0_13411800_1496555764']['market_price']; ?>
			</span>
            <p class="money">
            	<?php if ($this->_var['goods_0_13411800_1496555764']['promote_price'] > 0): ?><?php echo $this->_var['goods_0_13411800_1496555764']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_13411800_1496555764']['s	hop_price']; ?><?php endif; ?>
            </p>
        </div>
    </div>
</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
