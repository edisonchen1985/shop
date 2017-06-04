<?php if ($this->_var['helps']): ?>
<div class="leftbox">
	<h2 class="help_title">
		<p class="title">帮助中心</p>
		<p class="title_line tline_01"></p>
	</h2>
    <div class="bg_drawing help_nav gray">
    	<dl class="sub_help">
        	<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');if (count($_from)):
    foreach ($_from AS $this->_var['help_cat']):
?>
            <dt><a  href='<?php echo $this->_var['help_cat']['cat_id']; ?>' title="<?php echo $this->_var['help_cat']['cat_name']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></a></dt>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
            <dd><a <?php if ($this->_var['id'] == $this->_var['item']['article_id']): ?> class="sell" <?php endif; ?> href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"> <?php echo $this->_var['item']['short_title']; ?></a></dd>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </dl>
    </div>
    <p class="clear"></p>
</div>
<?php endif; ?>
