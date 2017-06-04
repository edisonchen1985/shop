<style>


</style>


<div id="full-screen-slider" class="full-screen-slider">
	<div class="bd">
		<ul>
    	<li><?php 
$k = array (
  'name' => 'ads',
  'id' => '16',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li><?php 
$k = array (
  'name' => 'ads',
  'id' => '17',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
        <li><?php 
$k = array (
  'name' => 'ads',
  'id' => '18',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
    </ul>
    </div>
    <div class="hd">
    	<ul>
      		<li class="first"> </li>
      		<li> </li>
      		<li> </li>
    	</ul>
    </div>
</div>


<script type="text/javascript">
		jQuery(".full-screen-slider").slide({mainCell:".bd ul",autoPlay:true,trigger:"click"});
		</script> 
