jQuery(document).ready(function ($) {

	//variabili
	let isScrollStarted = false;
	let headerHeight = $('.site-header').height();
	let link = $('a');

	// function parallax

	function parallax(){
		var wScroll = $(window).scrollTop();
		$('.parallax--translateY').css('transform', 'translateY('+(wScroll*0.07)+'px)')
	}


	//counter for experiencenumber
	function startCounter(){
		$('.counter').each(function() {
			let max = $(this).attr('data-max');
			let interval = 1500 / max;
			let min = 0;
			let element = $(this);
			let timer = setInterval(function() {
				min++;
					if(min == max) {
					clearInterval(timer)
				}
				element.text(min);
			},  interval);		
		});
	};	

	// menu mobile active/disable

	$( ".toggle-menu" ).click(function() {	
		$("body").toggleClass("menu-mobile-active");
	  });

	// menu mobile disappear when click on li a

	$( ".menu li a" ).click(function() {	
		$("body").toggleClass("menu-mobile-active");
	  });
	

	// scroll to element

	link.each( function() {
		let singleLink = $(this);
		singleLink.click( function(event) {
			if(singleLink.attr('rel')){
				event.preventDefault()
				let slug = '.blocco-' + singleLink.attr('rel');
				$([document.documentElement, document.body]).animate({
					scrollTop: $(slug).offset().top - headerHeight
				}, 1200, 'swing');
			}
		})
	});

	// scroll events

	$(window).scroll(function (event) {
		let scroll = $(window).scrollTop();
		let windowHalfHeight = $(window).height()/2;
		let offsetCounter = $('.blocco-experiencenumberpanel').offset().top;
		parallax();
		if(scroll > 50){
			$('.site-header').addClass('menu-open');
		}
		else{
			$('.site-header').removeClass('menu-open');
		}
		if (scroll + windowHalfHeight >= offsetCounter && !isScrollStarted){
			startCounter();
			isScrollStarted = true;
		}
	});

	//gsap ScrollTriggers
	
	gsap.registerPlugin(ScrollTrigger);

	let heightExperience = $('.blocco-experiencenumberpanel').height();
	let bioPanelHeight = $('.lazy-block-h1-titlebio').height();
	let bioPanelHugeTitleHeight = $('.lazy-block-h1-huge-title-bio').height();
	let bioBlockPwrapper = $('.lazy-block-p-wrapper').height();
	let interventiBlockPwrapper = $('.blocco-blockarticlewide').height();
	let thirdBioHeightFix = $('.third-p-bio').height();

	// numeri about tl

	ScrollTrigger.matchMedia({
		"(min-width: 600px)" : function() {
			// media desktop
			let tlExperienceBox = gsap.timeline({
				scrollTrigger: {
					trigger: ".page-spacer",
					start: "bottom center",
					end: () => "+=" + (heightExperience * 3 ),
					scrub: true ,
					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 0.2, 
						ease: "power1.inOut" 
					}
				}
			})
			
			tlExperienceBox
			.from(".lazy-block-number-experience-first", {y: 0, opacity: 0})
			.from(".lazy-block-number-experience-second", {y: 0, opacity: 0})
			.from(".lazy-block-number-experience-third", {y: 0, opacity: 0})
			.to(".lazy-block-number-experience-first", {y: 0, opacity: 1})
			.to(".lazy-block-number-experience-second", {y: 0, opacity: 1})
			.to(".lazy-block-number-experience-third", {y: 0, opacity: 1})
			.addLabel("end");
		},
		"(max-width: 600px)" : function() {
			// media desktop
			let tlExperienceBox = gsap.timeline({
				scrollTrigger: {
					trigger: ".page-spacer",
					start: "bottom center",
					end: () => "+=" + (heightExperience),
					scrub: true ,
					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 0.2, 
						ease: "power1.inOut" 
					}
				}
			})
			
			tlExperienceBox
			.from(".lazy-block-number-experience-first", {y: 0, opacity: 0})
			.from(".lazy-block-number-experience-second", {y: 0, opacity: 0})
			.from(".lazy-block-number-experience-third", {y: 0, opacity: 0})
			.to(".lazy-block-number-experience-first", {y: 0, opacity: 1})
			.to(".lazy-block-number-experience-second", {y: 0, opacity: 1})
			.to(".lazy-block-number-experience-third", {y: 0, opacity: 1})
			.addLabel("end");
		}
	});

	// animating first content titles

		
	gsap.to('.lazy-block-h1-titlebio' , {
		scrollTrigger: {
			trigger: '.blocco-biopanel' ,
			start: "top center",
			end: () => "+=" + bioPanelHeight,
			scrub: true ,
		} ,
		x: 0,
		opacity: 1,
		ease: "none" ,
		duration: 1
	}); 

	gsap.to('.lazy-block-h1-huge-title-bio' , {
		scrollTrigger: {
			trigger: '.lazy-block-h1-huge-title-bio' ,
			start: "top center",
			end: () => "+=" + (bioPanelHugeTitleHeight / 3),
			scrub: true ,
		} ,
		x: 0 ,
		opacity: 0.2 ,
		ease: "none" ,
		duration: 5
	}); 

	// media query animation bio paragraphs

	ScrollTrigger.matchMedia({
		"(min-width: 600px)" : function() {
			// media desktop
			let tlBioContent = gsap.timeline({
				scrollTrigger: {
					trigger: '.lazy-block-p-wrapper',
					start: "top center",
					end: () => "+=" + (bioBlockPwrapper),
					scrub: true ,
					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 1, 
						ease: "power1.inOut" 
					}
				}
			});
			
			tlBioContent
			.from(".first-p-bio", {opacity: 0, x: -200})
			.from(".second-p-bio", {opacity: 0, xPercent: 100})
			.from(".third-p-bio", {opacity: 0, x: -70})
			.addLabel("finish")
			.to(".first-p-bio", {opacity: 1, x: 0})
			.to(".second-p-bio", {opacity: 1, xPercent: 0})
			.to(".third-p-bio", {opacity: 1, x: 0})
			
		},

		 //media mobile
		"(max-width: 599px)" : function() {
			// biocontent
			let tlBioContent = gsap.timeline({
				scrollTrigger: {
					trigger: '.lazy-block-p-wrapper' ,
					start: "top center",
					end: () => "+=" + (bioBlockPwrapper / 2),
					scrub: true ,
					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 0.2, 
						ease: "power1.inOut" 
					}
				}
			});


			
			tlBioContent
			.from(".first-p-bio", {opacity: 0, x: -50})
			.from(".lazy-block-h1-huge-title-bio-second", {opacity: 0, x: 50})
			.from(".second-p-bio", {opacity: 0, xPercent: -50})
			.from(".third-p-bio", {opacity: 0, x: -50})
			.addLabel('mid')
			.to(".third-p-bio", {opacity: 1, x: 0})
			.to(".lazy-block-h1-huge-title-bio-second", {opacity: 0.2, x: 0})
			.to(".second-p-bio", {opacity: 1, xPercent: 0})
			.to(".third-p-bio", {opacity: 1, x: 0})
		}
	}); //fine animation query p

	

	// media query animation Interventi paragraphs

	ScrollTrigger.matchMedia({
		"(min-width: 1000px)" : function() {

	gsap.set(".wp-block-lazyblock-blockarticlewide", {opacity:0, x: -150})
	ScrollTrigger.batch(".wp-block-lazyblock-blockarticlewide", {
		start: "top center",
		end: () => "+=" + interventiBlockPwrapper,
		interval: 0.1,
		batchMax: 5,
		onEnter: batch => gsap.to(batch, {
			x: 0,
			opacity: 1,
			stagger: 0.1
		}),
		onLeaveBack: batch => gsap.to(batch, {opacity: 0,x: -150}),
	});

	gsap.set(".block-article-title-style", {opacity:0, x: -200})
	ScrollTrigger.batch(".block-article-title-style", {
		start: "top center",
		end: () => "+=" + interventiBlockPwrapper,
		interval: 0.5,
		batchMax: 5,
		onEnter: batch => gsap.to(batch, {
			x: 0,
			opacity: 1,
			stagger: 0.1
		}),
	});
	gsap.set(".png-article-style", {opacity:0})
	ScrollTrigger.batch(".png-article-style", {
		start: "top center",
		end: () => "+=" + interventiBlockPwrapper,
		interval: 0.7,
		batchMax: 5,
		onEnter: batch => gsap.to(batch, {
			opacity: 1,
			stagger: 0.1
		}),
	});

	gsap.set(".block-article-content-style", {opacity:0})
	ScrollTrigger.batch(".block-article-content-style", {
		start: "top center",
		end: () => "+=" + interventiBlockPwrapper,
		interval: 0.3,
		batchMax: 5,
		onEnter: batch => gsap.to(batch, {
			opacity: 1,
			stagger: 0.1
		}),
	});
	},
	"(max-width: 999px)" : function() {
		gsap.set(".wp-block-lazyblock-blockarticlewide", {opacity:0, x: -150})
		ScrollTrigger.batch(".wp-block-lazyblock-blockarticlewide", {
			start: "top center",
			end: () => "+=" + interventiBlockPwrapper,
			interval: 0.1,
			batchMax: 5,
			onEnter: batch => gsap.to(batch, {
				x: 0,
				opacity: 1,
				stagger: 0.1
			}),
			onLeaveBack: batch => gsap.to(batch, {opacity: 0,x: -150}),
		});
	
		gsap.set(".block-article-title-style", {opacity:0, x: -200})
		ScrollTrigger.batch(".block-article-title-style", {
			start: "top center",
			end: () => "+=" + interventiBlockPwrapper,
			interval: 0.5,
			batchMax: 5,
			onEnter: batch => gsap.to(batch, {
				x: 0,
				opacity: 1,
				stagger: 0.1
			}),
		});
		gsap.set(".png-article-style", {opacity:0})
		ScrollTrigger.batch(".png-article-style", {
			start: "top center",
			end: () => "+=" + interventiBlockPwrapper,
			interval: 0.7,
			batchMax: 5,
			onEnter: batch => gsap.to(batch, {
				opacity: 0.04,
				stagger: 0.1
			}),
		});
	
		gsap.set(".block-article-content-style", {opacity:0})
		ScrollTrigger.batch(".block-article-content-style", {
			start: "top center",
			end: () => "+=" + interventiBlockPwrapper,
			interval: 0.3,
			batchMax: 5,
			onEnter: batch => gsap.to(batch, {
				opacity: 1,
				stagger: 0.1
			}),
		});
	}

});
		


	/*
	ScrollTrigger.matchMedia({
		"(min-width: 600px)" : function() {
			// media desktop
			let tlInterventi = gsap.timeline({
				scrollTrigger: {
					trigger: '.blocco-blockarticlewide' ,
					start: "top center",
					end: () => "+=" + interventiBlockPwrapper,
					scrub: true ,
					markers: true,
					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 1, 
						ease: "power1.inOut" 
					}
				}
			});
			
			tlInterventi
			.from(".block-article-title-style", {opacity: 0})
			.from(".blockarticlewide-side-container", {opacity: 0})
			.from(".png-article-style", {opacity: 0})
			.from(".block-article-content-style", {opacity: 0})
			.addLabel("finish")
			.to(".block-article-title-style", {opacity: 1})
			.to(".blockarticlewide-side-container", {opacity: 1})
			.to(".png-article-style", {opacity: 1})
			.to(".block-article-content-style", {opacity: 1})
			
		},

		 //media mobile
		"(max-width: 599px)" : function() {
			// biocontent
			let tlBioContent = gsap.timeline({
				scrollTrigger: {
					trigger: '.blocco-blockarticlewide' ,
					start: "top center",
					end: () => "+=" + (interventiBlockPwrapper),
					scrub: true ,
					markers: true,

					snap: {
						snapTo: "labels", 
						duration: {min: 0.2, max: 3}, 
						delay: 0.2, 
						ease: "power1.inOut" 
					}
				}
			});
			
			tlBioContent
			.from(".first-p-bio", {opacity: 0, x: -50})
			.from(".lazy-block-h1-huge-title-bio-second", {opacity: 0, x: 50})
			.from(".second-p-bio", {opacity: 0, x: -50})
			.addLabel('mid')
			.to(".third-p-bio", {opacity: 1, x: 0})
			.to(".lazy-block-h1-huge-title-bio-second", {opacity: 0.2, x: 0})
			.to(".second-p-bio", {opacity: 1, x: 0})
		}
	}); //fine animation query interventi

*/
	

	// get current year
	$(".copyright-year-number").text( (new Date).getFullYear() );

	//owl carousel

	$(".blocco-dove-trovarmi .innerblock-panel").addClass('owl-carousel');
	
	$(".blocco-dove-trovarmi .innerblock-panel").owlCarousel({
		items: 1,
		dots: true
	});
	
	  
});
