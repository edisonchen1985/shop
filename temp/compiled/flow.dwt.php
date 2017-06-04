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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jquery.SuperSlide.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,ecmoban_common.js')); ?>
<style type="text/css">
.cart_header {background:url(themes/masamasuo/images/masamaso_logo.jpg) no-repeat center; height:92px;}
.nav_box, #container {margin: 0 auto;width: 1002px; background:none; float:none; padding-bottom:0;}
</style>
<script>
        	$(document).ready(function(){
  $("#close").click(function(){
  $("#tishi").hide();
  });
});

$(document).ready(function(){
  $("#close2").click(function(){
  $("#tishi2").hide();
  });
});

        </script>
        
        
</head>
<body style=" text-align:left">
<div class="cart_header" onclick="window.location='index.php'" style=" cursor:pointer"></div>
<div id="direction">
<?php if ($this->_var['step'] == "cart"): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
  <script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
  <dl class="bc_nav">
  		<dt>结算步骤:</dt>
        <dd>
			<strong class="current">我的购物车</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong>结算中心</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong>订单完成</strong>
		</dd>
  </dl>
	
</div>
<div id="container">
	<h2 class="title gou_iocn">我的购物车</h2>
    <div id="tishi" class="tips ">
		<p class="f_l">
			<em>温馨提示：</em>
			目前购物尚未完成，请您尽快完成订单提交，以便我们为您确认库存状态，并及时配送。
		</p>
		<a id="close" class="btn_over" title="关闭">关闭</a>
        
	</div>
    <form id="formCart" name="formCart" method="post" action="flow.php">
    	<div class="shopping_box">
    	
    		<table>
        			<colgroup>
						<col width="357">
						<col width="89">
						<col width="89">
						<col width="94">
						<col width="154">
						<col width="94">
						<col>
					</colgroup>
            	<thead>
            		<tr>
                		<th><?php echo $this->_var['lang']['goods_name']; ?></th>
                        <?php if ($this->_var['show_goods_attribute'] == 1): ?>
                        <th><?php echo $this->_var['lang']['goods_attr']; ?></th>
                        <?php endif; ?>
                        <?php if ($this->_var['show_marketprice']): ?>
                        <th>原价</th>
                        <?php endif; ?>
                       	<th>现价</th>
                        <th><?php echo $this->_var['lang']['number']; ?></th>
                        <th><?php echo $this->_var['lang']['subtotal']; ?></th>
                        <th><?php echo $this->_var['lang']['handle']; ?></th>
                	</tr>
            	</thead>
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                <tr id="tr_goods_<?php echo $this->_var['goods']['rec_id']; ?>">
                	<td class="pro">
                    	<div class="poreat">
                        	<a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" style="color: #796353;" class="proa"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="52" height="70"/></a>
                        </div>
                        <p><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" style="color:#796353;"><span><?php echo $this->_var['goods']['goods_name']; ?></span></a></p>
                    </td>
                    <?php if ($this->_var['show_goods_attribute'] == 1): ?>
                    <td><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
                    <?php endif; ?>
                    <?php if ($this->_var['show_marketprice']): ?>
                    <td><?php echo $this->_var['goods']['market_price']; ?></td>
                    <?php endif; ?>
                    <td><?php echo $this->_var['goods']['goods_price']; ?></td>
                    <td>
                    	<div style="position:relative">
                        	<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                            	<a href="javascript:void(0)" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,-1)" class="button btn_cut_cart_product_num"><img width="11" height="11" alt="" src="themes/masamasuo/images/btn_minus.gif"></a>
                 				<input type="text" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="1" class="num" onchange="change_goods_number(<?php echo $this->_var['goods']['rec_id']; ?>,this.value)"/>
      							<a href="javascript:void(0)" onclick="changenum(<?php echo $this->_var['goods']['rec_id']; ?>,1)" class="button btn_add_cart_product_num"><img width="11" height="11" alt="" src="themes/masamasuo/images/btn_plus.gif"></a>
                				<?php else: ?>
                				<?php echo $this->_var['goods']['goods_number']; ?>
                            <?php endif; ?>
                        </div>
                    </td>
                    <td id="goods_subtotal_<?php echo $this->_var['goods']['rec_id']; ?>"><?php echo $this->_var['goods']['subtotal']; ?></td>
                    <td><a class="delete btn_delete" href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; "><?php echo $this->_var['lang']['drop']; ?></a></td>
                </tr>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        	</table>
        
    	</div>
        <table class="shopping_total">
        	<colgroup>
				<col width="200">
				<col width="280">
				<col>
			</colgroup>
            <tr >
            	<td align="left"><input type="button" value="清空购物车" class="clear_cart"  onclick="location.href='flow.php?step=clear'" /></td>
                <td class="tips">
					<?php echo $this->_var['shop_notice']; ?> 
				</td>
                <td id="total_desc">
                	
              		<?php if ($this->_var['show_marketprice']): ?><?php echo $this->_var['market_price_desc']; ?><?php endif; ?>
              
                </td>
                <td id="total_all">
                	<p style="text-align: left; font-size:14px; font-weight:bold;">
						商品总金额：
						<em class="end"><?php echo $this->_var['shopping_money']; ?></em>
					</p>
                </td>
                
            </tr>
        </table>
        <input type="hidden" name="step" value="update_cart" />
    </form>
    <div class="pay_box">
    	<p id="tishi2">
			<span class="f_l">
			已有账户请点此
			<a class="login sys_login_btn" href="user.php">登录</a>
			；新用户请您继续正常结算
			</span>
			<a id="close2" class="btn_over">关闭</a>
		</p>
        <div>
        	<a href="./" ><img width="138" height="41" alt="" src="themes/masamasuo/images/jx_gou.jpg"></a> 
            <a href="flow.php?step=checkout"><img width="138" height="41" alt="" src="themes/masamasuo/images/btn_settlement.jpg"></a>
        </div>
    </div>
    <script type="text/javascript">
            function changenum(rec_id, diff)
            {
                var goods_number =Number($('#goods_number_' + rec_id).val()) + Number(diff);  
   			    if( goods_number <1){
					alert("购物数量最少为1");
					return false;
			      }        
                change_goods_number(rec_id,goods_number);
            }
            function change_goods_number(rec_id, goods_number)
            {     
               Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, change_goods_number_response, 'POST','JSON');                
            }
            function change_goods_number_response(result)
            {       

                if (result.error == 0)
                {
                    var rec_id = result.rec_id;
                    $('#goods_number_' +rec_id).val(result.goods_number);//更新数量
                    $('#goods_subtotal_' +rec_id).html(result.goods_subtotal);//更新小计
					$('#sub_total1').html(result.marke_total);//更新市场总计
					$('#save_desc1').html(result.save_rate);//更新优惠
				
    				$('#total_all').html(result.toal_all);//更新总计
                    if (result.goods_number <= 0)
                    {// 数量为零则隐藏所在行
                        $('#tr_goods_' +rec_id).style.display = 'none';
                        $('#tr_goods_' +rec_id).innerHTML = '';
                    }
						
                    $('#total_desc').html(result.flow_info);//更新合计

                    if ($('ECS_CARTINFO'))
                    {//更新购物车数量
                       $('#ECS_CARTINFO').html(result.cart_info);
                    }
                }
                else if (result.message != '')
                {
                    alert(result.message);
                }                
            }
        </script>
       <?php if ($_SESSION['user_id'] > 0): ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?>
       <script type="text/javascript" charset="utf-8">
        function collect_to_flow(goodsId)
        {
          var goods        = new Object();
          var spec_arr     = new Array();
          var fittings_arr = new Array();
          var number       = 1;
          goods.spec     = spec_arr;
          goods.goods_id = goodsId;
          goods.number   = number;
          goods.parent   = 0;
          Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), collect_to_flow_response, 'POST', 'JSON');
        }
        function collect_to_flow_response(result)
        {
          if (result.error > 0)
          {
            // 如果需要缺货登记，跳转
            if (result.error == 2)
            {
              if (confirm(result.message))
              {
                location.href = 'user.php?act=add_booking&id=' + result.goods_id;
              }
            }
            else if (result.error == 6)
            {
              openSpeDiv(result.message, result.goods_id);
            }
            else
            {
              alert(result.message);
            }
          }
          else
          {
            location.href = 'flow.php';
          }
        }
      </script>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "consignee"): ?>
