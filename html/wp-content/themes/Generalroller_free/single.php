<?php get_header();
 $id =get_the_ID(); 

	   
$bbs_mo =get_option('mytheme_bbs_mo');
if($bbs_mo&&get_post_meta($id,"bbs_shoppingbox", true) ){get_template_part('single-full') ;}else{ 
	   get_template_part( 'page_single/top' );
	   $word_t51=get_option('mytheme_word_t51');$word_t52=get_option('mytheme_word_t52');
?>

   <?php $left_right =get_option('mytheme_left_right'); 
   if(get_post_meta($id, 'views', true) ){$getPostViews=get_post_meta($id, 'views', true); }else{$getPostViews='0';}
   ?>
<div id="content" class="singlep">

<div class="right_mian" style="width:100%">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 <div class="title_page"><h1><?php the_title();?></h1></div><div class="des_page">
         <?php
		 $id =get_the_ID(); 
		  if(!get_post_meta($id,"bbs_shoppingbox", true)){?>
            <p class="infot"><em><?php if($word_t51!=""){echo $word_t51;}else{echo '发布时间';}  ?>：<?php echo get_the_time('Y/m/d') ; ?></em>
            <em> <?php   foreach((get_the_category()) as $category) { echo '<a href="'. get_category_link($category->cat_ID).'">' .$category->cat_name .'</a> ';} }?></em>
            <em><?php $posttags = get_the_tags(); if ($posttags) {echo '标签：'; foreach($posttags as $tag) { echo '<a target="_blank" id="tagss" href="'.get_bloginfo('url').'?tag='.$tag->slug.'">' .$tag->name .'</a>';}}?></em><em><?php if($word_t52!=""){echo $word_t52;}else{echo '浏览次数';}  ?>：<?php echo $getPostViews; ?>  </em> </p>
          
          
        
</div>



  <div class="enter <?php echo get_option('mytheme_enter_p');  ?>"> <?php the_content(); ?>
  
 
  <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>

 <div class="next_post"><p>下一篇文章<?php if (get_next_post()) { next_post_link($word_t42.': %link','%title',true);} ?></p> 
<p>上一篇文章<?php if (get_previous_post()) { previous_post_link($word_t43.': %link','%title',true);}?> </p>  </div>
</div>
  

  </div>
 <?php endwhile; endif;
 ?>


<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
</div>
</div>
<?php }get_footer();?>