<!--
<div class="header_bottom"<?php if(is_home()){echo 'id="header_bottom"'; }?> >
       <div class="header_bottom_in">
         <span class="header_bottom_right">
         <?php 
		 
		 $language1=get_option('mytheme_language1');
			$language2=get_option('mytheme_language2');
			$language_link1=get_option('mytheme_language_link1');
			$language_link2=get_option('mytheme_language_link2');
			
			 $language3=get_option('mytheme_language3');
			$language4=get_option('mytheme_language4');
			$language_link3=get_option('mytheme_language_link3');
			$language_link4=get_option('mytheme_language_link4');
				$language_title=get_option('mytheme_language_title'); 
		 
			 $theme_shop_open = get_option('mytheme_theme_shop_open'); 
		 	$shop_login = get_option('shop_login');
		    $shop_register = get_option('shop_register');
	      	$shop_profile = get_option('shop_profile');
			$shop_edit_profile = get_option('shop_edit_profile'); 
			$shop_bbs_open=get_option('shop_bbs_open');
			$bbs_my_page=get_option('bbs_my_page');
			 $language1=get_option('mytheme_language1');
			$language2=get_option('mytheme_language2');
			$language_link1=get_option('mytheme_language_link1');
			$language_link2=get_option('mytheme_language_link2');
			
			 $language3=get_option('mytheme_language3');
			$language4=get_option('mytheme_language4');
			$language_link3=get_option('mytheme_language_link3');
			$language_link4=get_option('mytheme_language_link4');
				$language_title=get_option('mytheme_language_title'); 
 if($theme_shop_open){
	 
	 if (is_user_logged_in()) {
		  global $current_user;    get_currentuserinfo();
			  $user_ID = $current_user->id ;
			   ?>
               <a class="top_right profie" href="<?php echo get_page_link( $shop_profile );  ?>">我的个人中心</a>
               <a class="top_right loginout" href="<?php echo wp_logout_url(get_bloginfo('url')); ?>">登出</a>
              <?php }else{ ?>
              <a class="top_right login" href="<?php echo get_page_link( $shop_login );  ?>">登录</a>
               <a class="top_right reg" href="<?php echo get_page_link($shop_register );  ?>">注册</a>
              
            <?php } } ?>
            
            
            </span>
            
             <div class="language_drop">
              <?php if($language_title){ ?> <a class="languagetitle"><?php echo $language_title; ?> </a> 
			 <?php } ?>
              <?php if($language_link1){ ?>
             <a class="language" target="_blank" href="<?php echo $language_link1 ;?>">
             <img src="<?php if($language1){ echo $language1;}else{echo get_bloginfo('template_url').'/images/china.gif';}  ?>" alt="language" />
             </a>
             <?php  }  if($language_link2){ ?>
              <a  class="language" target="_blank" href="<?php echo $language_link2 ;?>">
             <img src="<?php if($language2){ echo $language2;}else{echo get_bloginfo('template_url').'/images/usa.gif';}  ?>" alt="language" />
             </a>
              <?php  }  if($language_link3){ ?>
              <a  class="language" target="_blank" href="<?php echo $language_link3 ;?>">
             <img src="<?php if($language3){ echo $language3;}else{echo get_bloginfo('template_url').'/images/usa.gif';}  ?>" alt="language" />
             </a>
             <?php  }  if($language_link4){ ?>
              <a  class="language" target="_blank" href="<?php echo $language_link4 ;?>">
             <img src="<?php if($language4){ echo $language4;}else{echo get_bloginfo('template_url').'/images/usa.gif';}  ?>" alt="language" />
             </a>
			<?php  
			 }
		 ?>
             </div>
			
            
            
            
            
            <div class="header_bottom_search">
                 
            
            <form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
   
        <input type="text" id="s" name="s" value="" />
        
      <input id="searchsubmit" type="submit" value="">

</form>
            
            
            </div>
            
       </div>
   
   </div>
-->