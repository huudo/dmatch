<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-03 17:37:33
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/modal/venue.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18566575141cdd1a785_16713929%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e4ecfc91c2318d9a67c8a6713963681b259ea9' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/modal/venue.tpl',
      1 => 1464942854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18566575141cdd1a785_16713929',
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_575141cdd6e2e4_09835988',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575141cdd6e2e4_09835988')) {
function content_575141cdd6e2e4_09835988 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '18566575141cdd1a785_16713929';
?>
<div class="modalAjax">
	<p class="modalAjax__ttl mgb20">会場選択</p>
	<div class="venue">
		<div class="venue__top">
			<div class="venueNav venue__checks">
				<ul class="venueNav__top">
					<li><label for="venueNav-1-1"><input type="radio" name="venueNav-1" id="venueNav-1-1"> 全選択</label></li>
					<li><label for="venueNav-1-2"><input type="radio" name="venueNav-1" id="venueNav-1-2"> 出品データ有りのみ</label></li>
					<li><label for="venueNav-1-3"><input type="radio" name="venueNav-1" id="venueNav-1-3"> 画像データ有りのみ</label></li>
				</ul>
				<ul class="venueNav__next">
					<li><label for="venueNav-2-1"><input type="checkbox" name="venueNav-2" id="venueNav-2-1"> USS</label></li>
					<li><label for="venueNav-2-2"><input type="checkbox" name="venueNav-2" id="venueNav-2-2"> CAA</label></li>
					<li><label for="venueNav-2-3"><input type="checkbox" name="venueNav-2" id="venueNav-2-3"> アライ</label></li>
					<li><label for="venueNav-2-4"><input type="checkbox" name="venueNav-2" id="venueNav-2-4"> TAA</label></li>
					<li><label for="venueNav-2-5"><input type="checkbox" name="venueNav-2" id="venueNav-2-5"> ホンダAA</label></li>
					<li><label for="venueNav-2-6"><input type="checkbox" name="venueNav-2" id="venueNav-2-6"> NAA</label></li>
					<li><label for="venueNav-2-7"><input type="checkbox" name="venueNav-2" id="venueNav-2-7"> JU</label></li>
				</ul>
			</div>
			<div class="venue__btns">
				<a href="#" class="btn btn--s btn--black venue__btns__clear">クリア</a>
				<div class="venue__btns__right">
					<a href="#" class="btn btn--big btn--blue2">決定</a>
				</div>
			</div>
		</div>
		<div class="venueContents">
			<div class="venueContents__inner">
				<div class="venueContents__block">
					<ul class="venueContents__list">
						<li class="is-active"><label for="venue1-1"><input type="checkbox" id="venue1-1" checked> オークネットAA（出・画）</label></li>
					</ul>
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue2-1"><input type="checkbox" id="venue2-1"> 北海道</label></li>
						<li class="is-active"><label for="venue2-2"><input type="checkbox" id="venue2-2" checked> ホンダAA北海道（出）</label></li>
						<li><label for="venue2-3"><input type="checkbox" id="venue2-3"> USS札幌（画）</label></li>
						<li><label for="venue2-4"><input type="checkbox" id="venue2-4"> TAA北海道</label></li>
						<li class="is-disabled"><label for="venue2-5"><input type="checkbox" id="venue2-5" disabled> JU札幌</label></li>
					</ul>
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue3-1"><input type="checkbox" id="venue3-1"> 東北</label></li>
						<li><label for="venue3-2"><input type="checkbox" id="venue3-2"> USS札幌（出品有）</label></li>
						<li><label for="venue3-3"><input type="checkbox" id="venue3-3"> USS札幌（出品有）</label></li>
						<li><label for="venue3-4"><input type="checkbox" id="venue3-4"> USS札幌（出品有）</label></li>
						<li><label for="venue3-5"><input type="checkbox" id="venue3-5"> USS札幌（出品有）</label></li>
					</ul>
				</div>

				<div class="venueContents__block">
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue4-1"><input type="checkbox" id="venue4-1"> 関東</label></li>
						<li><label for="venue4-2"><input type="checkbox" id="venue4-2"> USS札幌</label></li>
						<li><label for="venue4-3"><input type="checkbox" id="venue4-3"> USS札幌（出品有）</label></li>
						<li><label for="venue4-4"><input type="checkbox" id="venue4-4"> USS札幌（出品有）</label></li>
						<li><label for="venue4-5"><input type="checkbox" id="venue4-5"> USS札幌（出品有）</label></li>
						<li><label for="venue4-6"><input type="checkbox" id="venue4-6"> USS札幌（出品有）</label></li>
						<li><label for="venue4-7"><input type="checkbox" id="venue4-7"> USS札幌（出品有）</label></li>
						<li><label for="venue4-8"><input type="checkbox" id="venue4-8"> USS札幌（出品有）</label></li>
						<li><label for="venue4-9"><input type="checkbox" id="venue4-9"> USS札幌（出品有）</label></li>
						<li><label for="venue4-10"><input type="checkbox" id="venue4-10"> USS札幌（出品有）</label></li>
						<li><label for="venue4-11"><input type="checkbox" id="venue4-11"> USS札幌（出品有）</label></li>
						<li><label for="venue4-12"><input type="checkbox" id="venue4-12"> USS札幌（出品有）</label></li>
						<li><label for="venue4-13"><input type="checkbox" id="venue4-13"> USS札幌（出品有）</label></li>
						<li><label for="venue4-14"><input type="checkbox" id="venue4-14"> USS札幌（出品有）</label></li>
						<li><label for="venue4-15"><input type="checkbox" id="venue4-15"> USS札幌（出品有）</label></li>
						<li><label for="venue4-16"><input type="checkbox" id="venue4-16"> USS札幌（出品有）</label></li>
						<li><label for="venue4-17"><input type="checkbox" id="venue4-17"> USS札幌（出品有）</label></li>
						<li><label for="venue4-18"><input type="checkbox" id="venue4-18"> USS札幌（出品有）</label></li>
						<li><label for="venue4-19"><input type="checkbox" id="venue4-19"> USS札幌（出品有）</label></li>
						<li><label for="venue4-20"><input type="checkbox" id="venue4-20"> USS札幌（出品有）</label></li>
						<li><label for="venue4-21"><input type="checkbox" id="venue4-21"> USS札幌（出品有）</label></li>
						<li><label for="venue4-22"><input type="checkbox" id="venue4-22"> USS札幌（出品有）</label></li>
					</ul>
				</div>

				<div class="venueContents__block">
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue5-1"><input type="checkbox" id="venue5-1"> 東海</label></li>
						<li><label for="venue5-2"><input type="checkbox" id="venue5-2"> USS札幌（出品有）</label></li>
						<li><label for="venue5-3"><input type="checkbox" id="venue5-3"> USS札幌（出品有）</label></li>
						<li><label for="venue5-4"><input type="checkbox" id="venue5-4"> USS札幌（出品有）</label></li>
						<li><label for="venue5-5"><input type="checkbox" id="venue5-5"> USS札幌（出品有）</label></li>
						<li><label for="venue5-6"><input type="checkbox" id="venue5-6"> USS札幌（出品有）</label></li>
						<li><label for="venue5-7"><input type="checkbox" id="venue5-7"> USS札幌（出品有）</label></li>
						<li><label for="venue5-8"><input type="checkbox" id="venue5-8"> USS札幌（出品有）</label></li>
						<li><label for="venue5-9"><input type="checkbox" id="venue5-9"> USS札幌（出品有）</label></li>
					</ul>
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue6-1"><input type="checkbox" id="venue6-1"> 関西</label></li>
						<li><label for="venue6-2"><input type="checkbox" id="venue6-2"> USS札幌（出品有）</label></li>
						<li><label for="venue6-3"><input type="checkbox" id="venue6-3"> USS札幌（出品有）</label></li>
						<li><label for="venue6-4"><input type="checkbox" id="venue6-4"> USS札幌（出品有）</label></li>
						<li><label for="venue6-5"><input type="checkbox" id="venue6-5"> USS札幌（出品有）</label></li>
						<li><label for="venue6-6"><input type="checkbox" id="venue6-6"> USS札幌（出品有）</label></li>
						<li><label for="venue6-7"><input type="checkbox" id="venue6-7"> USS札幌（出品有）</label></li>
						<li><label for="venue6-8"><input type="checkbox" id="venue6-8"> USS札幌（出品有）</label></li>
						<li><label for="venue6-9"><input type="checkbox" id="venue6-9"> USS札幌（出品有）</label></li>
					</ul>
				</div>

				<div class="venueContents__block last">
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue7-1"><input type="checkbox" id="venue7-1"> 中国・四国</label></li>
						<li><label for="venue7-2"><input type="checkbox" id="venue7-2"> USS札幌（出品有）</label></li>
						<li><label for="venue7-3"><input type="checkbox" id="venue7-3"> USS札幌（出品有）</label></li>
						<li><label for="venue7-4"><input type="checkbox" id="venue7-4"> USS札幌（出品有）</label></li>
					</ul>
					<ul class="venueContents__list">
						<li class="venueContents__list__head"><label for="venue8-1"><input type="checkbox" id="venue8-1"> 九州・沖縄</label></li>
						<li><label for="venue8-2"><input type="checkbox" id="venue8-2"> USS札幌（出品有）</label></li>
						<li><label for="venue8-3"><input type="checkbox" id="venue8-3"> USS札幌（出品有）</label></li>
						<li><label for="venue8-4"><input type="checkbox" id="venue8-4"> USS札幌（出品有）</label></li>
						<li><label for="venue8-5"><input type="checkbox" id="venue8-5"> USS札幌（出品有）</label></li>
						<li><label for="venue8-6"><input type="checkbox" id="venue8-6"> USS札幌（出品有）</label></li>
						<li><label for="venue8-7"><input type="checkbox" id="venue8-7"> USS札幌（出品有）</label></li>
						<li><label for="venue8-8"><input type="checkbox" id="venue8-8"> USS札幌（出品有）</label></li>
						<li><label for="venue8-9"><input type="checkbox" id="venue8-9"> USS札幌（出品有）</label></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
?>