<div id="direction">
  <dl class="bc_nav">
  		<dt>结算步骤:</dt>
        <dd>
			<strong>我的购物车</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong class="current">结算中心</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong>订单完成</strong>
		</dd>
  </dl>
	
</div>

        <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
        <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
        
        <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
        <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
        <?php echo $this->fetch('library/consignee.lbi'); ?>
        </form>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "checkout"): ?>
		<div id="direction">
  <dl class="bc_nav">
  		<dt>结算步骤:</dt>
        <dd>
			<strong>我的购物车</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong class="current">结算中心</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong>订单完成</strong>
		</dd>
  </dl>
	
</div>
        <div class="buytab_a">
         <div class="nstep2_con">
        <form action="flow.php" method="post" name="theForm"  class="validator" id="theForm" onsubmit="return checkOrderForm(this)">
        <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
        
        <h2 class="nstep1_tit3"><span style=" float:left"><?php echo $this->_var['lang']['goods_list']; ?></span><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f14" style=" float:right"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?></h2>
       <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
        <table  style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;" border="0" cellpadding="0" cellspacing="0">
            <tr>
            
              <th  style="background:#f5f5f5;width:108px;font-weight:bold;"><?php echo $this->_var['lang']['goods_name']; ?></th>
              <th style="background:#f5f5f5;width:108px;font-weight:bold;"><?php echo $this->_var['lang']['goods_attr']; ?></th>
              <?php if ($this->_var['show_marketprice']): ?>
              <th style="background:#f5f5f5;width:108px;font-weight:bold;"><?php echo $this->_var['lang']['market_prices']; ?></th>
              <?php endif; ?>
              <th style="background:#f5f5f5;width:108px;font-weight:bold;"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
              <th style="background:#f5f5f5;width:108px;font-weight:bold;"><?php echo $this->_var['lang']['number']; ?></th>
              <th style="background:#f5f5f5;width:108px;font-weight:bold;"><?php echo $this->_var['lang']['subtotal']; ?></th>
            </tr>
            <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr >
              <td bgcolor="#ffffff" style="width:450px;">
              <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
              
          <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span  style="color:#ff4560;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class=" nstep_pbox "><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  target="_blank"  width="78" height="78"/></a>
            <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="nstep_name"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php else: ?>
          <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class=" nstep_pbox xuxian ">  <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" target="_blank" width="78" height="78" /></a>
          <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="nstep_name"><?php echo $this->_var['goods']['goods_name']; ?></a>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                <span  class="nstep_name"  style="color:#ff4560">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                <?php elseif ($this->_var['goods']['is_gift']): ?>
                <span class="nstep_name"  style="color:#ff4560">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                <?php endif; ?>
          <?php endif; ?>
          <?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#ff4560"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
              </td>
              <td bgcolor="#ffffff"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
              <?php if ($this->_var['show_marketprice']): ?>
              <td  class="weiruan " align="right" bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_market_price']; ?></td>
              <?php endif; ?>
              <td class="weiruan " bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
              <td class="weiruan " bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['goods_number']; ?></td>
              <td class="weiruan " bgcolor="#ffffff" align="right"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
          </table>
          </div>
      
      <div class="blank"></div>
       <h2 class="nstep1_tit3"><span style=" float:left"><?php echo $this->_var['lang']['consignee_info']; ?></span><a href="flow.php?step=consignee" style="font-weight:normal;float:right;margin-right:15px;" class="f14"><?php echo $this->_var['lang']['modify']; ?></a></h2>
      <div class="nstep2_ctent">
