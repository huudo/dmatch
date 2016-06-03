<header class="header">
	<div class="header__inner">
		<div class="header__top">
			<div class="header__logo">D-match</div>
		</div>
		<div class="header__bottom">
			<div class="header__nav">
				<ul>
					<li><a href="/top" {if $menu_status eq 'top'}class="cre"{/if}>仕入物件</a></li>
					<li><a href="/retail" {if $menu_status eq 'retail'}class="cre"{/if}>小売相場</a></li>
					<li><a href="/aa" {if $menu_status eq 'aa'}class="cre"{/if}>AA相場</a></li>
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
</header>