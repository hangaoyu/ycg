window.onscroll=function(){var s=$(window).scrollTop(),a=$(".top");s>=160?a.css({top:-100}):a.css({top:0}),$("#nav-ks").mouseenter(function(){a.css({top:0})});var t=$("#about-yisheng"),i=$("#about-bt1"),n=$("#about-bt2"),c=$("#about-detail");s>=1e3&&(t.addClass("fadeInRight"),t.css({opacity:1}),i.addClass("fadeInLeft"),i.css({opacity:1}),n.addClass("fadeInLeft"),n.css({opacity:1}),c.addClass("fadeIn"),c.css({opacity:1}));var e=$("#about-women"),o=$("#about-bt3"),l=$("#about-bt4"),d=$("#about-health-detail");s>=1900&&(e.addClass("fadeInLeft"),e.css({opacity:1}),o.addClass("fadeInUp"),o.css({opacity:1}),l.addClass("fadeInUp"),l.css({opacity:1}),d.addClass("fadeIn"),d.css({opacity:1}));var p=$("#about-line"),f=$("#about-bt5"),u=$("#about-bt6"),r=$(".event-left"),y=$(".event-right");s>=2600&&(p.addClass("fadeIn"),p.css({opacity:1}),f.addClass("flipInX"),f.css({opacity:1}),u.addClass("flipInX"),u.css({opacity:1}),r.addClass("fadeInLeft"),r.css({opacity:1}),y.addClass("fadeInRight"),y.css({opacity:1}));var m=$(".main-event-left"),b=$(".main-event-right");if(s>=4e3&&(m.addClass("fadeInLeft"),m.css({opacity:1}),b.addClass("fadeInRight"),b.css({opacity:1})),s>=0){var v=$(".entrepreneur-banner-word");v.addClass("slideInLeft"),v.css({opacity:1});var C=$(".bottom-container"),g=$(".bottom-item"),I=$(".bottom-item-right");g.addClass("fadeInUp"),I.addClass("fadeInUp"),C.css({opacity:1})}},$(function(){var s=$(".top");s.css({top:0});var a=$(".sign-line");$(".sign-up").click(function(){a.css({left:140}),$(".modal-signin-container").css({opacity:0,"z-index":998}),setTimeout(function(){$(".modal-signup-container").css({opacity:1,"z-index":999})},525)}),$("#sign-up-btn").click(function(){a.css({left:140}),$(".modal-signin-container").css({opacity:0,"z-index":998}),setTimeout(function(){$(".modal-signup-container").css({opacity:1,"z-index":999})},225)}),$("#sign-in-btn").click(function(){a.css({left:20}),$(".modal-signup-container").css({opacity:0,"z-index":998}),setTimeout(function(){$(".modal-signin-container").css({opacity:1,"z-index":999})},225)}),$(".sign-in").click(function(){a.css({left:20}),$(".modal-signup-container").css({opacity:0,"z-index":998}),setTimeout(function(){$(".modal-signin-container").css({opacity:1,"z-index":999})},525)});var t=$(".p-company"),i=$(".p-business"),n=$(".p-process");$("#p-company-news").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-company-news").addClass("p-li-active"),t.css({left:0}),i.css({left:1200}),n.css({left:2400})}),$("#p-business-info").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-business-info").addClass("p-li-active"),t.css({left:-1200}),i.css({left:0}),n.css({left:1200})}),$("#p-financing-process").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-financing-process").addClass("p-li-active"),t.css({left:-2400}),i.css({left:-1200}),n.css({left:0})}),$(".nav-icon2").click(function(){$("html,body").animate({scrollTop:0})})});