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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="menu_box_navbg"></div>

<?php echo $this->fetch('library/category_tree_index.lbi'); ?>

<div class="wrap_bg">
	<div class="register_box font_zt">
    	
        <?php if ($this->_var['shop_reg_closed'] == 1): ?>
        <div class="coLoginBody">
      		<div class="usBox_2 clearfix">
        		<div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
      		</div>
    	</div>
        <?php else: ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    	<div class="zcdl_box">
        	<div class="web_title_login">
				<p>新用户注册</p>
			</div>
            <div class="register_case">
            	<form action="user.php" method="post" name="formUser" onsubmit="return register();">
            		<table width="100%" cellspacing="0" cellpadding="0" border="0">
                		<tr>
                    		<td class="left_title font_zt">手机号：</td>
                        	<td><input name="username" type="text" size="17" id="username" class="input"  maxlength="11" style="width: 150px;"/></td>
                        	<td><button type="button" id="get_mobile_code" onclick="ajax_mobile();" >获取手机验证码</button></td>
                    	</tr>
                    	<tr>
                    		<td class="left_title font_zt">账户密码：</td>
                        	<td><input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="input" maxlength="20" style="width: 150px;"/></td>
                        	<td><span style="color:#ff4560" id="password_notice"></span></td>
                    	</tr>
                    	<tr>
                    		<td class="left_title font_zt">手机验证码：</td>
                        	<td><input name="mobile_code" type="text" id="mobile_code" class="input" maxlength="6" style="width: 150px;"/></td>
                        	<td><span style="color:#ff4560" id="password_notice"></span></td>
                    	</tr>
                        <?php if ($this->_var['enabled_captcha']): ?>
                        <tr>
                            	<td class="left_title font_zt">验证码：</td>
                                <td><input type="text" size="8" name="captcha" class="input" style=" width:65px" /> <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /></td>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            	<td></td>
                                <td>
                                	<input type="submit" name="Submit" class="regsubmit" value="" />
                        		<input type="hidden" value="act_register" name="act">
                                <input type="hidden" value="" name="back_act">
                                <input type="checkbox" checked="checked" value="1" name="agreement" style="display:none;">
                        		</td>
                            </tr>
                        <tr>
                            	<td colspan="3">
<textarea class="input area_agree" readonly="readonly">形尚... </textarea>
</td>
                            </tr>
                	</table>
                </form>
            </div>
            <p class="clear"></p>
            <div class="register_txt">
                	<div class="register_title">
						<p style="margin-top: 10px;">您还不是Masa Maso会员吗？注册会员您就可以享受：</p>
					</div>
                    <div class="register_con">
                    	<p>购物后得到相应金额积分，积分可抵现金购物</p>
						<p>每周获得电子杂志最新服饰搭配资讯，参与互动赢取奖品！</p>
						<p>享受每月"真情回馈老顾客"活动，免费获得礼品（详见活动专区）。</p>
						<p>有机会受邀参加公司定期举办的推广活动，赢取奖品。</p>
						<p>有机会受邀获得Masa Maso时尚男装专家的服饰搭配建议和指导。</p>
                    </div>
                </div>
        </div>
        <?php endif; ?>
        
        
        
        <?php if ($this->_var['action'] == 'login'): ?>
        <div class="register_left">
        	<div class="web_title_login">
				<p>会员登录</p>
			</div>
            <div class="register_case">
            	<form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
                	<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    	<tr>
                        	<td class="left_title font_zt">
                            	手机号码：
                            </td>
                            <td class="mid_con"><input name="username" type="text" size="17" class="input"  maxlength="35" style="width: 160px;"/></td>
                        </tr>
                        <tr>
                        	<td class="left_title font_zt">
                            	密码：
                            </td>
                            <td class="mid_con"><input name="password" type="password" size="17" class="input"  maxlength="20" style="width: 160px;"/></td>
                        </tr>
                        <?php if ($this->_var['enabled_captcha']): ?>
                        <tr>
                        	<td class="left_title font_zt">
                            	验证码：
                            </td>
                            <td><input type="text" size="17" name="captcha" class="input" maxlength="35" style="width:60px;"  /> <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
                        </tr>
                        <?php endif; ?>
                        <tr>
                        	<td> </td>
                            <td class="mid_con"><input type="checkbox" value="1" name="remember" id="remember" style="cursor: pointer; vertical-align: middle; margin-top: 0; *margin-top: -1px;"/>记住用户名 <a style="margin-left: 10px; text-decoration: underline;" target="_blank" href="user.php?act=get_password">忘记密码</a>  								</td>
                            <td> </td>
                        </tr>
                        <tr>
                        	<td> </td>
                            <td class="mid_con">
                            	<input type="hidden" name="act" value="act_login" />
            					<input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            					<input type="submit" name="submit" value="" class="smlogin_btn" />
                            </td>
                            <td> </td>
                        </tr>
                    </table>
                </form>
            </div>
                 <?php endif; ?>
        
        
        
        
        <?php if ($this->_var['action'] == 'get_password'): ?>
      
      <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
      
      <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
        <div class="register_left">
        	<div class="web_title_login">
				<p>找回密码</p>
			</div>
            <div class="register_case">
            	<form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
                	<p class="password_t1 font_zt">请输入您注册时填写的电子邮件地址</p>
                    <p class="password_t2">
                    	用户名：<input name="user_name" type="text" size="30" class="input" style="width: 200px;" />
                    </p>
                    <p class="password_t2">
                    	邮&nbsp;&nbsp;&nbsp;箱：<input name="email" type="text" size="30" class="input" style="width: 200px;" />
                    </p>
                    <p class="password_btn">
                    	<input type="hidden" name="act" value="send_pwd_email" />
              			<input type="submit" name="submit" value="" class="password_b" style="border:none;" />
                    </p>
                </form>
            </div>
        </div>
        <?php endif; ?>
        
        <?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="register_left">
  	<div class="register_case">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      
      <table width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
          <td class="left_title font_zt"><?php echo $this->_var['lang']['new_password']; ?>:</td>
          <td class="mid_con"><input name="new_password" type="password" size="25" class="input" style="width: 160px;" /></td>
        </tr>
        <tr>
          <td class="left_title font_zt"><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td class="mid_con"><input name="confirm_password" type="password" size="25"  class="input" style=" width:160px"/></td>
        </tr>
        <tr>
        	<td> </td>
          <td class="mid_con">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
          </td>
          <td> </td>
        </tr>
      </table>
     
    </form>
    </div>
  
</div>
<?php endif; ?>
        
        
		<p class="clear"></p>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
