<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="menu_box_navbg"></div>

<?php echo $this->fetch('library/category_tree_index.lbi'); ?>

<div class="wrap_bg">
	<div class="content">
    	<?php echo $this->fetch('library/left_help.lbi'); ?>
        <div class="rightbox gray">
        	<h2 class="web_title" style=" height:auto">
				<p class="title_1"><?php echo $this->_var['lang']['article_list']; ?></p>
			</h2>
            <div class="help_box">
            	<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                        <tr align="center">
            				<th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_title']; ?></th>
              				<th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_author']; ?></th>
              				<th bgcolor="#ffffff"><?php echo $this->_var['lang']['article_add_time']; ?></th>
            			</tr>
      				<?php $_from = $this->_var['artciles_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');if (count($_from)):
    foreach ($_from AS $this->_var['article']):
?>
      				<tr>
        				<td bgcolor="#ffffff"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" class="f6"><?php echo $this->_var['article']['short_title']; ?></a></td>
          				<td bgcolor="#ffffff"><?php echo $this->_var['article']['author']; ?></td>
          				<td bgcolor="#ffffff" align="center"><?php echo $this->_var['article']['add_time']; ?></td>
        			</tr>
      				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    			</table>
            </div>
        </div>
    </div>
</div>


<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
<script type="text/javascript">
document.getElementById('cur_url').value = window.location.href;
</script>
</html>
