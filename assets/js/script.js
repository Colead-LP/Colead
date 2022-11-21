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

  //イベントリスナー追加用にdocument読み込み時にinput#areaを変数に格納
  area_value = document.getElementById("area");

  //番地が入力された時に起動するイベントリスナーをinput欄に設定
  area_value.addEventListener("change", function () {
    //関数内で利用できるcity.value変数を定義
    let city_value = document.getElementById("city").value;

    //セレクトボタンで取得した都道府県をjqueryで指定して変数に格納
    let pref = $("#pref option:selected").text();
    GetAdressLatLng(pref, city_value, area_value.value);
  });
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

// #formValidation
// form
const form = document.getElementById("form");
// form element
const name_first = document.getElementById("name_first");
const name_last = document.getElementById("name_last");
const email = document.getElementById("email");
const zip = document.getElementById("zip");
const pref = document.getElementById("pref");
// const prefval = pref.value;
const city = document.getElementById("city");
const area = document.getElementById("area");
const fit = document.getElementById("fit");
// const fitval = fit.value;
const dc = document.getElementById("dc");
const privacy = document.getElementById("privacy");

// error message
const nameFirst_error_message = document.getElementById(
  "nameFirst_error_message"
);
// btn
const to_confirm = document.getElementById("to_confirm");
console.log(to_confirm);
// 初期状態
// to_confirm.setAttribute("disabled", true);

// event
// name
name_first.addEventListener("keyup", (e) => {
  if (nameExp.test(name_first.value)) {
    name_first.setAttribute("class", "success");
    nameFirst_error_message.style.display = "none";
  } else {
    name_first.setAttribute("class", "error");
    nameFirst_error_message.style.display = "block";
  }
  console.log(name_first.getAttribute("class").includes("success"));
  checkSuccess();
});

// email

// zip

// pref

// city

// area

// fit

// dc

//privacy

//toConfirm

// #map

// Initialize and add the map
function initMap() {
  //初期位置を設定
  //（TODO）：緯度、経度は設定確認
  let latlng = new google.maps.LatLng(35.680865, 139.767036);
  let opts = {
    zoom: 15, //マップの寄りを指定
    center: latlng, //マップの中央を指定
    mapTypeId: google.maps.MapTypeId.ROADMAP, //マップのタイプを3つから指定、今回は建物込みのROADMAP
  };

  //変数mapに（配置場所、オプション）を渡してインスタンス化
  map = new google.maps.Map(document.getElementById("gmap"), opts);
  //マーカーのインスタンス化
  let marker = new google.maps.Marker({
    position: latlng,
    draggable: true,
    map: map,
  });
  //マーカーのドロップ（ドラッグ終了）時のイベント
  google.maps.event.addListener(marker, "dragend", function (e) {
    //イベントの引数eの、プロパティ.latLngがmarkerの緯度経度。
    alert(e.latLng.lat());
    alert(e.latLng.lng());
  });
}

//文字列住所から緯度経度を取得する
//後述のため、関数宣言(function)でGetAdressLatLngを定義
function GetAdressLatLng(pref, city, area) {
  //都道府県、市区町村、番地を一つの文字列として連結
  tmp_adress = pref + city + area;
  //geocoderクラスをインスタンス化
  let geocoder = new google.maps.Geocoder();
  geocoder.geocode(
    {
      address: tmp_adress, //住所
      language: "jp", //サーチ結果の優先する言語。
      region: "jp", //サーチ用のトップレベルドメインの国コード。
    },
    function (results, status) {
      alert(results[1]);
      if (status == google.maps.GeocoderStatus.OK) {
        //処理
        map.panTo(new google.maps.LatLng(results[0].geometry.location, 15));
        let marker = new google.maps.Marker({
          position: results[0].geometry.location,
          draggable: true,
          map: map,
        });
      } else if (status == google.maps.GeocoderStatus.ERROR) {
        //googleサーバー側のエラー
        pass;
      } else if (status == google.maps.GeocoderStatus.INVALID_REQUEST) {
        //サーバーサイド（こちら側）のミス
        pass;
      } else if (status == google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
        //短期間での過剰なアクセス
        pass;
      } else if (status == google.maps.GeocoderStatus.REQUEST_DENIED) {
        //Webページでジオコードが拒否された
        pass;
      } else if (status == google.maps.GeocoderStatus.UNKNOWN_ERROR) {
        //googleサーバー側のエラー
        pass;
      } else if (status == google.maps.GeocoderStatus.ZERO_RESULTS) {
        //処理自体は通るけど、googlemapで特定できない場所の住所が入っている
        pass;
      } else {
        //上記以外、バージョン確認
        alert("Geocode 取得に失敗しました reason: " + status);
      }
    }
  );
}

function CheckLatLng() {
  pos = marker.getPositon();
  lat = pos.lat();
  lng = pos.lng();
}
