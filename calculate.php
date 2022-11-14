<?php
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
    $result .= '<option class="operation_period" value="'. $sl[0] ."-". $sl[1] .'">'.$sl[0]."年".$sl[1]."月</option>";
  }
  return '<select name="operation_period" class="input-number" id="operation_period"><option class="operation_period" value="" selected hidden>お選びください</option>'.$result.'</select>';
}
?>