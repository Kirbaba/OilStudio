$(function() {
    $(window).scroll(function() {
        if($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function() {
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    $('.smoothScroll').click(function(event) {
        event.preventDefault();
        var href=$(this).attr('href');
        var target=$(href);
        var top=target.offset().top;
        $('html,body').animate({
            scrollTop: top
        }, 1000);
    });
});

$(function(){
   $(document).on('click','.send_feedback', function(){
       var name = $('input[name="header-feedback-name"]').val();
       var mail = $('input[name="header-feedback-mail"]').val();
       var phone = $('input[name="header-feedback-phone"]').val();

       console.log(name+' '+mail+' '+phone);

       jQuery.ajax({
           url: ajaxurl, //url, к которому обращаемся
           type: "POST",
           data: "action=send_feedback&name=" +name+"&mail=" +mail+"&phone=" +phone, //данные, которые передаем. Обязательно для action указываем имя нашего хука
           success: function(data){
               $('input[name="header-feedback-name"]').val("");
               $('input[name="header-feedback-mail"]').val("");
               $('input[name="header-feedback-phone"]').val("");

               $('#order_sent').modal('show');

           }
       });
       return false;
   });
});

$(function(){
   $(document).on('click','.want--sub', function(){
       var name = $('input[name="want-feedback-name"]').val();
       var mail = $('input[name="want-feedback-mail"]').val();
       var phone = $('input[name="want-feedback-phone"]').val();

       console.log(name+' '+mail+' '+phone);

       jQuery.ajax({
           url: ajaxurl, //url, к которому обращаемся
           type: "POST",
           data: "action=send_feedback&name=" +name+"&mail=" +mail+"&phone=" +phone, //данные, которые передаем. Обязательно для action указываем имя нашего хука
           success: function(data){
               $('input[name="want-feedback-name"]').val("");
               $('input[name="want-feedback-mail"]').val("");
               $('input[name="want-feedback-phone"]').val("");

               $('#order_sent').modal('show');
           }
       });
       return false;
   });
});

$(function(){
    $(document).on('click','.send_feedback_modal', function(){

        var block = $(this).parent();
        alert("WOW2");
        var name = block.children('input[name="header-feedback-name"]').val();
        var mail = block.children('input[name="header-feedback-mail"]').val();
        var phone = block.children('input[name="header-feedback-phone"]').val();

        console.log(name+' '+mail+' '+phone);

        jQuery.ajax({
            url: ajaxurl, //url, к которому обращаемся
            type: "POST",
            data: "action=send_feedback&name=" +name+"&mail=" +mail+"&phone=" +phone+"&order=1", //данные, которые передаем. Обязательно для action указываем имя нашего хука
            success: function(data){
                block.children('input[name="header-feedback-name"]').val("");
                block.children('input[name="header-feedback-mail"]').val("");
                block.children('input[name="header-feedback-phone"]').val("");

                $('#order_call').modal('hide');
                $('#order_sent').modal('show');

            }
        });
        return false;
    });
});

$( document ).ready(function() {
    var insta_h = $('.reviews__item--img').width();
    $(".reviews__item--img").height(insta_h);
});