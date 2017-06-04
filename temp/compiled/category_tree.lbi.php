<style>
	.left_nav {background:#F2F2F2;clear: both;overflow: hidden;padding: 0 23px 30px;text-align: left;width: 175px;}
	.left_nav li {border:none;clear: both;line-height: 25px;padding: 14px 0;position: relative;text-align: left;}
	#menu_div .nav_mian {padding-left: 0;}
	#menu_div .nav_sub {padding-left: 0;}
</style>
<div class="web_title" style="height:30px">
	<p class="man_nav">男 装</p>
</div>

<div id="menu_div">
	<div class="_tabs">
    	<div class="bg_drawing left_nav gray">
        	<ul>
            	<?php $_from = $this->_var['categories_pro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_46852400_1496184273');$this->_foreach['categories_pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories_pro']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_46852400_1496184273']):
        $this->_foreach['categories_pro']['iteration']++;
?>
                <li class="over_out out_bg" onMouseOver="this.className='over_out_on over_out'" onMouseOut="this.className='over_out'">
                	<h2 class="nav_mian"><a href="javascript:;" ><?php echo htmlspecialchars($this->_var['cat_0_46852400_1496184273']['name']); ?><font class="letter"></font></a></h2>
                    <div class="nav_sub">
                    	<?php $_from = $this->_var['cat_0_46852400_1496184273']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_46860300_1496184273');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_46860300_1496184273']):
?>
          				<?php $_from = $this->_var['child_0_46860300_1496184273']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
						<a href="<?php echo $this->_var['childer']['url']; ?>" class="start"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a> | 
         				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                    <a class="btn a_btn" href="javascript:;">
						<img alt="list" src="themes/masamasuo/images/left_nav_off03.gif">
					</a>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
</div>

<p class="clear"></p>

<p>
<img width="180" height="180" src="themes/masamasuo/images/wap_2wei.jpg">
</p>

<p>
	<img src="themes/masamasuo/images/tel_02.gif">
</p>

<div class="web_title web_titlen">
	<p class="title wo_new_tit">新品订阅</p>
</div>

<form>
	<div class="wo_new_txt2">
    	<input type="text" id="user_email" class="email_addr input2" />
    </div>
    <input class="wo_new_sub2 mail_subscription" type="button" value="确认" onclick="add_email_list();">
</form>
<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
if (check_email())
{
Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
}
}
function rep_add_email_list(text)
{
alert(text);
}
function cancel_email_list()
{
if (check_email())
{
Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
}
}
function rep_cancel_email_list(text)
{
alert(text);
}
function check_email()
{
if (Utils.isEmail(email.value))
{
return true;
}
else
{
alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
return false;
}
}
</script>