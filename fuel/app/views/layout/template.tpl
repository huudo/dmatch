<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>D-MATCH｜{$title}</title>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	{if isset($list_css)}
		{foreach $list_css as $css}
			<link type="text/css" rel="stylesheet" href="assets/css/{$css}">
		{/foreach}
	{/if}
<!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
  <![endif]-->
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/default.js"></script>
	{if isset($list_js)}
		{foreach $list_js as $js}
			<script type="text/javascript" src="assets/js/{$js}"></script>
		{/foreach}
	{/if}
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
		{include file="./header.tpl"}

		<!-- メインコンテンツ -->
		<section class="contents">{include file="../$body"}</section>
	</div>
</body>
</html>
