$(function(){var s=$(".p-company"),c=$(".p-business"),e=$(".p-process");$("#p-company-news").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-company-news").addClass("p-li-active"),s.css({left:0}),c.css({left:1200}),e.css({left:2400})}),$("#p-business-info").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-business-info").addClass("p-li-active"),s.css({left:-1200}),c.css({left:0}),e.css({left:1200})}),$("#p-financing-process").click(function(){$(".project-type ul li").each(function(){$(this).removeClass("p-li-active")}),$("#p-financing-process").addClass("p-li-active"),s.css({left:-2400}),c.css({left:-1200}),e.css({left:0})})});