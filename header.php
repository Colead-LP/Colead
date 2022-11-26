<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colead LP_TOP</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- header -->
    <header class="header">
        <div class="header-bg">
            <div class="header-inner inner">
                <a href="<?php home_url(); ?>" class="header_link">
                    <h1 class="header-logo">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Colead">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Colead">
                    </h1>
                </a>
                <p class="header-txt">
                    太陽光発電所の<br>
                    スピード買取ならコリード
                </p>
            </div>
        </div>
    </header><!-- /.header -->