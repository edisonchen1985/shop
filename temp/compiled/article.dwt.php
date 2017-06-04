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
				<p class="title_1"><?php echo htmlspecialchars($this->_var['article']['title']); ?></p>
			</h2>
            <div class="help_box">
            	<?php if ($this->_var['article']['content']): ?>
          		<?php echo $this->_var['article']['content']; ?>
         		<?php endif; ?>
                <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         			<div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          		<?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>
