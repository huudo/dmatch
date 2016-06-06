<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-06 18:32:25
         compiled from "D:/xampp/htdocs/dmatch/d-match/fuel/app/views/retail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:37245755432973fd37_43681362%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9282168b910c2b3b4e53289cf3224a0faf3cc40a' => 
    array (
      0 => 'D:/xampp/htdocs/dmatch/d-match/fuel/app/views/retail.tpl',
      1 => 1465205263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37245755432973fd37_43681362',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_575543297975a9_16054871',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575543297975a9_16054871')) {
function content_575543297975a9_16054871 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '37245755432973fd37_43681362';
?>
<section class="topArea">
	<div class="topArea__inner">
		<h1 class="topArea__ttl">小売相場検索</h1>
		<ul class="topArea__nav">
			<li><a href="/retail/history" class="modal">検索履歴</a></li>
			<li><a href="/retail/save" class="modal">保存条件</a></li>
		</ul>
	</div>
</section>

<section class="mainArea">
	<form id="retail__search" name="retail__search" method="post" action="/retail/search">
		<div class="mainArea__inner">
			<div class="tblBlock">
				<table class="tbl tbl--3items">
					<tr>
						<th>車種 型式</th>
						<td><a href="/modal/cartype" class="btn btn--blue btn--m modal">選択</a></td>
						<th>モデル グレード</th>
						<td><a href="/modal/model" class="btn btn--blue btn--m modal">選択</a></td>
						<th>エリア</th>
						<td class="last"><a href="/modal/prefs" class="btn btn--blue btn--s mgr-10 modal">都道府県から</a><a href="/modal/area" class="btn btn--blue btn--s modal">マップから</a></td>
					</tr>
					<tr>
						<th></th>
						<td colspan="5" class="tbl__popup"><a href="#" class="tbl__link">指定型式・類別区分で検索する</a>
							<div class="tbl__popup__box tblPopup">
								<div class="clearfix">
									<div class="tblPopup__block">
										<span>形式指定</span>
										<input type="text" class="inputText--s">
									</div>
									<div class="tblPopup__block last">
										<span>類別区分</span>
										<input type="text" class="inputText--s">
									</div>
								</div>
								<div class="tblPopup__nav">
									<a href="javascript:void(0);" class="tblPopup__close"> 閉じる </a> <a href="#" class="btn btn--m btn--blue2 tblPopup__btn" data-set='retail__search'>決定</a>
								</div>
							</div></td>
					</tr>
					<tr>
						<th>年式</th>
						<td><select name="a" class="selectBox selectBox--s">
								<option value="下限なし">下限なし</option>
						</select> <span class="selectMiddle">〜</span> <select name="b" class="selectBox selectBox--s">
								<option value="H29(2017)">H29(2017)</option>
						</select></td>
						<th>走行距離</th>
						<td><select name="" class="selectBox selectBox--s">
								<option value="下限なし">下限なし</option>
						</select> <span class="selectMiddle">〜</span> <select name="" class="selectBox selectBox--s">
								<option value="上限なし">上限なし</option>
						</select></td>
						<th>修復歴</th>
						<td class="last"><select name="" class="selectBox selectBox--m">
								<option value="選択して下さい">選択して下さい</option>
						</select></td>
					</tr>
					<tr>
						<th>本体色</th>
						<td colspan="5" class="pdr0 last">
							<div class="searchColor">
								<div class="searchColor__block colorBlock colorBlock--white" alt="ホワイト系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--black" alt="ブラック系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--silver" alt="シルバー系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--pearl" alt="パール系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--blue" alt="ブルー系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--red" alt="レッド系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--gray" alt="グレー系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--brown" alt="ブラウン系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--purple" alt="パープル系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--green" alt="グリーン系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--pink" alt="ピンク系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--yellow" alt="イエロー系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--gold" alt="ゴールド系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--orange" alt="オレンジ系">
									<div class="colorBlock__inner"></div>
								</div>
								<div class="searchColor__block colorBlock colorBlock--other" alt="その他">
									<div class="colorBlock__inner"></div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>

			<div class="tblBlock">
				<table class="tbl tbl--3items">
					<tr>
						<th>本体価格</th>
						<td><select name="" class="selectBox selectBox--s">
								<option value="下限なし">下限なし</option>
						</select> <span class="selectMiddle">〜</span> <select name="" class="selectBox selectBox--s">
								<option value="上限なし">上限なし</option>
						</select></td>
						<th>掲載期間</th>
						<td><select name="" class="selectBox selectBox--s">
								<option value="下限なし">下限なし</option>
						</select> <span class="selectMiddle">〜</span> <select name="" class="selectBox selectBox--s">
								<option value="上限なし">上限なし</option>
						</select></td>
						<th>成約状況</th>
						<td class="last"><select name="" class="selectBox selectBox--m">
								<option value="選択して下さい">選択して下さい</option>
						</select></td>
					</tr>
					<tr>
						<th>支払総額</th>
						<td><select name="" class="selectBox selectBox--s">
								<option value="下限なし">下限なし</option>
						</select> <span class="selectMiddle">〜</span> <select name="" class="selectBox selectBox--s">
								<option value="上限なし">上限なし</option>
						</select></td>
						<th>削除日</th>
						<td><select name="" class="selectBox selectBox--m">
								<option value="選択して下さい">選択して下さい</option>
						</select></td>
						<th>DLR/専業</th>
						<td class="last"><select name="" class="selectBox selectBox--m">
								<option value="選択して下さい">選択して下さい</option>
						</select></td>
					</tr>
				</table>
				<div class="moreBtn">
					<a href="kouri1" class="openSwitch mouseHoverImg" data-type="1"><img src="assets/img/icon_down__off.png" alt=""> <span>もっと詳細な条件</span></a>
				</div>
				<div class="openBox openBox--kouri1">
					<table class="tbl tbl--3items">
						<tr>
							<th>排気量</th>
							<td><select name="" class="selectBox selectBox--s">
									<option value="下限なし">下限なし</option>
							</select> <span class="selectMiddle">〜</span> <select name="" class="selectBox selectBox--s">
									<option value="上限なし">上限なし</option>
							</select></td>
							<th>ミッション</th>
							<td><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th>駆動方式</th>
							<td class="last"><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
						</tr>
						<tr>
							<th>ハンドル</th>
							<td><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th>車検</th>
							<td><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th>輸入車属性</th>
							<td class="last"><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
						</tr>
					</table>
					<table class="tbl tbl--4items">
						<tr>
							<th rowspan="2">装備</th>
							<td colspan="3"><label for="inputEquipment--1" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--1">サンルーフ</label> <label for="inputEquipment--2" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--2">本革シート</label> <label for="inputEquipment--3" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--3">バックモニタ</label></td>
							<th>ナビ</th>
							<td><select name="" class="selectBox selectBox--xm">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th>スライドドア</th>
							<td><select name="" class="selectBox selectBox--xm">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
						</tr>
						<tr>
							<td colspan="3"><label for="inputEquipment--4" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--4">アルミホイール</label> <label for="inputEquipment--5" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--5">ABS</label> <label for="inputEquipment--6" class="labelInput labelInput--m"><input type="checkbox" id="inputEquipment--6">自動ブレーキ</label></td>
							<th>エアコン</th>
							<td><select name="" class="selectBox selectBox--xm">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th>ドア数</th>
							<td><select name="" class="selectBox selectBox--xm">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
						</tr>
					</table>
					<table class="tbl tbl--3items">
						<tr>
							<th>評価</th>
							<td><select name="" class="selectBox selectBox--m">
									<option value="選択して下さい">選択して下さい</option>
							</select></td>
							<th></th>
							<td></td>
							<th></th>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="searchController">
				<a href="#" class="btn btn--s btn--black searchController__clear">クリア</a>
				<div class="searchController__right">
					<a href="#" class="searchController__save">条件を保存</a> <a href="#" class="btn btn--big btn--blue2 searchController__searchBtn"  data-set='retail__search'>検索</a>
				</div>
			</div>
		</div>
	</form>
</section>

<section class="resultArea"><?php if ((($tmp = @$_smarty_tpl->tpl_vars['result']->value)===null||$tmp==='' ? '' : $tmp)) {
echo $_smarty_tpl->getSubTemplate ("./result/".((string)$_smarty_tpl->tpl_vars['result']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
}?></section><?php }
}
?>