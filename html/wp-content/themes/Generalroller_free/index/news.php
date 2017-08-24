<div  class="swiper-slide news_tuoch">
                  <div class="swiper-slide_in news">
                    
                       <div class="left_news">
                             <div class="news_tabs">
                                <a class="active">公司新闻</a>
                                <a>行业新闻</a>
                               
                             </div>
                             <div class="swiper-container news_info">
                                 
                               
                               
                                 <div class="swiper-wrapper">
                                   <ul class="swiper-slide">
                                     <li class="news_first">
                                        <a href="#" class="news_pic"><img src="<?php echo get_bloginfo('template_url').'/images/demo/news.jpg'; ?>" /> </a>
                                        <div class="news_texts">
                                           <b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b>
                                           <span class="infot_news"><em class="times">2015-8-5</em><em class="vei">4633</em></span>
                                           <p>WordPress外观--菜单中无法打开“显示选项”下拉面板的bug WordPress4.2更新之后，针对中文版出现了一处显示bug，在外观--菜单中的法打开“显示选项”下拉面板的bug WordPress4.2更新之后，针对中文版出现了一处显示bug，在外观--菜单中的“显示选项”点击下拉无法打开面板的bug。 显示选项可以将一些隐藏的目录和功能显示出来，比如增加菜单中输出文章、标签，在菜... </p>
                                        
                                        </div>
                                     
                                     </li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                       <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                       <li class="news_more_s"><a href="#">查看所有>></a></li>
                                   </ul>
                                
                                 
                                 
                                 
                                 
                                 
                               
                                    <ul class="swiper-slide">
                                     <li class="news_first">
                                        <a href="#" class="news_pic"><img src="<?php echo get_bloginfo('template_url').'/images/demo/news.jpg'; ?>" /> </a>
                                        <div class="news_texts">
                                           <b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b>
                                           <span class="infot_news"><em class="times">2015-8-5</em><em class="vei">4633</em></span>
                                           <p>WordPress外观--菜单中无法打开“显示选项”下拉面板的bug WordPress4.2更新之后，针对中文版出现了一处显示bug，在外观--菜单中的法打开“显示选项”下拉面板的bug WordPress4.2更新之后，针对中文版出现了一处显示bug，在外观--菜单中的“显示选项”点击下拉无法打开面板的bug。 显示选项可以将一些隐藏的目录和功能显示出来，比如增加菜单中输出文章、标签，在菜... </p>
                                        
                                        </div>
                                     
                                     </li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                       <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                      <li class="news_more_s"><a href="#">查看所有>></a></li>
                                   </ul>
                                 </div>
                                 
                                 
                                 
                                 
                             </div>
                       
                       </div>
                     
                  
             

 <script>
  var news_info = new Swiper('.news_info',{
    speed:600,
	mode : 'vertical',
	cssWidthAndHeight: 'width',
	simulateTouch : false,
	calculateHeight : true,
    onSlideChangeStart: function(){
      $(".news_tabs .active").removeClass('active')
      $(".news_tabs a").eq(news_info.activeIndex).addClass('active')  
    }
  });
  $(".news_tabs a").on('touchstart mousedown',function(e){
    e.preventDefault()
    $(".news_tabs .active").removeClass('active')
    $(this).addClass('active')
     news_info.swipeTo( $(this).index() )
  });
  $(".news_tabs a").click(function(e){
    e.preventDefault()
  });
  </script>
  
  
  
  
  <div class="right_news">
  
       <div class="news_header">  <h2 class="active" >公司新闻</h2>  </div>
       <div class="news_info">
       <ul>
         <li class="news_first">
                                        <a href="#" class="news_pic"><img src="<?php echo get_bloginfo('template_url').'/images/demo/news.jpg'; ?>" /> </a>
                                        <div class="news_texts">
                                           <b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b>
                                           <span class="infot_news"><em class="times">2015-8-5</em><em class="vei">4633</em></span>
                                           <p>WordPress外观--菜单中无法打开“显示选项”、标签，在菜... </p>
                                        
                                        </div>
                                     
                                     </li>
                                     
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                    <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                       <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                     <li><b><a href="#">使用 Swiper框架的主题《魔术滚轴》正式发布</a></b></li>
                                  
       
       </ul>
  </div>
  </div>
  
  
  
   <div class="news_bags"></div>
  
       </div>
  <div class="index_mod_bag bag_animate" style=" background-image:url(<?php echo get_bloginfo('template_url').'/images/demo/5.jpg'; ?>)"></div>

               </div>