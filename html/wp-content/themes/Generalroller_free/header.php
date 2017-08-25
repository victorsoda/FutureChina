<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?> >
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1" />	
<meta name="baidu-site-verification" content="aeku8c98vL" />
<meta name="google-site-verification" content="DboKmERfxwHx7lsyfWbj7850hHUrilMF5bJA97H_Jfg" />
<?php

if(is_single()){
$id=get_the_ID(); 
$description=get_post_meta($id, "描述",true);
$keyworeds=get_post_meta($id, "关键字",true);
$posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { $tagess.=$tag->name.',';}}
}
 ?>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php if (get_option('mytheme_eso_jr') == ""){ ?>
<meta name="keywords" content="<?php  if(is_single()&&!$keyworeds){echo $tagess;}else{theme_keyworeds();} ?>" />
<meta name="description" content="<?php  if(is_single()&&!$description){echo  mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,200,"",'utf-8');}else{theme_description();}; ?>" />
<?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php }} ;?>
<title><?php if(get_option('mytheme_word_t12')==""){$word_t12='找到标签';}else{ $word_t12=get_option('mytheme_word_t12');};
		     if(get_option('mytheme_word_t9')!=""){$word_t9=get_option('mytheme_word_t9');}else{$word_t9='搜索结果：';}  
		     if(get_option('mytheme_word_t10')!=""){$word_t10=get_option('mytheme_word_t10');}else{$word_t9='很遗憾，没有找到你要的信息：';}  
			 $singletitle_p =get_post_meta($post->ID, "title_p",true);
			 $singletitle =get_post_meta($post->ID, "title",true);
			 global $wp_query;
             $term_id = get_query_var('cat');
             $cat_title=get_option('cat_title_'.$term_id);
             $cat_title_p=get_option('cat_title_p_'.$term_id);
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title($word_t12."_"); echo '_'; }
		      elseif (is_archive()) {
				
		        if( $cat_title){echo  $cat_title;}else{ wp_title(''); echo '_'.get_bloginfo('name');; }
					 
				 }
		      elseif (is_search()) {
		         echo $word_t9.'_'.wp_specialchars($s).'_'; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		      
		        if( $singletitle){echo  $singletitle;}else{ wp_title(''); echo '_'.get_bloginfo('name');; }
					 
			    }
		      elseif (is_404()) {
		         echo $word_t10.'_'; }
		      if (is_home()) {
		        if(get_option('mytheme_title')){echo get_option('mytheme_title');}else{  bloginfo('name'); echo ''; bloginfo('description'); }
					 
		        }
		      if ($paged>1) {
		         echo '_page'. $paged;echo '_'; bloginfo('description'); }
		   ?></title>


<?php  $logo= get_option('mytheme_logo') ; $ico= get_option('mytheme_ico');?>
<link rel="shortcut icon" href="<?php echo $ico; ?>" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head();echo $debug; ?>

 <?php echo stripslashes(get_option('mytheme_analytics3')); ?>

</head>

<?php
   if (!is_user_logged_in()) {
	   global $current_user;    get_currentuserinfo();
			  $user_ID = $current_user->id ;
	      if( !current_user_can( 'manage_options' ) ) {

      $header_over='style="top:0;"';

    }
	  }

 ?>

<body <?php body_class();?> >
    <div class="header">
	<?php include_once("baidu_js_push.php") ?> <!-- New Added at 2017.8.16-->
    <?php
	$logo_m=get_option('mytheme_logo');
	$move_logo_m=get_option('mytheme_move_logo');
$logo_s=$logo_m;
	if(!$logo_s){$logo_s=get_bloginfo('template_url').'/images/logo.png';}
	
	?>
         <div class="header_in" style="background:#FFF;">
               <div class="header_center">
                <?php if(is_home()){ ?>  <h1 class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php echo  bloginfo('name'); ?>"> <img src="<?php  echo $logo_s ?>" alt="<?php echo  bloginfo('name'); ?>"/></a></h1><?php }else{ ?>
                 <div class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php echo  bloginfo('name'); ?>"> <img src="<?php  echo $logo_s ?>" alt="<?php echo  bloginfo('name'); ?>"/></a></div>
                 <?php } ?>
                 

                   <?php get_template_part( 'inc/nav' ); ?>
               
               
               
              
           
               </div> 
                
             <?php   get_template_part( 'inc/meta' );?>
       
         </div>
     
    
       </div>
