<!--[if lt IE 10]> 
<script>
$(document).ready(function(){$("div.full,.index_swipers").css("height",window.innerHeight+"px"),$(window).resize(function(){$("div.full,.index_swipers").css("height",window.innerHeight+"px"),$(".index_swipers").css("width",window.innerWidth+"px"),$(".index_swipers .swiper-slide").css("width",window.innerWidth+"px")});var a=new Swiper(".index_swipers",{pagination:".index_p",paginationClickable:!0,mode:"vertical",speed:5000,cssWidthAndHeight:"width",mousewheelControl:!0,onSlideChangeStart:function(){$.news_open()},onSlideChangeEnd:function(){$(".swiper-slide-active").hasClass("lastslide")&&a.disableMousewheelControl()},onFirstInit:function(){$.news_open()}});$(window).scroll(function(){0==$(window).scrollTop()&&a.enableMousewheelControl()})});
  </script>
  <![endif]-->
    <!--[if !IE]><!-->  
	<script>
	$(document).ready(function(){$("div.full,.index_swipers").css("height",window.innerHeight+"px"),$("div.index_content").css("margin-top",window.innerHeight),$(window).resize(function(){$("div.full,.index_swipers").css("height",window.innerHeight+"px"),$(".index_swipers").css("width",window.innerWidth+"px"),$(".index_swipers .swiper-slide").css("width",window.innerWidth+"px"),$("div.index_content").css("margin-top",window.innerHeight)});var a=new Swiper(".index_swipers",{pagination:".index_p",paginationClickable:!0,mode:"vertical",speed:1e3,cssWidthAndHeight:"width",mousewheelControl:!0,onSlideChangeStart:function(){$.news_open()},onSlideChangeEnd:function(){$(".swiper-slide-active").hasClass("lastslide")&&a.disableMousewheelControl()},onFirstInit:function(){$.news_open()}});$(window).scroll(function(){0==$(window).scrollTop()&&a.enableMousewheelControl()})});
  </script> <!--<![endif]-->
