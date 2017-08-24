<?php get_header();

get_template_part( 'page_single/top' ); 
 global $wp_query;$term_id = get_query_var('cat');
    $word_t51=get_option('mytheme_word_t51');$word_t52=get_option('mytheme_word_t52');
?>	

<div id="content"  >
   <?php $left_right =get_option('mytheme_left_right'); ?>
<div class="left_mian" id="per27" <?php if($left_right){echo 'style="float: right;"';} ?> ><?php dynamic_sidebar('sidebar-widgets4');?></div>
<div class="right_mian"<?php if($left_right){echo 'style="float: left;"';}  ?>>


  
 <div class="title_page"><h1>404</h1></div>




  <div class="enter">
  
  <p><br />
<br />
<br />
<br />
<?php $word_t10=get_option('mytheme_word_t10'); if($word_t10!=""){echo $word_t10;}else{echo '很遗憾，没有找到你要的信息';}  ?><br />
<br />
<br />
<br />
<br />
</p>
  
  <?php wp_link_pages('before=<div class="pager">&after=</div>'); ?>
  

  





<div id="respond">
 <?php if ( comments_open() ){ comments_template();} ?>
</div>
</div>
</div>
</div>

  <?php  
    
;get_footer(); ?>
