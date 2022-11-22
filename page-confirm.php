<?php
?>
<!-- #confirm -->
<form method="post" action="" class="confirm">
    <div class="confirm_bg">
        <h3 class="confirm_ttl">入力内容の確認</h3>
        <div class="confirm_inner">
            <!-- form-user -->
            <ul class="confirm_list">
                <li class="confirm_item name">
                    <p class="confirm_item_ttl">
                        お名前
                    </p>
                    <div class="confirm_item_txt">
                        <p class="__01 confirm_item_txt"><?php echo $_POST['name_first']; ?></p>
                        <p class="__02 confirm_item_txt"><?php echo $_POST['name_last']; ?></p>
                    </div>
                </li>
                <li class="confirm_item email">
                    <p class="confirm_item_ttl">
                        メールアドレス
                    </p>
                    <p class="confirm_item_txt"><?php echo $_POST['email']; ?></p>
                </li>
                <li class="confirm_item address">
                    <p class="confirm_item_ttl">発電所住所</p>
                    <p class="confirm_item_txt">
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
                <li class="confirm_item gmap-confirm">
                    <p class="confirm_item_ttl">Google Map</p>
                    <div id="gmap-confirm" class="gmap-confirm confirm_item_txt"></div>
                </li>
                <li class="confirm_item fit">
                    <p class="confirm_item_ttl">FIT単価（税込）</p>
                    <p class="confirm_item_txt">
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
                        ?><span class="unit">円</span>
                    </p>
                </li>
                <li class="confirm_item dc">
                    <p class="confirm_item_ttl">DC容量</p>
                    <p class="confirm_item_txt"><?php echo $_POST['dc']; ?><span class="unit">KW</span></p>
                </li>
                <li class="confirm_item wiring">
                    <p class="confirm_item_ttl">配線図</p>
                    <p class="confirm_item_txt">
                        <?php if ($_POST['wiring'] === '有') {
                            echo '有';
                        } else {
                            echo '無';
                        } ?>
                    </p>
                </li>
                <li class="confirm_item system">
                    <p class="confirm_item_ttl">遠隔監視システムの導入</p>
                    <p class="confirm_item_txt">
                        <?php if ($_POST['system'] === '有') {
                            echo '有';
                        } else {
                            echo '無';
                        }
                        ?>
                    </p>
                </li>
                <li class="confirm_item maint">
                    <p class="confirm_item_ttl">直近1年でのメンテナンス</p>
                    <p class="confirm_item_txt">
                        <?php
                        if ($_POST['maint'] === '有') {
                            echo '有';
                        } else {
                            echo '無';
                        }
                        ?>
                    </p>
                </li>
                <li class="confirm_item panel">
                    <p class="confirm_item_ttl">パネルメーカー</p>
                    <p class="confirm_item_txt"><?php echo $_POST['panel']; ?></p>
                </li>
                <li class="confirm_item pcs">
                    <p class="confirm_item_ttl">PCSメーカー</p>
                    <p class="confirm_item_txt"><?php echo $_POST['pcs']; ?></p>
                </li>
            </ul>
            <div class="privacy">
                <label class="privacy_label">
                    <input type="checkbox" name="submit_privacy" id="submit_privacy" class="type-checkbox privacy_input required"><span class="privacy_txt">プライバシーポリシーに同意する。</span>
                </label>
            </div>
            <div class="submit">
                <input type="submit" name="btn_submit" value="送信する" class="submit_toThanks">
            </div>
        </div>
    </div><!-- form-powerPlant -->
    </div>
    </div>
    <input type="hidden" name="name_first" value="<?php echo $_POST['name_first']; ?>">
    <input type="hidden" name="name_last" value="<?php echo $_POST['name_last']; ?>">
    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
    <input type="hidden" name="zip" value="<?php echo $_POST['zip']; ?>">
    <input type="hidden" name="pref" value="<?php echo $_POST['pref']; ?>">
    <input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
    <input type="hidden" name="area" value="<?php echo $_POST['area']; ?>">
    <input type="hidden" id="lat" name="lat" value=""> <!--緯度-->
    <input type="hidden" id="lng" name="lng" value=""> <!--経度-->
    <input type="hidden" id="address" name="address" value=""> <!--googlemapで指定された住所-->
    <input type="hidden" name="fit" value="<?php echo $_POST['fit']; ?>">
    <input type="hidden" name="dc" value="<?php echo $_POST['dc']; ?>">
    <input type="hidden" name="wiring" value="<?php echo $_POST['wiring']; ?>">
    <input type="hidden" name="system" value="<?php echo $_POST['system']; ?>">
    <input type="hidden" name="maint" value="<?php echo $_POST['maint']; ?>">
    <input type="hidden" name="panel" value="<?php echo $_POST['panel']; ?>">
    <input type="hidden" name="pcs" value="<?php echo $_POST['pcs']; ?>">
    <?php var_dump($_POST); ?>
</form>