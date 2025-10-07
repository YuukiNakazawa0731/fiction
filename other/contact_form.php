<?php
	//==[contents]==//
	$contents = "other";

	//二重送信防止トークン
	$token = "token_on";
	$_SESSION["contact_token"] = $token;
?>
<!--モバイルのみで使用-->

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>株式会社 fiction お問い合わせフォーム</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="../css/middle/common_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="../css/mobile/common_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="../css/middle/main_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="../css/mobile/main_mobile.css" media="screen and (max-width:480px)">
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
					<a class="path-item" href="#">お問い合わせ</a>
				</li>
			</ul>

			<div id="other-container">
				<article id="contact-target" class="article-title">
					<div class="article-title-txt">お問い合わせフォーム</div>
				</article>

				<!--==[お問い合わせフォーム]==-->
				<form action="contact_check.php" method="post" id="contact-form-m">

					<!-- error message -->
					<div class="error-nav"></div>

					<dl class="input-area">
						<dt class="input-list">
							お名前
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									性
									<p class="err-first_name"><!-- error message --></p>
								</div>
								<input type="text" id="first-name" class="input-case-s" name="first_name" value="">
							</div>
							<div class="input-outer">
								<div class="input-label">
									名
									<p class="err-last_name"><!-- error message --></p>
								</div>
								<input type="text" id="last-name" class="input-case-s" name="last_name" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							フリガナ
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									セイ
									<p class="err-first_ruby"><!-- error message --></p>
								</div>
								<input type="text" id="first-ruby" class="input-case-s" name="first_ruby" value="">
							</div>
							<div class="input-outer">
								<div class="input-label">
									メイ
									<p class="err-last_ruby"><!-- error message --></p>
								</div>
								<input type="text" id="last-ruby" class="input-case-s" name="last_ruby" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							郵便番号
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									半角(ハイフンあり)
									<p class="err-post_code"><!-- error message --></p>
								</div>
								<input type="text" id="post-code" class="input-case-m" name="post_code" value=""
								onKeyUp="AjaxZip3.zip2addr('post_code','','prefectures', 'address1');">
							</div>
						</dd>
					</dl>
					<dl class="input-area">
						<dt class="input-list">
							都道府県
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<!-- error message -->
									<p class="err-prefectures"></p>
								</div>
								<select id="input-prefectures" class="input-case-s" name="prefectures" value="">
									<option value="">--選択してください--</option>
									<option value="北海道">北海道</option>
									<option value="青森県">青森県</option>
									<option value="岩手県">岩手県</option>
									<option value="宮城県">宮城県</option>
									<option value="秋田県">秋田県</option>
									<option value="山形県">山形県</option>
									<option value="福島県">福島県</option>
									<option value="茨城県">茨城県</option>
									<option value="栃木県">栃木県</option>
									<option value="群馬県">群馬県</option>
									<option value="埼玉県">埼玉県</option>
									<option value="千葉県">千葉県</option>
									<option value="東京都">東京都</option>
									<option value="神奈川県">神奈川県</option>
									<option value="新潟県">新潟県</option>
									<option value="富山県">富山県</option>
									<option value="石川県">石川県</option>
									<option value="福井県">福井県</option>
									<option value="山梨県">山梨県</option>
									<option value="長野県">長野県</option>
									<option value="岐阜県">岐阜県</option>
									<option value="静岡県">静岡県</option>
									<option value="愛知県">愛知県</option>
									<option value="三重県">三重県</option>
									<option value="滋賀県">滋賀県</option>
									<option value="京都府">京都府</option>
									<option value="大阪府">大阪府</option>
									<option value="兵庫県">兵庫県</option>
									<option value="奈良県">奈良県</option>
									<option value="和歌山県">和歌山県</option>
									<option value="鳥取県">鳥取県</option>
									<option value="島根県">島根県</option>
									<option value="岡山県">岡山県</option>
									<option value="広島県">広島県</option>
									<option value="山口県">山口県</option>
									<option value="徳島県">徳島県</option>
									<option value="香川県">香川県</option>
									<option value="愛媛県">愛媛県</option>
									<option value="高知県">高知県</option>
									<option value="福岡県">福岡県</option>
									<option value="佐賀県">佐賀県</option>
									<option value="長崎県">長崎県</option>
									<option value="熊本県">熊本県</option>
									<option value="大分県">大分県</option>
									<option value="宮崎県">宮崎県</option>
									<option value="鹿児島県">鹿児島県</option>
									<option value="沖縄県">沖縄県</option>
								</select>
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							住所(市区町村)
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-address_1"><!-- error message --></p>
								</div>
								<input type="text" id="address-1" class="input-case-l" name="address_1" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							番地
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-address_2"><!-- error message --></p>
								</div>
								<input type="text" id="address-2" class="input-case-l" name="address_2" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							マンション名など
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-address_3"><!-- error message --></p>
								</div>
								<input type="text" id="address-3" class="input-case-l" name="address_3" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							電話番号
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-tel_num"><!-- error message --></p>
								</div>
								<input type="text" id="tel-num" class="input-case-m" name="tel_num" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							メールアドレス
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-mail_ad"><!-- error message --></p>
								</div>
								<input type="text" id="mail-ad" class="input-case-l" name="mail_ad" value="">
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							お問い合わせ内容
							<span class="required-icon">※</span>
						</dt>
						<dd class="input-item">
							<div class="input-outer">
								<div class="input-label">
									<p class="err-contact_txt"><!-- error message --></p>
								</div>
								<textarea id="contact-txt" name="contact_txt" cols="500" placeholder="お問い合わせ内容を入力してください"></textarea>
							</div>
						</dd>
					</dl>

					<dl class="input-area">
						<dt class="input-list">
							個人情報保護について
							<span class="required-icon">※</span>
						</dt>
						<dd class="privacy-item">
							<div class="privacy-lead-contact">
								ご入力いただきますお客様の個人情報（住所・お名前・お電話番号・メールアドレス等）は、お問合せに対するお返事および、お返事にあたって参考事項として利用、保管させていただきます。その他、個人情報の取り扱いに関しましては、弊社
									<a id="privacy-link" href="privacy.php">
										「プライバシーポリシー」
									</a>
								をご覧ください。
								</div>
								<div id="privacy-check-area">
								<p class="err-privacy_check"><!-- error message --></p>
								<input type="checkbox" id="privacy-checkbox" name="privacy_check">
								<p class="privacy-check-lead">プライバシーポリシーに同意します</p>
							</div>
						</dd>
					</dl>

					<dl id="check-submit-outer">
						<input type="submit" id="check-submit" class="reg-btn" name="check_submit" value="確認画面へ">
						<button id="close-contact-btn" class="reg-btn">閉じる</button>	
					</dl>
				</form>
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
