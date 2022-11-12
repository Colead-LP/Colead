<!--
Template Name: confirm
-->


<?php
get_header();
?>

<?php // echo do_shortcode('[mwform_formkey key="24"]');?>

<div class="form form-top form-confirm">
<h3 class="form-confirm-ttl confirm">入力内容の確認</h3>
<div class="form-bg">
<div class="form-inner">
<!-- form-user -->
<div class="form-user">
<ul class="form-list__user">

<li class="form-item name">
<p class="form-item-ttl">
お名前<span class="require top">必須</span>
</p>
<div class="form-item-input">
<label class="form-item-label">
<span class="label-txt top">姓</span>
茂田
<input type="hidden" name="name_first" value="茂田">

</label>
<label class="form-item-label">
<span class="label-txt top">名</span>
裕輔
<input type="hidden" name="name_last" value="裕輔">

</label>
</div>
</li>

<li class="form-item email">
<p class="form-item-ttl">
メールアドレス<span class="require top">必須</span>
</p>
x.yusuke.x@icloud.com
<input type="hidden" name="email" value="x.yusuke.x@icloud.com">

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

<li class="form-item post">
<p class="form-item-ttl">郵便番号</p>
1750092
<input type="hidden" name="zip" value="1750092">

</li>

<li class="form-item pref">
<p class="form-item-ttl">都道府県</p>
東京都
<input type="hidden" name="pref" value="13">

<input type="hidden" name="__children[pref][]" value="{&quot;1&quot;:&quot;\u5317\u6d77\u9053&quot;,&quot;2&quot;:&quot;\u9752\u68ee\u770c&quot;,&quot;3&quot;:&quot;\u5ca9\u624b\u770c&quot;,&quot;4&quot;:&quot;\u5bae\u57ce\u770c&quot;,&quot;5&quot;:&quot;\u79cb\u7530\u770c&quot;,&quot;6&quot;:&quot;\u5c71\u5f62\u770c&quot;,&quot;7&quot;:&quot;\u798f\u5cf6\u770c&quot;,&quot;8&quot;:&quot;\u8328\u57ce\u770c&quot;,&quot;9&quot;:&quot;\u6803\u6728\u770c&quot;,&quot;10&quot;:&quot;\u7fa4\u99ac\u770c&quot;,&quot;11&quot;:&quot;\u57fc\u7389\u770c&quot;,&quot;12&quot;:&quot;\u5343\u8449\u770c&quot;,&quot;13&quot;:&quot;\u6771\u4eac\u90fd&quot;,&quot;14&quot;:&quot;\u795e\u5948\u5ddd\u770c&quot;,&quot;15&quot;:&quot;\u65b0\u6f5f\u770c&quot;,&quot;16&quot;:&quot;\u5bcc\u5c71\u770c&quot;,&quot;17&quot;:&quot;\u77f3\u5ddd\u770c&quot;,&quot;18&quot;:&quot;\u798f\u4e95\u770c&quot;,&quot;19&quot;:&quot;\u5c71\u68a8\u770c&quot;,&quot;20&quot;:&quot;\u9577\u91ce\u770c&quot;,&quot;21&quot;:&quot;\u5c90\u961c\u770c&quot;,&quot;22&quot;:&quot;\u9759\u5ca1\u770c&quot;,&quot;23&quot;:&quot;\u611b\u77e5\u770c&quot;,&quot;24&quot;:&quot;\u4e09\u91cd\u770c&quot;,&quot;25&quot;:&quot;\u6ecb\u8cc0\u770c&quot;,&quot;26&quot;:&quot;\u4eac\u90fd\u5e9c&quot;,&quot;27&quot;:&quot;\u5927\u962a\u5e9c&quot;,&quot;28&quot;:&quot;\u5175\u5eab\u770c&quot;,&quot;29&quot;:&quot;\u5948\u826f\u770c&quot;,&quot;30&quot;:&quot;\u548c\u6b4c\u5c71\u770c&quot;,&quot;31&quot;:&quot;\u9ce5\u53d6\u770c&quot;,&quot;32&quot;:&quot;\u5cf6\u6839\u770c&quot;,&quot;33&quot;:&quot;\u5ca1\u5c71\u770c&quot;,&quot;34&quot;:&quot;\u5e83\u5cf6\u770c&quot;,&quot;35&quot;:&quot;\u5c71\u53e3\u770c&quot;,&quot;36&quot;:&quot;\u5fb3\u5cf6\u770c&quot;,&quot;37&quot;:&quot;\u9999\u5ddd\u770c&quot;,&quot;38&quot;:&quot;\u611b\u5a9b\u770c&quot;,&quot;39&quot;:&quot;\u9ad8\u77e5\u770c&quot;,&quot;40&quot;:&quot;\u798f\u5ca1\u770c&quot;,&quot;41&quot;:&quot;\u4f50\u8cc0\u770c&quot;,&quot;42&quot;:&quot;\u9577\u5d0e\u770c&quot;,&quot;43&quot;:&quot;\u718a\u672c\u770c&quot;,&quot;44&quot;:&quot;\u5927\u5206\u770c&quot;,&quot;45&quot;:&quot;\u5bae\u5d0e\u770c&quot;,&quot;46&quot;:&quot;\u9e7f\u5150\u5cf6\u770c&quot;,&quot;47&quot;:&quot;\u6c96\u7e04\u770c&quot;}">

