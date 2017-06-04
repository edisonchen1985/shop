

<a href="flow.php" class="shop_get"><div class="flowNum"><?php echo $this->_var['str']; ?></div></a>

<div class="cart_box loaded" style=" float:left; left:-370px; margin-right:-9px; margin-top:5px; position:absolute; top:-23px; z-index:98">

<?php if ($this->_var['goods']): ?>

<div class="mini_shop_cn_tip">

      <div class="mini_shop_con" id="scroll">
      		<a class="prev"></a>
             <div class="mini_shop_list_tip" style=" height:158px; margin-top:7px">
             
                           <ul style=" border:1px solid #dcdcdc; margin:auto; width:328px">
             
                   <?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_25074800_1496132447');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_25074800_1496132447']):
        $this->_foreach['goods']['iteration']++;
?>
                   
                   <li class="shopWhite" onMouseOver="show_del(this)" onMouseOut="hide_del(this)">
 						<div class="mini_list_l_tip">
 <a href="<?php echo $this->_var['goods_0_25074800_1496132447']['url']; ?>" style=" background:none"><img src="<?php echo $this->_var['goods_0_25074800_1496132447']['goods_thumb']; ?>" style="width:66px; height:88px;" alt="<?php echo $this->_var['goods_0_25074800_1496132447']['goods_name']; ?>"></a>
  </div>
  						<div class="mini_list_r_tip">
  							<div class="list_txt_l">
    							<a  href="<?php echo $this->_var['goods_0_25074800_1496132447']['url']; ?>" class="mini_grey" style=" background:none; width:auto; float:none; margin-bottom:0"><?php echo $this->_var['goods_0_25074800_1496132447']['short_name']; ?></a>
    						</div>
  							<div class="list_txt_r">
    	<p class="mini_price_tip clearfix " style=" margin-right:10px; display:inline"><strong><?php echo $this->_var['goods_0_25074800_1496132447']['goods_price']; ?></strong>×<?php echo $this->_var['goods_0_25074800_1496132447']['goods_number']; ?></p>
    </div>
  							<div style="clear:both"></div>
 							<p class="clearfix">
    	<a  href="javascript:" onClick="deleteCartGoods(<?php echo $this->_var['goods_0_25074800_1496132447']['rec_id']; ?>)" class="mini_right mini_remove" style=" color:#999999; background:none; float:right; width:auto; height:auto; margin-bottom:0px">删除</a>
	</p>
 						</div>
					</li>

                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
             </ul>
             		
                    
 
             </div>
            <a class="next"></a>
            
             <script type="text/javascript">
			 	$(function(){
					function Scroll(id,l,r,div){
						this.id=$("#"+id);
						this.left=this.id.find("."+l);
						this.right=this.id.find("."+r);
						this.div=this.id.find("."+div);
						this.ul=this.id.find("ul");
						this.li=this.ul.find("li");
						this.index=0;
						this.init.apply(this,arguments);
					}
					Scroll.prototype={
						init:function(){
							this.ul.css("height",this.li.length*this.li.height());
							var h=this.ul.height();
							var h2=this.div.height();
							this.num=Math.round((h-h2)/(this.li.height()));
							this.evt();
						},evt:function(){
							var _this=this;
							
							this.left.click(function(){
								if(_this.index<=0){
									return;
								}
								_this.index--;
								
								_this.ul.animate({top:-(_this.index*_this.li.outerHeight())});
							});
							
							
							this.right.click(function(){
								if(_this.index>=_this.num){
									return;
								}
								_this.index++;
								
								_this.ul.animate({top:-(_this.index*_this.li.outerHeight())});
							});
						}
					}
					
					new Scroll("scroll","prev","next","mini_shop_list_tip");
					
				});
		     </script>
       
      </div>
      
      <a href="flow.php" class="mini_go">去购物车结算</a>
 
</div>

 
<?php else: ?>

<div class="mini_shop_cn" style=" text-align:center;"><div class="mini_empty">
<span>购物车中还没有商品，赶紧选购吧！</span>
</div></div>

<?php endif; ?>

</div> 

<script type="text/javascript">
function deleteCartGoods(rec_id)
{
Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#ECS_CARTINFO").html(res.content);
  }
}

$(function(){
	$("#ECS_CARTINFO li.shopWhite").mouseenter(function(){
		$(this).removeClass("shopWhite");
		$(this).addClass("shopGray");
	});

	$("#ECS_CARTINFO li.shopWhite").mouseleave(function(){
		$(this).removeClass("shopGray");
		$(this).addClass("shopWhite");
	});	
	
	
})
</script>

