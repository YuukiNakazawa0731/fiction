<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php
			//==[パスコントロール]==//
			//-[main]-//
			if($contents == "main"){
				$p_main = '';
				$p_other = 'other/';
				$p_ent = '../../';
				$p_img = '';
			}

			//-[other]-//
			if($contents == "other"){
				$p_main = '../main.php';
				$p_other = '';
				$p_ent = '../../../';
				$p_img = '../';
			}
		?>
	</head>

	<body>
		<!--==[ローディング]==-->
		<div id="loading-containar">
			<div id="loading-contents">
				<div id="loading-contents-inner">
					<div id="pop-logo-box">
						<img src="<?php print($p_img); ?>images/load_logo_pop.png" id="load-logo-pop" alt="load_logo">
					</div>
					<div id="pop-ball-box">
						<span id="pop-ball"></span>
					</div>
				</div>
				<img src="<?php print($p_img); ?>images/load_logo_bottom.png" id="load-logo-bottom" alt="load_logo_bottom">
			</div>
		</div>


		<header>
			<a href="<?php print($p_main); ?>" id="header-link">
				<img src="<?php print($p_img); ?>images/logo.png" id="header-logo" alt="header_logo">
			</a>
			<div id="menu-icon">
				<div id="menu-icon-inner">
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<span class="menu-line"></span>
					<div id="menu-icon-txt">MENU</div>
				</div>
			</div>
		</header>


		<!--==[サイドバー(お問い合わせ)]==-->
		<div id="contact-outer">
			<div id="contact-tab">
				<div id="contact-tab-inner">
					<div id="contact-tab-txt">CONTACT</div>
					<div id="contact-tab-img-box"><!--mail_icon-->
					</div>
				</div>
			</div>

			<?php
				//お問い合わせフォーム(メイン)
				require("other/contact.php");
			?>
		</div>


		<!--=メインメニュー=-->
		<div id="main-menu-outer">
			<div id="menu-band-top"></div>
			<div id="band-top-line"></div>
			<div id="menu-band"></div>
			<div id="menu-band-bottom"></div>
			<div id="band-bottom-line"></div>
			<div id="menu-list">
				<a href="<?php print($p_main); ?>#news-target" class="menu-item">news</a>
				<a href="<?php print($p_main); ?>#concept-target" class="menu-item">concept</a>
				<a href="<?php print($p_main); ?>#products-target" class="menu-item">products</a>
				<a href="<?php print($p_ent); ?>fiction_shop/shop.php" class="menu-item">shopping</a>
			</div>
		</div>


		<!--=[モバイルメニュー]=-->
		<!--メニューボタン(モバイル)-->
		<div id="menu-btn-m">
			<div id="menu-btn-m-inner">
				<span class="menu-line-m"></span>
				<span class="menu-line-m"></span>
				<span class="menu-line-m"></span>
			</div>
		</div>

		<!--メニューリスト(モバイル)-->
		<div id="menu-outer-m">
			<a href="<?php print($p_main); ?>" id="menu-logo-m">
				<img src="<?php print($p_img); ?>images/logo.png" id="menu-logo-img-m" alt="menu_logo_m">
			</a>
			<div id="menu-list-m">
				<a href="<?php print($p_main); ?>#concept-target" class="menu-item-m">fictionとは</a>
				<a href="<?php print($p_main); ?>#products-target" class="menu-item-m">製品情報</a>
				<a href="<?php print($p_ent); ?>fiction_shop/shop.php" class="menu-item-m">オンラインショップ</a>
				<a href="<?php print($p_other); ?>corp_info.php" class="menu-item-m">会社情報</a>
				<a href="<?php print($p_other); ?>contact_form.php" class="menu-item-m">お問い合わせ</a>
				<a href="<?php print($p_other); ?>privacy.php" class="menu-item-m">プライバシーポリシー</a>

				<ol id="sns-list-m">
					<li class="sns-item"><img src="<?php print($p_img); ?>images/facebook.png" class="sns-img" alt="facebook_logo"></li>
					<li class="sns-item"><img src="<?php print($p_img); ?>images/X_logo.png" class="sns-img" alt="X_logo"></li>
					<li class="sns-item"><img src="<?php print($p_img); ?>images/LINE.png" class="sns-img" alt="LINE_logo"></li>
				</ol>
			</div>
		</div>
	</body>
</html>
