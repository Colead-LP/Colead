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
        <td class="text-input"><input class="operation_period" name="operation_period" type="month"></td>
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
        //入力値が空欄でないかの確認
        if(EnteredOrNot($_POST)==TRUE){
          //input欄に全て入力済みの処理を書く
          //変数の定義
          $year_fee = (int)$_POST['year_fee'];
          $rent = (int)$_POST['rent'];
          $operation_period = $_POST['operation_period'];
          //概算売却額の計算関数
          $amount = GetApproximateCost($year_fee,$rent,$operation_period);
        }else{
          //input欄が空白の時の処理を書く
        }
        
        function EnteredOrNot($post){ //入力されたかどうかをtrue,falseで返す
          if( ($post['year_fee'] != "") && ($post['rent'] != "") && ($post['operation_period'] != "")){
            return True;
          }else{
            return False;
          }
        }

        function GetApproximateCost($year_fee , $rent , $operation_period){ //概算売却額計算関数
          //  =年間売電金額-土地賃料 ÷ 7%+12/ 240ヵ月- 本日の日付-稼働開始年月

          //本日の日付と稼働開始年月の差分取得
          $today =date("Y-m"); //本日の日付
          $end_month = date('Y', strtotime($today)) * 12 + date('m', strtotime($today)); //日付のフォーマットを揃え、年数に12かけて月ベースを算出する
          $start_month = date('Y', strtotime($operation_period)) * 12 + date('m', strtotime($operation_period));
          $progress_month = (int)($end_month - $start_month);
          $serviceLife = 240; //耐用年数240ヶ月
          $remainingMouths = $serviceLife - $progress_month; //残存月数

          $yield = 0.07; //利回り
          $grossYield = round($yield + (12/$remainingMouths) , 3); //表面利回り算出、roundで小数点第四位を四捨五入
          $cf = $year_fee - $rent; //売上総利益の算出

          $amount = round($cf / $grossYield,-4); //roundで千の位まで丸め込み
          return $amount;
        }

        ?>
        <td><input class="text-input submit" type="number" value="<?php echo $amount; ?>">
      </tr>
    </table>
  </form>
</div>


<!-- .footer -->
<?php get_footer();