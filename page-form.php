<?php
include('mail.php');
?>
<!-- #input -->
<form action="" method="post" id="form" class="h-adr form" name="form">
  <input type="hidden" id="lat" name="lat" value="">
  <!--緯度-->
  <input type="hidden" id="lng" name="lng" value="">
  <!--経度-->
  <span class="p-country-name" style="display:none;">Japan</span>
  <div class="form-bg">
    <div class="form-inner">
      <div class="form-user">
        <ul class="form-list__user">
          <li class="form-item name require-item">
            <p class="form-item-ttl">
              お名前<span class="require top">必須</span>
            </p>
            <div class="form-item-input">
              <label class="form-item-label">
                <span class="label-txt top">姓</span>
                <div class="input_wrap">
                  <input type="text" name="name_first" id="name_first" class="type-text input-name-first required" value="" placeholder="山田">
                </div>
              </label>
              <label class="form-item-label">
                <span class="label-txt top">名</span>
                <div class="input_wrap">
                  <input type="text" name="name_last" id="name_last" class="type-text input-name-last required" size="" value="" placeholder="太郎">
                </div>
              </label>
            </div>
          </li>
          <li class="form-item email require-item">
            <p class="form-item-ttl">
              メールアドレス<span class="require top">必須</span>
            </p>
            <div class="input_wrap">
              <input type="email" name="email" id="email" class="type-email required" size="60" value="" placeholder="abc@mail.com">
            </div>
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
            <div class="input_wrap">
              <input type="text" name="zip" id="zip" class="type-number p-postal-code required" value="" placeholder="0001122">
            </div>
          </li>
          <li class="form-item pref">
            <p class="form-item-ttl">都道府県</p>
            <div class="input_wrap">
              <select name="pref" id="pref" class="p-region-id select input-pref required">
                <option value="">--------　お選びください　--------</option>
                <option value="1">北海道</option>
                <option value="2">青森県</option>
                <option value="3">岩手県</option>
                <option value="4">宮城県</option>
                <option value="5">秋田県</option>
                <option value="6">山形県</option>
                <option value="7">福島県</option>
                <option value="8">茨城県</option>
                <option value="9">栃木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
              </select>
            </div>
          </li>
          <li class="form-item city require-item">
            <p class="form-item-ttl">市区町村</p>
            <div class="input_wrap">
              <input type="text" name="city" id="city" class="p-locality p-street-address type-text input-munic required" size="" value="">
            </div>
          </li>
          <li class="form-item houseNumber require-item">
            <p class="form-item-ttl">番地</p>
            <div class="input_wrap">
              <input type="text" name="area" id="area" class="p-extended-address type-text input-address required" size="" value="">
            </div>
          </li>
          <li class="form-item gmap require-item">
            <p class="form-item-ttl">Google Mapで正確な位置を指定する</p>
            <div type="text" id="gmap" class="p-extended-gmap input-gmap" size="" value=""></div>
            <input type="hidden" name="gmap" id="js-gmap" value="">
          </li>
          <script src="https://cdn.geolonia.com/community-geocoder.js"></script>
          <li class="form-item fit require-item">
            <p class="form-item-ttl">FIT単価（税込）<span class="require top">必須</span></p>
            <div class="input_wrap">
              <select name="fit" id="fit" class="select input-fit required">
                <option value="" selected>--------　お選びください　--------</option>
                <option value="1">
                  44 </option>
                <option value="2">
                  39.6 </option>
                <option value="3">
                  35.2 </option>
                <option value="4">
                  31.9 </option>
                <option value="5">
                  29.7 </option>
                <option value="6">
                  26.4 </option>
                <option value="7">
                  23.1 </option>
                <option value="8">
                  19.8 </option>
                <option value="9">
                  15.4 </option>
              </select>
            </div>
          </li>
          <li class="form-item dc require-item">
            <p class="form-item-ttl">DC容量<span class="require top">必須</span></p>
            <div class="wrap">
              <div class="input_wrap">
                <input type="text" name="dc" id="dc" class="type-number input-dc required" size="60" value="">
              </div>
              <span class="unit">KW</span>
            </div>
          </li>
          <li class="form-item wiring">
            <p class="form-item-ttl">配線図</p>
            <div class="radio-wrap">
              <label>
                <input type="radio" name="wiring" value="1" checked="checked" id="wiring-1" class="type-radio input-wiring">
                <span class="wiring_input_txt">有</span>
              </label>
              <label>
                <input type="radio" name="wiring" value="2" id="wiring-2" class="type-radio input-wiring">
                <span class="wiring_input_txt">無</span>
              </label>
            </div>
          </li>
          <li class="form-item system">
            <p class="form-item-ttl">遠隔監視システムの導入</p>
            <div class="radio-wrap">
              <label>
                <input type="radio" name="system" value="1" checked="checked" id="system-1" class="type-radio input-system">
                <span class="system_input_txt">有</span>
              </label>
              <label>
                <input type="radio" name="system" value="2" id="system-2" class="type-radio input-system">
                <span class="system_input_txt">無</span>
              </label>
            </div>
          </li>
          <li class="form-item maint">
            <p class="form-item-ttl">直近1年でのメンテナンス</p>
            <div class="radio-wrap">
              <label>
                <input type="radio" name="maint" value="1" checked="checked" id="maint-1" class="type-radio input-maint">
                <span class="maint_input_txt">有</span>
              </label>
              <label>
                <input type="radio" name="maint" value="2" id="maint-2" class="type-radio input-maint">
                <span class="maint_input_txt">無</span>
              </label>
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
        <div class="privacy">
          <p class="privacy-txt">
            ご入力いただいたお客さまの個人情報は、<a href="" class="privacy-link js-pravacy">プライバシーポリシー</a>に基づき適正に取り扱います。<span class="pc-br"></span>
            必ずお読みになり、同意の上お問い合わせください。
          </p>
          <div class="privacy_input_wrap">
            <label class="privacy_input_label">
              <input type="checkbox" name="privacy" value="agree" id="privacy" class="privacy_input privacy-check type-checkbox required">
              <span class="privacy_input_txt">プライバシーポリシーに同意する。</span>
            </label>
          </div>
        </div>
        <div class="submit">
          <div class="submit_wrap">
            <input type="submit" name="btn_confirm" value="確認する" id="toConfirm" class="to-confirm">
          </div>
        </div>
        <!-- #modal -->
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
        <!-- /modal -->
      </div><!-- form-powerPlant -->
    </div>
  </div>
</form>

<style>
  body {
    font-size: .16rem;
  }
</style>