jQuery(function(){

    // navbar scrolling effect
    $(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }
        else {
            $('nav').removeClass('black');
        }
    });



    // project hovering effect
    $('.our-projects .col-sm-4 div').on('mouseenter', function(){
        $(this).addClass('transition');
        $(this).children().css({"visibility":"visible", "top" : "8.5rem"});
    }).on('mouseleave', function() {
        $(this).removeClass('transition');
        $(this).children().css({"visibility":"hidden", "top" : "12.5rem"});
    });



    // professional team hovering effect
    $('.professional-team .team').on('mouseenter', function(){
        $(this).siblings('.team-details').addClass('hide');
        $(this).siblings('.slide').addClass('transition'); 
    }).on('mouseleave', function() {
        $(this).siblings('.team-details').removeClass('hide');
        $(this).siblings('.slide').removeClass('transition'); 
    });



    // office team hovering effect
    $('.office-team .team').on('mouseenter', function(){
        $(this).children('.team-details').addClass('hide');
        $(this).children('.slide').addClass('transition'); 
    }).on('mouseleave', function(){
        $(this).children('.team-details').removeClass('hide');
        $(this).children('.slide').removeClass('transition'); 
    });



    // awards modal
    
    // $('.awards .award-click').on('click', function(){
    //     var arg = $(this).attr('data-arg');
        
    //     $(".modal-body img").attr("src", "img/awards/" + arg + ".jpg");
    // });


    // trip modal
    $('.trip img').on('click', function(){
        var arg = $(this).attr('src');
        
        $(".modal-body img").attr("src", arg);
    });
});