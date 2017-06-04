<div class="in_menu_right">
	<form method="GET" class="sort" name="listform">
            	<ul>
            		<li <?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?> class="current" <?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>class="desc in_san_up"<?php else: ?>class="asc"<?php endif; ?>>销量</a></li>

         <li <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?> class="current " <?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>class="desc in_san_up"<?php else: ?>class="asc"<?php endif; ?>>价格</a> </li>
         
         <li <?php if ($this->_var['pager']['sort'] == 'last_update'): ?> class="current" <?php endif; ?>>
        <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" <?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>class="desc in_san_up"<?php else: ?>class="asc"<?php endif; ?>>新品</a></li>
        
            	</ul> 
                
                                <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      			<input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      			<input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      			<input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      			<input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      			<input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      			<input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      			<input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      			<input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
         	</form>
</div>


