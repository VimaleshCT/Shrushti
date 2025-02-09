!(function (e) {
	"use strict";
	e(document).ready(function () {
		function i() {
			e(".progressbar").each(function () {
				var i = e(this).offset().top,
					t = e(window).scrollTop(),
					a = e(this).find(".circle").attr("data-percent"),
					o = e(this).data("animate");
				i < t + e(window).height() - 30 &&
					!o &&
					(e(this).data("animate", !0),
					e(this)
						.find(".circle")
						.circleProgress({
							value: a / 100,
							size: 130,
							thickness: 13,
							lineCap: "round",
							emptyFill: "#f1f1f1",
							fill: { gradient: ["#2667FF", "#6c19ef"] },
						})
						.on("circle-animation-progress", function (i, t, a) {
							e(this)
								.find("strong")
								.text((100 * a).toFixed(0) + "%");
						})
						.stop());
			});
		}
		e('[data-toggle="tooltip"]').tooltip(),
			e(".player").mb_YTPlayer(),
			e(".animate").scrolla({ mobile: !1 }),
			e("#gallery-masonary,.blog-masonry").imagesLoaded(function () {
				e(".mix-item-menu").on("click", "button", function () {
					var t = e(this).attr("data-filter");
					i.isotope({ filter: t });
				}),
					e(".mix-item-menu button").on("click", function (i) {
						e(this).siblings(".active").removeClass("active"),
							e(this).addClass("active"),
							i.preventDefault();
					});
				var i = e("#gallery-masonary").isotope({
					itemSelector: ".gallery-item",
					percentPosition: !0,
					masonry: { columnWidth: ".gallery-item" },
				});
				e(".blog-masonry").isotope({
					itemSelector: ".blog-item",
					percentPosition: !0,
					masonry: { columnWidth: ".blog-item" },
				});
			}),
			e(".timer").countTo(),
			e(".fun-fact").appear(
				function () {
					e(".timer").countTo();
				},
				{ accY: -100 }
			),
			e(".popup-link").magnificPopup({ type: "image" }),
			e(".popup-gallery").magnificPopup({
				type: "image",
				gallery: { enabled: !0 },
			}),
			e(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
				type: "iframe",
				mainClass: "mfp-fade",
				removalDelay: 160,
				preloader: !1,
				fixedContentPos: !1,
			}),
			e(".magnific-mix-gallery").each(function () {
				var i = e(this).find(".item"),
					t = [];
				i.each(function () {
					var i = e(this),
						a = "image";
					i.hasClass("magnific-iframe") && (a = "iframe");
					var o = { src: i.attr("href"), type: a };
					(o.title = i.data("title")), t.push(o);
				}),
					i.magnificPopup({
						mainClass: "mfp-fade",
						items: t,
						gallery: {
							enabled: !0,
							tPrev: e(this).data("prev-text"),
							tNext: e(this).data("next-text"),
						},
						type: "image",
						callbacks: {
							beforeOpen: function () {
								var e = i.index(this.st.el);
								-1 !== e && this.goTo(e);
							},
						},
					});
			}),
			i(),
			e(window).scroll(i);
		new Swiper(".banner-fade", {
			direction: "horizontal",
			loop: !0,
			autoplay: !0,
			effect: "fade",
			fadeEffect: { crossFade: !0 },
			speed: 3e3,
			autoplay: { delay: 5e3, disableOnInteraction: !1 },
			pagination: { el: ".swiper-pagination", type: "bullets", clickable: !0 },
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		}),
			new Swiper(".brand-style-one-carousel", {
				loop: !0,
				slidesPerView: 2,
				spaceBetween: 30,
				autoplay: !0,
				pagination: { el: ".swiper-pagination", clickable: !0 },
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					768: { slidesPerView: 3, spaceBetween: 30 },
					992: { slidesPerView: 4, spaceBetween: 30 },
					1400: { slidesPerView: 5, spaceBetween: 30 },
				},
			}),
			new Swiper(".food-cat-carousel", {
				loop: !0,
				slidesPerView: 1,
				spaceBetween: 30,
				autoplay: !0,
				pagination: { el: ".swiper-pagination", clickable: !0 },
				navigation: { nextEl: ".food-cat-next", prevEl: ".food-cat-prev" },
				breakpoints: {
					768: { slidesPerView: 2, spaceBetween: 30 },
					992: { slidesPerView: 3, spaceBetween: 30 },
				},
			}),
			new Swiper(".gallery-style-one-carousel", {
				loop: !0,
				freeMode: !0,
				grabCursor: !0,
				slidesPerView: 1,
				spaceBetween: 50,
				autoplay: !0,
				pagination: { el: ".swiper-pagination", clickable: !0 },
				breakpoints: {
					778: { slidesPerView: 2 },
					1200: { slidesPerView: 2.5, centeredSlides: !0 },
				},
			}),
			new Swiper(".testimonial-carousel", {
				direction: "horizontal",
				loop: !0,
				autoplay: !0,
				pagination: { el: ".swiper-pagination", clickable: !0 },
			}),
			new Swiper(".food-menu-carousel", {
				loop: !0,
				slidesPerView: 1,
				spaceBetween: 30,
				autoplay: !1,
				pagination: { el: ".swiper-pagination", clickable: !0 },
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					768: { slidesPerView: 2, spaceBetween: 30 },
					992: { slidesPerView: 3, spaceBetween: 30 },
					1400: { slidesPerView: 4, spaceBetween: 30 },
				},
			}),
			new Swiper(".services-style-one-carousel", {
				loop: !0,
				freeMode: !0,
				grabCursor: !0,
				slidesPerView: 1,
				spaceBetween: 50,
				autoplay: !0,
				pagination: { el: ".swiper-pagination", clickable: !0 },
				navigation: {
					nextEl: ".services-cat-next",
					prevEl: ".services-cat-prev",
				},
				breakpoints: { 768: { slidesPerView: 2 }, 1200: { slidesPerView: 3 } },
			}),
			new Swiper(".product-gallery-carousel", {
				loop: !0,
				slidesPerView: 2,
				spaceBetween: 30,
				autoplay: !1,
				breakpoints: {
					768: { slidesPerView: 3 },
					992: { slidesPerView: 3 },
					1200: { slidesPerView: 4 },
				},
			}),
			new Swiper(".related-product-carousel", {
				loop: !0,
				slidesPerView: 1,
				spaceBetween: 30,
				autoplay: !0,
				breakpoints: {
					768: { slidesPerView: 2 },
					992: { slidesPerView: 3 },
					1400: { slidesPerView: 4 },
				},
			});
		e(".date-picker-one").datepicker(),
			e(".reservation-form select").niceSelect(),
			document.querySelector(".upDownScrol") &&
				(gsap.set(".upDownScrol", { yPercent: 105 }),
				gsap.to(".upDownScrol", {
					yPercent: -105,
					ease: "none",
					scrollTrigger: {
						trigger: ".upDownScrol",
						end: "bottom center",
						scrub: 1,
					},
				})),
			e(".contact-form").each(function () {
				e(this).submit(function () {
					var i = e(this).attr("action");
					return (
						e("#message").slideUp(750, function () {
							e("#message").hide(),
								e("#submit")
									.after(
										'<img src="assets/img/ajax-loader.gif" class="loader" />'
									)
									.attr("disabled", "disabled"),
								e.post(
									i,
									{
										name: e("#name").val(),
										email: e("#email").val(),
										phone: e("#phone").val(),
										comments: e("#comments").val(),
									},
									function (i) {
										(document.getElementById("message").innerHTML = i),
											e("#message").slideDown("slow"),
											e(".contact-form img.loader").fadeOut(
												"slow",
												function () {
													e(this).remove();
												}
											),
											e("#submit").removeAttr("disabled");
									}
								);
						}),
						!1
					);
				});
			});
	}),
		e(window).on("load", function () {
			e("#restan-preloader").addClass("loaded"),
				e("#loading").fadeOut(500),
				e("#restan-preloader").hasClass("loaded") &&
					e("#preloader")
						.delay(900)
						.queue(function () {
							e(this).remove();
						});
		});
})(jQuery);
