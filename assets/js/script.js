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

  function privacyModal() {
    let scrollPos;
    $(".privacy-link").on("click", function (e) {
      e.preventDefault();
      scrollPos = $(window).scrollTop(); //topからのスクロール位置を格納
      $(".content").fadeIn(); //モーダルをフェードイン
      $("body").addClass("fixed").css({ top: -scrollPos }); //背景固定
      return false; //<a>を無効化
    });

    $(".overlay, .modal__close").click(function () {
      $(".content").fadeOut(); //モーダルをフェードアウト
      $("body").removeClass("fixed").css({ top: 0 }); //背景固定を解除
      $(window).scrollTop(scrollPos); //元の位置までスクロール
      return false; //<a>を無効化
    });
  }

  function slideToggle() {
    $(".js-switch").on("click", function () {
      $(".js-slideToggle").slideToggle();
    });
  }

  $(function () {
    const form = document.getElementById("calc");
    const calcSubmit = document.getElementById("calc_start");
    $(calcSubmit).click(function (e) {
      e.preventDefault;
      let $year_fee = $("[name='year_fee']").val();
      let $rent = $("[name='rent']").val();
      let $operation_period = $(".operation_period").val();
      // let $amount = $("[name='amount']").val();

      // var data = [
      //   {
      //     year_fee: $year_fee,
      //   },
      //   {
      //     rent: $rent,
      //   },
      //   {
      //     operation_period: $operation_period,
      //   },
      // ];

      var data = {
        year_fee:$year_fee,
        rent:$year_fee,
        operation_period:$operation_period,
      };

      data = JSON.stringify(data);
      console.log(data);

      $.ajax({
        type: "POST",
        url: "",
        data: {
          data: data
        },
      })
        .done(function (data, textStatus, jqXHR) {
          console.log("成功", data, textStatus);
          JSON.parse(data);
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
          console.log("失敗");
        })
        .always(function () {
          console.log("処理が終わるとここ通る");
        });
    });
  });

  changeTxt();
  privacyModal();
  slideToggle();
});
