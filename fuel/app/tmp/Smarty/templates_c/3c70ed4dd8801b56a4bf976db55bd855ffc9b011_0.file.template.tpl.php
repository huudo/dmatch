<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-03 17:34:24
         compiled from "D:/xampp/htdocs/d-match/fuel/app/views/layout/template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17908575141100914a8_33516983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c70ed4dd8801b56a4bf976db55bd855ffc9b011' => 
    array (
      0 => 'D:/xampp/htdocs/d-match/fuel/app/views/layout/template.tpl',
      1 => 1464942854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17908575141100914a8_33516983',
  'variables' => 
  array (
    'title' => 0,
    'list_css' => 0,
    'css' => 0,
    'list_js' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_57514110103717_61708517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57514110103717_61708517')) {
function content_57514110103717_61708517 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '17908575141100914a8_33516983';
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>D-MATCH｜<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<?php if (isset($_smarty_tpl->tpl_vars['list_css']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['list_css']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['css'];
?>
			<link type="text/css" rel="stylesheet" href="assets/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
">
		<?php
$_smarty_tpl->tpl_vars['css'] = $foreachItemSav;
}
?>
	<?php }?>
<!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="assets/js/html5shiv.min.js"><?php echo '</script'; ?>
>
  <![endif]-->
<?php echo '<script'; ?>
 src="assets/js/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/default.js"><?php echo '</script'; ?>
>
	<?php if (isset($_smarty_tpl->tpl_vars['list_js']->value)) {?>
		<?php
$_from = $_smarty_tpl->tpl_vars['list_js']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['js'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['js']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['js'];
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="assets/js/<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
"><?php echo '</script'; ?>
>
		<?php
$_smarty_tpl->tpl_vars['js'] = $foreachItemSav;
}
?>
	<?php }?>
</head>
<body>
	<div class="layer"></div>
	<div class="modalArea">
		<div class="modalArea__top">
			<a href="#" class="modalArea__close"><img src="assets/img/btn_close.png" alt=""></a>
		</div>
		<div class="modalArea__contents"></div>
	</div>

	<div class="wrapper">
		<!-- ヘッダー -->
		<?php echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


		<!-- メインコンテンツ -->
		<section class="contents"><?php echo $_smarty_tpl->getSubTemplate ("../".((string)$_smarty_tpl->tpl_vars['body']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</section>
	</div>
</body>
</html>
<?php }
}
?>