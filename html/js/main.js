$(function() {
    $( "#datepicker" ).datepicker();

    $('.meun_icon').on('click', function(){
       var menuBlock = $(this).next('.menu_content');
       if(menuBlock.hasClass('active'))
       {
           menuBlock.slideUp();
           menuBlock.removeClass('active');
       }
       else
       {
           menuBlock.slideDown();
           menuBlock.addClass('active');
       }
    });
} );