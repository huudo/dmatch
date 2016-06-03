<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-04 01:00:38
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/layout/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:199765751a9a68bf3a3_02930969%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef64cc3da8a4326aae3fa2a7004e10c3cb4c93d8' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/layout/header.tpl',
      1 => 1464967072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199765751a9a68bf3a3_02930969',
  'variables' => 
  array (
    'menu_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_5751a9a68c6db4_08786864',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5751a9a68c6db4_08786864')) {
function content_5751a9a68c6db4_08786864 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '199765751a9a68bf3a3_02930969';
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