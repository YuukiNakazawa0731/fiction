//fiction.js

//===[ローディング]===//
$(function () {
  var load_edit = function () {
    if (sessionStorage.getItem("fic_access")) {
      //2回目以降//
      $("#loading-containar").addClass("no-load");
      //ヘッダー//
      setTimeout(function () {
        $("header").addClass("header-fadein");
        $("#menu-btn").addClass("menu-btn-fadein");
        $("#menu-btn-m").addClass("menu-btn-m-fadein");
        $("#contact-outer").addClass("co-fadein");
      }, 500);

      //タイトルコメント//
      setTimeout(function () {
        $("#t-txt1").addClass("txtin");
      }, 1000);
      setTimeout(function () {
        $("#t-txt2").addClass("txtin");
      }, 2000);
      setTimeout(function () {
        $("#t-txt3").addClass("txtin");
      }, 3000);
    } else {
      //初回アクセス//
      sessionStorage.setItem("fic_access", "true");
      $("#loading-contents-inner").addClass("shakein");
      $("#load-logo-bottom").addClass("load-logo-fadein");
      setTimeout(function () {
        $("#load-logo-pop").addClass("logo-bounse");
        $("#pop-logo-box").addClass("box-bounse");
        $("#pop-ball").addClass("ball-bounse");
        $("#pop-ball-box").addClass("ball-box-bounse");
      }, 2000);
      setTimeout(function () {
        $("#load-logo-bottom").removeClass("load-logo-fadein");
      }, 2900);
      setTimeout(function () {
        $("#pop-ball").addClass("ball-bomb");
      }, 3000);
      setTimeout(function () {
        $("#loading-containar").addClass("lc-fadeout");
      }, 3500);
      setTimeout(function () {
        $("header").addClass("header-fadein");
        $("#menu-btn").addClass("menu-btn-fadein");
        $("#menu-btn-m").addClass("menu-btn-m-fadein");
        $("#contact-outer").addClass("co-fadein");
      }, 4000);
      //タイトルコメント//
      setTimeout(function () {
        $("#t-txt1").addClass("txtin");
      }, 5000);
      setTimeout(function () {
        $("#t-txt2").addClass("txtin");
      }, 5500);
      setTimeout(function () {
        $("#t-txt3").addClass("txtin");
      }, 6000);
    }
  };
  load_edit();
});

//===[メニュー]===//
$(function () {
  //[メニューアイコン]
  var m_flg = "off";
  $("#menu-icon").on("click", function () {
    if ((m_flg = "on")) {
      m_flg = "off";
      $("#menu-icon-inner").toggleClass("ic-active");
      $("#menu-icon").toggleClass("m-active");

      //メニューバーアニメ
      setTimeout(function () {
        $("#menu-list").toggleClass("menu-fadein");
      }, 100);
      setTimeout(function () {
        $("#band-top-line").toggleClass("top-slidein");
        $("#band-bottom-line").toggleClass("bottom-slidein");
      }, 200);
      setTimeout(function () {
        $("#menu-band-top").toggleClass("inflate");
        $("#menu-band-bottom").toggleClass("inflate");
      }, 400);
      setTimeout(function () {
        $("#menu-band").toggleClass("slidein");
      }, 600);
      setTimeout(function () {
        $("#main-menu-outer").toggleClass("mm-active");
      }, 700);
    } else if ((m_flg = "off")) {
      m_flg = "on";
      $("#menu-icon").toggleClass("m-active");
      $("#menu-icon-inner").toggleClass("ic-active");
      //メニューバー
      $("#main-menu-outer").toggleClass("mm-active");
      setTimeout(function () {
        $("#menu-band").toggleClass("slidein");
      }, 100);
      setTimeout(function () {
        $("#menu-band-top").toggleClass("inflate");
        $("#menu-band-bottom").toggleClass("inflate");
      }, 200);
      setTimeout(function () {
        $("#band-to-line").toggleClass("top-slidein");
        $("#band-bottom-line").toggleClass("bottom-slidein");
      }, 400);
      setTimeout(function () {
        $("#menu-list").toggleClass("menu-fadein");
      }, 600);
      setTimeout(function () {
        $("#menu-item").toggleClass("menu-fadein");
      }, 600);
    }
  });
});

$(function () {
  //[メニュークリックでクローズ]
  $(".menu-item").on("click", function () {
    m_flg = "off";
    $("#menu-icon").toggleClass("m-active");
    $("#menu-icon-inner").toggleClass("ic-active");
    //メニューバー
    setTimeout(function () {
      $("#menu-list").toggleClass("menu-fadein");
    }, 100);
    setTimeout(function () {
      $("#band-top-line").toggleClass("top-slidein");
      $("#band-bottom-line").toggleClass("bottom-slidein");
    }, 200);
    setTimeout(function () {
      $("#menu-band-top").toggleClass("inflate");
      $("#menu-band-bottom").toggleClass("inflate");
    }, 400);
    setTimeout(function () {
      $("#menu-band").toggleClass("slidein");
    }, 600);
    setTimeout(function () {
      $("#main-menu-outer").toggleClass("mm-active");
    }, 700);
  });
});

