<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-06 12:51:36
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172485754f348c9bc70_59422794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524742dc2b820058b4fa7c43c9fe407cef7dd4e9' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl',
      1 => 1465185072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172485754f348c9bc70_59422794',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_5754f348cd8a99_84307338',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5754f348cd8a99_84307338')) {
function content_5754f348cd8a99_84307338 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '172485754f348c9bc70_59422794';
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
				<span class="searchController__carAmount">10000</span><span class="searchController__carSentence">台選択中</span>
			</div>
			<a href="#" class="btn btn--big btn--blue2 searchController__searchBtn">決定</a>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$( document ).ready(function() {
    	initMap();
	});
<?php echo '</script'; ?>
><?php }
}
?>