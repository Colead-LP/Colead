<?php
//入力値が空欄でないかの確認
if(EnteredOrNot($_POST)==TRUE){
  //input欄に全て入力済みの処理を書く
  //変数の定義
  $data = json_decode($_POST['data']);
  $year_fee = (int)$_POST['year_fee'];
  $rent = (int)$_POST['rent'];
  $operation_period = $_POST['operation_period'];
  //概算売却額の計算関数
  $data = json_decode($_POST['data']);
  $amount = GetApproximateCost($year_fee,$rent,$operation_period);
}else{
  //input欄が空白の時の処理を書く
}

function EnteredOrNot($post){ //input欄全て入力されたかどうかをtrue,falseで返す
  if( ($post['year_fee'] != "") && ($post['rent'] != "") && ($post['operation_period'] != "")){
    return True;
  }else{
    return False;
  }
}

function GetApproximateCost($year_fee , $rent , $operation_period){ //概算売却額計算関数
  //  =(年間売電金額-土地賃料) ÷ {7%+[12/(240ヵ月- 本日の日付-稼働開始年月)]}

  //本日の日付と稼働開始年月の差分取得
  $today =date("Y-m"); //本日の日付

  $end_month = date('Y', strtotime($today)) * 12 + date('m', strtotime($today)); //日付のフォーマットを揃え、年数に12かけて月ベースを算出する
  $start_month = date('Y', strtotime($operation_period)) * 12 + date('m', strtotime($operation_period));

  $progress_month = (int)($end_month - $start_month); //経過月数
  $serviceLife = 240; //耐用年数240ヶ月
  $remainingMouths = $serviceLife - $progress_month; //耐用年数-経過月数=残存月数

  $yield = 0.07; //利回り
  $grossYield = round($yield + (12/$remainingMouths) , 3); //表面利回り算出、roundで小数点第四位を四捨五入
  $cf = $year_fee - $rent; //売上総利益の算出

  $amount = round($cf / $grossYield,-4); //roundで千の位まで丸め込み
  return $amount;
}

function GetDateSelecter(){ //optionタグの作成
  $today_year = date("Y"); //本日の年
  $today_month = date("m"); //本日の月

  $select_list = []; //リストの作成

  // 2012年4月から、現在まで
  for ($year=2012;$year<=$today_year;$year++){
    if ($year == $today_year){
      $month_counter = $today_month;
    }else{
      $month_counter = 12; //12ヶ月で作成
    }
    for($month=1;$month<=$month_counter;$month++){
      $alt_date = [$year,$month];
      $select_list[] = $alt_date; //二次元配列で格納
    }
  }

  foreach ($select_list as $sl){; //リスト形式でセレクターを取得
    $result .= '<option class="operation_period" value="'. $sl[0] ."-". $sl[1] .'">'.$sl[0]."月".$sl[1]."日</option>";
  }
  return '<select name="operation_period" class="input-number"><option value="" selected hidden>お選びください</option>'.$result.'</select>';
}
?>