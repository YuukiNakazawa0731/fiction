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
		<title>株式会社 fiction プライバシーポリシー</title>
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
					<a class="path-item" href="#">プライバシーポリシー</a>
				</li>
			</ul>

    	<!--=[プライバシーポリシー]=-->
			<div id="other-container">
				<section class="section-title">
					<div id="section-title-txt">プライバシーポリシー</div>
					<p>
						ウェブサイトを利用するにあたり、お客様は以下のご利用条件にご同意したものとみなされます。
						<br>
						なお、ご利用条件は予告無く変更される場合がありますので、最新の内容をご確認願います。
					</p>
				</section>

				<article id="privacy-txt-target" class="article-title">
					<div class="article-title-txt">サイトのご利用条件</div>
				</article>

				<div id="privacy-container">
					<div id="privacy-inner-head">
						株式会社 fiction（以下当社という。）は、当社がお客様からお預かりする個人情報を保護しその信頼を確保することを重要な社会的責務と認識し、役員及びすべての従業員は、個人情報管理の重要性と責任を自覚し、個人情報保護に関する法令を遵守し当社の保有する個人情報を適切に取り扱うとともに、よりよい製品・サービスを提供させていただくため、以下の項目に基づいて取り組みを推進し、責任を持ってお客様の個人情報を保護いたします。
						<br>
						※EEA圏内のお客様の個人情報について
						<br>
						当社では、EU加盟国、アイスランド、リヒテンシュタインおよびノルウェーから成る欧州経済領域（以下、これらの国を総称して「EEA」といいます。）に所在するお客様の個人情報（以下「個人データ」という。）	の取扱いに関しては、EU一般データ保護規則（以下「GDPR」といいます。）及び関連法令を遵守し、お客様の個人データの取扱い方針を以下のとおり定めます。
					</div>

					<dl id="privacy-inner-main">
						<dt class="privacy-head">個人データの利用目的</dt>
						<dd class="privacy-lead">
							当社は個人データについて、以下の利用目的のために利用いたします。
							<ul class="privacy-detail-outer">
								<li class="privacy-datail">当社のサービス・製品等に関する申込受付、提供、連絡および管理</li>
								<li class="privacy-datail">当社のサービス・製品等に関する申込受付、提供、連絡および管理に付帯・関連するすべての業務</li>
								<li class="privacy-datail">お客様からのお問い合わせへの対応、または当社からお客様へのお問い合わせ</li>
								<li class="privacy-datail">当社サイトとその他のサービスに変更があったことのお客様への連絡</li>
								<li class="privacy-datail">各種アフターサービスの提供</li>
								<li class="privacy-datail">各種イベント/キャンペーンの案内、運営、管理および各種情報の提供</li>
								<li class="privacy-datail">プレゼントへの応募、賞品の発送</li>
								<li class="privacy-datail">当社のサービス・製品に関するアンケートの実施</li>
								<li class="privacy-datail">当社のサービス・製品の内容の改善や新たなサービス・新製品の開発</li>
								<li class="privacy-datail">詐欺その他の金銭にかかわる犯罪を察知し防止するため</li>
								<li class="privacy-datail">広告の配信状況の把握、広告効果の測定及び、行動ターゲティング広告の表示のため</li>
								<li class="privacy-datail">なお、当社が第三者に提供する分析結果に個人が特定されるような情報は含まれません。</li>
							</ul>
						</dd>

						<dt class="privacy-head">個人データの取得</dt>
						<dd class="privacy-lead">
							当社は、当社サイトご利用のお客様から以下の個人データを取得することがあります。
							<ul class="privacy-detail-outer">
								<li class="privacy-datail">氏名、年齢、性別及び住所の詳細</li>
								<li class="privacy-datail">メールアドレス</li>
								<li class="privacy-datail">ユーザー名及びパスワード</li>
								<li class="privacy-datail">IPアドレス</li>
								<li class="privacy-datail">当社とのお取引履歴及びその内容</li>
								<li class="privacy-datail">お客様にお届けしたメールの開封に関する情報</li>
								<li class="privacy-datail">お客様にお届けしたメール上でのお客様のＵＲＬクリックに関する情報</li>
								<li class="privacy-datail">お客様が当社サイトにアクセスした際にお使いのブラウザ、オペレーティングシステム、プラットフォームなどの情報</li>
								<li class="privacy-datail">ソーシャルメディア上の公開プロフィールデータ</li>
							</ul>
							当社が個人データを収集するのは、当社サイトご利用のお客様による以下の行為があった場合です。
							<ul class="privacy-detail-outer">
								<li class="privacy-datail">当社サイトにおいて登録をしていただく場合</li>
								<li class="privacy-datail">製品の購入</li>
								<li class="privacy-datail">各種イベント/キャンペーンへのお申し込み、アンケートへのご協力、プレゼント・懸賞へのご応募をいただく場合</li>
								<li class="privacy-datail">当社サービスに関して当社にお問い合わせをいただく場合</li>
								<li class="privacy-datail">ソーシャルメディア上での写真投稿、コメント投稿</li>
								<li class="privacy-datail">その他当社サイトを利用する場合</li>
							</ul>
						</dd>

						<dt class="privacy-head">個人データの取扱いへの同意</dt>
						<dd class="privacy-lead">
							お客様は、本プライバシーポリシーに同意する意思表示を行うことにより、当社による個人データの取扱いに同意したこととなり、		当社は、その同意に基づいて、お客様の個人データを取扱います。
							<br>
							ただし、お客様はこの同意をいつでも変更することができます。
							<br>
							16歳未満のお客様におかれましては、本サービスを利用するにあたっては、保護者の方に同意をしていただくか、同意に対して保護者の方の許可をいただくようお願いいたします。
						</dd>

						<dt class="privacy-head">ソーシャルメディアについて</dt>
						<dd class="privacy-lead">
							各ソーシャルメディアに投稿された個人情報の取扱いは、各ソーシャルメディアのプライバシーポリシーに従います。
						</dd>

						<dt class="privacy-head">個人データの第三者への非開示</dt>
						<dd class="privacy-lead">
							ご提供いただいた個人データは、法令・規則又は当社の定めるところにより例外として扱うことが認められる場合を除き、ご本人の同意なく第三者に開示又は提供いたしません。
						</dd>

						<dt class="privacy-head">個人データの取扱いに関する請求について</dt>
						<dd class="privacy-lead">
							お客様は、関係法令の規定に従い当社の保持する個人データに関して確認、訂正・追加・削除、処理の制限、異議申立て及びデータ・ポータビリティに関する請求を行うことができます。

							また、お客様は、当社について又はお客様の住所の所在地について管轄権を有するデータ保護当局に対し、お客様の個人データの処理作業に関して異議を申し立てることができます。

							お客様が個人情報の開示をご希望される場合は、ご本人であることを確認させて頂いた上で、ご依頼の個人情報についてお知らせ致します。
						</dd>

						<dt class="privacy-head">個人データの域外移転</dt>
						<dd class="privacy-lead">
							当社がEEA（※）外の国に所在する第三者に対し個人データを移転する場合には、GDPRが定める内容に従い、個人データの保護に関して必要かつ適切な措置を講じます。
						</dd>

						<dt class="privacy-head">セキュリティについて</dt>
						<dd class="privacy-lead">
							第三者の不正なアクセスによる個人データの漏洩・流用・改ざん等を防止するため、ファイアウォール設置・コンピュータウイルス対策、その他合理的なセキュリティ対策を講じ、お客様の個人データの安全確保に努めております。
						</dd>

						<dt class="privacy-head">クッキー(Cookie)の利用</dt>
						<dd class="privacy-lead">
							当社サイト・モバイルアプリには、お客様が再度当社サイトを訪問された時に、お客様によりいっそう便利にご利用いただけるよう「クッキー」と呼ばれる技術を使用しているページがあります。
							<br>
							「クッキー」はお客さまのコンピュータを識別する業界標準の技術です。
							<br>
							お客様は、ブラウザの設定により「クッキー」の機能を無効にすることができますが、その結果当社サイト上のサービスの全部または一部がご利用できなくなることがあります。
						</dd>

						<dt class="privacy-head">本プライバシーポリシーの変更ついて</dt>
						<dd class="privacy-lead">
							当社は、プライバシーポリシーの全部または一部を変更する場合があります。
							<br>
							重要な変更がある場合には、本サービスが提供される当社サイトにおいて、分かりやすい方法でお知らせします。当社サイトご利用のお客様の責任において、定期的にご確認ください。
							<br>
							以上
							<p id="privacy-txt-end">
								2022年 8月
								株式会社 fiction
							</p>
						</dd>
					</dl>
				</div>

				<article class="article-title">
					<div class="article-title-txt">禁止事項について</div>
				</article>
				<div id="privacy-container-foot">
					当ウェブサイト上、又は、それに記載する事項について、以下の行為を禁止いたします。
					<ul class="privacy-detail-outer">
						<li class="privacy-datail">当ウェブサイト上で使用されている、すべてのロゴ、商標、映像や画像などの無断転載。</li>
						<li class="privacy-datail">当ウェブサイト上の電子メールアドレスを登録する等、虚偽の申告、届出を行なう行為。</li>
						<li class="privacy-datail">第三者もしくは当社の名誉もしくは信用を毀損する行為。</li>
						<li class="privacy-datail">コンピュータウィルス等有害なプログラムを使用もしくは提供する行為、またはその恐れのある行為。</li>
						<li class="privacy-datail">その他、法律、法令もしくは条例に違反する行為、またはその恐れのある行為。</li>
						<li class="privacy-datail">その他、当社が不適切と判断する行為。</li>
					</ul>
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
