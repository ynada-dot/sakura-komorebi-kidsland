$(".hum-menu").click(function () {
  $(this).toggleClass("active");
  $(".hum-list")
    .stop(true, true)
    .fadeToggle(function () {
      if ($(this).is(":visible")) {
        $("body").addClass("fixed-background");
      } else {
        $("body").removeClass("fixed-background");
      }
    });
});
function GethashID(hashIDName) {
  if (hashIDName) {
    $(".page-introduction__tab--list")
      .find("a")
      .each(function () {
        var idName = $(this).attr("href");
        if (idName == hashIDName) {
          var parentElm = $(this).parent();
          $(".page-introduction__tab--list").removeClass("active");
          $(parentElm).addClass("active");

          $(".daycare").removeClass("is-active");
          $(hashIDName).addClass("is-active");
        }
      });
  }
}

$(".page-introduction__tab a").on("click", function () {
  var idName = $(this).attr("href");
  GethashID(idName);
  return false;
});

$(window).on("load", function () {
  if ($(".taxonomy__place_category").length) {
    $(
      ".taxonomy__place_category .page-introduction__tab--list:last-child"
    ).addClass("active");
    $(".daycare:last-child").addClass("is-active");
  } else {
    $(".page-introduction__tab--list:first-of-type").addClass("active");
    $(".daycare:first-of-type").addClass("is-active");
  }

  var hashName = location.hash;
  GethashID(hashName);
});

$(document).ready(function () {
  function checkFadeUp() {
    $(".fadeUpTarget").each(function () {
      var elementTop = $(this).offset().top;
      var windowBottom = $(window).scrollTop() + $(window).height();
      if (elementTop < windowBottom) {
        $(this).addClass("fadeUp");
      }
    });
  }

  checkFadeUp();

  $(window).on("scroll", function () {
    checkFadeUp();
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const target = document.querySelector(".fadeOutTarget");
  const halfScreenHeight = window.innerHeight / 9;

  window.addEventListener("scroll", function () {
    if (window.scrollY > halfScreenHeight) {
      target.classList.add("hidden");
    }
  });
});

$(".accordion-area__item").on("click", function () {
  $(".accordion-area__item--box").slideUp(500);

  var findElm = $(this).children(".accordion-area__item--box");
  var titleElm = $(this).children(".accordion-area__item--ttl");

  if (titleElm.hasClass("close")) {
    titleElm.removeClass("close");
  } else {
    $(".accordion-area__item--ttl").removeClass("close");
    titleElm.addClass("close");
    findElm.slideDown(500);
  }
});

$(window).on("load", function () {
  $(".accordion-area__item:first-of-type").addClass("open");
  $(".open").each(function () {
    var titleElm = $(this).children(".accordion-area__item--ttl");
    titleElm.addClass("close");
    var boxElm = $(this).children(".accordion-area__item--box");
    boxElm.slideDown(500);
  });
});


function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 500) {
    $("#page-top").removeClass("OutMove");
    $("#page-top").addClass("InMove");
  } else {
    if ($("#page-top").hasClass("InMove")) {
      $("#page-top").removeClass("InMove");
      $("#page-top").addClass("OutMove");
    }
  }
}

$(window).scroll(function () {
  PageTopAnime();
});
$(window).on("load", function () {
  PageTopAnime();
});

$("#page-top a").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0,
    },
    500
  );
  return false;
});

$(".slider").slick({
  arrows: false,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 6900,
  infinite: true,
  pauseOnHover: false,
  pauseOnFocus: false,
  cssEase: "linear",
  slidesToShow: 5.5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 375,
      settings: {
        slidesToShow: 3,
      },
    },
  ],
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".archive-post__cate--txt");

  tabs.forEach((tab) => {
    tab.addEventListener("click", function (event) {
      event.preventDefault();
      tabs.forEach((t) => t.classList.remove("select_back-color"));
      this.classList.add("select_back-color");
      window.location.href = this.href;
    });
  });

  const currentUrl = window.location.href;
  tabs.forEach((tab) => {
    if (
      tab.href === currentUrl ||
      (tab.dataset.termId === "all" && currentUrl.includes("?category=all"))
    ) {
      tab.classList.add("select_back-color");
    }
  });
});

$(function () {
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    var speed = 500;
    $("html, body").animate(
      {
        scrollTop: position,
      },
      speed,
      "swing"
    );
    return false;
  });
});


document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth <= 375) {
      const telSpan = document.querySelector('.tel-number');
      if (telSpan) {
          const tel = telSpan.dataset.tel.replace(/[^0-9]/g, ''); // 数字だけに整形
          const link = document.createElement('a');
          link.href = 'tel:' + tel;
          link.textContent = telSpan.textContent;
          link.className = 'tel-number';
          telSpan.replaceWith(link);
      }
  }
});