$(function () {
  //[メニュークリックでスクロ－ル]
  $(document).ready(function () {
    $('a[href^="#"]').on("click", function (e) {
      e.preventDefault();
      var target = this.hash;
      var $target = $(target);
      $("html,body")
        .stop()
        .animate(
          {
            scrollTop: $target.offset().top,
          },
          500,
          "swing",
          function () {
            window.location.hash = target;
          }
        );
    });
  });
});

$(function () {
  //[メニュー(モバイル)]
  $("#menu-btn-m").off("click");
  $("#menu-btn-m").on("click", function () {
    $("#menu-outer-m").toggleClass("open");
    $("#menu-btn-m-inner").toggleClass("active");
  });

  //[メニュークローズ(モバイル)]
  $(".menu-item-m").on("click", function () {
    $("#menu-outer-m").toggleClass("open");
    $("#menu-btn-m-inner").toggleClass("active");
  });
});

$(function () {
  //[other-contents return_btn]
  $("#return-btn").on("click", function () {
    window.location.href = "../main.php";
  });
});

//===[サイドバー(問い合わせ)]===//
$(function () {
  //[サイドバー(お問い合わせ)]
  var flg = "off";
  $("#contact-tab").on("click", function () {
    if (flg == "on") {
      flg = "off";
      $("#contact-outer").removeClass("on");
      $("#contact-outer").addClass("off");
      $("#contact-tab-txt").text("CONTACT");
      $("#contact-tab-txt").removeClass("tab-close");
      $("#menu-icon").fadeIn();
    } else if ((flg = "off")) {
      flg = "on";
      $("#contact-outer").removeClass("off");
      $("#contact-outer").addClass("on");
      $("#contact-tab-txt").text("CLOSE");
      $("#contact-tab-txt").addClass("tab-close");
      $("#menu-icon").fadeOut();
    }
  });
});

$(function () {
  //[お問い合わせクローズ]
  $("#close-contact-btn").on("click", function () {
    $("#contact-outer").removeClass("on");
    $("#contact-outer").addClass("off");
    $("#contact-tab-txt").text("CONTACT");
    $("#contact-tab-txt").removeClass("tab-close");
  });
});

$(function () {
  //[フッター(お問い合わせ)]
  var flg = "off";
  $("#contact-foot").on("click", function () {
    if (flg == "on") {
      flg = "off";
      $("#contact-outer").removeClass("on");
      $("#contact-outer").addClass("off");
      $("#contact-tab-txt").text("CONTACT");
      $("#contact-tab-txt").removeClass("tab-close");
      $("#menu-icon").fadeIn();
    } else if ((flg = "off")) {
      flg = "on";
      $("#contact-outer").removeClass("off");
      $("#contact-outer").addClass("on");
      $("#contact-tab-txt").text("CLOSE");
      $("#contact-tab-txt").addClass("tab-close");
      $("#menu-icon").fadeOut();
    }
  });
});

//===[メインコンテンツ]===//
//[コンテンツタイトルイン黒]
function title_in() {
  $(".contents-title").each(function () {
    var from_position = $(this).offset().top - 5;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= from_position - windowHeight) {
      $(this).addClass("titlein");
      $(".title-inner").addClass("title-down");
    }
  });
}
//ページスクロールで呼び出し
$(window).on("load scroll", function () {
  title_in();
});

//[コンテンツタイトルイン白]
function title_in_w() {
  $(".contents-title-w").each(function () {
    var from_position = $(this).offset().top - 5;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= from_position - windowHeight) {
      $(this).addClass("titlein");
      $(".title-inner-w").addClass("title-down");
    }
  });
}
//ページスクロールで呼び出し
$(window).on("load scroll", function () {
  title_in_w();
});

//=[title]=//
$(function () {
  //[タイトルテキストアップ]
  //(ローディング終了後)
  $(document).ready(function () {
    setTimeout(function () {
      $("#t-txt1").addClass("txt-in");
    }, 4000);
    setTimeout(function () {
      $("#t-txt2").addClass("txt-in");
    }, 5000);
    setTimeout(function () {
      $("#t-txt3").addClass("txt-in");
    }, 6000);
  });
});

//=[news]=//
$(function () {
  //[ニュースコンテンツアップ]
  function news_up() {
    $("#news-container").each(function () {
      var from_position = $(this).offset().top - 5;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= from_position - windowHeight) {
        $(this).addClass("news-up");
        setTimeout(function () {
          $("#more-news-outer").addClass("more-up");
        }, 1000);
      }
    });
  }
  //ページスクロールで呼び出し
  $(window).on("load scroll", function () {
    news_up();
  });

  //[スクロールアニメーション]
  $("#news-outer").scroll(function () {
    var box_scroll = $(this).scrollTop(),
      point_pos = box_scroll / 3.15; //スクロール量
    $("#scroll-point").css("top", point_pos + "%");
  });
});

