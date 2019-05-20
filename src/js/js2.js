$(function(){
    var top =  $('.header').innerHeight() / 2;
    $(window).scroll(function(){
        var scrollTop = window.scrollY;
        if(scrollTop >= top){
         $('.header').addClass('xiding');
        //  $('.backtop').addClass('active');
        //  $('.backtop').on('click',function(){
        //      window.scrollTo(0,0);
        //  })
       
        }else{
            $('.header').removeClass('xiding'); 
            // $('.backtop').removeClass('active'); 
          
        }
    })
    $('.header-right li:eq(1)').on('click',function(){
        $('.consultation-block').css('display','block');
        $('.consultation').css('display','none');
    })
    $('.consultation-head img').click(function(){
        // e.stopPropagation();
        // e.preventDefault();
       
        $('.consultation-block').css('display','none');
        $('.consultation').css('display','block');
       
        return false ; 
        
    })
    $('.login ul li:last').on('click',function(){
        location.href = 'login.html';
    })
})