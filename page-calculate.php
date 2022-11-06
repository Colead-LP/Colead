<!--
Template Name: calcurate
-->

<!-- .header -->
<?php get_header(); ?>
<!-- /.header -->

<div class='calc'>
  <form class='calc-box' action="" method="post">
    <p class='calc-box_title'>お持ちの発電所の情報を教えてください。</p>
    <table class='calc-box_input'>
      <tr class='text'>
        <th class='text-detail'>直近1年の売電金額（税込）</th>
        <td class="text-input"><input class="year_fee" name="year_fee" type="number"></td>
      </tr>
      <tr class='text'>
        <th class='text-detail'>土地賃料</th>
        <td class="text-input"><input class="rent" name="rent" type="number"></td>
      </tr>
      <tr class='text'>
        <th class='text-detail'>稼働開始年月</th>
        <td class="text-input"><input class="operation" name="operation" type="month"></td>
      </tr>
    </table>
    <div class='calc-box_btn'>
      <input class="btn" type="submit" value="計算する">
    </div>

    <!-- ここからはボタンを押したら表示されるようにする -->
    <table class="calc-box_input submit">
      <tr class='text submit'>
        <th class='text-detail submit'>概算売却額</th>
        <?php
        $amount = 0;
        if((isset($_POST['year_fee'])) && (isset($_POST['rent'])) && (isset($_POST['operation']))){
          $year_fee = (int)$_POST['year_fee'];
          $rent = (int)$_POST['rent'];
          $operation = $_POST['operation'];
          //  =年間売電金額-土地賃料 ÷ 7%+12/ 240ヵ月- 本日の日付-稼働開始年月
          //本日の日付と稼働開始年月の差分取得
          $today =date("Y-m");

          $month1 = date('Y', strtotime($today)) * 12 + date('m', strtotime($today));
          $month2 = date('Y', strtotime($operation)) * 12 + date('m', strtotime($operation));
          $progress = (int)($month1 - $month2);
          echo $progress."<br>";

          $serviceLife = 240; //耐用年数240ヶ月
          $remainingMouths = $serviceLife - $progress; //残存月数
          echo $remainingMouths."<br>";
          $yield = 0.07; //利回り

          $grossYield = round($yield + (12/$remainingMouths),3); //小数点第四位を四捨五入
          echo $grossYield."<br>";
          $cf = $year_fee - $rent;
          echo $cf."<br>";
          $amount = round($cf / $grossYield,-4); //千の位まで丸め込み
        }
        ?>
        <td><input class="text-input submit" type="number" value="<?php echo $amount; ?>">
      </tr>
    </table>
  </form>
</div>


<!-- .footer -->
<?php get_footer();