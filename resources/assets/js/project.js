// 项目介绍
$(function () {
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
        console.log('b');
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
})
