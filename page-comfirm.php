<!--
Template Name: comfirm
-->

<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/comfirm.css">
    <title>Colead LP_COMFIRM</title>
</head>

<body>
    <!-- header -->
    <div class="mv">
        <div class="mv-bg">
            <header class="header">
                <div class="header-bg">
                    <div class="header-inner inner">
                        <h1 class="header-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sp/logo.svg" alt="">
                        </h1>
                        <p class="header-txt">
                            太陽光発電所の<span class="sp-br"></span>
                            スピード買取ならコリード
                        </p>
                    </div>
                </div>
            </header><!-- /.header -->
        </div>
    </div>

    <main class='main'>
        <h2 class='main-title'>入力内容の確認</h2>
        <div class='main-textbox'>
            <div class='main-textbox_content'>
                <p>お名前</p>
            </div>
            <div class='main-textbox_content'>
                <p>メールアドレス</p>
            </div>
            <div class='main-textbox_content'>
                <p>発電所住所</p>
            </div>
            <div class='main-textbox_content'>
                <p>Google Map</p>
            </div>
            <div class='main-textbox_content'>
                <p>FIT単価（税込）</p>
            </div>
            <div class='main-textbox_content'>
                <p>DC容量</p>
            </div>
            <div class='main-textbox_content'>
                <p>配線図</p>
            </div>
            <div class='main-textbox_content'>
                <p>遠隔監視システム<br>の導入</p>
            </div>
            <div class='main-textbox_content'>
                <p>直近1年での<br>メンテナンス</p>
            </div>
            <div class='main-textbox_content'>
                <p>パネルメーカー</p>
            </div>
            <div class='main-textbox_content'>
                <p>PCSメーカー</p>
            </div>
            <div class='checkbox'>
                <div class='checkbox-content'>
                    <input id='agree' type="checkbox" class='checkbox-content_btn' name='agree'>
                    <label for='agree' class='checkbox-content_txt'>
                        <span class='checkmark'>プライバシーポリシーに同意する。</span>
                    </label>
                </div>
            </div>
            <a href="<?php echo get_template_directory_uri(); ?>/page-thanks.php" class='comfirm-button'>
                <button type="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sp/submit_btn.png" alt="" class='comfirm-button_img'>
                </button>
            </a>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-bg">
            <div class="footer-inner inner">
                <h2 class="footer-ttl"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/sp/footer-logo.png" alt=""></h2>
                <div class="footer-txt">
                    <p class="txt">株式会社Colead</p>
                    <p class="txt">東京都千代田区平河町1-8-2</p>
                </div>
                <p class="copyright">Copyright © Colead Allrights Reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>