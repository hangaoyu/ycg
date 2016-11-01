window.onscroll = function () {

    var t = $(window).scrollTop();

    //导航栏
    var top = $('.top');
    if (t >= 160) {
        top.css({top: -100});
    }
    else {
        top.css({top: 0});
    }
    $("#nav-ks").mouseenter(function () {
        top.css({top: 0});
    })

    //about
    var ys = $('#about-yisheng');
    var bt1 = $('#about-bt1');
    var bt2 = $('#about-bt2');
    var detail1 = $('#about-detail');
    if (t >= 1000) {
        ys.addClass('fadeInRight');
        ys.css({opacity: 1});
        bt1.addClass('fadeInLeft');
        bt1.css({opacity: 1});
        bt2.addClass('fadeInLeft');
        bt2.css({opacity: 1});
        detail1.addClass('fadeIn');
        detail1.css({opacity: 1});
    }
    var wm = $('#about-women');
    var bt3 = $('#about-bt3');
    var bt4 = $('#about-bt4');
    var detail2 = $('#about-health-detail');
    if (t >= 1900) {
        wm.addClass('fadeInLeft');
        wm.css({opacity: 1});
        bt3.addClass('fadeInUp');
        bt3.css({opacity: 1});
        bt4.addClass('fadeInUp');
        bt4.css({opacity: 1});
        detail2.addClass('fadeIn');
        detail2.css({opacity: 1});
    }
    var line = $('#about-line');
    var bt5 = $('#about-bt5');
    var bt6 = $('#about-bt6');
    var eventleft = $('.event-left');
    var eventright = $('.event-right');
    if (t >= 2600) {
        line.addClass('fadeIn');
        line.css({opacity: 1});
        bt5.addClass('flipInX');
        bt5.css({opacity: 1});
        bt6.addClass('flipInX');
        bt6.css({opacity: 1});
        eventleft.addClass('fadeInLeft');
        eventleft.css({opacity: 1});
        eventright.addClass('fadeInRight');
        eventright.css({opacity: 1});
    }
    // var meventleft = $('.main-event-left');
    // var meventright = $('.main-event-right');
    // if (t >= 4000) {
    //     meventleft.addClass('fadeInLeft');
    //     meventleft.css({opacity: 1});
    //     meventright.addClass('fadeInRight');
    //     meventright.css({opacity: 1});
    // }
    if (t >= 0) {
        var entrepreneur_banner = $('.entrepreneur-banner-word');
        entrepreneur_banner.addClass('slideInLeft');
        entrepreneur_banner.css({opacity: 1});
        //investor
        var investor_bannner_bottom = $('.bottom-container');
        var investor_banner_item = $('.bottom-item');
        var investor_banner_item_right = $('.bottom-item-right');
        investor_banner_item.addClass('fadeInUp');
        investor_banner_item_right.addClass('fadeInUp');
        investor_bannner_bottom.css({opacity: 1});
    }
    if(t>=0){
        $('#r_top').click(function () {
            $('.result-items').css('margin-top',0);
        });
        $('#r_down').click(function () {
            $('.result-items').css('margin-top',-240);
        });
        $('.left_arrow').click(function () {
            $('.finance-scroll-container').css('margin-top',10);
        });
        $('.right_arrow').click(function () {
            $('.finance-scroll-container').css('margin-top',-680);
        });
    }
}


$(function () {


    var top = $('.top');
    top.css({top: 0});

    //注册登录
    var sign_line = $('.sign-line');

    $(".sign-up").click(function () {

        sign_line.css({left: 140});
        $('.modal-signin-container').css({opacity: 0, 'z-index': 998});
        setTimeout(function () {
            $('.modal-signup-container').css({opacity: 1, 'z-index': 999});
        }, 525);

    })
    $('#sign-up-btn').click(function () {
        sign_line.css({left: 140});
        $('.modal-signin-container').css({opacity: 0, 'z-index': 998});
        setTimeout(function () {
            $('.modal-signup-container').css({opacity: 1, 'z-index': 999});
        }, 225);
    })
    $('#sign-in-btn').click(function () {
        sign_line.css({left: 20});
        $('.modal-signup-container').css({opacity: 0, 'z-index': 998});

        setTimeout(function () {
            $('.modal-signin-container').css({opacity: 1, 'z-index': 999});
        }, 225);
    })

    $(".sign-in").click(function () {

        sign_line.css({left: 20});
        $('.modal-signup-container').css({opacity: 0, 'z-index': 998});

        setTimeout(function () {
            $('.modal-signin-container').css({opacity: 1, 'z-index': 999});
        }, 525);


    })

    // 项目介绍
    var p_company = $('.p-company');
    var p_business = $('.p-business');
    var p_process = $('.p-process');

    $("#p-company-news").click(function () {
        console.log('a');
        $('.project-type ul li').each(function () {
            $(this).removeClass('p-li-active');
        });
        $("#p-company-news").addClass('p-li-active');
        p_company.css({left: 0});
        p_business.css({left: 1200});
        p_process.css({left: 2400});
    });
    $("#p-business-info").click(function () {
        console.log('a');
        $('.project-type ul li').each(function () {
            $(this).removeClass('p-li-active');
        });
        $("#p-business-info").addClass('p-li-active');

        p_company.css({left: -1200});
        p_business.css({left: 0});
        p_process.css({left: 1200});
    });

    $("#p-financing-process").click(function () {
        $('.project-type ul li').each(function () {
            $(this).removeClass('p-li-active');
        });
        $("#p-financing-process").addClass('p-li-active');
        p_company.css({left: -2400});
        p_business.css({left: -1200});
        p_process.css({left: 0});
    });


    $(".nav-icon2").click(function () {
        $("html,body").animate({scrollTop: 0});
    });
})

