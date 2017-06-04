<div class="new_placard mt10">
	<h3 class="index_tit_lin">最新公告</h3>
    <div class="new_plac_info">
    	<?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');if (count($_from)):
    foreach ($_from AS $this->_var['article_item']):
?>
  		· <a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>"><?php echo $this->_var['article_item']['short_title']; ?></a><br />
  		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>