</li>

<li class="form-item munic">
<p class="form-item-ttl">市区町村</p>
板橋区赤塚
<input type="hidden" name="city" value="板橋区赤塚">

</li>

<li class="form-item houseNumber">
<p class="form-item-ttl">番地</p>
555
<input type="hidden" name="area" value="555">

</li>

<li class="form-item fit">
<p class="form-item-ttl">FIT単価（税込）<span class="require top">必須</span></p>
1
<input type="hidden" name="fit" value="1">

</li>

<li class="form-item dc">
<p class="form-item-ttl">DC容量<span class="require top">必須</span></p>
555454
<input type="hidden" name="dc" value="555454">
<span class="unit">KW</span>
</li>

<li class="form-item wiring">
<p class="form-item-ttl">配線図</p>
<div class="radio-wrap">
有
<input type="hidden" name="wiring" value="有">

</div>
</li>

<li class="form-item system">
<p class="form-item-ttl">遠隔監視システムの導入</p>
<div class="radio-wrap">
有
<input type="hidden" name="system" value="有">

</div>
</li>

<li class="form-item maint">
<p class="form-item-ttl">直近1年でのメンテナンス</p>
<div class="radio-wrap">
有
<input type="hidden" name="maint" value="有">

</div>
</li>

<li class="form-item panel">
<p class="form-item-ttl">パネルメーカー</p>
パネルメーカー
<input type="hidden" name="panel" value="パネルメーカー">

</li>

<li class="form-item pcs">
<p class="form-item-ttl">PCSメーカー</p>
pcsメーカー
<input type="hidden" name="pcs" value="pcsメーカー">

</li>

</ul>

<div class="privacy top">
<p class="privacy-txt">
ご入力いただいたお客さまの個人情報は、<a href="" class="privacy-link js-pravacy">プライバシーポリシー</a>に基づき適正に取り扱います。<span class="pc-br"></span>
必ずお読みになり、同意の上お問い合わせください。
</p>
プライバシーポリシーに同意する。
<input type="hidden" name="privacy[data]" value="プライバシーポリシーに同意する。">

<input type="hidden" name="privacy[separator]" value=",">

<input type="hidden" name="__children[privacy][]" value="{&quot;\u30d7\u30e9\u30a4\u30d0\u30b7\u30fc\u30dd\u30ea\u30b7\u30fc\u306b\u540c\u610f\u3059\u308b\u3002&quot;:&quot;\u30d7\u30e9\u30a4\u30d0\u30b7\u30fc\u30dd\u30ea\u30b7\u30fc\u306b\u540c\u610f\u3059\u308b\u3002&quot;}">

</div>

<div class="privacy confirm">
    <label>
    <input type="checkbox" name="" id="" class="type-checkbox"><span></span>
    プライバシーポリシーに同意する。
    </label>
</div>
<div class="submit">
<label class="submit-label">

<input type="submit" name="submit" value="送信する" class="to-confirm">

</label>
</div>

</div><!-- form-powerPlant -->
</div>
</div>
</div>

<?php
get_footer();
?>
