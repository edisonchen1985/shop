<?php if ($this->_var['bought_goods']): ?>
<div class="sp_r_shadow">
	<div class="mayaluo">
		<h3 class="index_tit_lin" style="font-weight:400">买过这件商品的人还买过</h3>
	</div>
    <div class="in_masa">
    	<ul>
        	<?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['no']['iteration']++;
?>
            <?php if ($this->_foreach['no']['iteration'] < 6): ?> 
            <li>
            	<div class="in_masa_up">
                	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>"  /></a>
                </div>
                <div class="in_masa_info">
                	<a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" title="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" class="gray"><?php echo $this->_var['bought_goods_data']['short_name']; ?></a>
                    <div class="in_price">
                    	<?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
                        <em><?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?></em>
                        <?php else: ?>
                        <em><?php echo $this->_var['bought_goods_data']['shop_price']; ?></em>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
        </ul>
    </div>
</div>
<?php endif; ?>