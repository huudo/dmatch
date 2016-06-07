<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-07 17:14:14
         compiled from "D:/xampp/htdocs/dmatch/d-match/fuel/app/views/modal/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:44057568256c947e3_67242064%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9ab956ee3979610a7741c82e699b7a848ebf4a' => 
    array (
      0 => 'D:/xampp/htdocs/dmatch/d-match/fuel/app/views/modal/area.tpl',
      1 => 1465287249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44057568256c947e3_67242064',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_57568256ce4669_44864767',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57568256ce4669_44864767')) {
function content_57568256ce4669_44864767 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '44057568256c947e3_67242064';
?>
<div class="modalAjax">
	<p class="modalAjax__ttl">
		エリア選択<span class="modalAjax__subttl">自店舗を中心に、マウスで範囲を選択できます</span>
	</p>
	<style type="text/css">
	#map{
		width: 100%;
		height: 100%;
	}
	</style>

	<section class="areaModal">
		<div id="map"></div>
	</section>
	
	<div class="searchController searchController--inModal">
		<a href="#" class="btn btn--s btn--black searchController__clear">クリア</a>
		<div class="searchController__right">
			<div class="searchController__areaModal">
				<span class="searchController__carAmount" id="searchController__carAmount">10000</span><span class="searchController__carSentence">台選択中</span>
			</div>
			<a href="#" class="btn btn--big btn--blue2 searchController__searchBtn">決定</a>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	$( document ).ready(function(){		
    	initMap();		
	});
<?php echo '</script'; ?>
>
<?php }
}
?>