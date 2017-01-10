(function($) {
    
    // #gnb 대메뉴
    $(document).on('mouseenter focus', '#gnb > .container > ul > li', function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
    });
    $(document).on('mouseleave', '#gnb > .container > ul > li', function() {
        $(this).removeClass('active');
    });
    
})(jQuery);