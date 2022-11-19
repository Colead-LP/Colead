<?php

$page_flag = 0;
if (!empty($_POST['btn_confirm'])) { //
  $page_flag = 1;
} elseif (!empty($_POST['btn_submit'])) {
  $page_flag = 2;

  //  #メール送信機能
  // #ユーザー自動返信メール
  // 変数とタイムゾーンを初期化
  $header = null;
  $auto_reply_subject = null;
  $auto_reply_text = null;
  $admin_reply_subject = null;
  $admin_reply_text = null;
  date_default_timezone_set('Asia/Tokyo');

  // ヘッダー情報
  $header = "MIME-Version: 1.0\n";
  $header .= "From: 株式会社Colead <x.yusuke.x@icloud.com>\n";
  $header .= "Replay-to: 株式会社Colead <x.yusuke.x@iclouc.com>\n";

  // 件名を設定
  $auto_reply_subject = 'お問い合わせありがとうございます。';

  // 本文を設定
  $auto_reply_text = "この度は、お問い合わせいただき誠にありがとうございます。\n\n";
  $auto_reply_text .= "自動返信メールです。\n\n";
  $auto_reply_text .= "お問い合わせ日時 : " . date("Y/m/d H:i") . "\n";
  $auto_reply_text .= "氏名 : " . $_POST['name_first'] . $_POST['name_last'] . "\n";
  $auto_reply_text .= "メールアドレス : " . $_POST['email'] . "\n";
  if ($_POST['pref'] === '1') {
    $auto_reply_text .= "発電所住所 : " . "北海道" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '2') {
    $auto_reply_text .= "発電所住所 : " . "青森県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '3') {
    $auto_reply_text .= "発電所住所 : " . "岩手県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '4') {
    $auto_reply_text .= "発電所住所 : " . "宮城県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '5') {
    $auto_reply_text .= "発電所住所 : " . "秋田県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '6') {
    $auto_reply_text .= "発電所住所 : " . "山形県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '7') {
    $auto_reply_text .= "発電所住所 : " . "福島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '8') {
    $auto_reply_text .= "発電所住所 : " . "茨城県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '9') {
    $auto_reply_text .= "発電所住所 : " . "栃木県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '10') {
    $auto_reply_text .= "発電所住所 : " . "群馬県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '11') {
    $auto_reply_text .= "発電所住所 : " . "埼玉県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '12') {
    $auto_reply_text .= "発電所住所 : " . "千葉県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '13') {
    $auto_reply_text .= "発電所住所 : " . "東京都" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '14') {
    $auto_reply_text .= "発電所住所 : " . "神奈川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '15') {
    $auto_reply_text .= "発電所住所 : " . "新潟県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '16') {
    $auto_reply_text .= "発電所住所 : " . "富山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '17') {
    $auto_reply_text .= "発電所住所 : " . "石川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '18') {
    $auto_reply_text .= "発電所住所 : " . "福井県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '19') {
    $auto_reply_text .= "発電所住所 : " . "山梨県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '20') {
    $auto_reply_text .= "発電所住所 : " . "長野県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '21') {
    $auto_reply_text .= "発電所住所 : " . "岐阜県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '22') {
    $auto_reply_text .= "発電所住所 : " . "静岡県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '23') {
    $auto_reply_text .= "発電所住所 : " . "愛知県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '24') {
    $auto_reply_text .= "発電所住所 : " . "三重県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '25') {
    $auto_reply_text .= "発電所住所 : " . "滋賀県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '26') {
    $auto_reply_text .= "発電所住所 : " . "京都府" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '27') {
    $auto_reply_text .= "発電所住所 : " . "大阪府" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '28') {
    $auto_reply_text .= "発電所住所 : " . "兵庫県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '29') {
    $auto_reply_text .= "発電所住所 : " . "奈良県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '30') {
    $auto_reply_text .= "発電所住所 : " . "和歌山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '31') {
    $auto_reply_text .= "発電所住所 : " . "鳥取県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '32') {
    $auto_reply_text .= "発電所住所 : " . "島根県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '33') {
    $auto_reply_text .= "発電所住所 : " . "岡山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '34') {
    $auto_reply_text .= "発電所住所 : " . "広島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '35') {
    $auto_reply_text .= "発電所住所 : " . "山口県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '36') {
    $auto_reply_text .= "発電所住所 : " . "徳島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '37') {
    $auto_reply_text .= "発電所住所 : " . "香川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '38') {
    $auto_reply_text .= "発電所住所 : " . "愛媛県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '39') {
    $auto_reply_text .= "発電所住所 : " . "高知県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '40') {
    $auto_reply_text .= "発電所住所 : " . "福岡県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '41') {
    $auto_reply_text .= "発電所住所 : " . "佐賀県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '42') {
    $auto_reply_text .= "発電所住所 : " . "長崎県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '43') {
    $auto_reply_text .= "発電所住所 : " . "熊本県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '44') {
    $auto_reply_text .= "発電所住所 : " . "大分県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '45') {
    $auto_reply_text .= "発電所住所 : " . "宮崎県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '46') {
    $auto_reply_text .= "発電所住所 : " . "鹿児島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '47') {
    $auto_reply_text .= "発電所住所 : " . "沖縄県" . $_POST['city'] . $_POST['area'] . "\n";
  }
  if ($_POST['fit'] === '1') {
    $auto_reply_text .= 'fit単価（税込） : ' . '44円' . "\n";
  } elseif ($_POST['fit'] === '2') {
    $auto_reply_text .= 'fit単価（税込） : ' . '39.6円' . "\n";
  } elseif ($_POST['fit'] === '3') {
    $auto_reply_text .= 'fit単価（税込） : ' . '35.2円' . "\n";
  } elseif ($_POST['fit'] === '4') {
    $auto_reply_text .= 'fit単価（税込） : ' . '31.9円' . "\n";
  } elseif ($_POST['fit'] === '5') {
    $auto_reply_text .= 'fit単価（税込） : ' . '29.7円' . "\n";
  } elseif ($_POST['fit'] === '6') {
    $auto_reply_text .= 'fit単価（税込） : ' . '26.4円' . "\n";
  } elseif ($_POST['fit'] === '7') {
    $auto_reply_text .= 'fit単価（税込） : ' . '23.1円' . "\n";
  } elseif ($_POST['fit'] === '8') {
    $auto_reply_text .= 'fit単価（税込） : ' . '19.8円' . "\n";
  } elseif ($_POST['fit'] === '9') {
    $auto_reply_text .= 'fit単価（税込） : ' . '15.4円' . "\n";
  }
  $auto_reply_text .= 'DC容量 : ' . $_POST['dc'] . "KW" . "\n";
  if ($_POST['wiring'] === '1') {
    $auto_reply_text .= '配線図 : ' . "有" . "\n";
  } elseif ($_POST['wiring'] === '2') {
    $auto_reply_text .= '配線図 : ' . '無' . "\n";
  }
  if ($_POST['system'] === '1') {
    $auto_reply_text .= '遠隔監視システムの導入 : ' . "有" . "\n";
  } elseif ($_POST['system'] === '2') {
    $auto_reply_text .= '遠隔監視システムの導入 : ' . '無' . "\n";
  }
  if ($_POST['maint'] === '1') {
    $auto_reply_text .= '直近1年でのメンテナンス : ' . "有" . "\n";
  } elseif ($_POST['system'] === '2') {
    $auto_reply_text .= '直近1年でのメンテナンス : ' . '無' . "\n";
  }
  if ($_POST['panel']) {
    $auto_reply_text .= 'パネルメーカー : ' . $_POST['panel'] . "\n";
  }
  if ($_POST['pcs']) {
    $auto_reply_text .= 'PCSメーカー : ' . $_POST['pcs'] . "\n";
  }

  mb_send_mail($_POST['email'], $auto_reply_subject, $auto_reply_text);

  // #運営者側へ自動返信メール
  // 件名
  $admin_reply_subject = "お問い合わせを受け付けました。";

  // 本文
  $admin_reply_text = "運会者側へ自動返信メールです。";
  $admin_reply_text .= "お問合せ日時 : " . date("Y/m/d H:i") . "\n";
  $admin_reply_text .= "氏名 : " . $_POST['name_first'] . $_POST['name_last'] . "\n";
  $admin_reply_text .= "メールアドレス : " . $_POST['email'] . "\n";
  if ($_POST['pref'] === '1') {
    $admin_reply_text .= "発電所住所 : " . "北海道" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '2') {
    $admin_reply_text .= "発電所住所 : " . "青森県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '3') {
    $admin_reply_text .= "発電所住所 : " . "岩手県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '4') {
    $admin_reply_text .= "発電所住所 : " . "宮城県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '5') {
    $admin_reply_text .= "発電所住所 : " . "秋田県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '6') {
    $admin_reply_text .= "発電所住所 : " . "山形県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '7') {
    $admin_reply_text .= "発電所住所 : " . "福島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '8') {
    $admin_reply_text .= "発電所住所 : " . "茨城県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '9') {
    $admin_reply_text .= "発電所住所 : " . "栃木県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '10') {
    $admin_reply_text .= "発電所住所 : " . "群馬県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '11') {
    $admin_reply_text .= "発電所住所 : " . "埼玉県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '12') {
    $admin_reply_text .= "発電所住所 : " . "千葉県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '13') {
    $admin_reply_text .= "発電所住所 : " . "東京都" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '14') {
    $admin_reply_text .= "発電所住所 : " . "神奈川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '15') {
    $admin_reply_text .= "発電所住所 : " . "新潟県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '16') {
    $admin_reply_text .= "発電所住所 : " . "富山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '17') {
    $admin_reply_text .= "発電所住所 : " . "石川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '18') {
    $admin_reply_text .= "発電所住所 : " . "福井県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '19') {
    $admin_reply_text .= "発電所住所 : " . "山梨県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '20') {
    $admin_reply_text .= "発電所住所 : " . "長野県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '21') {
    $admin_reply_text .= "発電所住所 : " . "岐阜県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '22') {
    $admin_reply_text .= "発電所住所 : " . "静岡県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '23') {
    $admin_reply_text .= "発電所住所 : " . "愛知県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '24') {
    $admin_reply_text .= "発電所住所 : " . "三重県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '25') {
    $admin_reply_text .= "発電所住所 : " . "滋賀県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '26') {
    $admin_reply_text .= "発電所住所 : " . "京都府" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '27') {
    $admin_reply_text .= "発電所住所 : " . "大阪府" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '28') {
    $admin_reply_text .= "発電所住所 : " . "兵庫県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '29') {
    $admin_reply_text .= "発電所住所 : " . "奈良県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '30') {
    $admin_reply_text .= "発電所住所 : " . "和歌山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '31') {
    $admin_reply_text .= "発電所住所 : " . "鳥取県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '32') {
    $admin_reply_text .= "発電所住所 : " . "島根県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '33') {
    $admin_reply_text .= "発電所住所 : " . "岡山県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '34') {
    $admin_reply_text .= "発電所住所 : " . "広島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '35') {
    $admin_reply_text .= "発電所住所 : " . "山口県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '36') {
    $admin_reply_text .= "発電所住所 : " . "徳島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '37') {
    $admin_reply_text .= "発電所住所 : " . "香川県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '38') {
    $admin_reply_text .= "発電所住所 : " . "愛媛県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '39') {
    $admin_reply_text .= "発電所住所 : " . "高知県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '40') {
    $admin_reply_text .= "発電所住所 : " . "福岡県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '41') {
    $admin_reply_text .= "発電所住所 : " . "佐賀県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '42') {
    $admin_reply_text .= "発電所住所 : " . "長崎県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '43') {
    $admin_reply_text .= "発電所住所 : " . "熊本県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '44') {
    $admin_reply_text .= "発電所住所 : " . "大分県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '45') {
    $admin_reply_text .= "発電所住所 : " . "宮崎県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '46') {
    $admin_reply_text .= "発電所住所 : " . "鹿児島県" . $_POST['city'] . $_POST['area'] . "\n";
  } elseif ($_POST['pref'] === '47') {
    $admin_reply_text .= "発電所住所 : " . "沖縄県" . $_POST['city'] . $_POST['area'] . "\n";
  }
  if ($_POST['fit'] === '1') {
    $admin_reply_text .= 'fit単価（税込） : ' . '44円' . "\n";
  } elseif ($_POST['fit'] === '2') {
    $admin_reply_text .= 'fit単価（税込） : ' . '39.6円' . "\n";
  } elseif ($_POST['fit'] === '3') {
    $admin_reply_text .= 'fit単価（税込） : ' . '35.2円' . "\n";
  } elseif ($_POST['fit'] === '4') {
    $admin_reply_text .= 'fit単価（税込） : ' . '31.9円' . "\n";
  } elseif ($_POST['fit'] === '5') {
    $admin_reply_text .= 'fit単価（税込） : ' . '29.7円' . "\n";
  } elseif ($_POST['fit'] === '6') {
    $admin_reply_text .= 'fit単価（税込） : ' . '26.4円' . "\n";
  } elseif ($_POST['fit'] === '7') {
    $admin_reply_text .= 'fit単価（税込） : ' . '23.1円' . "\n";
  } elseif ($_POST['fit'] === '8') {
    $admin_reply_text .= 'fit単価（税込） : ' . '19.8円' . "\n";
  } elseif ($_POST['fit'] === '9') {
    $admin_reply_text .= 'fit単価（税込） : ' . '15.4円' . "\n";
  }
  $admin_reply_text .= 'DC容量 : ' . $_POST['dc'] . "KW" . "\n";
  if ($_POST['wiring'] === '1') {
    $admin_reply_text .= '配線図 : ' . "有" . "\n";
  } elseif ($_POST['wiring'] === '2') {
    $admin_reply_text .= '配線図 : ' . '無' . "\n";
  }
  if ($_POST['system'] === '1') {
    $admin_reply_text .= '遠隔監視システムの導入 : ' . "有" . "\n";
  } elseif ($_POST['system'] === '2') {
    $admin_reply_text .= '遠隔監視システムの導入 : ' . '無' . "\n";
  }
  if ($_POST['maint'] === '1') {
    $admin_reply_text .= '直近1年でのメンテナンス : ' . "有" . "\n";
  } elseif ($_POST['system'] === '2') {
    $admin_reply_text .= '直近1年でのメンテナンス : ' . '無' . "\n";
  }
  if ($_POST['panel']) {
    $admin_reply_text .= 'パネルメーカー : ' . $_POST['panel'] . "\n";
  }
  if ($_POST['pcs']) {
    $admin_reply_text .= 'PCSメーカー : ' . $_POST['pcs'] . "\n";
  }


  mb_send_mail('postscape.shigeta@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
}