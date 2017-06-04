
<div class="menu_box_nav">

       <div class="menu" id="J_mainCata">
       
             <ul class="menu_box_list">
                   <?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories_pro']['iteration']++;
?>
                   
                   <li style=" float:left">
                   
                        <p class="leftNav_p0<?php echo $this->_foreach['categories_pro']['iteration']; ?>" style=" float:left"><a class="a1" href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></p>
                        
			            <div class="wr_menu_box" id="J_subCata">
        
                               <div class="menu_box_g" >
                               
                                       <div class="menu_width">
                                       
                                               <div class="menu_box_info">
                                               
                                               		  <div class="menu_info_top">
                                               
                                                      		<div class="menu_info_nav">
                                                     			<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
                                                  				<dl>
     
     															<dt><?php echo htmlspecialchars($this->_var['child']['name']); ?></dt>
       															<?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
       															<dd><a href="<?php echo $this->_var['childer']['url']; ?>">·<?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></dd>
       															<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     														
       															</dl>
                												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                      		</div>
                                                            <div class="menu_info_pic">
                                                            
                                                            	<?php if ($this->_foreach['categories_pro']['iteration'] == 1): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '6',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 2): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '7',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 3): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '8',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 4): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '9',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 5): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '10',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 6): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '11',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 7): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '12',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 8): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '13',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 9): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '14',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>
                                                                
                                                                <?php if ($this->_foreach['categories_pro']['iteration'] == 10): ?>
      															<?php 
$k = array (
  'name' => 'ads',
  'id' => '15',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       															<?php endif; ?>

                                                            </div>
                                                      
                                                      </div>
                                                      
                                                      <div class="menu_info_ft">
															<p>国家纺织制品质量监督检验中心</p>
															<p>中纺标（北京）检验认证中心有限公司　出具衬衣面 料检测报告，符合国家纺织品安全技术与质量标准，确保产品质量，保障您的消费权益。</p>
													  </div>
                                               
                                               </div>
                                       
                                       </div>
            
                               </div>
       
                        </div>
        
		                
                        
                   </li>
            
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   
             </ul>
             
             <ul class="second_menu f12">
             		<li>
						<a target="_blank" href="#">vivian女装</a>
					</li>
					<li>
						<a target="_blank" href="#">汪小荷童装</a>
					</li>
					<li>
						<a target="_blank" href="#">玛亚诺</a>
					</li>
					<li>
						<a target="_blank" href="#">Nemow</a>
					</li>
					<li>
						<a target="_blank" href="#">Birryshop</a>
					</li>
             </ul>
          	 <div style=" clear:both"></div>
       </div>
       
</div>
