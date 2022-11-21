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
      GetLatLng();
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
        //areaの入力欄が変更された時にmapを変更するイベント
        //セレクトボタンで取得した都道府県をjqueryで指定して変数に格納
        const pref_value = $("#pref option:selected").text();
        GetAdressLatLng(pref_value, city.value, area.value);
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

// Initialize and add the map
function initMap() {
  if (document.getElementById("gmap")) {
    //初期位置を設定
    //TODO:住所不明のため、東京駅をターゲットに指定
    let latlng = new google.maps.LatLng(35.680865, 139.767036);
    let opts = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      disableDefaultUI: "disabledefaultui",
    };
    map = new google.maps.Map(document.getElementById("gmap"), opts);
    marker = new google.maps.Marker({
      position: latlng,
      map: map,
      draggable: true,
    });
    //ピンの位置を変更するたびに中心点を変更するイベントをmapに追加
    google.maps.event.addListener(marker, "dragend", () => {
      //ピンの位置の座標を取得
      const pos = marker.getPosition();
      const lat = pos.lat(); //緯度
      const lng = pos.lng(); //経度
      //mapの中央をピンの座標に移動させる
      map.panTo(new google.maps.LatLng(pos, 15));
    });
  } else if (document.getElementById("gmap-confirm")) {
    //確認画面の処理
    //セッションストレージ内の緯度経度を取得
    const Lat = sessionStorage.getItem("lat");
    const Lng = sessionStorage.getItem("lng");
    const latlng = new google.maps.LatLng(Lat, Lng);
    const opts = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: "disabledefaultui",
      gestureHandling: "none",
    };
    const map = new google.maps.Map(
      document.getElementById("gmap-confirm"),
      opts
    );
    const marker = new google.maps.Marker({
      position: latlng,
      map: map,
    });
    //セッションストレージから緯度経度を削除
    sessionStorage.removeItem("lat");
    sessionStorage.removeItem("lng");
    //住所取得
    reverseGeo(Lat, Lng);
    document.getElementById("lat").value = Lat;
    document.getElementById("lng").value = Lng;
  }
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
      if (status == google.maps.GeocoderStatus.OK) {
        //markerの削除
        marker.setMap(null);
        //map.panToで、指定座標までマップ表示を移動させる
        map.panTo(new google.maps.LatLng(results[0].geometry.location, 15));
        // ポジションを変更
        marker.position = results[0].geometry.location;
        // マーカーをセット
        marker.setMap(map);
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

//buttonを押した時の地図座標を取得
function GetLatLng() {
  //(緯度,　経度)の形で取得する
  const LatLng = marker.getPosition();
  const lat = LatLng.lat(); //緯度
  const lng = LatLng.lng(); //経度
  //セッションストレージ内に緯度経度を格納
  sessionStorage.setItem("lat", lat);
  sessionStorage.setItem("lng", lng);
}

//逆ジオコーディング
function reverseGeo(lat, lng) {
  const geoObj = new google.maps.Geocoder();
  const latlng = new google.maps.LatLng(lat, lng);

  if (geoObj) {
    geoObj.geocode({ latLng: latlng }, function (results, status) {
      if (status == "OK") {
        const tmp = results[0].formatted_address.split("、");
        document.getElementById("address").value = tmp[1];
      } else {
        //TODO:リロード時に値がリセットされてしまう。
        alert(status);
      }
    });
  }
}
