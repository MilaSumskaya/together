$(document).ready(function(){
        $(".before_photo").css("display","none");
        $(".after_photo").mouseover(function(){
            var id = '#before_photo' + this.getAttribute('id').replace('after_photo','');
            $(this).css("display","none");
            $(id).css("display","block");
            $(id).animate({height: 220},20);
        });
        $(".before_photo").mouseout(function(){
                var id = '#after_photo' + this.getAttribute('id').replace('before_photo','');
                $(this).css("display","none");
                $(id).css("display","block");
                $(id).animate({height: 200},2000);
        });
})