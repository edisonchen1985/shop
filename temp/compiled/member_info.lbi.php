<div id="append_parent"></div>

<?php if ($this->_var['user_info']): ?>

<li><a href="user.php"><?php echo $this->_var['user_info']['username']; ?></a></li>
<li><a href="user.php?act=order_list"><?php echo $this->_var['lang']['label_order']; ?></a></li>
<li> <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>

<?php else: ?>
 
 <li><a href="user.php">用户登录</a></li>
 <li><a href="user.php">新用户注册</a></li>
 
<?php endif; ?>
