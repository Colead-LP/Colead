// const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
// for (let i = 0; i < smoothScrollTrigger.length; i++) {
//   smoothScrollTrigger[i].addEventListener("click", (e) => {
//     e.preventDefault();
//     let href = smoothScrollTrigger[i].getAttribute("href");
//     let targetElement = document.getElementById(href.replace("#", ""));
//     const rect = targetElement.getBoundingClientRect().top;
//     const offset = window.pageYOffset;
//     const gap = 60;
//     const target = rect + offset - gap;
//     window.scrollTo({
//       top: target,
//       behavior: "smooth",
//     });
//   });
// }

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
});
