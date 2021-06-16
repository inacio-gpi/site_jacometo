AOS.init({
  duration: 800,
  easing: "ease",
  once: true,
  offset: -100,
});

jQuery(function ($) {
  "use strict";
  loader();
  siteMenuClone();
  mobileToggleClick();
  onePageNavigation();
  siteIstotope();
  portfolioItemClick();
  owlCarouselPlugin();
  floatingLabel();
  scrollWindow();
  counter();
  jarallaxPlugin();
  contactForm();
  stickyFillPlugin();
  animateReveal();
});

var siteIstotope = function () {
  var $container = $("#posts").isotope({
    itemSelector: ".item",
    isFitWidth: true,
  });

  $(window).resize(function () {
    $container.isotope({
      columnWidth: ".col-sm-3",
    });
  });

  $container.isotope({ filter: "*" });

  $("#filters").on("click", "a", function (e) {
    e.preventDefault();
    var filterValue = $(this).attr("data-filter");
    $container.isotope({ filter: filterValue });
    $("#filters a").removeClass("active");
    $(this).addClass("active");
  });

  $container
    .imagesLoaded()
    .progress(function () {
      $container.isotope("layout");
    })
    .done(function () {
      $(".gsap-reveal-img").each(function () {
        var html = $(this).html();
        $(this).html(
          '<div class="reveal-wrap"><span class="cover"></span><div class="reveal-content">' +
            html +
            "</div></div>"
        );
      });

      var controller = new ScrollMagic.Controller();

      var revealImg = $(".gsap-reveal-img");

      if (revealImg.length) {
        var i = 0;
        revealImg.each(function () {
          var cover = $(this).find(".cover"),
            revealContent = $(this).find(".reveal-content"),
            img = $(this).find(".reveal-content img");

          var tl2 = new TimelineMax();

          setTimeout(function () {
            tl2;
            tl2.set(img, { scale: "2.0", autoAlpha: 1 }).to(cover, 1, {
              marginLeft: "0",
              ease: Expo.easeInOut,
              onComplete() {
                tl2.set(revealContent, { autoAlpha: 1 });
                tl2.to(cover, 1, { marginLeft: "102%", ease: Expo.easeInOut });
                tl2.to(img, 2, { scale: "1.0", ease: Expo.easeOut }, "-=1.5");
              },
            });
          }, i * 700);

          // var scene = new ScrollMagic.Scene({
          //   triggerElement: this,
          //   duration: "0%",
          //   reverse: false,
          //   offset: "-300%",
          // })
          //   .setTween(tl2)
          //   .addTo(controller);

          i++;
        });
      }
    });

  $(".js-filter").on("click", function (e) {
    e.preventDefault();
    $("#filters").toggleClass("active");
  });
};

var loader = function () {
  setTimeout(function () {
    TweenMax.to(".site-loader-wrap", 1, {
      marginTop: 50,
      autoAlpha: 0,
      ease: Power4.easeInOut,
    });
  }, 10);
  $(".site-loader-wrap").delay(200).fadeOut("slow");
  $("#overlayer").delay(200).fadeOut("slow");
};

var siteMenuClone = function () {
  setTimeout(function () {
    $(".js-clone-nav").each(function () {
      var $this = $(this);
      $this
        .clone()
        .attr("class", "site-nav-wrap")
        .appendTo(".site-mobile-inner");
    });

    var counter = 0;
    $(".site-mobile-menu .has-children").each(function () {
      var $this = $(this);

      $this.prepend('<span class="arrow-collapse collapsed">');

      $this.find(".arrow-collapse").attr({
        "data-toggle": "collapse",
        "data-target": "#collapseItem" + counter,
      });

      $this.find("> ul").attr({
        class: "collapse",
        id: "collapseItem" + counter,
      });

      counter++;
    });
  }, 1000);

  $("body").on("click", ".arrow-collapse", function (e) {
    var $this = $(this);
    if ($this.closest("li").find(".collapse").hasClass("show")) {
      $this.removeClass("active");
    } else {
      $this.addClass("active");
    }
    e.preventDefault();
  });

  $(window).resize(function () {
    var $this = $(this),
      w = $this.width();

    if (w > 768) {
      if ($("body").hasClass("offcanvas")) {
        $("body").removeClass("offcanvas");
      }
    }
  });

  $(".js-burger-toggle-menu").click(function (e) {
    e.preventDefault();
    if ($("body").hasClass("offcanvas")) {
      $("body").removeClass("offcanvas");
      $(".js-burger-toggle-menu").removeClass("open");
    } else {
      $("body").addClass("offcanvas");
      $(".js-burger-toggle-menu").addClass("open");
    }
  });
};