<div  style="line-height:30px;">
     <table  style="width:948px;border:1px #e5e5e5 solid;margin:5px auto; border-collapse: separate;">
            <tr   class="nstepn_opt optbg" >
             <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></td>
              <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['email_address']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['email']); ?></td>
            </tr>
            <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
           <tr  class="nstepn_opt optbg">
             <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </td>
              <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?></td>
            </tr>
            <?php endif; ?>
          <tr  class="nstepn_opt optbg">
             <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['phone']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo $this->_var['consignee']['tel']; ?> </td>
              <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></td>
            </tr>
             <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
            <tr class="nstepn_opt optbg">
              <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?> </td>
             <td bgcolor="#ffeddd" width="14%" class="txt_r"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
              <td bgcolor="#ffeddd"><?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?></td>
            </tr>
            <?php endif; ?>
          </table>
          </div>
      </div>
     <div class="blank"></div>
    <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
    <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['shipping_method']; ?></h2>
    <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
    
    <table style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;" id="shippingTable">
            <tr>
              <th style="background:#f5f5f5;font-weight:bold;" width="5%">&nbsp;</th>
              <th style="background:#f5f5f5;font-weight:bold;" width="25%"><?php echo $this->_var['lang']['name']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;"><?php echo $this->_var['lang']['describe']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="15%"><?php echo $this->_var['lang']['fee']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="15%"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="15%"><?php echo $this->_var['lang']['insure_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
            <tr>
              <td bgcolor="#ffffff" class="weiruan " valign="top"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" />
              </td>
              <td bgcolor="#ffffff" class="weiruan " valign="top"><strong><?php echo $this->_var['shipping']['shipping_name']; ?></strong></td>
              <td bgcolor="#ffffff"class="weiruan " style="text-align:left;" valign="top"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
              <td bgcolor="#ffffff" class="weiruan " align="right" valign="top"><?php echo $this->_var['shipping']['format_shipping_fee']; ?></td>
              <td bgcolor="#ffffff" class="weiruan " align="right" valign="top"><?php echo $this->_var['shipping']['free_money']; ?></td>
              <td bgcolor="#ffffff" class="weiruan " align="right" valign="top"><?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td colspan="6" bgcolor="#ffffff" class="weiruan " style="text-align:right;" ><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
                <?php echo $this->_var['lang']['need_insure']; ?> </label></td>
            </tr>
          </table>
    </div>
    <div class="blank"></div>
        <?php else: ?>
        <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
        <?php endif; ?>
    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['payment_method']; ?></h2>
     <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
   
    <table style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;"  id="paymentTable">
            <tr>
              <th  style="background:#f5f5f5;font-weight:bold;" width="5%" >&nbsp;</th>
              <th style="background:#f5f5f5;font-weight:bold;" width="20%" ><?php echo $this->_var['lang']['name']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" ><?php echo $this->_var['lang']['describe']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;"  width="15%"><?php echo $this->_var['lang']['pay_fee']; ?></th>
            </tr>
            <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
            
            <tr>
              <td valign="top" class="weiruan " bgcolor="#ffffff"><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/></td>
              <td valign="top" class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['payment']['pay_name']; ?></strong></td>
              <td valign="top" class="weiruan " style="text-align:left;" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
              <td align="right"class="weiruan " bgcolor="#ffffff" valign="top"><?php echo $this->_var['payment']['format_pay_fee']; ?></td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
    </div>
    <?php else: ?>
        <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <div class="blank"></div>
          <?php if ($this->_var['pack_list']): ?>
           <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['goods_package']; ?></h2>
         <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
         
          <table  style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;" id="packTable">
            <tr>
              <th  style="background:#f5f5f5;font-weight:bold;"width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
              <th style="background:#f5f5f5;font-weight:bold;" width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td valign="top"class="weiruan " bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" /></td>
              <td valign="top"class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
              <td valign="top"class="weiruan " bgcolor="#ffffff">&nbsp;</td>
              <td valign="top"class="weiruan " bgcolor="#ffffff">&nbsp;</td>
              <td valign="top"class="weiruan " bgcolor="#ffffff">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
            <tr>
              <td valign="top" class="weiruan " bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" />
              </td>
              <td valign="top"  class="weiruan "bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
              <td valign="top" class="weiruan " bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
              <td valign="top" class="weiruan " bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
              <td valign="top"class="weiruan " bgcolor="#ffffff" align="center">
                  <?php if ($this->_var['pack']['pack_img']): ?>
                  <a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="pink"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
               </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </table>
       </div>
             <div class="blank"></div>
          <?php endif; ?>

          <?php if ($this->_var['card_list']): ?>
           <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['goods_card']; ?></h2>
        <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
          
          <table style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;"  id="cardTable">
            <tr>
              <th style="background:#f5f5f5;font-weight:bold;" width="5%" scope="col">&nbsp;</th>
              <th style="background:#f5f5f5;font-weight:bold;" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
              <th style="background:#f5f5f5;font-weight:bold;" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
            </tr>
            <tr>
              <td bgcolor="#ffffff" class="weiruan " valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" /></td>
              <td bgcolor="#ffffff" class="weiruan " valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
              <td bgcolor="#ffffff" class="weiruan " valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" class="weiruan " valign="top">&nbsp;</td>
              <td bgcolor="#ffffff" class="weiruan " valign="top">&nbsp;</td>
            </tr>
            <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
            <tr>
              <td valign="top" class="weiruan " bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)"  />
              </td>
              <td valign="top" class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
              <td valign="top" class="weiruan " align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
              <td valign="top" class="weiruan " align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
              <td valign="top" class="weiruan " align="center" bgcolor="#ffffff">
                  <?php if ($this->_var['card']['card_img']): ?>
                  <a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="pink"><?php echo $this->_var['lang']['view']; ?></a>
                  <?php else: ?>
                  <?php echo $this->_var['lang']['no']; ?>
                  <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td bgcolor="#ffffff"></td>
              <td bgcolor="#ffffff" class="weiruan "valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
              <td bgcolor="#ffffff"class="weiruan " colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
            </tr>
          </table>
        </div>
                <div class="blank"></div>
        <?php endif; ?>
 <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['other_info']; ?></h2>
      <div class="nstep_products" style="margin-top:5px;padding-bottom:9px;">
  
      <table style="width:948px;border:1px #e5e5e5 solid;margin:5px auto;">
            <?php if ($this->_var['allow_use_surplus']): ?>
            <tr >
              <td  class="weiruan " width="20%" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
              <td class="weiruan " bgcolor="#ffffff"><input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
              <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['allow_use_integral']): ?>
            <tr>
              <td class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
              <td class="weiruan " bgcolor="#ffffff"><input name="integral" type="text" class="input" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
              <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['allow_use_bonus']): ?>
            <tr>
              <td  class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
              <td class="weiruan "  bgcolor="#ffffff">
                <?php echo $this->_var['lang']['select_bonus']; ?>
                <select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc;">
                  <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                  <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                  <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>

                <?php echo $this->_var['lang']['input_bonus_no']; ?>
                <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" />
                <input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" />
              </td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_var['inv_content_list']): ?>
            <tr>
              <td  class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
                <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
              </td>
              <td class="weiruan "  bgcolor="#ffffff">
                <?php if ($this->_var['inv_type_list']): ?>
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" style="border:1px solid #ccc;">
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
                <?php endif; ?>
                <?php echo $this->_var['lang']['invoice_title']; ?>
                <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" />
                <?php echo $this->_var['lang']['invoice_content']; ?>
              <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                </select></td>
            </tr>
            <?php endif; ?>
            <tr>
              <td class="weiruan " valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
              <td class="weiruan " bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
            </tr>
            <?php if ($this->_var['how_oos_list']): ?>
            <tr>
              <td class="weiruan " bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
              <td class="weiruan " bgcolor="#ffffff"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
                <label>
                <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" />
                <?php echo $this->_var['how_oos_name']; ?></label>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </td>
            </tr>
            <?php endif; ?>
          </table>
    </div>
    <div class="blank"></div>
   
    <h2 class="nstep1_tit3"><?php echo $this->_var['lang']['fee_total']; ?></h2>
     <div class="nstep_products">
     <Div style="width:948px;border:1px #fb9b00 solid;margin:5px auto 0 auto; background:#fff9dd; ">
          <?php echo $this->fetch('library/order_total.lbi'); ?>
           <div align="center" style="margin:8px auto;">
            <input type="image" class="orderconfirmBtn" value=" " />
            <input type="hidden" name="step" value="done" />
            </div>
            </div>
    </div>
    <div class="blank5"></div>
    </form>
        
        </div>
        </div>
        <?php endif; ?>
