<div class="banner_info">
	<div id="img" >
	<div class="bd">
		<ul>
    	<li><?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_1'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?></li>
        <li><?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_2'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?></li>
    </ul>
    </div>
    <div class="hd">
    	<ul>
      		<li class="first"> </li>
      		<li> </li>
    	</ul>
    </div>
</div>
	<div class="in_banner_fr">
    	<?php
if($_REQUEST['id'])
{
$id = $_REQUEST['id'];
}else{
$id = $_REQUEST['category'];
}
$sql = "select ap.ad_width,ap.ad_height,ad.ad_name,ad.ad_code,ad.ad_link from ".$GLOBALS['ecs']->table('ad_position').
" as ap left join ".$GLOBALS['ecs']->table('ad')." as ad on ad.position_id = ap.position_id where ad.ad_name='".'cate_3'.
"_".$id."' and ad.media_type=0 and UNIX_TIMESTAMP()>ad.start_time and UNIX_TIMESTAMP()<ad.end_time and ad.enabled=1";
$res = $GLOBALS['db']->getAll($sql);
foreach($res AS $v)
{                      
echo  "<a href='".$v['ad_link']."' target='_blank'><img src='data/afficheimg/".$v['ad_code']."' width='".$v['ad_width']."'
 height='".$v['ad_height']."' /></a>";
}
?>
    </div>
</div>

<script type="text/javascript">
		jQuery("#img").slide({mainCell:".bd ul",autoPlay:true,trigger:"click"});
		</script> 
