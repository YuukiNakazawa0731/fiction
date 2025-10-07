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
		<title>株式会社 fiction ニュース詳細</title>
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
					<a class="path-item" href="news.php">news</a>
				</li>
				<li class="path-list">
					<a class="path-item" href="#">ニュースの題名</a>
				</li>
			</ul>

			<!--=[news詳細]=-->
			<div id="other-container">
				<div id="news-ex-outer">
					<div id="news-ex-head">
						<div class="news-ex-date">2022.7.18</div>
						<button class="news-category-notice">お知らせ</button>
					</div>
					<h1 class="news-ex-title">ここにニュースの題名が入ります。</h1>
					<div class="news-ex-txt">
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
						ここにニュースの記事が入ります。<br>
					</div>
				</div>
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
