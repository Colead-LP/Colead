// #スムーススクロール
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

  // #プライバシーモーダル
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

  // #formValidation
  // form element
  const form = document.getElementById("form");

  if (form) {
    // エラーを表示する p 要素に付与するクラス名 (エラー用のクラス)
    const errorClassName = "error";

    //required クラスを指定された要素の集まり
    const requiredElems = document.querySelectorAll(".required");
    // 各input要素取得
    const to_confirm = document.getElementById("toConfirm");
    const name_first = document.getElementById("name_first");
    const name_last = document.getElementById("name_last");
    const email = document.getElementById("email");
    const zip = document.getElementById("zip");
    const pref = document.getElementById("pref");
    const city = document.getElementById("city");
    const area = document.getElementById("area");
    const fit = document.getElementById("fit");
    const dc = document.getElementById("dc");
    const privacy = document.getElementById("privacy");

    // エラーメッセージを表示する p 要素を生成して親要素に追加する関数
    // elem : 対象の要素
    // errorMessage : 表示するエラーメッセージ
    const createError = (elem, errorMessage) => {
      // p 要素を生成
      const errorP = document.createElement("p");
      // エラー用のクラスを追加 (設定)
      errorP.classList.add(errorClassName);
      // 引数に指定されたエラーメッセージを設定
      errorP.textContent = errorMessage;
      // elem の親要素の子要素として追加
      elem.parentNode.appendChild(errorP);
    };

    form.addEventListener("submit", (e) => {
      // エラーを表示する要素を全て取得して削除 (初期化)
      const errorElems = form.querySelectorAll("." + errorClassName);
      errorElems.forEach((elem) => {
        elem.remove();
      });

      requiredElems.forEach((elem) => {
        // ラジオボタンの場合
        if (elem.tagName === "INPUT" && elem.getAttribute("type") === "radio") {
          const checkedRadio = elem.parentElement.querySelector(
            'input[type="radio"]:checked'
          );
          if (checkedRadio === null) {
            createError(elem, "いずれか1つを選択してください");
            e.preventDefault();
          }
          // チェックボックスの場合
        } else if (
          elem.tagName === "INPUT" &&
          elem.getAttribute("type") === "checkbox"
        ) {
          const checkedCheckbox = elem.parentElement.querySelector(
            'input[type="checkbox"]:checked'
          );
          if (checkedCheckbox === null) {
            createError(elem, "選択してください。");
            e.preventDefault();
          }
        } else {
          const elemValue = elem.value.trim();
          if (elemValue.length === 0) {
            // セクレトの場合
            if (elem.tagName === "SELECT") {
              createError(elem, "選択してください。");
              // その他
            } else {
              createError(elem, "入力してください。");
            }
            e.preventDefault();
          }
        }
      });

      // エラーの最初の要素を取得
      const errorElem = form.querySelector("." + errorClassName);
      // エラーがあればエラーの最初の要素の位置へスクロール
      if (errorElem) {
        const rect = errorElem.getBoundingClientRect().top;
        const offset = window.pageYOffset;
        const gap = 60;
        const errorElemTop = rect + offset - gap;
        window.scrollTo({
          top: errorElemTop,
          behavior: "smooth",
        });
      }
    });

    // changeメソッド
    name_first.addEventListener("change", () => {
      if (name_first.value) {
        name_first.nextElementSibling.remove();
      } else {
        createError(name_first, "入力してください");
      }
    });
    name_last.addEventListener("change", () => {
      if (name_last.value) {
        name_last.nextElementSibling.remove();
      } else {
        createError(name_last, "入力してください");
      }
    });
    email.addEventListener("change", () => {
      if (email.value) {
        email.nextElementSibling.remove();
      } else {
        createError(email, "入力してください");
      }
    });
    zip.addEventListener("change", () => {
      if (zip.value) {
        zip.nextElementSibling.remove();
      } else {
        createError(zip, "入力してください");
      }
    });
    pref.addEventListener("change", () => {
      if (pref.value) {
        pref.nextElementSibling.remove();
      } else {
        createError(pref, "入力してください");
      }
    });
    city.addEventListener("change", () => {
      if (city.value) {
        city.nextElementSibling.remove();
      } else {
        createError(city, "入力してください");
      }
    });
    area.addEventListener("change", () => {
      if (area.value) {
        area.nextElementSibling.remove();
      } else {
        createError(area, "入力してください");
      }
    });
    fit.addEventListener("change", () => {
      if (fit.value) {
        fit.nextElementSibling.remove();
      } else {
        createError(fit, "入力してください");
      }
    });
    dc.addEventListener("change", () => {
      if (dc.value) {
        dc.nextElementSibling.remove();
      } else {
        createError(dc, "入力してください");
      }
    });
    privacy.addEventListener("change", () => {
      if (privacy.value) {
        const privacyNext = document.querySelector(".privacy_input_txt");
        privacyNext.nextElementSibling.remove();
      } else {
        createError(privacy, "選択してください");
      }
    });
  }

  // #validation confirm
  const formConfirm = document.querySelector(".confirm");

  if (formConfirm) {
    formConfirm.addEventListener("submit", (e) => {
      const errorClassName = "error";

      const errorElems = formConfirm.querySelectorAll("." + errorClassName);
      errorElems.forEach((elem) => {
        elem.remove();
      });

      const createError = (elem, errorMessage) => {
        // p 要素を生成
        const errorP = document.createElement("p");
        // エラー用のクラスを追加 (設定)
        errorP.classList.add(errorClassName);
        // 引数に指定されたエラーメッセージを設定
        errorP.textContent = errorMessage;
        // elem の親要素の子要素として追加
        elem.parentNode.appendChild(errorP);
      };

      const requiredElems = document.querySelectorAll(".required");

      requiredElems.forEach((elem) => {
        if (
          elem.tagName === "INPUT" &&
          elem.getAttribute("type") === "checkbox"
        ) {
          const checkedCheckbox = elem.parentElement.querySelector(
            'input[type="checkbox"]:checked'
          );
          if (checkedCheckbox === null) {
            createError(elem, "選択してください");
            e.preventDefault();
          }
        }
      });
    });

    const privacyConfirm = document.getElementById("submit_privacy");

    privacyConfirm.addEventListener("change", () => {
      if (privacyConfirm.value) {
        const privacyConfirmNext = document.querySelector(".privacy_txt");
        privacyConfirmNext.nextElementSibling.remove();
      } else {
        createError(privacyConfirm, "選択してください");
      }
    });
  }
});

// #計算フォーム
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

// #map
function initMap() {
  var mapPosition = new google.maps.LatLng(35.6882495, 139.6856557); //緯度経度
  var map = new google.maps.Map(document.getElementById("gmap"), {
    zoom: 17, //ズーム
    center: mapPosition,
  });
  var marker = new google.maps.Marker({
    position: mapPosition,
    map: map,
  });
}