//==[concept]==//
$(function () {
  //[conceptコンテンツアップ]
  function concept_fadeIn() {
    $("#concept-title").each(function () {
      var from_position = $(this).offset().top - 5;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= from_position - windowHeight) {
        $(".img-box-a").addClass("img-fadein");
        $(".img-box-b").addClass("img-fadein");
        $(".concept-txt-a").addClass("lead-fadein");
        $(".concept-txt-b").addClass("lead-fadein");
      }
    });
  }
  //ページスクロールで呼び出し
  $(window).on("load scroll", function () {
    concept_fadeIn();
  });
});

//=[products]=//
$(function () {
  //[productsコンテンツアップ]
  function products_up() {
    $(".products-container").each(function () {
      var from_position = $(this).offset().top - 5;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= from_position - windowHeight) {
        $(this).addClass("products-up");
        $(this).slick({ dots: true });
      }
    });
  }
  //ページスクロールで呼び出し
  $(window).on("load scroll", function () {
    products_up();
  });
});

//[products slider]
$(function () {
  const $slider = $(".js-slider");

  $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
    $slider.find(".slick-slide").each((index, el) => {
      const $this = $(el),
        slickindex = $this.attr("data-slick-index");
      if (nextSlide == slick.slideCount - 1 && currentSlide == 0) {
        if (slickindex == "-1") {
          $this.addClass("is-active-next");
        } else {
          $this.removeClass("is-active-next");
        }
      } else if (nextSlide == 0) {
        if (slickindex == slick.slideCount) {
          $this.addClass("is-active-next");
        } else {
          $this.removeClass("is-active-next");
        }
      } else {
        $this.removeClass("is-active-next");
      }
    });
  });

  $(".products-container").slick({
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerPadding: "0%",
    autoplay: true,
    autoplaySpeed: 2000,
    cssEase: "ease",
    dots: true,
    prevArrow: '<div class="slick-prev"><div class="prev-arrow"></div></div>', //矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"><div class="next-arrow"></div></div>', //矢印部分NextのHTMLを変更

    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
});

//==[contact.php(お問い合わせフォーム)]==//
$(function () {
  //[お問い合わせバリデーション]
  $("#contact-form").validate({
    rules: {
      first_name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      first_ruby: {
        required: true,
      },
      last_ruby: {
        required: true,
      },
      post_code: {
        required: true,
      },
      prefectures: {
        required: true,
      },
      address_1: {
        required: true,
      },
      address_2: {
        required: true,
      },
      tel_num: {
        required: true,
      },
      contact_txt: {
        required: true,
      },
      privacy_check: {
        required: true,
      },
    },

    messages: {
      first_name: {
        required: "入力してください",
      },
      last_name: {
        required: "入力してください",
      },
      first_ruby: {
        required: "入力してください",
      },
      last_ruby: {
        required: "入力してください",
      },
      post_code: {
        required: "入力してください",
      },
      prefectures: {
        required: "選択してください",
      },
      address_1: {
        required: "入力してください",
      },
      address_2: {
        required: "入力してください",
      },
      tel_num: {
        required: "入力してください",
      },
      contact_txt: {
        required: "入力してください",
      },
      privacy_check: {
        required: "入力してください",
      },
    },

    //エラーの表示場所
    errorPlacement: function (error, element) {
      var name = element.attr("name");
      error.appendTo($(".err-" + name));
    },
    errorClass: "err",
    errorElement: "p",
    invalidHandler: function () {
      $(".error-nav").text("入力エラーがあります");
    },
  });
});

//==[contact.php(お問い合わせフォーム)]==//
$(function () {
  //[お問い合わせバリデーション]
  $("#contact-form-m").validate({
    rules: {
      first_name: {
        required: true,
      },
      last_name: {
        required: true,
      },
      first_ruby: {
        required: true,
      },
      last_ruby: {
        required: true,
      },
      post_code: {
        required: true,
      },
      prefectures: {
        required: true,
      },
      address_1: {
        required: true,
      },
      address_2: {
        required: true,
      },
      tel_num: {
        required: true,
      },
      contact_txt: {
        required: true,
      },
      privacy_check: {
        required: true,
      },
    },

    messages: {
      first_name: {
        required: "入力してください",
      },
      last_name: {
        required: "入力してください",
      },
      first_ruby: {
        required: "入力してください",
      },
      last_ruby: {
        required: "入力してください",
      },
      post_code: {
        required: "入力してください",
      },
      prefectures: {
        required: "選択してください",
      },
      address_1: {
        required: "入力してください",
      },
      address_2: {
        required: "入力してください",
      },
      tel_num: {
        required: "入力してください",
      },
      contact_txt: {
        required: "入力してください",
      },
      privacy_check: {
        required: "入力してください",
      },
    },

    //エラーの表示場所
    errorPlacement: function (error, element) {
      var name = element.attr("name");
      error.appendTo($(".err-" + name));
    },
    errorClass: "err",
    errorElement: "p",
    invalidHandler: function () {
      $(".error-nav").text("入力エラーがあります");
    },
  });
});

//==[contact_check.php]==//
$(function () {
  //[お問い合わせバリデーション]
  $("#submit-contact").on("click", function () {
    $("#contact-thank-ol").fadeIn();
  });
});

$(function () {
  //[お問い合わせバリデーション]
  $("#contact-thank-ol").on("click", function () {
    window.location.href = "../main.php";
  });
});
