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
    <?php include("header.php"); ?>

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

    <?php include("header.php"); ?>

</body>

</html>