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
  $auto_reply_text .= "お問い合わせ日時:" . date("Y/m/d H:i") . "\n";
  $auto_reply_text .= "氏名 : " . $_POST['name_first'] . "\n";
  $auto_reply_text .= "メールアドレス : " . $_POST['email'] . "\n";
  $auto_reply_text .= "茂田事務所";

  mb_send_mail($_POST['email'], $auto_reply_subject, $auto_reply_text);

  // #運営者側へ自動返信メール
  // 件名
  $admin_reply_subject = "お問い合わせを受け付けました。";

  // 本文
  $admin_reply_text = "運会者側へ自動返信メールです。";
  $admin_reply_text .= "お問合せ日時:" . date("Y/m/d H:i") . "\n";
  $admin_reply_text .= "氏名:" . $_POST['name_first'] . "\n";
  $admin_reply_text .= "メアド:" . $_POST['email'] . "\n";

  mb_send_mail('postscape.shigeta@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
}
?>