<?php if ($this->_var['step'] == "login"): ?>
        <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
        
        <div class="register_box font_zt">
        	<div class="zcdl_box">
            	<div class="web_title_login">
                	<p>新用户注册</p>
                </div>
                <div class="register_case">
                	<form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onsubmit="return checkSignupForm(this)">
                		<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    		<tr>
                            	<td class="left_title font_zt"><?php echo $this->_var['lang']['username']; ?>：</td>
                                <td><input name="username" type="text" class="input" id="username" onblur="is_registered(this.value);" maxlength="35" style="width: 150px;" /></td>
                                <td><span id="username_notice" style="color:#ff4560"> </span></td>
                            </tr>
                            <tr>
                            	<td class="left_title font_zt">E-mail：</td>
                                <td><input name="email" type="text" class="input" id="email" onblur="checkEmail(this.value);" maxlength="35" style="width: 150px;" /></td>
                                <td><span id="email_notice" style="color:#ff4560"></span></td>
                            </tr>
                            <tr>
                            	<td class="left_title font_zt">密码：</td>
                                <td><input name="password" class="input" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" maxlength="20" style="width: 150px;" /></td>
                                <td><span style="color:#ff4560" id="password_notice"></span></td>
                            </tr>
                            <tr>
                            	<td class="left_title font_zt">密码强度：</td>
                                <td>
                                	<table width="145" cellspacing="0" cellpadding="1" border="0">
                                    	<tr>
                                        	<td id="pwd_lower" class="password_on" width="33%">弱</td>
											<td id="pwd_middle" class="password_off" width="33%">中</td>
											<td id="pwd_high" class="password_off" width="33%">强</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                            	<td class="left_title font_zt">确认密码：</td>
                                <td><input name="confirm_password" class="input" type="password" id="confirm_password" onblur="check_conform_password(this.value);" maxlength="20" style="width: 150px;" /></td>
                                <td><span style="color:#ff4560" id="conform_password_notice"></span></td>
                            </tr>
                            <?php if ($this->_var['enabled_register_captcha']): ?>
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
                        			<input name="act" type="hidden" value="signup" />
                        		</td>
                            </tr>
                            <tr>
                            	<td colspan="3">