// var siteIstotope = function() {

// }

var owlCarouselPlugin = function () {
  $(".testimonial-slider").owlCarousel({
    center: false,
    items: 1,
    loop: true,
    stagePadding: 20,
    margin: 10,
    smartSpeed: 2000,
    autoplay: true,
    autoplayHoverPause: true,
    dots: true,
    nav: true,
    navText: [
      '<span class="icon-keyboard_arrow_left">',
      '<span class="icon-keyboard_arrow_right">',
    ],

    responsive: {
      400: {
        stagePadding: 20,
        margin: 10,
      },
      600: {
        stagePadding: 100,
        margin: 50,
      },
    },
  });
  owlSingleSlider();

  if ($(".logo-slider").length) {
    $(".logo-slider").owlCarousel({
      center: false,
      loop: true,
      stagePadding: 0,
      margin: 0,
      smartSpeed: 1000,
      autoplay: true,
      autoplayHoverPause: true,
      dots: false,
      nav: false,
      responsive: {
        400: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1000: {
          items: 5,
        },
      },
    });
  }
};

var owlSingleSlider = function () {
  if ($(".single-slider").length) {
    $(".single-slider").owlCarousel({
      center: false,
      items: 1,
      loop: true,
      stagePadding: 0,
      margin: 0,
      smartSpeed: 1500,
      autoplay: true,
      autoplayHoverPause: true,
      dots: true,
      nav: true,
      navText: [
        '<span class="icon-keyboard_arrow_left">',
        '<span class="icon-keyboard_arrow_right">',
      ],

      responsive: {
        400: {
          stagePadding: 0,
          margin: 0,
        },
        600: {
          stagePadding: 0,
          margin: 0,
        },
      },
    });
  }
};

var floatingLabel = function () {
  $(".form-control").on("input", function () {
    var $field = $(this).closest(".form-group");
    if (this.value) {
      $field.addClass("field--not-empty");
    } else {
      $field.removeClass("field--not-empty");
    }
  });
};

// scroll
var scrollWindow = function () {
  var lastScrollTop = 0;
  $(window).scroll(function (event) {
    var $w = $(this),
      st = $w.scrollTop(),
      navbar = $(".site-nav");
    // sd = $('.js-scroll-wrap');

    if (st > 150) {
      if (!navbar.hasClass("scrolled")) {
        navbar.addClass("scrolled");
      }
    }
    if (st < 150) {
      if (navbar.hasClass("scrolled")) {
        navbar.removeClass("scrolled sleep");
      }
    }
    if (st > 350) {
      if (!navbar.hasClass("awake")) {
        navbar.addClass("awake");
      }
    }
    if (st < 350) {
      if (navbar.hasClass("awake")) {
        navbar.removeClass("awake");
        navbar.addClass("sleep");
      }
    }
  });
};

var counter = function () {
  $(".section-counter").waypoint(
    function (direction) {
      if (direction === "down" && !$(this.element).hasClass("ftco-animated")) {
        var comma_separator_number_step =
          $.animateNumber.numberStepFactories.separator(".");
        $(this.element)
          .find(".number-counter")
          .each(function () {
            var $this = $(this),
              num = $this.data("number");
            // console.log(num);
            $this.animateNumber(
              {
                number: num,
                numberStep: comma_separator_number_step,
              },
              {
                easing: "swing",
                duration: 3000,
              }
            );
          });
      }
    },
    { offset: "95%" }
  );
};

