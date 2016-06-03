<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-04 01:27:44
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:283415751b000eb14a8_79340898%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524742dc2b820058b4fa7c43c9fe407cef7dd4e9' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl',
      1 => 1464970660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283415751b000eb14a8_79340898',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_5751b000eee539_60087563',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5751b000eee539_60087563')) {
function content_5751b000eee539_60087563 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '283415751b000eb14a8_79340898';
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
 async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJu-cnkiF57hU-aDv1Prlb0zMkqY7iCk&libraries=geometry&callback=initMap">
<?php echo '</script'; ?>
><?php }
}
?>