<textarea class="input area_agree" readonly="readonly">北京九合尚品科技有限公司服务协议 一、本站服务条款的确认和接纳 玛萨玛索、薇薇安（www.masamaso.com/www.vivian.cn/www.linkmasa.com）（以下简称"本站"）是北京九合尚品科技有限公司旗下的面向全球的综合服务性网站。其涉及到的产品、服务、相关软件的所有权和运营权归北京九合尚品科技有限公司所有，北京九合尚品科技有限公司享有对"本站"上一切活动的监督、提示、检查、纠正及处罚权利。用户通过注册程序阅读本服务条款并点击"同意"或"接受"按钮完成注册，或以任何行为实际使用、享受"本站"的服务，即表示用户与"本站"已达成协议，自愿接受本服务条款的所有内容。如用户不同意本服务条款的条件，则不能使用"本站"的服务以及注册成为"本站"用户。 二、服务简介 1.本站运用自己的操作系统通过国际互联网络为用户提供网络服务。同时，用户需自备以下条件： (1)"本站"服务仅供依法能够且有权订立具有法律约束力合约的自然人、法人及非法人组织使用。因此，用户应为具备完全民事行为能力的自然人，或依法成立、存续的法人或非法人组织。用户违反本项条件，"本站"可随时、全权决定拒绝向其提供服务，若因此给"本站"或第三方造成损失，用户承担全部赔偿责任。 (2)自行配备上网的所需设备，包括个人电脑、调制解调器或其它必备上网装置。 (3)自行负担个人上网所支付的与此服务有关的电话费用、网络费用等其他相关费用。 2.用户在申请使用"本站"提供的网络服务时，必须向"本站"提供准确的个人资料，如个人资料有任何变动，须及时更新。如有合理理由怀疑用户提供的资料错误、不实、失效或不完整的，"本站"有权向用户发出询问及/或要求改正的通知，并有权直接做出删除相应资料的处理，直至终止对用户提供部分或全部服务，"本站"对此不承担任何责任，用户将承担因此产生的一切后果。 3、在参加"本站"各类活动时以及在"本站"购物及提出要求时，用户须提供及时、详尽及准确的个人资料，包括但不限于姓名、性别、年龄、住址/住所地、通讯地址、联系电话、电子邮件地址等； 4.本站保证不向第三方公开用户的真实姓名、地址、电子邮箱和联系电话等用户信息， 除以下情况外： (1)用户授权本站透露这些信息。 (2)相应的法律及程序要求本站提供用户的个人资料。 5.用户在享用"本站"各项服务的同时，同意接受本站提供的各类信息服务，这些信息所涉及的内容包括以文字、图片、照片、音视频形式表现的各类订单信息、宣传信息、促销信息、商业信息以及本站合作伙伴信息，该类信息的提供方式包括但不限于电子邮件、短信息。用户在"本站"注册或实际使用"本站"的服务，即表明用户已同意接受此项服务。若用户不希望接收来自"本站"的短信或邮件，则可联系"本站"客户服务部协助处理。 6."本站"为用户提供合法的、健康的产品及服务，但是用户在使用"本站"提供的服务涉及到Internet服务和电信增值服务，可能会受到各个环节不确定因素的影响。因此服务存在因不可抗力（包括但不限于自然灾害、政府行为以及战争、罢工、动乱等社会异常现象）、计算机病毒或黑客攻击、国家相关行业主管部门及电信运营商的调整、系统不稳定、用户所在位置、用户关机以及其他任何技术、互联网络、通信线路原因等造成的服务中断或不能满足用户要求的风险。用户同意承担以上风险，"本站"不作担保。对因此导致用户不能发送、上传和接受阅读消息、或接发错消息，或无法实现其他通讯条件，"本站"不承担任何责任。 7.用户在参与活动或交易过程中与其他会员发生纠纷时，一旦一方或双方共同提交"本站"客户关系中心协调处，则"本站"有权根据单方判断做出调处决定，用户了解并同意接受"本站"的判断和调处决定，该决定将对用户具有约束力。如用户未在限期内执行处理决定，则"本站"有权暂停向其提供服务，暂时冻结其在"本站"账户内的资金，并采取进一步法律手段解决。 8.禁止任何商业目的的注册和"注册用户"买卖。"本站"鼓励以使用为目的购买"本站"产品，但禁止一切商业目的和商业行为，若用户利用"本站"的服务、产品、活动从事任何以商业为目的的行为，"本站"有权采取取消订单、冻结或关闭账户、永久禁止注册等措施，给"本站"造成损失的，用户承担赔偿责任，构成犯罪的，"本站"有权提请国家主管部门追究其行政和刑事责任。 三、价格和数量 1.关于商品价格： 本站将尽最大努力保证您所购商品与网站上公布的价格一致，但价目表和声明并不构成要约。直至用户发出订单，"本站"才能确认商品的价格，如果"本站"发现错误定价，将采取下列措施之一： （1）如果某一商品的正确定价低于"本站"的错误定价，本站将全额退还用户所支付的高额部分。 （2）如果某一商品的正确定价高于"本站"的错误定价，"本站"会根据情况决定，在交付前联系用户沟通确认, 或者取消订单并通知用户。 2.关于商品数量： 本站将尽最大努力保证"本站"商品数量和库存的一致性，由于互联网用户同时订购的概率，"本站"商品数量并不构成要约。直至用户的订单发出，"本站"才能完全确认商品的数量，如果在"本站"出现用户订购后商品缺货的情况，本站将采取一下的措施之一处理； （1）如果某商品用户已添加购物车，但订单尚未提交，用户订单提交时系统将提醒库存不足或商品已经售空； （2）如果用户已经提交的订单中商品由于库存无法满足，对于已预付款用户，我们将在发现缺货后的1个工作日内联系用户，退还用户款项，并取消订单；对于预付款但未支付用户或货到付款用户，我们将在发现缺货后通过有效途径通知到用户，系统将自行取消缺货订单。 四、送货 1、配送范围将在"本站"官方网站公示，用户应仔细阅读并在每次下订单前再次进行确认，确保所提交的送货地址属于该范围之内，超出该范围的订购或配送要求，属于无效订单，"本站"有权单方取消订单。 2、在提交订单前，用户应再次确认配送地址，如果因为用户地址错误造成延期配送或不能配送的，用户自行承担责任，造成货物重复配送，"本站"有权按照实际配送次数收取物流费用。 3、收货人可以为用户本人也可以为本人以外的其他人。"本站"将按照通过审核后的订单上所述的配送地址、收货人姓名和电话进行配送。如果收货人在配送过程中要求变更接收地址的，"本站"视同已经过用户本人的同意。 4、原则上收货人应当亲自接收，如遇特殊情况收货人可以与"本站"客服中心联系申请由他人代为签收。如果配送地点属于办公区域，则前台人员代为签收视为已经经过用户的同意。大额订单进行配送签收时，"本站"有权要求收货人出示有效身份证明。 5、"本站"尽量将配送时间控制网站公示的时间内，如遇不可抗力因素，包括但不限于以下情况： a自然灾害，如地震、台风、洪水、旱灾、海啸等； b政府行为，主要是指当事人在订立合同以后，政府当局颁布新政策、法律和行政措施而导致合同不能履行； c社会异常事件，如战争、罢工、骚乱、交通管制等； d恶劣天气所导致无法或难以正常送货。"本站"有权延迟配送时间。 6、若用户无正当理由多次拒收货物，则"本站"有权取消该用户以后的订单。情形恶劣的，"本站"有权采取冻结、关闭账户，永久禁止注册等措施，并保留追究赔偿责任的权利。请清楚准确地填写您的真实姓名、送货地址及联系方式。 以下情况可能造成订单延迟或无法配送等，本站将无法承担迟延配送的责任和费用： (1)客户提供错误信息和不详细的地址； (2)货物送达无人签收，由此造成的重复配送所产生的费用及相关的后果。 五、付款与退款 1、付款方式将在"本站"首页下方"如何付款/退款"予以公示。用户应在确认订单时，选择付款方式，并严格按照已选择的方式付款。用户未能按照所选择的方式或所要求的时间完成付款的，"本站"有权单方取消订单。 2、退款方式将在"本站"首页下方售后服务-退换货政策予以公示。因退货或换货商品缺货而产生的现金款项，"本站"将退回至用户，退回方式视支付方式的不同而不同。用户应严格依据退款方式及退款周期收回退款。 六、退货与换货 退换货政策将在"本站"官方网站予以公示。"本站"将针对商品品类的不同实行不同的退换货政策和条件，用户在申请退换货前应仔细阅读并理解，同时严格按照相关流程和要求完成退换货。 七、对用户信息的存储、保护和限制 用户使用"本站"时，已经同意"本站"对其使用本站时提供或发布的信息进行保存。"本站"对用户在"本站"服务中发布或保存的各类非公开信息进行保密，除非"本站"基于诚信在以下情形下认为透露这些信息是必要的： （1）遵守有关法律规定，包括在国家有关机关查询时，提供用户在"本站"上发布的信息、因交易和付款而保存在"本站"的信息，以及这些信息产生的时间、互联网地址或者域名以及其上传至"本站"的其他信息； （2）遵从"本站"产品服务程序； （3）为保持维护"本站"的知识产权； （4）在紧急情况下维护用户个人和社会大众的隐私安全； （5）其他诚信及必要的情况下。如果用户违背了国家法律法规规定或本协议约定，本站有视具体情形中止或终止对其提供网络服务的权利。 八、用户的帐号，密码和安全性 用户一旦注册成功，成为本站的合法用户，将得到一个密码和用户名，该帐号和密码将成为用户登录"本站"、使用"本站"服务、进行交易、完成支付以及享受售后服务的凭证。 您可随时根据指示改变您的密码，同时请您谨慎合理的保存、使用用户名和密码。用户若发现任何非法使用用户帐号或存在安全漏洞的情况，请立即通知本站。 1、用户注册成功后，将拥有一个"本站"专用帐号及相应的密码，该帐号和密码将成为用户登录"本站"、使用"本站"服务、进行交易、完成支付以及享受售后服务的凭证。 2、每位用户只允许在"本站"拥有一个有效账户，如有证据证明或"本站"有理由相信用户存在恶意注册多个账户的情形，"本站"有权采取取消订单、冻结或关闭账户等措施，给"本站"造成损失的，用户承担赔偿责任。 3、使用"本站"服务过程中，用户有义务保管好个人账号及密码，并对他人使用私人计算机作出限制。用户不得以任何形式擅自转让或授权他人使用自己的"本站"帐号及密码。如果因为用户管理不善造成帐号、密码等被复制或被盗用，相应损失由用户自行承担。同时，通过该用户的个人账户在"本站"上发生的所有活动以及产生的责任，亦应由该用户承担。 4、用户不得采用测试、欺骗等任何非法手段，盗取其他用户的账户信息或对他人进行骚扰。 5、"本站"承诺仅根据本网站服务目的使用用户个人信息。服务目的包括但不限于交易确认、交易支付、客户回访、政策更新、用户通知、发送促销信息、商业信息以及其他与交易和服务相关的辅助服务等。如用户认为"本站"超范围使用了其个人信息，请立即与客服中心联系，"本站"将核实处理。 九、用户隐私制度 尊重用户个人隐私是"本站"的一项基本政策，因此，"本站"一定不会向任何第三方披露、转让、出租或者出售交易用户名单、交易记录等涉及消费者个人信息的数据以及用户保存在"本站"各项服务中的非公开内容，除非"本站"在诚信基础上认为透露这些信息是必要的。 1、对用户注册资料的保护 用户可授权"本站"向第三方透露其注册资料，否则"本站"不会公开用户的姓名、住址、通信地址、电子邮箱、电话及帐号。除非： （1）事先获得用户明确授权后，用户要求"本站"或授权某人通过电子邮件服务或其他方式透露这些信息； （2）相应的法律、法规要求以及按照有关政府主管部门的要求，需要"本站"提供用户的个人资料； （3）为了维护公众和（或）"本站"、"本站"合法利益； （4）"本站"可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与"本站"同等的保护用户隐私的责任，则"本站"有权将用户的注册资料等提供给该第三方； （5）在不透露单个用户隐私资料的前提下，"本站"有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。 十、用户行为管理 用户可在"本站"发布商品或服务信息、评论及其他信息，但不得使用"本站"服务发送或传播敏感信息和违反国家法律法规政策的信息，此类信息包括但不限于： （1）反对宪法所确定的基本原则的； （2）危害国家安全，泄露国家秘密，颠覆国家政权，破坏国家统一的； （3）损害国家荣誉和利益的； （4）煽动民族仇恨、民族歧视，破坏民族团结的； （5）破坏国家宗教政策，宣扬邪教和封建迷信的； （6）散布谣言，扰乱社会秩序，破坏社会稳定的； （7）散布淫秽、色情、赌博、暴力、凶杀、恐怖或者教唆犯罪的； （8）侮辱或者诽谤他人，侵害他人合法权益的； （9）含有法律、行政法规禁止的其他内容的。 用户在发布商品、服务信息及使用"本站"服务过程中，还必须遵循以下原则： （1）遵守中国有关的法律和法规； （2）不得为任何非法目的而使用网络服务系统，遵守所有与网络服务有关的网络协议、规定和程序；不得利用"本站"网络服务系统进行任何可能对互联网的正常运转造成不利影响的行为； （3）不得进行任何未经"本站"许可的商业广告行为；不得对"本站"上的任何数据作商业性利用，包括但不限于在未经"本站"事先书面同意的情况下，以复制、传播等任何方式使用"本站"上展示的资料； （4）不得使用虚假、冒充他人或其他方的信息注册"本站"后发布评论或其他内容；不得以虚构或歪曲事实的方式不当评价其他会员，不得采取不正当方式制造或提高自身的信用度（会员级别、积分等），不得采取不正当方式制造或提高（降低）其他会员的信用度（会员级别、积分等）； （5）不得使用任何装置、软件或例行程序干预或试图干预"本站"的正常运作或正在"本站"上进行的任何交易、活动；不得采取任何将导致不合理的庞大数据负载加诸"本站"网络设备的行动； （6）不得利用网络服务进行任何不利于"本站"或"本站"的行为。 未经许可而非法进入其它电脑系统是禁止的。 若用户的行为不符合以上提到的服务条款，本站将作出独立判断立即取消用户服务帐号。用户需对自己在网上的行为承担法律责任。用户若在本站上散布和传播反动、色情或其它违反国家法律的信息，本站的系统记录有可能作为用户违反法律的证据。 十一、公告（站内信等） "本站"所有发给用户的通告都可通过重要页面的公告、站内信、电子邮件或常规的信件传送。用户协议条款的修改、服务变更、或其它重要事件的通告都会以此形式进行。 十二、知识产权 1、"本站"对"本站"上全部内容享有绝对的、完全的所有权及知识产权，或已取得权利人的合法授权，内容包括：文字、图片、图表、照片、软件、声音、图像，以及广告中的全部内容、"本站"以通告形式发出的全部内容、本服务条款第二条"服务保护条款"第3款所涉及的各类信息。所有这些内容均受著作权、商标权、物权及其他知识产权和所有权法律的保护。用户只能在"本站"和（或）权利人的授权下才能使用这些内容，而不能擅自复制、编辑、改编、传播这些内容，或对内容进行任何形式的权利申请，或创造与内容有关的派生产品。同时，这些内容不可以被用于任何可能引起消费者对"本站"服务产生混淆或者贬低的商品或者服务上。 2、未经"本站"书面同意，用户不得用任何方式对"本站"网站内容进行修改，也不得复制、下载"本站"网页内容、数据、信息进行转售或商业利用。用户被授予有限的、可撤销的和非独家的权利建立连接到"本站"主页的超链接，只要这个链接不以虚假、误导、贬低或其他方式侵害"本站"的商品和服务。 3、对于用户发布和保存在"本站"上的内容，用户授予"本站"及其关联公司独家的、全球通用的、永久的、免费的许可使用权利 (并有权在多个层面对该权利进行再授权)。此外，"本站"及其关联公司有权(全部或部份地) 使用、复制、修订、改写、发布、翻译、分发、执行和展示用户的全部资料数据（包括但不限于注册资料、交易行为数据及全部展示于"本站"的各类信息）或制作其派生作品，并以现在已知或日后开发的任何形式、媒体或技术，将上述信息纳入其它作品内。用户进一步确认，"本站"对其内容的使用是基于用户对内容的合法性、合规性及权属做出的承诺和保证，"本站"的使用不意味着"本站"认可用户的观点或承诺对该内容承担任何责任，无论"本站"是否对用户发布和保存的内容进行使用，用户均应独立的、完全的对其内容负责。若"本站"因对内容的使用而遭受任何争议、索赔、指控，作为内容提供方的用户应对此承担全部责任，并赔偿"本站"因此遭受的损失。 十三、服务条款变更 1、用户接受，随着市场环境、网络环境以及"本站"自身发展，"本站"会在必要时修改服务条款，服务条款一旦发生变动，"本站"将会以站内公告、站内信、电子邮件或其他书面方式将修改后的条款予以公布或通知。 2、用户接受，"本站"为了保障公司业务发展和调整的自主权，拥有随时修改或中断服务而不需通知用户的权利，"本站"行使修改或中断服务的权利不需对用户或任何第三方负责。用户必须在同意本条款的前提下，"本站"才开始对用户提供服务。 3、用户若反对任何服务条款的修改或服务的修订，或用户对后继的条款、服务有异议，或对"本站"服务不满，用户享有以下权利： （1） 不再使用"本站"和/或"本站"的服务； （2） 自行注销账户，或以其他被许可的方式结束其使用"本站"和/或"本站"服务的资格； （3） 书面通知"本站"停止对其的服务。 结束用户服务后，用户使用"本站"服务的权利马上终止。从那时起，"本站"不再对用户承担任何义务。 4、一旦用户选择继续使用"本站"服务，则表示用户已接受经修订的条款及服务，当用户与"本站"发生争议时，应以最新的服务条款为准。除另行明确声明外，任何使"本站"服务范围扩大或功能增强的新内容均受本条款约束 十四、法律管辖和适用 本协议的订立、执行和解释及争议的解决均应适用中国法律。 如发生"本站"服务条款与中国法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。 如双方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，任何一方均可向对服务提供方有管辖权的人民法院提起诉讼。 十五、其他 1、本服务条款以及与使用"本站"服务相关的声明、说明、规则、政策、程序，构成"本站"与用户之间有效的完整协议，将对用户持续有效，有效期至用户注销或者被取消账户、且停止一切使用"本站"服务的行为后，但"本站"与用户间已经产生的权利义务，仍对双方有约束力。 2、"本站"将视向用户所提供服务内容之特性，要求用户在注册"本站"提供的有关服务时，遵守特定的条件和条款；如该特定条件和条款与以上服务条款有任何不一致之处，则以特定条件和条款为准。 3、本服务条款中的任何条款无论因何种原因完全或部分无效或不具有执行力，其余条款仍应有效并且有约束力。 4、本服务条款的标题、序号均为方便阅读而设定，不影响条款实际含义及其效力。 5、本服务条款自公布及适用的当天生效，有效期持续至更新版本发布之时。 6、以上条款的解释权归北京九合尚品科技有限公司最终所有。 十六、网络推广 1、再营销利用cookie记录用户兴趣，并向之前访问过我们网站感兴趣的用户传达适当的信息。 2、当对我们感兴趣的用户访问 Google 展示广告网络中的其他网站时，就可能会看到我们的广告及最新的优惠信息。 3、我们通过cookie来定位人群，再通过谷歌Adwords账户后台进行优化，并向这部分感兴趣的用户投放广告。 4、如果您不想了解我们的广告，您也可以删除cookie </textarea>
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
            <div class="register_left">
            	<div class="web_title_login">
					<p>会员登录</p>
				</div>
                <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
                	<div class="register_case">
                		<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    		<tr>
                        		<td class="left_title font_zt" style="width: 90px">用户名：</td>
                            	<td class="mid_con"><input name="username" type="text" class="input" id="username" maxlength="35" style="width: 160px;" /></td>
                                <td></td>
                        	</tr>
                            <tr>
                            	<td class="left_title font_zt">密码：</td>
                               	<td class="mid_con"><input name="password" class="input" type="password" maxlength="20" style="width: 160px;" /></td>
                                <td></td>
                            </tr>
                            <?php if ($this->_var['enabled_login_captcha']): ?>
                            <tr>
                            	<td class="left_title font_zt">验证码：</td>
                                <td class="mid_con"><input type="text" size="8" name="captcha" class="input" style=" width:65px" /> <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
                                <td></td>
                            </tr>
                            <?php endif; ?>
                            <tr>
                            	<td> </td>
                                <td class="mid_con">
                                	<input type="checkbox" value="1" name="remember" id="remember"  style="cursor: pointer; vertical-align: middle; margin-top: 0; *margin-top: -1px;"/> <label for="remember">记住用户名</label><a style="margin-left: 10px; text-decoration: underline;" target="_blank" href="user.php?act=get_password">忘记密码</a>
                                </td>
                                <td> </td>
                            </tr>
                            <tr>
                            	<td> </td>
                                <td class="mid_con"><input type="submit" class="smlogin_btn" name="login" value="" /> <?php if ($this->_var['anonymous_buy'] == 1): ?>
                        			<input type="button" class="bilogin_btn" value="" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'"  style=" width:185px"/>
                        			<?php endif; ?>
                                    <input name="act" type="hidden" value="signin" /></td>
                                <td></td>
                                	
                        		
                            </tr>
                    	</table>
                	</div>
                </form>
                <div class="union_login_cc">
                	<div class="title">使用合作方登录：</div>
                    <div class="list">
                    	<div>
                        	<a href="user.php?act=oath&type=qq">
                            	<img src="themes/masamasuo/images/qq.png">
								腾讯QQ
                            </a>
                        </div>
                        <div>
                        	<a href="user.php?act=oath&type=weibo">
                            	<img src="themes/masamasuo/images/sina.png">
								新浪微博
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php endif; ?>