var mobileToggleClick = function () {
  $(".js-menu-toggle").click(function (e) {
    e.preventDefault();

    if ($("body").hasClass("offcanvas")) {
      $("body").removeClass("offcanvas");
      $(".js-menu-toggle").removeClass("active");
      if ($(".js-burger-toggle-menu").length) {
        $(".js-burger-toggle-menu").removeClass("open");
      }
    } else {
      $("body").addClass("offcanvas");
      $(".js-menu-toggle").addClass("active");
      if ($(".js-burger-toggle-menu").length) {
        $(".js-burger-toggle-menu").addClass("open");
      }
    }
  });

  // click outisde offcanvas
  $(document).mouseup(function (e) {
    var container = $(".site-mobile-menu");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($("body").hasClass("offcanvas")) {
        $("body").removeClass("offcanvas");
        $("body").find(".js-menu-toggle").removeClass("active");

        $("body").find(".js-burger-toggle-menu").removeClass("open");
      }
    }
  });
};

// navigation
var onePageNavigation = function () {
  var navToggler = $(".site-menu-toggle");
  $("body").on(
    "click",
    ".site-nav .site-nav-ul li a[href^='#'], .smoothscroll[href^='#'], .site-mobile-menu .site-nav-wrap li a[href^='#']",
    function (e) {
      e.preventDefault();

      var $body = $("body");
      if ($body.hasClass("offcanvas")) {
        $body.removeClass("offcanvas");
        $("body").find(".js-burger-toggle-menu").removeClass("open");
      }

      var hash = this.hash;

      $("html, body").animate(
        {
          scrollTop: $(hash).offset().top - 30,
        },
        1000,
        "easeInOutExpo"
      );
    }
  );
};

// load ajax page
var portfolioItemClick = function () {
  $(".ajax-load-page").on("click", function (e) {
    var id = $(this).data("id"),
      href = $(this).attr("href");

    if ($("#portfolio-single-holder > div").length) {
      $("#portfolio-single-holder > div").remove();
    }

    TweenMax.to(".loader-portfolio-wrap", 1, {
      top: "-50px",
      autoAlpha: 1,
      display: "block",
      ease: Power4.easeOut,
    });

    $("html, body").animate(
      {
        scrollTop: $("#portfolio-section").offset().top - 50,
      },
      700,
      "easeInOutExpo",
      function () {}
    );

    setTimeout(function () {
      loadPortfolioSinglePage(id, href);
    }, 100);

    e.preventDefault();
  });

  // Close
  $("body").on("click", ".js-close-portfolio", function () {
    setTimeout(function () {
      $("html, body").animate(
        {
          scrollTop: $("#portfolio-section").offset().top - 50,
        },
        700,
        "easeInOutExpo"
      );
    }, 200);

    TweenMax.set(".portfolio-wrapper", {
      visibility: "visible",
      height: "auto",
    });
    TweenMax.to(".portfolio-single-inner", 1, {
      marginTop: "50px",
      opacity: 0,
      display: "none",
      onComplete() {
        TweenMax.to(".portfolio-wrapper", 1, {
          marginTop: "0px",
          autoAlpha: 1,
          position: "relative",
        });
      },
    });
  });
};

$(document).ajaxStop(function () {
  setTimeout(function () {
    TweenMax.to(".loader-portfolio-wrap", 1, {
      top: "0px",
      autoAlpha: 0,
      ease: Power4.easeOut,
    });
  }, 400);
});

