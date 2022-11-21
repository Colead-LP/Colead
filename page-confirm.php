<!-- #confirm -->
<form method="post" action="">
    <div class="form form-top form-confirm">
        <h3 class="form-confirm-ttl confirm">入力内容の確認</h3>
        <div class="form-bg">
            <div class="form-inner">
                <!-- form-user -->
                <div class="form-user">
                    <ul class="form-list__user">
                        <li class="form-item name require-item">
                            <p class="form-item-ttl">
                                お名前<span class="require top">必須</span>
                            </p>
                            <div class="form-item-input">
                                <div class="form-item-label">
                                    <span class="label-txt top">姓</span>

                                    <p class=""><?php echo $_POST['name_first']; ?></p>

                                </div>
                                <label class="form-item-label">
                                    <span class="label-txt top">名</span>

                                    <p class=""><?php echo $_POST['name_last']; ?></p>

                                </label>
                            </div>
                        </li>
                        <li class="form-item email require-item">
                            <p class="form-item-ttl">
                                メールアドレス<span class="require top">必須</span>
                            </p>
                            <p class=""><?php echo $_POST['email']; ?></p>
                        </li>
                    </ul>
                </div><!-- /.form-user -->
                <!-- form-powerPlant -->
                <div class="form-powerPlant">
                    <h3 class="form-powerPlant-ttl top">
                        発電所情報
                    </h3>
                    <ul class="form-list__powerPlant">
                        <li class="form-item address">
                            <p class="form-item-ttl">発電所住所</p>
                            <p>
                                <?php
                                if ($_POST['pref'] === '1') {
                                    echo '北海道';
                                } elseif ($_POST['pref'] === '2') {
                                    echo '青森県';
                                } elseif ($_POST['pref'] === '3') {
                                    echo '岩手県';
                                } elseif ($_POST['pref'] === '4') {
                                    echo '宮城県';
                                } elseif ($_POST['pref'] === '5') {
                                    echo '秋田県';
                                } elseif ($_POST['pref'] === '6') {
                                    echo '山形県';
                                } elseif ($_POST['pref'] === '7') {
                                    echo '福島県';
                                } elseif ($_POST['pref'] === '8') {
                                    echo '茨城県';
                                } elseif ($_POST['pref'] === '9') {
                                    echo '栃木県';
                                } elseif ($_POST['pref'] === '10') {
                                    echo '群馬県';
                                } elseif ($_POST['pref'] === '11') {
                                    echo '埼玉県';
                                } elseif ($_POST['pref'] === '12') {
                                    echo '千葉県';
                                } elseif ($_POST['pref'] === '13') {
                                    echo '東京都';
                                } elseif ($_POST['pref'] === '14') {
                                    echo '神奈川県';
                                } elseif ($_POST['pref'] === '15') {
                                    echo '新潟県';
                                } elseif ($_POST['pref'] === '16') {
                                    echo '富山県';
                                } elseif ($_POST['pref'] === '17') {
                                    echo '石川県';
                                } elseif ($_POST['pref'] === '18') {
                                    echo '福井県';
                                } elseif ($_POST['pref'] === '19') {
                                    echo '山梨県';
                                } elseif ($_POST['pref'] === '20') {
                                    echo '長野県';
                                } elseif ($_POST['pref'] === '21') {
                                    echo '岐阜県';
                                } elseif ($_POST['pref'] === '22') {
                                    echo '静岡県';
                                } elseif ($_POST['pref'] === '23') {
                                    echo '愛知県';
                                } elseif ($_POST['pref'] === '24') {
                                    echo '三重県';
                                } elseif ($_POST['pref'] === '25') {
                                    echo '滋賀県';
                                } elseif ($_POST['pref'] === '26') {
                                    echo '京都府';
                                } elseif ($_POST['pref'] === '27') {
                                    echo '大阪府';
                                } elseif ($_POST['pref'] === '28') {
                                    echo '兵庫県';
                                } elseif ($_POST['pref'] === '29') {
                                    echo '奈良県';
                                } elseif ($_POST['pref'] === '30') {
                                    echo '和歌山県';
                                } elseif ($_POST['pref'] === '31') {
                                    echo '鳥取県';
                                } elseif ($_POST['pref'] === '32') {
                                    echo '島根県';
                                } elseif ($_POST['pref'] === '33') {
                                    echo '岡山県';
                                } elseif ($_POST['pref'] === '34') {
                                    echo '広島県';
                                } elseif ($_POST['pref'] === '35') {
                                    echo '山口県';
                                } elseif ($_POST['pref'] === '36') {
                                    echo '徳島県';
                                } elseif ($_POST['pref'] === '37') {
                                    echo '香川県';
                                } elseif ($_POST['pref'] === '38') {
                                    echo '愛媛県';
                                } elseif ($_POST['pref'] === '39') {
                                    echo '高知県';
                                } elseif ($_POST['pref'] === '40') {
                                    echo '福岡県';
                                } elseif ($_POST['pref'] === '41') {
                                    echo '佐賀県';
                                } elseif ($_POST['pref'] === '42') {
                                    echo '長崎県';
                                } elseif ($_POST['pref'] === '43') {
                                    echo '熊本県';
                                } elseif ($_POST['pref'] === '44') {
                                    echo '大分県';
                                } elseif ($_POST['pref'] === '45') {
                                    echo '宮崎県';
                                } elseif ($_POST['pref'] === '46') {
                                    echo '鹿児島県';
                                } elseif ($_POST['pref'] === '47') {
                                    echo '沖縄県';
                                }
                                echo $_POST['city'];
                                echo $_POST['area'];
                                ?>
                            </p>
                        </li>
                        <li class="form-item gmap-confirm require-item">
                            <p class="form-item-ttl">Google Map</p>
                            <div id="gmap-confirm" class="gmap-confirm" style="
                            width:3.6rem;
                            height:1.5rem;
                            "></div>
                        </li>
                        <li class="form-item fit require-item">
                            <p class="form-item-ttl">FIT単価（税込）<span class="require top">必須</span></p>
                            <p>
                                <?php
                                if ($_POST['fit'] === '1') {
                                    echo '44';
                                } elseif ($_POST['fit'] === '2') {
                                    echo '39.6';
                                } elseif ($_POST['fit'] === '3') {
                                    echo '35.2';
                                } elseif ($_POST['fit'] === '4') {
                                    echo '31.9';
                                } elseif ($_POST['fit'] === '5') {
                                    echo '29.7';
                                } elseif ($_POST['fit'] === '6') {
                                    echo '26.4';
                                } elseif ($_POST['fit'] === '7') {
                                    echo '23.1';
                                } elseif ($_POST['fit'] === '8') {
                                    echo '19.8';
                                } elseif ($_POST['fit'] === '9') {
                                    echo '15.4';
                                }
                                ?>
                            </p>
                        </li>
                        <li class="form-item dc require-item">
                            <p class="form-item-ttl">DC容量<span class="require top">必須</span></p>
                            <p><?php echo $_POST['dc']; ?></p>
                            <span class="unit">KW</span>
                        </li>
                        <li class="form-item wiring">
                            <p class="form-item-ttl">配線図</p>
                            <div class="radio-wrap">
                                <p>
                                    <?php if ($_POST['wiring'] === '有') {
                                        echo '有';
                                    } else {
                                        echo '無';
                                    } ?>
                                </p>
                                </span>
                            </div>
                        </li>
                        <li class="form-item system">
                            <p class="form-item-ttl">遠隔監視システムの導入</p>
                            <input type="radio" name="system" value="有" checked="checked" id="system-1" class="type-radio input-system">
                            <p>
                                <?php if ($_POST['system'] === '有') {
                                    echo '有';
                                } else {
                                    echo '無';
                                }
                                ?>
                            </p>
                        </li>
                        <li class="form-item maint">
                            <p class="form-item-ttl">直近1年でのメンテナンス</p>
                            <p>
                                <?php
                                if ($_POST['maint'] === '有') {
                                    echo '有';
                                } else {
                                    echo '無';
                                }
                                ?>
                            </p>
                        </li>
                        <li class="form-item panel">
                            <p class="form-item-ttl">パネルメーカー</p>
                            <p><?php echo $_POST['panel']; ?></p>
                        </li>
                        <li class="form-item pcs">
                            <p class="form-item-ttl">PCSメーカー</p>
                            <p><?php echo $_POST['pcs']; ?></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="confirm privacy">
                <label>
                    <input type="checkbox" name="submit_privacy" id="submit_privacy" class="type-checkbox"><span></span>プライバシーポリシーに同意する。
                </label>
            </div>
            <div class="submit">
                <input type="submit" name="btn_submit" value="送信する" class="to-confirm">
            </div>
        </div><!-- form-powerPlant -->
    </div>
    </div>
    </div>
    <input type="hidden" name="name_first" value="<?php echo $_POST['name_first']; ?>">
    <input type="hidden" name="name_first" value="<?php echo $_POST['name_last']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="zip" value="<?php echo $_POST['zip']; ?>">
    <input type="hidden" name="pref" value="<?php echo $_POST['pref']; ?>">
    <input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
    <input type="hidden" name="area" value="<?php echo $_POST['area']; ?>">
    <input type="hidden" name="fit" value="<?php echo $_POST['fit']; ?>">
    <input type="hidden" name="dc" value="<?php echo $_POST['dc']; ?>">
    <input type="hidden" name="wiring" value="<?php echo $_POST['wiring']; ?>">
    <input type="hidden" name="system" value="<?php echo $_POST['system']; ?>">
    <input type="hidden" name="maint" value="<?php echo $_POST['maint']; ?>">
    <input type="hidden" name="panel" value="<?php echo $_POST['panel']; ?>">
    <input type="hidden" name="pcs" value="<?php echo $_POST['pcs']; ?>">
</form>