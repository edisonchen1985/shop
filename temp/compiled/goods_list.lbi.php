

<?php if ($this->_var['category'] > 0): ?>
<form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
  <?php endif; ?> 
  
  <ul>
  	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    <?php if ($this->_var['goods']): ?>
  	<li>
    	<div class="in_masa_up"><a href="<?php echo $this->_var['goods']['url']; ?>" class="in_pic"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"  class="lazyload_bk" height="320"/></a></div>
        <div class="in_masa_info">
        	<a class="gray" href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a>
            <p class="c_9">已有<?php echo $this->_var['goods']['comments_number']; ?>人评论此商品 </p>
            <div class="in_price">
            	<div class="f_r"><?php if ($this->_var['show_marketprice']): ?> 
          原价：<?php echo $this->_var['goods']['market_price']; ?>
          <?php endif; ?>  | <?php echo $this->_var['goods']['zhekou']; ?>折</div>
                <em>
                	<?php if ($this->_var['goods']['promote_price'] != ""): ?> 
          			<font class=""><?php echo $this->_var['goods']['promote_price']; ?></font> 
          			<?php else: ?> 
          			<font class=""><?php echo $this->_var['goods']['shop_price']; ?></font> 
          			<?php endif; ?> 
          		</em>
            </div>
        </div>
    </li>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <?php if ($this->_var['category'] > 0): ?>
</form>
<?php endif; ?>

<div class="blank5"></div>
<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>