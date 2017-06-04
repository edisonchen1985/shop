<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
<div class="in_menu_left">
     <ul>
     	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_08240000_1496538244');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_08240000_1496538244']):
?>
        <li><a href="javascript:;"><?php echo htmlspecialchars($this->_var['filter_attr_0_08240000_1496538244']['filter_attr_name']); ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
        <li><a href="javascript:;"><?php echo $this->_var['lang']['price']; ?></a></li>     	
     </ul>
</div>

<div class="in_selr" style=" display:none">
	<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_08249800_1496538244');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_08249800_1496538244']):
?>
	<ul>
    	
    	<?php $_from = $this->_var['filter_attr_0_08249800_1496538244']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?> 
        <?php if ($this->_var['attr']['selected']): ?>
        <li><span><?php echo $this->_var['attr']['attr_value']; ?></span></li>
        <?php else: ?>
        <li><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a> </li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    <?php if ($this->_var['price_grade']['1']): ?>
    <ul>
        <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?> 
        <?php if ($this->_var['grade']['selected']): ?>
        <li><span><?php echo $this->_var['grade']['price_range']; ?></span></li>
        <?php else: ?>
        <li><a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     </ul>
    <?php endif; ?>
    
</div>
<?php endif; ?>