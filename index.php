<?php
require("calculate.php");
include('mail.php');
?>

<?php get_header(); ?>
<?php if ($page_flag === 1) : ?>
    <?php include('confirm.php'); ?>
<?php elseif ($page_flag === 2) : ?>
    <?php include('thanks.php'); ?>
<?php else : ?>
    <!-- .mv -->
    <div class="mv">
        <div class="mv-bg">
            <div class="mv-inner inner">
                <div class="mv-txt">
                    <p class="txt txt01 sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.mv_ttl_01.png" alt=""></p>
                    <p class="txt txt01 pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.mv_ttl_01.png" alt=""></p>
                    <p class="txt txt02 sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.mv_ttl_02.png" alt=""></p>
                    <p class="txt txt02 pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.mv_ttl_02.png" alt=""></p>
                </div>
                <div class="mv-label">
                    <p class="label">手数料無料</p>
                    <p class="label">買取実績多数</p>
                </div>
                <div class="mv-btn sp">
                    <a href="#contact" class="btn to-calc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.btn.to_simulation.png" alt="無料金額シミュレーションボタン"></a>
                </div>
                <div class="mv-btn pc">
                    <a href="#contact" class="btn to-calc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.btn.to_simulation.png" alt="無料金額シミュレーションボタン"></a>
                </div>
            </div>
        </div>
    </div><!-- /.mv -->
    <!-- .solve -->
    <section class="solve">
        <div class="solve-header">
            <div class="solve-header-bg">
                <div class="solve-header-inner inner">
                    <h2 class="solve-header-ttl">太陽光発電所をすぐに売りたい</h2>
                    <p class="solve-header-txt">そのようなお悩みを抱えている方は<span class="sp-br"></span>
                        ご相談ください。</p>
                    <div class="solve-header-content">
                        <ul class="solve-header-list">
                            <li class="solve-header-item">
                                <p class="solve-header-item-txt">資金が必要になり<span class="sp-br"></span>
                                    なるべく早く現金化したい。</p>
                            </li>
                            <li class="solve-header-item">
                                <p class="solve-header-item-txt">管理が手間。度重なる制度改正にも<span class="br"></span>
                                    ついていけないので手放したい。</p>
                            </li>
                            <li class="solve-header-item">
                                <p class="solve-header-item-txt">他社に依頼したがなかなか売れない。</p>
                            </li>
                        </ul>
                        <div class="solve-header-img">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.solve_header_img.png" alt="">
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.solve_header_img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="solve-footer">
            <div class="solve-footer-bg">
                <div class="solve-footer-inner inner">
                    <h3 class="solve-footer-ttl">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.solve_footer_ttl.png" alt="">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.solve_footer_ttl.png" alt="">
                    </h3>
                    <p class="solve-footer-txt">スムーズな売却でストレスフリー。</p>
                    <p class="solve-footer-txt">太陽光発電の買取なら<ruby>Colead<rt>コリード</rt></ruby>にご相談ください。<span class="pc-br"></span>自社で買い取るのでスピーディ。<span class="pc-br"></span>太陽光発電事業に精通したプロフェッショナルがワンストップで対応するので手続きもスムーズです。</p>
                    <div class="solve-footer-graph">
                        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.solve_footer_graph.png" alt="">
                        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.solve_footer_graph.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.solve -->
    <!-- .cta -->
    <?php include 'templates/cta.php'; ?>
    <!-- /.cta -->
    <!-- .reason -->
    <section class="reason">
        <div class="reason-bg">
            <div class="reason-inner inner">
                <h2 class="reason-ttl">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.reason_ttl.png" alt="">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.reason_ttl.png" alt="">
                </h2>
                <ul class="reason-list">
                    <li class="reason-item">
                        <div class="reason-item-img">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.reason_item01_img.png" alt="">
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.reason_item01_img.png" alt="">
                        </div>
                        <h3 class="reason-item-ttl">直接買取だから現金化までが<span class="sp-br"></span>スピーディ。<span class="pc-br"></span>
                            手数料も0円</h3>
                        <p class="reason-item-txt">弊社は仲介業者ではなく、太陽光発電事業者として自社買取を行います。<span class="br"></span>
                            そのため、<span class="txt__underline">発電所の購入完了までの時間が非常に短い</span>ことが大きな特徴です。</p>
                    </li>
                    <li class="reason-item">
                        <div class="reason-item-img">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.reason_item02_img.png" alt="" i>
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.reason_item02_img.png" alt="">
                        </div>
                        <h3 class="reason-item-ttl">太陽光投資のプロがワンストップ<span class="sp-br"></span>で対応。<span class="pc-br"></span>
                            手続きもスムーズ</h3>
                        <p class="reason-item-txt">弊社では開発に関与した太陽光発電所が合計10MWを超える実務実績を保有しております。<span class="txt__underline"> 発電所売買に関するノウハウを基に担当者が即断即決で進めるため、意思決定が速いこと</span>が特徴です。<span class="sp-br"></span>
                            初めて発電所を売却される方も丁寧にリードいたします。</p>
                    </li>
                    <li class="reason-item">
                        <div class="reason-item-img">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.reason_item03_img.png" alt="">
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.reason_item03_img.png" alt="">
                        </div>
                        <h3 class="reason-item-ttl">低圧から高圧まで即時購入可能<span class="sp-br"></span>な<span class="pc-br"></span>豊富な資金を保有</h3>
                        <p class="reason-item-txt">弊社では<span class="txt__underline">基本的に現金にて発電所を購入</span>いたします。銀行融資の進捗状況によって購入が遅れるといった事態はございません。</p>
                    </li>
                    <li class="reason-item">
                        <div class="reason-item-img">
                            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.reason_item04_img.png" alt="">
                            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.reason_item04_img.png" alt="">
                        </div>
                        <h3 class="reason-item-ttl">全国の発電所が買取対象。<span class="br"></span>
                            現地調査も対応</h3>
                        <p class="reason-item-txt">抑制エリアでも喜んで購入いたします。また、<span class="txt__underline">他の査定会社に購入を断られた発電所でも購入の可能性はあります。</span><span class="sp-br"></span>
                            本当に売却できるか悩ましい発電所であっても、是非一度お声がけください。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- /.reason -->
    <!-- .cta -->
    <?php include 'templates/cta.php'; ?>
    <!-- /.cta -->
    <!-- .flow -->
    <section class="flow">
        <div class="flow-bg">
            <div class="flow-inner inner">
                <div class="flow-ttl">
                    <h2 class="flow-ttl__ja">買取までの流れ</h2>
                    <p class="flow-ttl__en sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.flow_bg.png" alt=""></p>
                    <p class="flow-ttl__en pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.flow_bg.png" alt=""></p>
                </div>
                <ul class="flow-list">
                    <li class="flow-item">
                        <div class="flow-item-step"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_01.png" alt=""></div>
                        <div class="flow-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_01_img.png" alt="">
                        </div>
                        <h3 class="flow-item-ttl">簡易査定</h3>
                        <p class="flow-item-txt">まずは<a class="to-calc" href="#contact">簡易査定</a>。30秒で概算の査定額が分かります。</p>
                    </li>
                    <li class="flow-item">
                        <div class="flow-item-step"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_02.png" alt=""></div>
                        <div class="flow-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_02_img.png" alt="">
                        </div>
                        <h3 class="flow-item-ttl">お問い合わせ</h3>
                        <p class="flow-item-txt">価格の目線が合う方はお問い合わせください。追加の資料を頂くことでより精緻な金額を査定させていただきます。過去の売電金額によっては初期査定額よりも価格が上がることも。</p>
                    </li>
                    <li class="flow-item">
                        <div class="flow-item-step"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_03.png" alt=""></div>
                        <div class="flow-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_03_img.png" alt="">
                        </div>
                        <h3 class="flow-item-ttl">現地調査</h3>
                        <p class="flow-item-txt">最短日程にて現地調査。担当者が現地訪問し、発電所の状況を確認+売主及び地主とご面談させていただきます。</p>
                    </li>
                    <li class="flow-item">
                        <div class="flow-item-step"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_04.png" alt=""></div>
                        <div class="flow-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_04_img.png" alt="">
                        </div>
                        <h3 class="flow-item-ttl">売買金額のご提示</h3>
                        <p class="flow-item-txt">合意次第、契約書の確認＆締結。その後、ID・電力会社契約・土地所有権/地上権の名義変更に必要な書類をやり取りします。</p>
                    </li>
                    <li class="flow-item">
                        <div class="flow-item-step"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_05.png" alt=""></div>
                        <div class="flow-item-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flow_item_05_img.png" alt="">
                        </div>
                        <h3 class="flow-item-ttl">決済</h3>
                        <p class="flow-item-txt">司法書士による土地に関する登記申請時に決済いたします。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- /.flow -->
    <!-- .faq -->
    <section class="faq">
        <div class="faq-bg">
            <div class="faq-inner inner">
                <div class="faq-ttl">
                    <h2 class="faq-ttl__ja">よくあるご質問</h2>
                    <p class="faq-ttl__en sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.faq_ttl__en.png" alt=""></p>
                    <p class="faq-ttl__en pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.faq_ttl__en.png" alt=""></p>
                </div>
                <ul class="faq-list">
                    <li class="faq-item">
                        <p class="faq-item-q">査定は費用がかかりますか？</p>
                        <p class="faq-item-a">査定は無料です。お気軽にご相談ください。</p>
                    </li>
                    <li class="faq-item">
                        <p class="faq-item-q">発電所の土地が賃貸でも売却可能でしょうか？</p>
                        <p class="faq-item-a">土地の契約形態が地上権設定契約で<span class="sp-br"></span>あれば買取可能です。</p>
                    </li>
                    <li class="faq-item">
                        <p class="faq-item-q">保守管理やメンテナンス、フェンスの設置等の改正FIT法を遵守していない発電所も売却可能でしょうか？</p>
                        <p class="faq-item-a">価格の調整が入る可能性がありますが、買取可能です。</p>
                    </li>
                    <li class="faq-item">
                        <p class="faq-item-q">メンテナンス業者が決められいる場合においても売却可能でしょうか？</p>
                        <p class="faq-item-a">価格の調整が入る可能性がありますが、買取可能です。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section><!-- /.faq -->
    <!-- .cta -->
    <?php include 'templates/cta.php'; ?>
    <!-- /.cta -->
    <!-- .contact -->
    <section id="contact" class="contact">
        <div class="contact-bg">
            <div class="contact-inner inner">
                <h2 class="contact-ttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_h2.png" alt="">
                </h2>
                <div class="contact-wrap">
                    <!-- .calc -->
                    <form id="calc" class="calc" action="" method="post">
                        <div class="calc-ttl">お持ちの発電所の情報を<br class="sp-br">教えてください。</div>
                        <ul class="calc-list">
                            <li class="calc-item">
                                <p class="calc-item-label">
                                    直近1年の売電金額（税込）<span class="require">必須</span>
                                </p>
                                <input type="number" name="year_fee" id="year_fee" class="input-number">
                                <span class="unit">万円</span>
                                <span class="year_fee error-txt"></span>
                            </li>
                            <li class="calc-item">
                                <p class="calc-item-label">
                                    土地賃料<span class="require">必須</span>
                                </p>
                                <input type="text" name="rent" id="rent" class="input-number">
                                <span class="unit">万円</span>
                                <span class="rent error-txt"></span>
                            </li>
                            <li class="calc-item">
                                <p class="calc-item-label">
                                    稼働開始年月<span class="require">必須</span>
                                </p>
                                <!-- <select name="operation_period" class="input-number" id="operation_period"> -->
                                <div class="select_wrap">
                                    <?php
                                    echo GetDateSelecter();
                                    ?>
                                </div>
                                <span class="operation_period error-txt"></span>
                                <!-- </select> -->
                            </li>
                        </ul>
                        <div class="calc-start">
                            <!-- <button type="submit" id="calc_start" class="calc-start-btn js-switch"> -->
                            <button type="button" id="calc_start" class="calc-start-btn js-switch" onclick="onClick()">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/calc_btn.png" alt="" class="img">
                            </button>
                        </div>

                        <!-- ここから計算後に表示される -->

                        <div class="calc-answer">
                            <p class="calc-answer-ttl">あなたの太陽光発電所の<br class="sp-br2">売却金額はこちら</p>
                            <div class="border_wrap">
                                <img class="border sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp.contact_border_line.png" alt="">
                                <img class="border pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_border_line.png" alt="">
                            </div>
                            <div class="calc-box">
                                <p class="calc-box-txt">概算売却額</p>
                                <!-- <p class="answer"></p> -->
                                <input readonly class="calc-box-number" name="amount" id="calc_result">
                                <p class="calc-box-unit">円</p>
                            </div>
                            <div class="contact-arrow">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_square.png" alt="">
                            </div>
                        </div>
                    </form><!-- /.calc -->
                    <p class="addForm">
                        より正確な金額を知りたい方、<span class="sp-br"></span>売却の相談をご希望の方は<span class="sp-br"></span>以下よりお問い合わせください
                    </p>
                    <!-- .form -->
                    <?php include 'page-form.php'; ?>
                    <!-- /.form -->

                </div>
            </div>
        </div>
    </section><!-- /.contact -->
<?php endif; ?>
<!-- .footer -->
<?php get_footer();
