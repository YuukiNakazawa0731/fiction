<?php
	session_start();

	//==[contents]==//
	$contents = "main";

	//二重送信防止トークン
	$token = "token_on";
	$_SESSION["contact_token"] = $token;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>株式会社 fiction</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="css/full/common.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="css/middle/common_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="css/mobile/common_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="css/full/main.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="css/middle/main_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="css/mobile/main_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="css/full/other.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="css/middle/other_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="css/mobile/other_mobile.css" media="screen and (max-width:480px)">
		<link rel="shortcut icon" href="images/fiction.ico">
		<link rel="stylesheet" href="../slick/slick.css">
		<link rel="stylesheet" href="../slick/slick-theme.css">
		<link rel="shortcut icon" href="../images/favicon.ico">
		<script src="../jQuery.js"></script>
		<script src="../slick/slick.js"></script>
		<script src="fiction.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	</head>

	<body>
		<!--==[ヘッダー]==-->
		<?php
			require("header.php");
		?>

		<!--==[メインコンテンツ]==-->
		<main>
			<!--=[メイン背景]=-->
			<div id="wrapper-main">
				<video src="images/cloud.mp4" id="title-mov" autoplay loop muted playsinline>
					<img src="images/cloud.png" id="title-img" alt="title_img">
				</video>
			</div>

			<!--=[タイトル]=-->
			<div id="title-target" class="main-container">
				<div id="title-list">
					<h1 id="t-txt1" class="title-item">？の力で</h1>
					<h1 id="t-txt2" class="title-item">明日を</h1>
					<h1 id="t-txt3" class="title-item">未来を変える</h1>
				</div>
			</div>


			<!--=[news]=-->
			<div id="news-target" class="cont-container-a">
				<div class="cont-container-a-inner">
					<!--=[コンテンツタイトル]=-->
					<div id="news-title" class="contents-title">
						<div class="title-inner">news</div>
					</div>

					<div id="news-container">
						<!--=[スクロールバー]=-->
						<div id="scroll-box">
							<div id="scroll-point"></div>
						</div>

						<!--=[news一覧]=-->
						<div id="news-outer">
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.8.20</div>
								<div class="news-category-pickup">pick up</div>
								<div class="news-txt">新商品の発表イベントを開催</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.8.2</div>
								<div class="news-category-notice">お知らせ</div>
								<div class="news-txt">ホームページをリニューアルしました</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.8.1</div>
								<div class="news-category-notice">お知らせ</div>
								<div class="news-txt">SDGsの取り組みの紹介</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.7.31</div>
								<div class="news-category-pickup">pick up</div>
								<div class="news-txt">新製品「ゴシック？」をリリースしました</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.7.29</div>
								<div class="news-category-notice">お知らせ</div>
								<div class="news-txt">弊社役員及び人事について</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.7.18</div>
								<div class="news-category-notice">お知らせ</div>
								<div class="news-txt">新型コロナウイルス感染症に関するお知らせ</div>
							</a>
							<a href="other/news_ex.php" class="news-inner">
								<div class="news-date">2022.7.1</div>
								<div class="news-categor-_notice">お知らせ</div>
								<div class="news-txt">弊社ホームページ開設のお知らせ</div>
							</a>
						</div>

						<!--=[もっと見る]=-->
						<div id="more-news-outer">
							<a href="other/news.php" id="more-news" class="scroll-btn">
								<span>
									もっと見る
									<canvas class="btn-icon"></canvas>
								</span>
								<span>
									view more!
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<!--=[concept]=-->
			<div id="concept-target" class="cont-container-b">
				<div class="cont-container-b-inner">
					<!--=[コンテンツタイトル]=-->
					<div id="concept-title" class="contents-title-w">
						<div class="title-inner-w">concept</div>
					</div>

					<!--=[concept一覧]=-->
					<div class="concept-inner">
						<div class="img-box-a">
							<img src="images/running.jpg" class="concept-img" alt="running">
						</div>
						<div class="concept-txt-a">
							『？』を通じて、より良い暮らしを目指し、世界の人々の文化・生活、健康増進、環境保持に貢献し、さらなる発展を目指します。
						</div>
					</div>

					<div class="concept-inner">
						<div class="img-box-b">
							<img src="images/dream_boy.jpg" class="concept-img" alt="dream_boy">
						</div>
						<div class="concept-txt-b">
							『？』を通じて、より良い暮らしを目指し、世界の人々の文化・生活、健康増進、環境保持に貢献し、さらなる発展を目指します。
						</div>
					</div>
				</div>
			</div>


			<!--=[products]=-->
			<div id="products-target" class="cont-container-a">
				<div class="cont-container-a-inner">
					<div id="products-title" class="contents-title">
						<div class="title-inner">products</div>
					</div>

					<!--=[products一覧]=-->
					<ul class="products-container js-slider">
						<li class="product-box">
							<img src="item_img/pop.png" alt="pop">
							<div class="product-txt">
								新商品「創英角ポップ」誕生
								<br>
								可愛らしい印象を与えます。
							</div>
						</li>

						<li class="product-box">
							<img src="item_img/gothic.png" alt="gothic">
							<div class="product-txt">
								ベーシックな「ゴシック」です。
								<br>
								視認性が高く便利です。
							</div>
						</li>

						<li class="product-box">
							<img src="item_img/meiryo.png" alt="meiryo">
							<div class="product-txt">
								硬すぎず、柔らかすぎない
								<br>
								使い勝手のいいメイリオ。
							</div>
						</li>

						<li class="product-box">
							<img src="item_img/shirt.png" alt="shirt">
							<div class="product-txt">
								ロゴがプリントされた。
								<br>
								シンプルなTシャツです
							</div>
						</li>

						<li class="product-box">
							<img src="item_img/minchou.png" alt="minchou">
							<div class="product-txt">
								美しく「可読性」が高い明朝体です。
								<br>
								和や伝統、高級感を感じさせます。
							</div>
						</li>
					</ul>

					<div id="shop-ent-btn-outer">
						<a href="../fiction_shop/shop.php" id="shop-ent-btn" class="scroll-btn">
							<span class="scroll-btn-pri">
								fiction shop
								<img src="images/blank.png" class="blank-img" alt="blank_img">
							</span>
							<span class="scroll-btn-sec">
								buy now!
							</span>
						</a>
					</div>
				</div>
			</div>
		</main>

		<!--==[フッター]==-->
		<footer>
			<?php
				require("footer.php");
			?>
		</footer>

		<?php
		//デバイスを縦にしてください
		require("../turn_device/turn_device.html");
		?>
	</body>
</html>