var loadPortfolioSinglePage = function (id, href) {
  $.ajax({
    url: href,
    type: "GET",
    success: function (html) {
      TweenMax.to(".portfolio-wrapper", 1, {
        marginTop: "50px",
        autoAlpha: 0,
        visibility: "hidden",
        onComplete() {
          TweenMax.set(".portfolio-wrapper", { height: 0 });
        },
      });

      var pSingleHolder = $("#portfolio-single-holder");

      var getHTMLContent = $(html).find(".portfolio-single-wrap").html();

      pSingleHolder.append(
        '<div id="portfolio-single-' +
          id +
          '" class="portfolio-single-inner"><span class="close-portfolio js-close-portfolio d-flex align-items-center"><span class="close-portfolio-label">Back to Portfolio</span><span class="icon-close2 wrap-icon-close"></span></span>' +
          getHTMLContent +
          "</div>"
      );

      setTimeout(function () {
        owlSingleSlider();
      }, 10);

      setTimeout(function () {
        TweenMax.set(".portfolio-single-inner", {
          marginTop: "100px",
          autoAlpha: 0,
          display: "none",
        });
        TweenMax.to(".portfolio-single-inner", 0.5, {
          marginTop: "0px",
          autoAlpha: 1,
          display: "block",
          onComplete() {
            TweenMax.to(".loader-portfolio-wrap", 1, {
              top: "0px",
              autoAlpha: 0,
              ease: Power4.easeOut,
            });
          },
        });
      }, 700);
    },
  });

  return false;
};

var jarallaxPlugin = function () {
  $(".jarallax").jarallax({
    speed: 0.2,
  });
  jarallax(document.querySelectorAll(".jarallax-video"), {
    speed: 0.2,
    videoSrc: "https://www.youtube.com/watch?v=mwtbEGNABWU",
    videoStartTime: 8,
    videoEndTime: 70,
  });
};

var contactForm = function () {
  if ($("#contactForm").length > 0) {
    $("#contactForm").validate({
      rules: {
        nome: {
          required: true,
          minlength: 3,
        },
        email: {
          required: true,
          email: true,
        },
        telefone: {
          required: true,
          minlength: 14,
        },
        cnpj: {
          required: true,
          minlength: 17,
        },
      },
      messages: {
        nome: "escreva seu nome",
        email: "adicione um email válido",
        telefone: "adicione um telefone válido",
        cnpj: "adicione um CNPJ válido",
      },
      errorElement: "span",
      errorLabelContainer: ".form-error",
      /* submit via ajax */
      submitHandler: function (form) {
        var $submit = $(".submitting"),
          waitText = "Enviando...";

        $.ajax({
          type: "POST",
          url: "php/send-email.php",
          data: $(form).serialize(),

          beforeSend: function () {
            $submit.css("display", "block").text(waitText);
          },
          success: function (msg) {
            // console.log(msg);
            if (msg == "OK") {
              $("#form-message-warning").hide();
              setTimeout(function () {
                $("#contactForm").fadeOut();
              }, 1000);
              setTimeout(function () {
                $("#form-message-success").fadeIn();
              }, 1400);
            } else {
              $("#form-message-warning").html(msg);
              $("#form-message-warning").fadeIn();
              $submit.css("display", "none");
            }
          },
          error: function () {
            console.log("Erro");
            $("#form-message-warning").html(
              "Algo deu errado. Por favor tente novamente."
            );
            $("#form-message-warning").fadeIn();
            $submit.css("display", "none");
          },
        });
      },
    });
  }
};

// $(document).ready(function ($) {
//   $("form br").remove();
// });

$("#cnpj").mask("99.999.999/9999-99");

$('#telefone').mask('(00) 0000-00000');
$('#telefone').blur(function(event) {
  // console.log('teste');
   if($(this).val().length == 15){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
      $('#telefone').mask('(00) 00000-0000');
   } else {
      $('#telefone').mask('(00) 0000-00000');
   }
});
var stickyFillPlugin = function () {
  var elements = document.querySelectorAll(".sticky");
  Stickyfill.add(elements);
};

