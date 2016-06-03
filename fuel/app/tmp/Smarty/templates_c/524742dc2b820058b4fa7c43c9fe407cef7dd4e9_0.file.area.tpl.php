<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-03 18:01:37
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:250757514771634150_91906691%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524742dc2b820058b4fa7c43c9fe407cef7dd4e9' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/modal/area.tpl',
      1 => 1464944493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250757514771634150_91906691',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_57514771684887_91743717',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57514771684887_91743717')) {
function content_57514771684887_91743717 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '250757514771634150_91906691';
?>
<div class="modalAjax">
	<p class="modalAjax__ttl">
		エリア選択<span class="modalAjax__subttl">自店舗を中心に、マウスで範囲を選択できます</span>
	</p>

	<section class="areaModal"></section>
	<h1>TRỌNG HỮU</h1>
	<div class="searchController searchController--inModal">
		<a href="#" class="btn btn--s btn--black searchController__clear">クリア</a>
		<div class="searchController__right">
			<div class="searchController__areaModal">
				<span class="searchController__carAmount">10000</span><span class="searchController__carSentence">台選択中</span>
			</div>
			<a href="#" class="btn btn--big btn--blue2 searchController__searchBtn">決定</a>
		</div>
	</div>
</div><?php }
}
?>