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
		<title>株式会社 fiction ニュース</title>
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
					<a class="path-item" href="#">news</a>
				</li>
			</ul>

			<!--=[ニュース]=-->
			<div id="other-container">
				<section class="section-title">
					<div id="section-title-txt">ニュース一覧</div>
				</section>

				<div id="news-result-container">
					<div id="news-result-side">
						<a class="news-result-date">2022年 7月</a>
						<a class="news-result-date">2022年 8月</a>
						<a class="news-result-date">2022年 9月</a>
					</div>
					<div id="news-result-outer">
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.8.20</div>
							<button class="news-category-pickup">pick up</button>
							<div class="news-txt">新商品の発表イベントを開催</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.8.2</div>
							<button class="news-category-notice">お知らせ</button>
							<div class="news-txt">ホームページをリニューアルしました</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.8.1</div>
							<button class="news-category-notice">お知らせ</button>
							<div class="news-txt">SDGsの取り組みの紹介</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.7.31</div>
							<button class="news-category-pickup">pick up</button>
							<div class="news-txt">新製品「ゴシック？」をリリースしました</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.7.29</div>
							<button class="news-category-notice">お知らせ</button>
							<div class="news-txt">弊社役員及び人事について</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.7.18</div>
							<button class="news-category-notice">お知らせ	</button>
							<div class="news-txt">新型コロナウイルス感染症に関するお知らせ</div>
						</a>
						<a href="news_ex.php" class="news-cont">
							<div class="news-date">2022.7.1</div>
							<button class="news-category-notice">お知らせ</button>
							<div class="news-txt">弊社ホームページ開設のお知らせ</div>
						</a>
					</div>
				</div>
			</div>

			<!--return_btn-->
			<div class="return-btn-outer">
				<button id="return-btn" class="local-btn">TOP</button>
			</div>
		</main>

		<!--==[フッター]==-->
		<footer>
			<?php
				require("../footer.php");
			?>
		</footer>
	</body>
</html>
