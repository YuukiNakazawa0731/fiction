<?php
	//==[contents]==//
	$contents = "other";

	//二重送信防止トークン
	$token = "token_on";
	$_SESSION["contact_token"] = $token;
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>株式会社 fiction 企業情報</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="../css/full/common.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="../css/middle/common_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="../css/mobile/common_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="../css/full/main.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="../css/middle/main_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="../css/mobile/main_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="../css/full/other.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="../css/middle/other_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="../css/mobile/other_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
		<link rel="shortcut icon" href="../images/fiction.ico">
		<script src="../../jQuery.js"></script>
		<script src="../fiction.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	</head>


	<body>
		<!--==[ヘッダー]==-->
		<?php
			require("../header.php");
		?>

		<main>
			<div class="mobile-space"></div>
			<!--==[パンくず]==-->
			<ul class="page-path">
				<li class="path-list">
					<a id="path-home" href="../main.php">HOME</a>
				</li>
				<li class="path-list">
					<a class="path-item" href="#">企業情報</a>
				</li>
			</ul>

			<!--=[企業情報]=-->
			<div id="other-container">
				<section class="section-title">
					<div id="section-title-txt">企業情報</div>
				</section>

				<article class="article-title">
					<div class="article-title-txt">会社概要</div>
				</article>

				<div id="corp-info-main">
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">会社名</dt>
						<dd class="ci-txt">株式会社 fiction</dd>
					</dl>
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">本社</dt>
						<dd class="ci-txt">
							住所:〒060-0042 北海道札幌市中央区大通西１丁目
							<br>
							TEL:011-〇〇〇-〇〇〇〇（代表）
						</dd>
						<dd class="map-info">
							<a class="map-info-link" href="https://goo.gl/maps/bnrmJtCGBJnLzdpn7" target="blank">
								map
								<img src="../images/blank.png" class="map-blank" alt="blank">
							</a>
						</dd>
					</dl>
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">設立</dt>
						<dd class="ci-txt">2022年8月</dd>
					</dl>
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">資本金</dt>
						<dd class="ci-txt">3千万円</dd>
					</dl>
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">取締役社長</dt>
						<dd class="ci-txt">仲澤 勇樹</dd>
					</dl>
					<dl class="ci-txt-box">
						<dt class="ci-txt-head">事業内容</dt>
						<dd class="ci-txt">
							謎の物体「？」を用いた用品の製造・販売。
							<br>
							「？」を用いたイベント・企画業務。
						</dd>
					</dl>
				</div>

				<article class="article-title">
					<div class="article-title-txt">アクセスマップ</div>
				</article>

				<figure id="map-main">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23319.98115388374!2d141.3518864!3d43.0625171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b299d5f87648d%3A0xe2041a78c3222031!2z44GV44Gj44G944KN44OG44Os44OT5aGU!5e0!3m2!1sja!2sjp!4v1660616470475!5m2!1sja!2sjp" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</figure>
			</div>

			<!--return_btn-->
			<div class="return-btn-outer">
				<button id="return-btn" class="local-btn">TOP</button>
			</div>
		</main>

		<!--==[フッター]==-->
		<?php
			require("../footer.php");
		?>
	</body>
</html>
