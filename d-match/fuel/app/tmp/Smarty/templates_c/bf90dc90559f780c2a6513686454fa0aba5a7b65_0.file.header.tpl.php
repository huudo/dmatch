<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-06 18:28:01
         compiled from "D:/xampp/htdocs/dmatch/d-match/fuel/app/views/layout/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3082557554221ec6d58_45530787%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf90dc90559f780c2a6513686454fa0aba5a7b65' => 
    array (
      0 => 'D:/xampp/htdocs/dmatch/d-match/fuel/app/views/layout/header.tpl',
      1 => 1465205263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3082557554221ec6d58_45530787',
  'variables' => 
  array (
    'menu_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_57554221ed60e5_20453598',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57554221ed60e5_20453598')) {
function content_57554221ed60e5_20453598 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3082557554221ec6d58_45530787';
?>
<header class="header">
	<div class="header__inner">
		<div class="header__top">
			<div class="header__logo">D-match</div>
		</div>
		<div class="header__bottom">
			<div class="header__nav">
				<ul>
					<li><a href="/top" <?php if ($_smarty_tpl->tpl_vars['menu_status']->value=='top') {?>class="cre"<?php }?>>仕入物件</a></li>
					<li><a href="/retail" <?php if ($_smarty_tpl->tpl_vars['menu_status']->value=='retail') {?>class="cre"<?php }?>>小売相場</a></li>
					<li><a href="/aa" <?php if ($_smarty_tpl->tpl_vars['menu_status']->value=='aa') {?>class="cre"<?php }?>>AA相場</a></li>
				</ul>
			</div>
			<div class="header__subnav">
				<ul>
					<li><a href="/soldoff">販売済み物件一覧</a></li>
					<li><a href="/grade">グレード検索</a></li>
					<li><a href="/setting">設定</a></li>
				</ul>
			</div>
		</div>
	</div>
</header><?php }
}
?>