<?php if ($this->_var['step'] == "done"): ?>
<div id="direction">
  <dl class="bc_nav">
  		<dt>结算步骤:</dt>
        <dd>
			<strong>我的购物车</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong>结算中心</strong>
			<span>>></span>
		</dd>
        <dd>
			<strong class="current">订单完成</strong>
		</dd>
  </dl>
	
</div>
<div class="buytab_a" >
        <div class="nstep2_con orderok">
         <p class="ordertitle"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></p>
         
            <p>  <?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <span class="pink "><?php echo $this->_var['order']['shipping_name']; ?></span>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <span class="pink "><?php echo $this->_var['order']['pay_name']; ?></span>。<?php echo $this->_var['lang']['order_amount']; ?>: <span class="pink "><?php echo $this->_var['total']['amount_formated']; ?></span></p>
             <p class="orderpayinfo">
            <?php echo $this->_var['order']['pay_desc']; ?>
           
            <?php if ($this->_var['pay_online']): ?>
            
            <?php echo $this->_var['pay_online']; ?>
            <?php endif; ?>
         </p>
          <?php if ($this->_var['virtual_card']): ?>
          <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
          <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
            <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
              <ul style="list-style:none;padding:0;margin:0;clear:both">
              <?php if ($this->_var['card']['card_sn']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['card_password']): ?>
              <li style="margin-right:50px;float:left;">
              <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span>
              </li><?php endif; ?>
              <?php if ($this->_var['card']['end_date']): ?>
              <li style="float:left;">
              <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?>
              </li><?php endif; ?>
              </ul>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <?php endif; ?>
          <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
          </div>
        </div>
<?php endif; ?>
<div class="blank5"></div>
</div>
<?php echo $this->fetch('library/page_footer_flow.lbi'); ?> 

</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
