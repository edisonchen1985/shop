<?php if ($this->_var['new_goods']): ?>
<div class="index_tit">
	<a href="./search.php?intro=new" class="red f_r">点击查看更多></a>
    <h3 class="f_l">新品</h3>
</div>
<div class="new_exper_info">
	<ul>
    	<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <li>
        	<a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" width="170" height="227" /></a>
            <div class="exper_text">
            	<a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a>
                <div class="info_money">
                	<span class="f_r">原价：<?php echo $this->_var['goods']['market_price']; ?></span>
                    <p class="money">
                    	<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
        				<?php echo $this->_var['goods']['promote_price']; ?> 
        				<?php else: ?> 
        				<?php echo $this->_var['goods']['shop_price']; ?> 
        				<?php endif; ?> 
        			</p>
                </div>
            </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </ul>
</div>
<?php endif; ?>
