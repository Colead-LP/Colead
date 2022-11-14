$(function () {
  // #で始まるa要素をクリックした場合に処理（"#"←ダブルクォーテンションで囲むのを忘れずに。忘れるとjQueryのバージョンによっては動かない）
  $('a[href^="#"]').click(function () {
    // 移動先を0px調整する。0を30にすると30px下にずらすことができる。
    const adjust = 0;
    // スクロールの速度（ミリ秒）
    const speed = 800;
    // アンカーの値取得 リンク先（href）を取得して、hrefという変数に代入
    const href = $(this).attr("href");
    // 移動先を取得 リンク先(href）のidがある要素を探して、targetに代入
    const target = $(href == "#" || href == "" ? "html" : href);
    // 移動先を調整 idの要素の位置をoffset()で取得して、positionに代入
    const position = target.offset().top + adjust;
    // スムーススクロール linear（等速） or swing（変速）
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

  function changeTxt() {
    let url = location.href;
    console.log(url);

    // if(url === 'http://localhost:8888/Colead/confirm/' ) {
    if (url === "https://itomaru.org/colead/confirm/") {
      let hoge = $(".address .form-item-ttl").text("発電所住所");
    }
  }

  $(function () {
    // 変数に要素を入れる
    var open = $(".js-pravacy"),
      close = $(".modal-close"),
      container = $(".modal-container");

    //開くボタンをクリックしたらモーダルを表示する
    open.on("click", function () {
      container.addClass("active");
      return false;
    });

    //閉じるボタンをクリックしたらモーダルを閉じる
    close.on("click", function () {
      container.removeClass("active");
    });

    //モーダルの外側をクリックしたらモーダルを閉じる
    $(document).on("click", function (e) {
      if (!$(e.target).closest(".modal-body").length) {
        container.removeClass("active");
      }
    });
  });
  changeTxt();
});

function onClick() {
  //値のリセット
  $year_fee = "";
  $rent = "";
  $operation_period = "";

  //buttonがクリックされた時、変数に値を代入する
  $year_fee = Number(document.getElementById("year_fee").value);
  $rent = Number(document.getElementById("rent").value);
  // $operation_period = document.getElementById("operation_period").value;
  $operation_period = $('option:selected').val();

  if (
    EmptyOrNot($year_fee) == false ||
    EmptyOrNot($rent) == false ||
    EmptyOrNot($operation_period) == false
  ) {
    //空欄時の処理を記入（ページ内遷移、アラート）
    return false; //送信ボタン本来の動作をキャンセルします
  } else {
    if (JudgeInteger($year_fee) == false || JudgeInteger($rent) == false) {
      //自然数以外が入力されている時の処理（ページ内遷移、アラート）
      return false; //送信ボタン本来の動作をキャンセルします
    } else {
      if ($year_fee < $rent) {
        //土地賃料の方が大きくなり、マイナスの値が出る
        return false; //送信ボタン本来の動作をキャンセルします
      } else {
        //正しい入力値（計算、画面の引き伸ばし）
        $amount = GetApproximateCost(
          $year_fee,
          $rent,
          $operation_period
        ).toLocaleString();
        $(".calc-box-number").val($amount);
        $(".js-slideToggle").slideDown();
        $(".contact-arrow").addClass("active");
      }
    }
  }

  //自然数、整数、空欄かどうかの関数、yearとrentを判断させる
  function JudgeInteger($inputNumber) {
    if (Number.isInteger($inputNumber) == false) {
      //整数以外が入力されている
      return false;
    } else {
      return true;
    }
  }

  //空欄かどうかの関数、全ての変数を代入
  function EmptyOrNot($inputValue) {
    if ($inputValue == "") {
      return false;
    } else {
      return true;
    }
  }

  function GetApproximateCost($year_fee, $rent, $operation_period) {
    //概算売却額計算関数
    //  =(年間売電金額-土地賃料) ÷ {7%+[12/(240ヵ月- 本日の日付-稼働開始年月)]}
    //operationyearの形式はYYYY-Mで格納されている

    //本日の日付と稼働開始年月の差分取得
    $today = new Date(); //本日の日付
    $today_year = $today.getFullYear();
    $today_month = $today.getMonth() + 1;

    //splitを用いてinputValueの年と月を分割する
    $input_date = $operation_period.split("-");

    $end_month = $today_year * 12 + $today_month; //日付のフォーマットを揃え、年数に12かけて月ベースを算出する
    $start_month = Number($input_date[0]) * 12 + Number($input_date[1]);

    $progress_month = $end_month - $start_month; //経過月数
    $serviceLife = 240; //耐用年数240ヶ月
    $remainingMouths = $serviceLife - $progress_month; //耐用年数-経過月数=残存月数

    $yield = 0.07; //利回り
    $grossYield = Math.round(($yield + 12 / $remainingMouths) * 1000) / 1000; //表面利回り算出
    $cf = ($year_fee - $rent) * 10000; //売上総利益の算出

    $amount = Math.round($cf / $grossYield / 10000) * 10000; //roundで千の位まで丸め込み

    return $amount;
  }
}
