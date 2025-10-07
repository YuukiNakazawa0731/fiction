<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php
			//==[パスコントロール]==//
			//-[main]-//
			if($contents == "main"){
				$p_main = '';
				$p_other = 'other/';
				$p_ent = '../';
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
		<footer id="footer-container">
			<span id="footer-line"></span>
			<ul id="footer-menu-outer">
				<li class="footer-menu-cont">abouts
					<ul class="footer-menu-list-outer">
						<li class="footer-menu-list">
							<a href="<?php print($p_main); ?>#concept-target" class="footer-menu-item">fictionとは</a>
						</li>
						<li class="footer-menu-list">
							<a href="<?php print($p_other); ?>corp_info.php" class="footer-menu-item">会社情報</a>
						</li>
					</ul>
				</li>
				<li class="footer-menu-cont">products
					<ul class="footer-menu-list-outer">
						<li class="footer-menu-list">
							<a href="<?php print($p_main); ?>#products-target" class="footer-menu-item">製品情報</a>
						</li>
					</ul>
				</li>
				<li class="footer-menu-cont">contacts
					<ul class="footer-menu-list-outer">
						<li class="footer-menu-list">
							<div class="footer-menu-item">
								<span id="contact-foot">お問い合わせ</span>
							</div>
						</li>
						<li class="footer-menu-list">
							<a href="<?php print($p_ent); ?>fiction_shop/shop.php" class="footer-menu-item">オンラインショップ</a>
						</li>
					</ul>
				</li>
				<li class="footer-menu-cont">information
					<ul class="footer-menu-list-outer">
						<li class="footer-menu-list">
							<a href="<?php print($p_other); ?>privacy.php" class="footer-menu-item">プライバシーポリシー</a>
						</li>
					</ul>
				</li>
			</ul>

			<!--==[フッターメニュー(モバイル)]==-->
			<ul id="footer-menu-mobile">
				<li>
					<a href="<?php print($p_main); ?>#concept-target" class="footer-menu-item-m">fictionとは</a>
				</li>
				<li>
					<a href="<?php print($p_main); ?>#products-target" class="footer-menu-item-m">製品情報</a>
				</li>
				<li>
					<a href="<?php print($p_ent); ?>fiction_shop/shop.php" class="footer-menu-item-m">オンラインショップ</a>
				</li>
				<li>
					<a href="<?php print($p_other); ?>corp_info.php" class="footer-menu-item-m">会社情報</a>
				</li>
				<li>
					<a href="<?php print($p_other); ?>contact_form.php" class="footer-menu-item-m">お問い合わせ</a>
				</li>
				<li>
					<a href="<?php print($p_other); ?>privacy.php" class="footer-menu-item-m">プライバシーポリシー</a>
				</li>
			</ul>

			<ol id="sns-list">
				<li class="sns-item">
					<img src="<?php print($p_img); ?>images/facebook.png" class="sns-img" alt="facebook_logo">
				</li>
				<li class="sns-item">
					<img src="<?php print($p_img); ?>images/X_logo.png" class="sns-img" alt="X_logo">
				</li>
				<li class="sns-item">
					<img src="<?php print($p_img); ?>images/LINE.png" class="sns-img" alt="LINE_logo">
				</li>
			</ol>

			<p id="copy-right">Copyright &copy; fiction CO., LTD. All Rights Reserved 2022</p>
		</footer>
	</body>
</html>
