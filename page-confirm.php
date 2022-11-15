<?php
get_header();
?>

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
                            <label class="form-item-label">
                                <span class="label-txt top">姓</span>

                                <input type="text" name="name_first" id="name_first" class="type-text input-name-first" size="" value="">

                            </label>
                            <label class="form-item-label">
                                <span class="label-txt top">名</span>

                                <input type="text" name="name_last" id="name_last" class="type-text input-name-last" size="" value="">

                            </label>
                        </div>
                    </li>

                    <li class="form-item email require-item">
                        <p class="form-item-ttl">
                            メールアドレス<span class="require top">必須</span>
                        </p>

                        <input type="email" name="email" id="email" class="type-email" size="60" value="">

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
                        <p class="form-item-ttl">住所<span class="require top">必須</span></p>
                    </li>

                    <li class="form-item post top require-item">
                        <p class="form-item-ttl">郵便番号</p>

                        <input type="text" name="zip" id="zip" class="type-number p-postal-code" size="" value="">

                    </li>

                    <li class="form-item pref">
                        <p class="form-item-ttl">都道府県</p>

                        <select name="pref" id="pref" class="p-region-id select input-pref">
                            <option value="">
                                北海道 </option>
                            <option value="">
                                青森県 </option>
                            <option value="">
                                岩手県 </option>
                            <option value="">
                                宮城県 </option>
                            <option value="">
                                秋田県 </option>
                            <option value="">
                                山形県 </option>
                            <option value="7">
                                福島県 </option>
                            <option value="">
                                茨城県 </option>
                            <option value="">
                                栃木県 </option>
                            <option value="">
                                群馬県 </option>
                            <option value="">
                                埼玉県 </option>
                            <option value="">
                                千葉県 </option>
                            <option value="">
                                東京都 </option>
                            <option value="">
                                神奈川県 </option>
                            <option value="">
                                新潟県 </option>
                            <option value="">
                                富山県 </option>
                            <option value="">
                                石川県 </option>
                            <option value="">
                                福井県 </option>
                            <option value="">
                                山梨県 </option>
                            <option value="">
                                長野県 </option>
                            <option value="">
                                岐阜県 </option>
                            <option value="">
                                静岡県 </option>
                            <option value="">
                                愛知県 </option>
                            <option value="">
                                三重県 </option>
                            <option value="">
                                滋賀県 </option>
                            <option value="">
                                京都府 </option>
                            <option value="">
                                大阪府 </option>
                            <option value="">
                                兵庫県 </option>
                            <option value="">
                                奈良県 </option>
                            <option value="">
                                和歌山県 </option>
                            <option value="">
                                鳥取県 </option>
                            <option value="">
                                島根県 </option>
                            <option value="">
                                岡山県 </option>
                            <option value="">
                                広島県 </option>
                            <option value="">
                                山口県 </option>
                            <option value="">
                                徳島県 </option>
                            <option value="">
                                香川県 </option>
                            <option value="">
                                愛媛県 </option>
                            <option value="">
                                高知県 </option>
                            <option value="">
                                福岡県 </option>
                            <option value="">
                                佐賀県 </option>
                            <option value="">
                                長崎県 </option>
                            <option value="">
                                熊本県 </option>
                            <option value="">
                                大分県 </option>
                            <option value="">
                                宮崎県 </option>
                            <option value="">
                                鹿児島県 </option>
                            <option value="">
                                沖縄県 </option>
                        </select>

                        <input type="hidden" name="" value="">

                    </li>

                    <li class="form-item munic require-item">
                        <p class="form-item-ttl">市区町村</p>

                        <input type="text" name="city" id="city" class="type-text input-munic p-locality p-street-address" size="" value="">

                    </li>

                    <li class="form-item houseNumber require-item">
                        <p class="form-item-ttl">番地</p>

                        <input type="text" name="area" id="area" class="type-text input-address" size="" value="">

                    </li>

                    <li class="form-item fit require-item">
                        <p class="form-item-ttl">FIT単価（税込）<span class="require top">必須</span></p>

                        <select name="fit" id="fit" class="select input-fit">
                            <option value="1" selected="selected">
                                1 </option>
                            <option value="2">
                                2 </option>
                            <option value="3">
                                3 </option>
                        </select>

                    </li>

                    <li class="form-item dc require-item">
                        <p class="form-item-ttl">DC容量<span class="require top">必須</span></p>

                        <input type="text" name="dc" id="dc" class="type-number input-dc" size="60" value="">
                        <span class="unit">KW</span>
                    </li>

                    <li class="form-item wiring">
                        <p class="form-item-ttl">配線図</p>
                        <div class="radio-wrap">
                            <span class="mwform-radio-field horizontal-item">
                                <label for="wiring-1">
                                    <input type="radio" name="wiring" value="有" checked="checked" id="wiring-1" class="type-radio input-wiring">
                                    <span class="mwform-radio-field-text">有</span>
                                </label>
                            </span>
                            <span class="mwform-radio-field horizontal-item">
                                <label for="wiring-2">
                                    <input type="radio" name="wiring" value="無" id="wiring-2" class="type-radio input-wiring">
                                    <span class="mwform-radio-field-text">無</span>
                                </label>
                            </span>

                        </div>
                    </li>

                    <li class="form-item system">
                        <p class="form-item-ttl">遠隔監視システムの導入</p>
                        <div class="radio-wrap">
                            <span class="mwform-radio-field horizontal-item">
                                <label for="system-1">
                                    <input type="radio" name="system" value="有" checked="checked" id="system-1" class="type-radio input-system">
                                    <span class="mwform-radio-field-text">有</span>
                                </label>
                            </span>
                            <span class="mwform-radio-field horizontal-item">
                                <label for="system-2">
                                    <input type="radio" name="system" value="無" id="system-2" class="type-radio input-system">
                                    <span class="mwform-radio-field-text">無</span>
                                </label>
                            </span>

                        </div>
                    </li>

                    <li class="form-item maint">
                        <p class="form-item-ttl">直近1年でのメンテナンス</p>
                        <div class="radio-wrap">
                            <span class="mwform-radio-field">
                                <label for="maint-1">
                                    <input type="radio" name="maint" value="有" checked="checked" id="maint-1" class="type-radio input-maint">
                                    <span class="mwform-radio-field-text">有</span>
                                </label>
                            </span>
                            <span class="mwform-radio-field">
                                <label for="maint-2">
                                    <input type="radio" name="maint" value="無" id="maint-2" class="type-radio input-maint">
                                    <span class="mwform-radio-field-text">無</span>
                                </label>
                            </span>

                        </div>
                    </li>

                    <li class="form-item panel">
                        <p class="form-item-ttl">パネルメーカー</p>

                        <input type="text" name="panel" id="panel" class="type-text input-panel" size="" value="">

                    </li>

                    <li class="form-item pcs">
                        <p class="form-item-ttl">PCSメーカー</p>

                        <input type="text" name="pcs" id="pcs" class="type-text input-pcs" size="" value="">

                    </li>

                </ul>

                <div class="top privacy">
                    <p class="privacy-txt">
                        ご入力いただいたお客さまの個人情報は、<a href="" class="privacy-link js-pravacy">プライバシーポリシー</a>に基づき適正に取り扱います。<span class="pc-br"></span>
                        必ずお読みになり、同意の上お問い合わせください。
                    </p>

                    <div class="modal-container">
                        <div class="modal-body">
                            <div class="modal-close"></div>
                            <div class="modal-wrap">


                                <div class="modal-content">
                                    <p class="modal-ttl">プライバシーポリシー</p>
                                    <p class="modal-txt-01 modal-txt">株式会社Colead（以下「当社」）は、以下のとおり個人情報保護方針を定め、個人情報保護の仕組みを構築し、全従業員に個人情報保護の重要性の認識と取組みを徹底させることにより、個人情報の保護を推進致します。</p>
                                    <p class="modal-txt-02 modal-txt">
                                        <span class="txt__bold">個人情報の管理</span>
                                        当社は、個人情報の保護に関して、組織的、物理的、人的、技術的に適切な対策を実施し、当社の取り扱う個人情報の漏えい、滅失又はき損の防止その他の個人情報の安全管理のために必要かつ適切な措置を講ずるものとします。
                                    </p>
                                    <p class="modal-txt-03 modal-txt">
                                        <span class="txt__bold">個人情報の利用目的</span>
                                        お客さまからお預かりした個人情報は、 当社からのご連絡や業務のご案内やご質問に対する回答として、電子メールや資料のご送付に利用いたします。
                                    </p>
                                    <p class="modal-txt-04 modal-txt">
                                        <span class="txt__bold">個人情報の第三者への開示・提供の禁止</span>
                                        当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。
                                    </p>
                                    <ul class="modal-list">
                                        <li class="modal-item">・お客さまの同意がある場合</li>
                                        <li class="modal-item">・お客さまが希望されるサービスを行なうため
                                            に当社が業務を委託する業者に対して開示
                                            する場合</li>
                                        <li class="modal-item">・法令に基づき開示することが必要である場合</li>
                                    </ul>
                                    <p></p>
                                    <p class="modal-txt-05 modal-txt">
                                        <span class="txt__bold">ご本人の照会</span>
                                        お客さまがご本人の個人情報の照会・修正・削除などをご希望される場合には、ご本人であることを確認の上、対応させていただきます。
                                    </p>
                                    <p class="modal-txt-06 modal-txt">
                                        <span class="txt__bold">法令、規範の遵守と見直し</span>
                                        当社は、保有する個人情報に関して適用される日本の法令、その他規範を遵守するとともに、本ポリシーの内容を適宜見直し、その改善に努めます。
                                    </p>
                                    <p class="modal-txt-07 modal-txt">
                                        <span class="txt__bold">個人情報の廃棄</span>
                                        当社は、個人情報の利用目的に照らしその必要性が失われたときは、個人情報を消去又は廃棄するものとし、当該消去及び廃棄は、外部流失等の危険を防止するために必要かつ適切な方法により、業務の遂行上必要な限りにおいて行います。
                                    </p>
                                    <p class="modal-txt-08 modal-txt">
                                        <span class="txt__bold">お問い合せ</span>
                                        当社の個人情報の取扱に関するお問い合せは下記までご連絡ください。
                                    </p>
                                    <p class="modal-txt-09 modal-txt">
                                        株式会社Colead<br>
                                        〒102-0093 東京都千代田区平河町1-8-2<br>
                                        Mail：mr.shoji@gmail.com<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <span class="mwform-checkbox-field horizontal-item">
                        <label for="privacy-1">
                            <input type="checkbox" name="privacy[data][]" value="プライバシーポリシーに同意する。" id="privacy-1" class="privacy-check type-checkbox">
                            <span class="mwform-checkbox-field-text">プライバシーポリシーに同意する。</span>
                        </label>
                    </span>

                    <input type="hidden" name="" value=",">

                    <input type="hidden" name="" value="">

                </div>

                <div class="confirm privacy">
                    <label>
                        <input type="checkbox" name="privacy" id="privacyConfirm" class="type-checkbox"><span></span>プライバシーポリシーに同意する。
                    </label>
                </div>

                <div class="submit">
                    <label class="submit-label">

                        <input type="submit" name="submitConfirm" value="確認する" class="to-confirm">

                    </label>
                </div>

            </div><!-- form-powerPlant -->
        </div>
    </div>
</div>

<?php
get_footer();
