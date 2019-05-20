$(function(){
   
    $('#bighead').load('head.html');
    $('#bigfoot').load('foot.html');
    
    var left = window.innerWidth * 1.2; 
    var height = window.innerWidth * 0.2;
     $('.swiper-slide-img'). css('width',left);
     $('.swiper-slide-img').css('position','absolute')
     $('.swiper-slide-img').css('left',-(height))
     var num = 0;
    var timer = setInterval(function(){
        num++;
        if(num <= 2){
            $('.main-peijian-li').eq(num).css('z-index',num * 1 + 1).siblings().css('z-index',0);

        }else{
            num = 0;
            $('.main-peijian-li').eq(num).css('z-index',num * 1 + 1).siblings().css('z-index',0);
        }
       
       console.log(num * 1 + 1);
      
    },2000);
    
    $()
    $('.main-peijian-ul').innerHeight($('.main-peijian-li').innerHeight());
    $(window).on('resize',function(){
        $('.main-peijian-ul').innerHeight($('.main-peijian-li').innerHeight());
    })
    console.log($('.main-peijian-li').innerHeight())
   
    // father.style.height=son.offsetHeight+'px';
    
    // $('.consultation-head').on('mousedown',function(ev){
        
    //     var ix = ev.offsetX;
    //                 var iy = ev.offsetY;
    //                 $(document).on('mousemove',function(ev){
    //                     var l = ev.clientX - ix;
    //                     var t = ev.clientY - iy;
    //                     $('.consultation-block').css('left',l);
    //                     $('.consultation-block').css('top',t);
    //                     return false;
						
    //                 })
	// 				$(document).on('mouseup',function(e){
    //                     document.onmousemove = null;
    //                     $(document).off('mousemove');
    //                    e.stopPropagation();
    //                 })
                    
	// 		ev.stopPropagation();		
    // })
   
   
})