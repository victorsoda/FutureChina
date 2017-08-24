<?php
get_header();
 $sidepark=get_post_meta($id, "cebian",true);
	   get_template_part( 'page_single/top' );
?>

   <?php $left_right =get_option('mytheme_left_right'); 
   if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
   ?>
<div id="content" class="singlep">
<div class="right_mian" style="width:100%"<?php if($left_right){echo 'style="float: left;"';}  ?>>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  




  <div class="enter"> <?php the_content(); ?>
  
   <?php if(get_post_meta($post->ID, "cont_read",true)!==""){ 
            $logmeta = wpautop(trim(get_post_meta($post->ID, "cont_read",true)));
			echo $logmeta;};?> 
  <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
  
  </div>
 <?php endwhile; endif;
 ?>





<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
</div>
</div>
<?php get_footer();?>