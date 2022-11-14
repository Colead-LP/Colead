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
  
  $("form").submit(function (e) {
    const name = $(".input-name-first").val();
    const email = $(".type-email").val();
    const post = $("#zip").val();
    const city = $("#city").val();
    const houseNumber = $("#area").val();
    const dc = $("#dc").val();
    const privacy = $("#privacy-1");
    const top = $(".mw_wp_form").offset().top - 40;

    if (
      name === "" ||
      email === "" ||
      post === "" ||
      city === "" ||
      houseNumber === "" ||
      dc === ""
    ) {
      $("html,body").animate({ scrollTop: top }, "slow");
    }

    if (name === "") {
      e.preventDefault();
      $(".name").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (email === "") {
      e.preventDefault();
      $(".email").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (post === "") {
      e.preventDefault();
      $(".post").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (city === "") {
      e.preventDefault();
      $(".munic").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (houseNumber === "") {
      e.preventDefault();
      $(".houseNumber").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (dc === "") {
      e.preventDefault();
      $(".dc").append('<p class="notval">未入力です。</p>');
    } else {
      return true;
    }
    if (privacy.prop("checked")) {
      console.log('check');
      return true;
    } else {
      console.log('notcheck');
      e.preventDefault();
      $(".privacy").append('<p class="notval">必須項目です。</p>');
    }
  });

  changeTxt();
});

function onClick() {
  //値のリセット
  $year_fee = "";
  $rent = "";
  $operation_period = "";

  //buttonがクリックされた時、変数に値を代入する
  input_year_fee = Number(document.getElementById("year_fee").value);
  input_rent = document.getElementById("rent").value;
  // input_operation_period = document.getElementById("operation_period").value;
  input_operation_period = $("option:selected").val();

  // $value_list = [$year_fee, $rent, $operation_period];

  if (input_year_fee == "") {
    $(".year_fee").text("未入力です。");
  } else {
    if (Number.isInteger(input_year_fee) == false) {
      $(".year_fee").text("正しい値を入力してください。");
    } else {
      if (input_year_fee <= 0) {
        $(".year_fee").text("正しい値を入力してください。");
      } else {
        if (input_year_fee < input_rent) {
          $(".year_fee").text("正しい値を入力してください。");
        } else {
          $(".year_fee").text("");
          $year_fee = input_year_fee;
        }
      }
    }
  }

  if (input_rent == "" && typeof input_rent == "string") {
    $(".rent").text("未入力です。");
  } else {
    input_rent = Number(input_rent);
    if (Number.isInteger(input_rent) == false) {
      $(".rent").text("正しい値を入力してください。");
    } else {
      if (input_rent < 0) {
        $(".rent").text("正しい値を入力してください。");
      } else {
        if (input_year_fee < input_rent) {
          $(".rent").text("正しい値を入力してください。");
        } else {
          $(".rent").text("");
          $rent = input_rent;
        }
      }
    }
  }

  if (input_operation_period == "") {
    $(".operation_period").text("未入力です。");
  } else {
    $(".operation_period").text("");
    $operation_period = input_operation_period;
  }

  if ($year_fee) {
    if ($rent) {
      if ($operation_period) {
        $amount = GetApproximateCost(
          $year_fee,
          $rent,
          $operation_period
        ).toLocaleString();
        $(".calc-box-number").val($amount);
        $(".contact-wrap").addClass("active");
        $(".contact-arrow").addClass("active");
      }
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
