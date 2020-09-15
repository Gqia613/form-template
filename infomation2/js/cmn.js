// ＝＝＝＝＝＝＝＝＝＝＝＝リンククリックしたらそこまでスクロール＝＝＝＝＝＝＝＝

// $(function () {
//   // #で始まるリンクをクリックしたら実行されます
//   $('a[href^="#"]').click(function () {
//     // スクロールの速度
//     var speed = 400; // ミリ秒で記述
//     var href = $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top;
//     $('body,html').animate({
//       scrollTop: position
//     }, speed, 'swing');
//     return false;
//   });
// });

//   <nav class="h_nav">
//         <ul>
//             <li><a href="#anc-01" class="anchor-link">会社概要</a></li>
//             <li><a href="#anc-02" class="anchor-link">仕事内容</a></li>
//             <li><a href="#anc-03" class="anchor-link">先輩の声</a></li>
//             <li><a href="#anc-04" class="anchor-link">研修内容</a></li>
//         </ul>
//     </nav>
//     <section id="anc-01"></section>
//     <section id="anc-02"></section>
//     <section id="anc-03"></section>
//     <section id="anc-04"></section>

//   ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝


// -----------------------------------------------------------------------
// トップへ戻るボタン
// $(function () {
//   var topBtn = $('.top');
//   //ボタンを非表示にする
//   topBtn.hide();
//   //スクロールしてページトップから100に達したらボタンを表示
//   $(window).scroll(function () {
//     if ($(this).scrollTop() > 10) {
//       //フェードインで表示
//       topBtn.fadeIn();
//     } else {
//       //フェードアウトで非表示
//       topBtn.fadeOut();
//     }
//   });
//   topBtn.click(function () {
//     $('body,html').animate({
//       scrollTop: 0
//     }, 500);
//     return false;
//   });
// });


//   ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー
$(function () {
  $("#slider").slick({
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 2000,
    dots: false,
    fade: true,
    infinite: true,
    swipe: false,
    arrows: false
  });
});
//   ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー

// $(function () {
//   $(".sp_menu,.sp_h_gnav_list a").click(function () {
//     if (!$(".sp_gnav").hasClass("navi-btn-on")) {
//       $(".sp_gnav").addClass("navi-btn-on");
//       $(".sp_gnav").hide().fadeIn();
//     } else {
//       $(".sp_gnav").removeClass("navi-btn-on")
//       $(".sp_gnav").fadeOut();
//     }
//   });
// });



// $(function () {
//   $(".sp_menu,.sp_h_gnav_list a").click(function () {
//     if (!$(".sp_menu span").hasClass("menu_btn")) {
//       $(".sp_menu span").addClass("menu_btn");
//       $('.sp_gnav_list').css({'transform':'translateX(0)'})
//     } else {
//       $(".sp_menu span").removeClass("menu_btn")
//       $('.sp_gnav_list').css({'transform':'translateX(-377px)'})
//     }
//   });
// });

// ハンバーガーメニューの線に動きを付ける
$(function () {
  $(".sp_menu").click(function () {
    if (!$(".sp_h_gnav span").hasClass("menu_btn")) {
      $(".sp_h_gnav span").addClass("menu_btn");
    } else {
      $(".sp_h_gnav span").removeClass("menu_btn")
    }
  });
});


$(function () {
  $('.nav_concepy').each(function () {
    $(this).on('click', function () {
      $("+.nav_concepy_inner", this).slideToggle();
      return false;
    });
  });
});


// ハンバーガーメニューが横から出てくる
$(function () {
  $(".sp_menu, .sp_h_gnav_list a,.close").click(function () {
    if (!$(".sp_gnav").hasClass("open")) {
      $(".sp_gnav").addClass("open");
    } else {
      $("html").css({
        "overflow-y": "visible"
      });
      $(".sp_gnav").removeClass("open")
    }
  });
});

// 選択した画像をクリックしたら選択した画像が表示される

$(function () {
  let slider = $('.menu_img');
  $('.menu_list li').click(function () {
    let imgSrc = $(this).children('img').attr('src');

    $(slider).fadeOut(function () {
      $(slider).children('img').attr({
        src: imgSrc
      });
      $(slider).fadeIn();
    });
  });
});

// {/* <ul class = "flex shop_store03" >
//   <li>
//     <img src = "images/top/store03_img01.png"alt = "">
//   </li>
//   <li>
//     <img src = "images/top/store03_img01.png"alt = "">
//   </li>
//   <li>
//     <img src = "images/top/store03_img01.png"alt = "">
//   </li>
//   <li>
//     <img src = "images/top/store03_img01.png"alt = "">
//   </li>
//   <li>
//     <img src = "images/top/store03_img01.png"alt = "">
//   </li>
// </ul> */}


$('.btn').on('click', function () {
  //フェードインする
  $('.menu_show,.shdow').fadeIn("slow", function () {
    //コールバックで3秒後にフェードアウト
    $(this).delay(1000).fadeOut("slow");
  });
});
