
<div class="footer">
	<div class="footer_logo">
    	<img src="themes/masamasuo/images/footer_link_3.jpg" border="0" /> 
    </div>
    <div class="footer_box">
    	<div class="footer_promise">
        	<img src="themes/masamasuo/images/footer_m_6.jpg" border="0" />
        </div>
    </div>
    <?php if ($this->_var['helps']): ?>
    <div class="help_link_list">
    	<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
    	<ul class="help_link">
        	<p>
            	<?php echo $this->_var['help_cat']['cat_name']; ?>
            </p>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
    		<li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"><?php echo $this->_var['item']['short_title']; ?></a></li>
    		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
</div>
<div class="footer_nav_box">
	<div class="footer_nav">
    	<?php if ($this->_var['navigator_list']['bottom']): ?>
    	<ul style="width:1018px; margin:0 auto;">
        	<li>
            	<?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_24521600_1496132447');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_24521600_1496132447']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?> 
      			<a href="<?php echo $this->_var['nav_0_24521600_1496132447']['url']; ?>"><?php echo $this->_var['nav_0_24521600_1496132447']['name']; ?></a> 
      			<?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?> 
      				<span> | </span>
      			<?php endif; ?> 
      			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </li>
            <li class="integrity">
            	<span> | </span>
				<a href="#">
					<img width="83" height="22" src="themes/masamasuo/images/integrity_logo.gif">
				</a>
			</li>
        </ul>
        <?php endif; ?>
    </div>
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

