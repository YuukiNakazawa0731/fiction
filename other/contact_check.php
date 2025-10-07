<?php
	session_start();

	//==[contents]==//
	$contents = "other";

	//直接アクセス防止
	if(!isset($_POST["check_submit"])){
		header("Location: contact.php");
	}

	//二重送信防止トークン
	$token = "token_on";
	$_SESSION["contact_token"] = $token;

	$token = "token_on";
	if(!isset($_SESSION["contact_token"]) || ($_SESSION["contact_token"] != $token)){
		header("Location: contact.php");
	}

	//サニタイズ
	$result_name = htmlspecialchars(($_POST["first_name"]." ".$_POST["last_name"]." 様"), ENT_QUOTES, "UTF-8");
	$result_ruby = htmlspecialchars(($_POST["first_ruby"])." ".($_POST["last_ruby"]), ENT_QUOTES, "UTF-8");
	$result_address = htmlspecialchars(($_POST["prefectures"]).($_POST["address_1"]).($_POST["address_2"]).($_POST["address_3"]), ENT_QUOTES, "UTF-8");
	$result_tel = htmlspecialchars(($_POST["tel_num"]), ENT_QUOTES, "UTF-8");
	$result_mail = htmlspecialchars(($_POST["mail_ad"]), ENT_QUOTES, "UTF-8");
	$contact_txt = htmlspecialchars(($_POST["contact_txt"]), ENT_QUOTES, "UTF-8");

	//送信処理
	if(isset($_POST["submit_contact"])){
		unset($_SESSION["contact_token"]);
	}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>株式会社 fiction お問い合わせ</title>
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
		<link rel="shortcut icon" href="../images/fiction.ico">
		<script src="../../jQuery.js"></script>
		<script src="../fiction.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
	</head>


	<body>
		<!--==[ヘッダー]==-->
		<header>
			<a href="../main.php" id="header-link">
				<img src="../images/logo.png" id="header-logo" alt="header_logo">
			</a>
		</header>

		<main>
			<!--=[お問い合わせ確認]=-->
			<div id="other-container">
				<section class="section-title">
					<div id="section-title-txt">お問い合わせ確認</div>
				</section>

				<iframe id="check-form-iframe" name="check_form_iframe" style="display: none;"></iframe>
				<form id="check-form" action="" method="post" target="check_form_iframe">
					<input type="hidden" name="result_name" value="<?php print ($result_name); ?>">
					<input type="hidden" name="result_ruby" value="<?php print ($result_ruby); ?>">
					<input type="hidden" name="result_address_1" value="<?php print ($$result_address); ?>">
					<input type="hidden" name="result_tel" value="<?php print ($result_tel); ?>">
					<input type="hidden" name="result_mail" value="<?php print ($result_mail); ?>">
					<input type="hidden" name="contact_txt" value="<?php print ($contact_txt); ?>">

					<div id="result-cont-outer">
						<dl class="result-cont">
							<dt class="result-list">お名前：</dt>
							<dd class="result-item">
								<?php print ($result_name); ?>
							</dd>
						</dl>
						<dl class="result-cont">
							<dt class="result-list">フリガナ：</dt>
							<dd class="result-item">
								<?php print ($result_ruby); ?>
							</dd>
						</dl>
						<dl class="result-cont">
							<dt class="result-list">ご住所：</dt>
							<dd class="result-item">
								<?php print ($result_address); ?>
							</dd>
						</dl>
						<dl class="result-cont">
							<dt class="result-list">電話番号：</dt>
							<dd class="result-item">
								<?php print ($result_tel); ?>
							</dd>
						</dl>
						<dl class="result-cont">
							<dt class="result-list">メールアドレス：</dt>
							<dd class="result-item">
								<?php print ($result_mail); ?>
							</dd>
						</dl>
						<dl class="result-cont">
							<dt class="result-list">お問い合わせ内容：</dt>
							<dd class="result-item">
								<?php print ($contact_txt); ?>
							</dd>
						</dl>
					</div>
					<div id="result-check">
						お問い合わせ内容はこちらで宜しいでしょうか？
						<br>
						よろしければ「送信する」ボタンを押して下さい。
						<br>
					</div>

					<div id="result-check-btn-outer">
						<input type="button" id="return-contact" class="sub-btn" value="内容を修正" onclick="history.back(-1)">
						<button type="button" id="submit-contact" class="main-btn" name="submit_contact">送信する</utton>
					</div>
				</form>
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

			<!--==[モーダル]==-->
			<div id="contact-thank-ol">
				<div id="thank-container">
					お問い合わせ 送信完了
					<div id="thank-lead">
						お問い合わせありがとうございます
						<br>
						後ほどお電話、またはメールにてご連絡致します。
						<br>
						しばらくお待ちください。
					</div>
				</div>

				<p id="return-main">画面クリックでトップページへ戻ります</p>
			</div>
		</main>
	</body>
</html>
