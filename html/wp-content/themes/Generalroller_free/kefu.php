<?php
$qq_tu=get_option('mytheme_qq_tu');
$weixin=get_option('mytheme_kefu_weixin');
if(!get_option('mytheme_kefu_on')){
 ?>


<div class="kefu "<?php  if(is_home()){echo 'id="kefu"';} ?>>
<img src="<?php if($qq_tu==""){ echo get_bloginfo('template_url').'/images/lianxi.png';}else{echo $qq_tu; } ?>" />

<div class="qq_kefu"> <?php echo stripslashes(get_option('mytheme_kefu_qq')); ?> </div>
         

 <img src="<?php if($weixin==""){ echo get_bloginfo('template_url').'/images/weixin2.png';}else{echo $weixin; } ?>" /> 
   



</div> 
   <div id="show" <?php  if(is_home()){echo 'class="kefu_show"';} ?>></div>
<?php }; ?>