<?php /* Smarty version 3.1.22-dev/18, created on 2016-06-06 18:28:01
         compiled from "D:/xampp/htdocs/dmatch/d-match/fuel/app/views/layout/template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:280057554221e4d0e4_70930200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1e127286212ad97f4a6c7d28f78e62a8c5135f3' => 
    array (
      0 => 'D:/xampp/htdocs/dmatch/d-match/fuel/app/views/layout/template.tpl',
      1 => 1465205263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280057554221e4d0e4_70930200',
  'variables' => 
  array (
    'title' => 0,
    'list_css' => 0,
    'css' => 0,
    'list_js' => 0,
    'js' => 0,
    'map_js' => 0,
    'js_load' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/18',
  'unifunc' => 'content_57554221ebf386_74627326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57554221ebf386_74627326')) {
function content_57554221ebf386_74627326 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '280057554221e4d0e4_70930200';
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
	<?php if (isset($_smarty_tpl->tpl_vars['map_js']->value)) {?>		
		<?php
$_from = $_smarty_tpl->tpl_vars['map_js']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['js_load'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['js_load']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js_load']->value) {
$_smarty_tpl->tpl_vars['js_load']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['js_load'];
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_load']->value;?>
"><?php echo '</script'; ?>
>	
		<?php
$_smarty_tpl->tpl_vars['js_load'] = $foreachItemSav;
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