var animateReveal = function () {
  var controller = new ScrollMagic.Controller();

  var greveal = $(".gsap-reveal");

  // gsap reveal
  $(".gsap-reveal").each(function () {
    $(this).append('<span class="cover"></span>');
  });
  if (greveal.length) {
    var revealNum = 0;
    greveal.each(function () {
      var cover = $(this).find(".cover");

      var tl = new TimelineMax();

      setTimeout(function () {
        tl.fromTo(
          cover,
          2,
          { skewX: 0 },
          { xPercent: 101, transformOrigin: "0% 100%", ease: Expo.easeInOut }
        );
      }, revealNum * 0);

      // var scene = new ScrollMagic.Scene({
      //   triggerElement: this,
      //   duration: "0%",
      //   reverse: false,
      //   offset: "-300%",
      // })
      //   .setTween(tl)
      //   .addTo(controller);

      revealNum++;
    });
  }

  // gsap reveal hero
  $(".gsap-reveal-hero").each(function () {
    var html = $(this).html();
    $(this).html(
      '<span class="reveal-wrap"><span class="cover"></span><span class="reveal-content">' +
        html +
        "</span></span>"
    );
  });
  var grevealhero = $(".gsap-reveal-hero");

  if (grevealhero.length) {
    var heroNum = 0;
    grevealhero.each(function () {
      var cover = $(this).find(".cover"),
        revealContent = $(this).find(".reveal-content");

      var tl2 = new TimelineMax();

      setTimeout(function () {
        tl2.to(cover, 1, {
          marginLeft: "0",
          ease: Expo.easeInOut,
          onComplete() {
            tl2.set(revealContent, { x: 0 });
            tl2.to(cover, 1, { marginLeft: "102%", ease: Expo.easeInOut });
          },
        });
      }, heroNum * 0);

      // var scene = new ScrollMagic.Scene({
      //   triggerElement: this,
      //   duration: "0%",
      //   reverse: false,
      //   offset: "-300%",
      // })
      //   .setTween(tl2)
      //   .addTo(controller);

      heroNum++;
    });
  }
};

// header
const onscroll = (el, listener) => {
  el.addEventListener("scroll", listener);
};
const select = (el, all = false) => {
  el = el.trim();
  if (all) {
    return [...document.querySelectorAll(el)];
  } else {
    return document.querySelector(el);
  }
};

let selectHeader = select("#header");
if (selectHeader) {
  const headerScrolled = () => {
    if (window.scrollY > 100) {
      selectHeader.classList.add("header-scrolled");
    } else {
      selectHeader.classList.remove("header-scrolled");
    }
  };
  window.addEventListener("load", headerScrolled);
  onscroll(document, headerScrolled);
}

$(".popular-slider").owlCarousel({
  items: 1,
  autoplay: true,
  autoplayTimeout: 5000,
  smartSpeed: 400,
  animateIn: "fadeIn",
  animateOut: "fadeOut",
  autoplayHoverPause: true,
  loop: true,
  nav: true,
  merge: true,
  dots: false,
  navText: [
    '<span class="icon-caret-left"></span>',
    '<span class="icon-caret-right"></span>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 1,
    },
    320: {
      items: 3,
    },
    768: {
      items: 5,
    },
    1170: {
      items: 6,
    },
  },
});

$(".popular-slider-2").owlCarousel({
  items: 1,
  autoplay: true,
  autoplayTimeout: 5000,
  smartSpeed: 400,
  animateIn: "fadeIn",
  animateOut: "fadeOut",
  autoplayHoverPause: true,
  loop: true,
  nav: true,
  merge: true,
  dots: false,
  navText: [
    '<span class="icon-caret-left"></span>',
    '<span class="icon-caret-right"></span>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    300: {
      items: 1,
    },
    380: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1400: {
      items: 3,
    },
  },
});

$(".accordion_tab").click(function () {
  $(this).parent().toggleClass("active");
  $(this).toggleClass("active");
});
// navigation
var onePageNavigation = function () {
  // var navToggler = $(".site-menu-toggle");
  $("a[href^='#']:not([href='#'])").click(function (e) {
    e.preventDefault();

    var $body = $("body");
    if ($body.hasClass("offcanvas")) {
      $body.removeClass("offcanvas");
      $("body").find(".js-burger-toggle-menu").removeClass("open");
    }

    var hash = this.hash;

    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top - 30,
      },
      1000,
      "easeInOutExpo"
    );
  });
};
