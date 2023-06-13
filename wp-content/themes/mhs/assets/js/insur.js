(function($) {
    "use strict";

    function thmSwiperInit() {
        // swiper slider
        if ($(".thm-swiper__slider").length) {
            $(".thm-swiper__slider").each(function() {
                let elm = $(this);
                let options = elm.data("swiper-options");
                let thmSwiperSlider = new Swiper(elm, options);
            });
        }
    }

    function thmOwlInit() {
        // owl slider
    
        if ($(".thm-owl__carousel").length) {
          $(".thm-owl__carousel").each(function () {
            let elm = $(this);
            let options = elm.data("owl-options");
            let thmOwlCarousel = elm.owlCarousel(options);
          });
        }
    
        if ($(".thm-owl__carousel--custom-nav").length) {
          $(".thm-owl__carousel--custom-nav").each(function () {
            let elm = $(this);
            let owlNavPrev = elm.data("owl-nav-prev");
            let owlNavNext = elm.data("owl-nav-next");
            $(owlNavPrev).on("click", function (e) {
              elm.trigger("prev.owl.carousel");
              e.preventDefault();
            });
    
            $(owlNavNext).on("click", function (e) {
              elm.trigger("next.owl.carousel");
              e.preventDefault();
            });
          });
        }
      }
    


    if ($(".banner-bg-slide").length) {
        $(".banner-bg-slide").each(function() {
            var Self = $(this);
            var bgSlideOptions = Self.data("options");
            var bannerTwoSlides = Self.vegas(bgSlideOptions);
        });
    }


    if ($(".scroll-to-target").length) {
        $(".scroll-to-target").on("click", function() {
            var target = $(this).attr("data-target");
            // animate
            $("html, body").animate({
                    scrollTop: $(target).offset().top
                },
                1000
            );

            return false;
        });
    }



    function dynamicCurrentMenuClass(selector) {
        let FileName = window.location.href.split("/").reverse()[0];

        selector.find("li").each(function() {
            let anchor = $(this).find("a");
            if ($(anchor).attr("href") == FileName) {
                $(this).addClass("current");
            }
        });
        // if any li has .current elmnt add class
        selector.children("li").each(function() {
            if ($(this).find(".current").length) {
                $(this).addClass("current");
            }
        });
        // if no file name return
        if ("" == FileName) {
            selector.find("li").eq(0).addClass("current");
        }
    }

    if ($(".main-menu__list").length) {
        // dynamic current class
        let mainNavUL = $(".main-menu__list");
        dynamicCurrentMenuClass(mainNavUL);
    }
    if ($(".service-details__sidebar-service-list").length) {
        // dynamic current class
        let mainNavUL = $(".service-details__sidebar-service-list");
        dynamicCurrentMenuClass(mainNavUL);
    }

    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(".mobile-nav__container");
        mobileNavContainer.innerHTML = navContent;
    }
    if ($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(".sticky-header__content");
        mobileNavContainer.innerHTML = navContent;
    }

    if ($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(
            ".mobile-nav__container .main-menu__list .dropdown > a"
        );
        dropdownAnchor.each(function() {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function() {
                return toggleBtn;
            });
            self.find("button").on("click", function(e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function(e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".search-toggler").length) {
        $(".search-toggler").on("click", function(e) {
            e.preventDefault();
            $(".search-popup").toggleClass("active");
            $(".mobile-nav__wrapper").removeClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    if ($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function(e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }

    if ($(".img-popup").length) {
        var groups = {};
        $(".img-popup").each(function () {
          var id = parseInt($(this).attr("data-group"), 10);
    
          if (!groups[id]) {
            groups[id] = [];
          }
    
          groups[id].push(this);
        });
    
        $.each(groups, function () {
          $(this).magnificPopup({
            type: "image",
            closeOnContentClick: true,
            closeBtnInside: false,
            gallery: {
              enabled: true
            }
          });
        });
    }


    function SmoothMenuScroll() {
        var anchor = $(".scrollToLink");
        if (anchor.length) {
            anchor.children("a").bind("click", function(event) {
                if ($(window).scrollTop() > 10) {
                    var headerH = "90";
                } else {
                    var headerH = "90";
                }
                var target = $(this);
                $("html, body")
                    .stop()
                    .animate({
                            scrollTop: $(target.attr("href")).offset().top - headerH + "px"
                        },
                        1200,
                        "easeInOutExpo"
                    );
                anchor.removeClass("current");
                anchor.removeClass("current-menu-ancestor");
                anchor.removeClass("current_page_item");
                anchor.removeClass("current-menu-parent");
                target.parent().addClass("current");
                event.preventDefault();
            });
        }
    }
    SmoothMenuScroll();



    // window load event

    $(window).on("load", function() {

        thmSwiperInit();
        thmOwlInit();

    });

    // window scroll event

    $(window).on("scroll", function() {
        if ($(".stricked-menu").length) {
            var headerScrollPos = 130;
            var stricky = $(".stricked-menu");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("stricky-fixed");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("stricky-fixed");
            }
        }
        if ($(".scroll-to-top").length) {
            var strickyScrollPos = 100;
            if ($(window).scrollTop() > strickyScrollPos) {
                $(".scroll-to-top").fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                $(".scroll-to-top").fadeOut(500);
            }
        }

        // OnePageMenuScroll();
    });

    if ($(".before-after-twentytwenty").length) {
        $(".before-after-twentytwenty").each(function() {
            var Self = $(this);
            var objName = Self.attr("id");
            $("#" + objName).twentytwenty();

            // hack for bs tab
            $(document).on("shown.bs.tab", 'a[data-toggle="tab"]', function(e) {
                var paneTarget = $(e.target).attr("data-target");
                var $thePane = $(".tab-pane" + paneTarget);
                var twentyTwentyContainer = "#" + objName;
                var twentyTwentyHeight = $thePane.find(twentyTwentyContainer).height();
                if (0 === twentyTwentyHeight) {
                    $thePane.find(twentyTwentyContainer).trigger("resize");
                }
            });
        });
    }
})(jQuery);