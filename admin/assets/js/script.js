(initMap = !1),
    (function (t) {
        if ("undefined" == typeof jQuery) throw "Requires jQuery to be loaded first";
        !(function (d, i) {
            "use strict";
            d("body");
            var t,
                a = function () {
                    t && clearTimeout(t),
                        (t = setTimeout(function () {
                            d(window).trigger("resize").trigger("scroll"), (t = null);
                        }, 50));
                },
                o = "ageVerification";
            function n() {
                d(window).off("load.loader"),
                    d(".page-loader").fadeOut(500, function () {
                        d(this).remove();
                    }),
                    "yes" === i.get(o) ? d(".age-popup").addClass("disabled") : d(".age-popup").addClass("show");
            }
            d('[data-role="age-yes"]').on("click", function (e) {
                e.preventDefault(), i.set(o, "yes"), d(".age-popup").removeClass("show");
            }),
                d('[data-role="age-no"]').on("click", function () {
                    e.preventDefault(), i.set(o, "no");
                    var t = d(this).data("redirectUrl");
                    t && (window.location.href = t);
                }),
                d(window).on("load.loader", function () {
                    n();
                }),
                setTimeout(n, 1e4),
                d("[data-bar]").each(function (e, t) {
                    var i = d(t),
                        a = 100 * parseFloat(parseFloat(i.attr("aria-valuenow") / i.attr("aria-valuemax")));
                    a < 0 ? (a = 0) : 100 < a && (a = 100), i.css("width", a + "%");
                }),
                d(".navbar-toggler").on("click", function (e) {
                    e.preventDefault(), d(this).toggleClass("active").closest("header").toggleClass("active");
                }),
                d('[data-role="nav-toggler"], .nav-arrow').on("click", function (e) {
                    e.preventDefault(), d(this).parent().toggleClass("active");
                }),
                d('[data-role="nav-self-toggle"]').on("click", function (e) {
                    e.preventDefault(), d(this).toggleClass("active");
                });
            var s = function () {
                0 < d(window).scrollTop()
                    ? (d(".scroll-top").removeClass("disabled"), window.innerHeight + window.scrollY >= document.body.offsetHeight ? d(".scroll-top").addClass("end") : d(".scroll-top").removeClass("end"))
                    : d(".scroll-top").addClass("disabled");
            };
            s(),
                d(window).on("scroll resize orientationchange focus", s),
                d(".scroll-top").on("click", function (e) {
                    e.preventDefault(), d("html, body").animate({ scrollTop: 0 }, 1e3);
                }),
                d(".form-check .form-check-icon").on("click", function (e, t) {
                    var i = d(this).closest(".form-check").find("input.form-check-input"),
                        a = "radio" === i.attr("type") || !i.prop("checked");
                    i.prop("checked", a);
                }),
                d('[data-role="accordion-item"]').each(function (e, t) {
                    var i = d(t);
                    i.find('[data-role="accordion-toggle"]').on("click", function (e) {
                        e.preventDefault();
                        var t = i.closest('[data-role="accordion-list"]');
                        t.find('[data-role="accordion-item"]').not(i).removeClass("active"),
                            i.addClass("active"),
                            t.trigger("resize"),
                            setTimeout(function () {
                                a();
                            }, 2e3);
                    });
                }),
                d('[data-role="accordion-list"]').each(function (e, t) {
                    var i = d(t),
                        a = function () {
                            var e = i.find('.active[data-role="accordion-item"] [data-role="accordion-content"]');
                            e.length ? ((e = e[0]), i.css("minHeight", Math.max(e.clientHeight, e.offsetHeight, e.scrollHeight))) : i.css("minHeight", "");
                        };
                    i.on("resize", a), d(window).on("resize", a), i.find("[src]").on("load", a), a();
                }),
                d("[data-left]").each(function (e, t) {
                    d(t).css("left", d(t).data("left"));
                }),
                d("[data-top]").each(function (e, t) {
                    d(t).css("top", d(t).data("top"));
                }),
                d("[data-svg]").each(function (e, t) {
                    var i = d(t);
                    i.load(i.data("svg"), null, a);
                }),
                d("[data-background]").each(function (e, t) {
                    var i = d(t);
                    i.css("backgroundImage", "url(" + i.data("background") + ")");
                }),
                d('[data-slider="top-main"]').each(function (e, t) {
                    d(t).find(".slick-slides").slick({ infinite: !0, dots: !1, arrows: !1, asNavFor: '[data-slider="top-thumb"] .slick-slides' });
                }),
                d('[data-slider="top-side-dots"]').each(function (e, t) {
                    d(t).find(".slick-slides").slick({ infinite: !0, dots: !0, arrows: !1 });
                }),
                d('[data-slider="top-side-numbers"]').each(function (e, t) {
                    d(t)
                        .find(".slick-slides")
                        .slick({
                            infinite: !0,
                            dots: !0,
                            arrows: !1,
                            customPaging: function (e, t) {
                                return d(e.$slides[t]).data(), "<button>0" + (t + 1) + "</button>";
                            },
                        });
                }),
                d('[data-slider="top-thumb"]').each(function (e, t) {
                    var i = d(t);
                    i.find(".slick-slides").slick({
                        slidesToShow: 3,
                        centerPadding: 0,
                        centerMode: !0,
                        infinite: !0,
                        dots: !1,
                        arrows: !0,
                        focusOnSelect: !0,
                        swipeToSlide: !0,
                        nextArrow: i.find(".slick-arrow-next"),
                        prevArrow: i.find(".slick-arrow-prev"),
                        asNavFor: '[data-slider="top-main"] .slick-slides',
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 3 } },
                            { breakpoint: 768, settings: { slidesToShow: 2 } },
                            { breakpoint: 576, settings: { slidesToShow: 1 } },
                        ],
                    });
                }),
                d('[data-slider="images-carousel"]').each(function (e, t) {
                    var i = d(t);
                    i.find(".slick-slides").slick({
                        slidesToShow: 4,
                        infinite: !0,
                        dots: !1,
                        arrows: !0,
                        swipeToSlide: !0,
                        nextArrow: i.find(".slick-arrow-next"),
                        prevArrow: i.find(".slick-arrow-prev"),
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 3 } },
                            { breakpoint: 768, settings: { slidesToShow: 2 } },
                            { breakpoint: 576, settings: { slidesToShow: 1 } },
                        ],
                    });
                }),
                d('[data-slider="quick-products"]').each(function (e, t) {
                    var i = d(t);
                    i.find(".slick-slides").slick({
                        slidesToShow: 3,
                        infinite: !0,
                        dots: !1,
                        arrows: !0,
                        focusOnSelect: !0,
                        swipeToSlide: !0,
                        nextArrow: i.find(".slick-arrow-next"),
                        prevArrow: i.find(".slick-arrow-prev"),
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 1 } },
                        ],
                    });
                }),
                d('[data-slider="testimonials"]').each(function (e, t) {
                    var i = d(t);
                    i.find(".slick-slides").slick({
                        slidesToShow: 3,
                        infinite: !0,
                        dots: !1,
                        arrows: !0,
                        focusOnSelect: !0,
                        swipeToSlide: !0,
                        nextArrow: i.find(".slick-arrow-next"),
                        prevArrow: i.find(".slick-arrow-prev"),
                        responsive: [
                            { breakpoint: 992, settings: { slidesToShow: 2 } },
                            { breakpoint: 768, settings: { slidesToShow: 1 } },
                        ],
                    });
                }),
                d('[data-role="fill-line"]').each(function (e, t) {
                    var r,
                        i = d(t),
                        a = i.find('> [data-role="fill-line-segment"]'),
                        n = d([]),
                        l = 100,
                        c = 100,
                        s = i.width();
                    a.each(function (e, t) {
                        var i = d(t),
                            a = i.data(),
                            o = a.hasOwnProperty("minWidth") ? a.minWidth : 0;
                        a.hasOwnProperty("width")
                            ? ((r = a.width), a.hasOwnProperty("maxWidth") && a.maxWidth, s < a.minWidth && (s = a.minWidth), s > a.maxWidth && (s = a.maxWidth), (l -= s), i.width(s + "%"))
                            : ((n = n.add(i)), (c -= o));
                    }),
                        n.each(function (e, t) {
                            var i = d(t),
                                a = i.data(),
                                o = a.hasOwnProperty("maxWidth") ? a.maxWidth : 100,
                                n = a.hasOwnProperty("minWidth") ? a.minWidth : 0,
                                s = a.hasOwnProperty("prefferedWidth") ? a.prefferedWidth : a.minWidth + (a.maxWidth - a.minWidth) / 2;
                            (o = Math.min(o, s, c, l)), (r = o <= n ? n : Math.random() * (o - n) + n), (l -= r), i.width(r + "%");
                        }),
                        0 < l && a.last().width(r + l + "%");
                }),
                d(".input-spin").each(function (e, t) {
                    var i = d(t),
                        o = i.find(".form-control"),
                        n = i.find(".input-decrement"),
                        s = i.find(".input-increment"),
                        a = function (e) {
                            var t = parseInt(o.val()),
                                i = parseInt(o.attr("min")),
                                a = parseInt(o.attr("max"));
                            e && ((t = isNaN(t) ? 0 : t + e), o.val(t)),
                                !isNaN(i) && t <= i ? (n.addClass("disabled"), o.val(i)) : n.removeClass("disabled"),
                                !isNaN(a) && a <= t ? (s.addClass("disabled"), o.val(a)) : s.removeClass("disabled");
                        };
                    a(),
                        o.on("blur", function () {
                            a();
                        }),
                        n.on("click", function () {
                            a(-1);
                        }),
                        s.on("click", function () {
                            a(1);
                        });
                }),
                d(".shuffle-js").each(function (e, t) {
                    var a = d(t),
                        i = d(t).find(".shuffle-items"),
                        o = new Shuffle(i[0], { itemSelector: ".shuffle-item" }),
                        n = a.find("[data-filter]");
                    n.on("click", function (e) {
                        e.preventDefault(), a.find(".shuffle-empty").css("display", "none");
                        var t,
                            i = d(this);
                        try {
                            t = JSON.parse(i.data("filter"));
                        } catch (e) {
                            t = i.data("filter");
                        }
                        n.removeClass("active"), i.addClass("active"), o.filter(t);
                    }),
                        o.on(Shuffle.EventType.LAYOUT, function () {
                            d(window).trigger("resize"), a.find(".shuffle-empty").css("display", o.visibleItems ? "none" : "block");
                        });
                }),
                d(".form-control-file").each(function (e, t) {
                    var i = d(t);
                    i.on("change.fileField", function () {
                        var e = d(this).closest(".input-group-file").find(".form-control");
                        e.val(this.value ? this.value : e.attr("data-value-current") || "");
                    }).triggerHandler("change.fileField");
                    var a = i.closest("form");
                    a.length &&
                        a
                            .data("fileFields", (a.data("fileFields") || d([])).add(i))
                            .off(".fileFields")
                            .on("reset.fileFields", function () {
                                var e = d(this);
                                setTimeout(function () {
                                    e.data("fileFields").each(function (e, t) {
                                        d(t).triggerHandler("change.fileField");
                                    });
                                });
                            }),
                        i
                            .closest(".input-group-file")
                            .find(".form-control, .form-control-file-btn")
                            .on("click", function (e) {
                                e.preventDefault(), i.trigger("click");
                            });
                }),
                "undefined" != typeof FileReader &&
                    d(".file-preview").each(function (e, t) {
                        var i = d(t),
                            a = !1,
                            o = d(t).closest(".form-group-preview").find(".form-control-file");
                        i.find(".file-preview-image img") && i.addClass("has-file"),
                            i.on("click", function (e) {
                                e.preventDefault(), o.trigger("click");
                            }),
                            ((a = new FileReader()).onloadstart = function () {
                                i.removeClass("has-file");
                            }),
                            (a.onload = function (e) {
                                i
                                    .find(".file-preview-image")
                                    .empty()
                                    .html('<img src="' + e.target.result + '" alt="" />'),
                                    i.addClass("has-file");
                            }),
                            o.on("change.imageField", function () {
                                var e = this.files ? this.files : this.currentTarget.files;
                                e.length ? a.readAsDataURL(e[0]) : i.removeClass("has-file").find(".file-preview-image").empty();
                            });
                        var n = i.closest("form");
                        n.length &&
                            n
                                .data("imageFields", (n.data("imageFields") || d([])).add(o))
                                .off(".imageFields")
                                .on("reset.imageFields", function () {
                                    var e = d(this);
                                    setTimeout(function () {
                                        e.data("imageFields").each(function (e, t) {
                                            d(t).find('input[type="file"]').triggerHandler("change.imageField");
                                        });
                                    });
                                });
                    });
            d("[data-theme-accordion] .entity-expand-head").on("click", function (e) {
                e.preventDefault();
                var t = d(this).closest("[data-theme-accordion]"),
                    i = t.data("themeAccordion");
                d('.active[data-theme-accordion="' + i + '"]')
                    .not(t)
                    .removeClass("active"),
                    t.toggleClass("active");
            }),
                d("[data-size").each(function (e, t) {
                    var i,
                        a = d(t),
                        o = d(t).data("size"),
                        n = typeof o,
                        s = {};
                    switch (n) {
                        case "string":
                            0 < (o = o.split(";")).length && (i = o[0].trim()) && (s.width = i), 1 < o.length && (i = o[1].trim()) && (s.height = i);
                            break;
                        case "number":
                            s.width = o;
                    }
                    a.css(s);
                });
            var f = function (e, t, i) {
                var a = t.trim().split(" "),
                    o = i,
                    n = 0;
                switch (a[0].trim()) {
                    case "left":
                    case "top":
                    case "right":
                    case "bottom":
                        o = a[0].trim();
                        break;
                    case "bot":
                        o = "bottom";
                        break;
                    default:
                        n = a[0].trim();
                }
                1 < a.length && (n = a[1].trim() || "0"), (e[o] = n);
            };
            d("[data-at").each(function (e, t) {
                var i,
                    a = d(t),
                    o = d(t).data("at"),
                    n = typeof o,
                    s = { position: "absolute", transformOrigin: "50% 50%" },
                    r = "-50%",
                    l = "-50%",
                    c = [];
                switch (n) {
                    case "string":
                        0 < (o = o.split(";")).length && f(s, o[0], "left"), 1 < o.length && f(s, o[1], "top"), 2 < o.length && (i = o[2].trim()) && c.push("rotate(" + i + ")");
                        break;
                    case "number":
                        s.left = o;
                }
                s.hasOwnProperty("bottom") && (l = "50%"), s.hasOwnProperty("right") && (r = "50%"), c.push("translate(" + r + ", " + l + ")"), (s.transform = c.join(" ")), a.css(s);
            });
            var r = function (e, t) {
                    var i = "hide" === t ? "hide" : "show",
                        a = e.data(i + "BlockClass"),
                        o = e.data(("hide" === t ? "show" : "hide") + "BlockClass");
                    a ? e.addClass(a) : e[i](), o && e.removeClass(o);
                },
                l = {
                    find: function (e) {
                        if (e instanceof d) return e;
                        for (var t = (e + "").split(";"), i = d([]), a = 0; a < t.length; a++) i = i.add(d('[data-block="' + t[a] + '"]'));
                        return i;
                    },
                    hide: function (e) {
                        var t = l.find(e);
                        return (
                            t.each(function (e, t) {
                                r(d(t), "hide");
                            }),
                            l
                        );
                    },
                    show: function (e) {
                        var t = l.find(e);
                        return (
                            t.each(function (e, t) {
                                r(d(t), "show");
                            }),
                            l
                        );
                    },
                    action: function (e, t) {
                        return l.hasOwnProperty(t) ? l[t](e) : l;
                    },
                };
            d("[data-show-block]").each(function (e, t) {
                d(t)
                    .off(".showBlock")
                    .on("click.showBlock", function (e) {
                        e.preventDefault(), l.show(d(this).data("showBlock"));
                    });
            }),
                d("[data-hide-block]").each(function (e, t) {
                    d(t)
                        .off(".hideBlock")
                        .on("click.hideBlock", function (e) {
                            e.preventDefault(), l.hide(d(this).data("hideBlock"));
                        });
                }),
                d("[data-close-block]").each(function (e, t) {
                    d(t)
                        .off(".closeBlock")
                        .on("click.closeBlock", function (e) {
                            e.preventDefault(), l.hide(d(this).closest("[data-block]"));
                        });
                }),
                (gMapStyles = "undefined" == typeof gMapStyles ? {} : gMapStyles),
                (initMap = function () {
                    var c = {};
                    d.each(gMapStyles, function (e, t) {
                        c[e] = new google.maps.StyledMapType(t.styles, t.options);
                    }),
                        d(".gmap").each(function (e, t) {
                            var i = d(t),
                                a = i.data(),
                                o = { lat: a.lat, lng: a.lng },
                                n = { lat: a.centerLat || o.lat, lng: a.centerLng || o.lng },
                                s = new google.maps.Map(t, {
                                    center: 768 <= d(window).width() ? n : o,
                                    zoom: a.zoom || 15,
                                    scrollwheel: !1,
                                    zoomControl: !0,
                                    zoomControlOptions: { position: google.maps.ControlPosition.LEFT_CENTER },
                                    streetViewControl: !0,
                                    streetViewControlOptions: { position: google.maps.ControlPosition.LEFT_BOTTOM },
                                    mapTypeControlOptions: { mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "styled_map"] },
                                }),
                                r = a.mapStyle && c[a.mapStyle] ? a.mapStyle : "default",
                                l = !!c[r] && c[r];
                            new google.maps.Marker({ position: o, map: s, icon: a.marker || "./assets/images/parts/map-marker.png" }),
                                l && (s.mapTypes.set(r, l), s.setMapTypeId(r)),
                                d(window).on("resize", function () {
                                    google.maps.event.trigger(s, "resize"), s.setCenter(768 <= d(window).width() ? n : o);
                                });
                        });
                });
        })(jQuery, Cookies);
    })();

  