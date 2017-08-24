<?php 

class left_right extends WP_Widget {

	function left_right()
	{
		$widget_ops = array('classname'=>'left_right','description' => get_bloginfo('template_url').'/images/xuanxiang/1.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="left_right",$name='左右图文模块【滚轴专用】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
	
		 $left_right=esc_attr($instance['left_right']);
		 $first_mod = esc_attr($instance['first_mod']);
		 $my_images = esc_attr($instance['my_images']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		 $my_b_images_ad = esc_attr($instance['my_b_images_ad']);
		 $my_images_up = esc_attr($instance['my_images_up']);
		 $my_images_lr = esc_attr($instance['my_images_lr']);
		  $my_mp4 = esc_attr($instance['my_mp4']);
		  $my_text_up = esc_attr($instance['my_text_up']);
		 $my_text_lr = esc_attr($instance['my_text_lr']);
		 $my_text1 = esc_attr($instance['my_text1']);
		 $title = esc_attr($instance['title']);
		 $my_text3 = esc_attr($instance['my_text3']);
		 $my_text4 = esc_attr($instance['my_text4']);
		 $my_url = esc_attr($instance['my_url']);
		 $my_text_align = esc_attr($instance['my_text_align']);
		 $my_text_color= esc_attr($instance['my_text_color']);
	     $my_text_alpha=esc_attr($instance['my_text_alpha']);
	
	
	?>
<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>模块属性设置</strong></p>
<p>   
    <label  for="<?php echo $this->get_field_id('first_mod'); ?>">初始化模块（这个模块是否是你放置的第一个模块？）：</label><br />
             <select id="<?php echo $this->get_field_id('first_mod'); ?>" name="<?php echo $this->get_field_name('first_mod'); ?>" >
                           <option value=''<?php if ($first_mod == "" ) {echo "selected='selected'";}?> >这是中间的模块</option>
	          <option value='1'<?php if ($first_mod == "1" ) {echo "selected='selected'";}?>>是第一个模块</option>
              <option value='2'<?php if ($first_mod == "2" ) {echo "selected='selected'";}?>>是最后一个模块</option>
	</select><br />

<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">请注意：如果这个模块是你放置的第一个模块，那么请选择“是第一个模块”，这样这个模块在没有滚动时，才能在网站加载完成之后以动画显示出模块的内容，否则他们是隐藏的。【如果放置在内容排版区中，这个选项无效】</em>
</p>

<p>   
    <label  for="<?php echo $this->get_field_id('left_right'); ?>">图文显示顺序：</label><br />
             <select id="<?php echo $this->get_field_id('left_right'); ?>" name="<?php echo $this->get_field_name('left_right'); ?>" >
              <option value=''<?php if ($left_right == "" ) {echo "selected='selected'";}?> >图片显示在左文字显示在右</option>
	          <option value='1'<?php if ($left_right == "1" ) {echo "selected='selected'";}?>>图片显示在右文字显示在左</option>
	</select>

</p>


<p>
  <label  for="<?php echo $this->get_field_id('my_b_images'); ?>">背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images ; ?>" name="<?php echo $this->get_field_name('my_b_images'); ?>" id="<?php echo $this->get_field_id('my_b_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">pc和平板电脑的背景图片尺寸为1920*911（像素）. 平板电脑的背景图片会依据尺寸自动裁切为1024宽度，不需要另外上传，手机上的背景图片请上传700像素宽度的图片。</em>
</p> 

<p>
  <label  for="<?php echo $this->get_field_id('my_mp4'); ?>">背景视频:</label><br />
 <input type="text" size="40" value="<?php echo $my_mp4; ?>" name="<?php echo $this->get_field_name('my_mp4'); ?>" id="<?php echo $this->get_field_id('my_mp4'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">背景视频会在ie10以上浏览器上自动播放，尺寸为1280*720,并且必须为MP4格式</em>
</p> 

<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>悬浮图片设置</strong></p>
<p>
  <label  for="<?php echo $this->get_field_id('my_images'); ?>">悬浮的图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_images ; ?>" name="<?php echo $this->get_field_name('my_images'); ?>" id="<?php echo $this->get_field_id('my_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">悬浮的图片是显示在模块中的动画图片，如果不需要这张图片可以不上传，就不会显示。</em>
</p> 


 <p>
 <label  for="<?php echo $this->get_field_id('my_images_up'); ?>">悬浮的图片上边距:</label>
 <input type="text" size="10" value="<?php echo $my_images_up ; ?>" name="<?php echo $this->get_field_name('my_images_up'); ?>" id="<?php echo $this->get_field_id('my_images_up'); ?>"/>
 <a>默认15%</a>
 
 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('my_images_lr'); ?>">悬浮的图片左（或者右）边距:</label>
 <input type="text" size="10" value="<?php echo $my_images_lr ; ?>" name="<?php echo $this->get_field_name('my_images_lr'); ?>" id="<?php echo $this->get_field_id('my_images_lr'); ?>"/>
 <a>默认5%</a>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">通过上面边距的选项，你可以调整悬浮图片的坐标，如果你调换了左右顺序，那么左右边距也会切换,请注意不要太靠下方了，超过768像素的高度再平板电脑和小分辨率的pc上就无法显示完整了<strong>注意后面的单位，像素（px）或者百分比（%）</strong>。</em>
 </p>

<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>文字模块设置</strong></p>
 <p>
 <label  for="<?php echo $this->get_field_id('my_text1'); ?>">文字模块-第一行标题:</label>
 <input type="text" size="40" value="<?php echo $my_text1 ; ?>" name="<?php echo $this->get_field_name('my_text1'); ?>" id="<?php echo $this->get_field_id('my_text1'); ?>"/>

 </p>
 <p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">文字模块-第二行标题:</label>
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">文字模块-文字段落:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_text3'); ?>" name="<?php echo $this->get_field_name('my_text3'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_text3); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><?php esc_attr_e('使用代码 <br />进行分行,也支持html代码');?></em>
</p>
 <p>
 <label  for="<?php echo $this->get_field_id('my_text4'); ?>">文字模块-按钮文字:</label>
 <input type="text" size="40" value="<?php echo $my_text4 ; ?>" name="<?php echo $this->get_field_name('my_text4'); ?>" id="<?php echo $this->get_field_id('my_text4'); ?>"/>
 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('my_url'); ?>">链接url:</label>
 <input type="text" size="40" value="<?php echo $my_url ; ?>" name="<?php echo $this->get_field_name('my_url'); ?>" id="<?php echo $this->get_field_id('my_url'); ?>"/>
 </p> 


 <p>
 <label  for="<?php echo $this->get_field_id('my_text_up'); ?>">文字模块上边距:</label>
 <input type="text" size="10" value="<?php echo $my_text_up ; ?>" name="<?php echo $this->get_field_name('my_text_up'); ?>" id="<?php echo $this->get_field_id('my_text_up'); ?>"/>
 <a>默认30%</a>
 
 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('my_text_lr'); ?>">文字模块左（或者右）边距:</label>
 <input type="text" size="10" value="<?php echo $my_text_lr ; ?>" name="<?php echo $this->get_field_name('my_text_lr'); ?>" id="<?php echo $this->get_field_id('my_text_lr'); ?>"/>
 <a>默认5%</a>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">通过上面边距的选项，你可以调整文字模块的坐标，如果你调换了左右顺序，那么左右边距也会切换,请注意不要太靠下方了，超过768像素的高度再平板电脑和小分辨率的pc上就无法显示完整了<strong>注意后面的单位，像素（px）或者百分比（%）</strong>。</em>
 </p>

<p>   
    <label  for="<?php echo $this->get_field_id('my_text_align'); ?>">文字是否居中：</label><br />
             <select id="<?php echo $this->get_field_id('my_text_align'); ?>" name="<?php echo $this->get_field_name('my_text_align'); ?>" >
              <option value=''<?php if ($my_text_align == "" ) {echo "selected='selected'";}?> >默认</option>
	          <option value='1'<?php if ($my_text_align == "1" ) {echo "selected='selected'";}?>>居中</option>
	</select>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">通过上面的选项，可以选择文字是否居中，若选择默认，那么文字模块靠左时居左靠右时居右</em>
</p>
<p>   
    <label  for="<?php echo $this->get_field_id('my_text_color'); ?>">文字颜色选择：</label><br />
             <select id="<?php echo $this->get_field_id('my_text_color'); ?>" name="<?php echo $this->get_field_name('my_text_color'); ?>" >
              <option value=''<?php if ($my_text_color == "" ) {echo "selected='selected'";}?> >白色</option>
	          <option value='1'<?php if ($my_text_color == "1" ) {echo "selected='selected'";}?>>黑色</option>
	</select><br />

</p>

<p>   
    <label  for="<?php echo $this->get_field_id('my_text_alpha'); ?>">文字颜色透明度：</label><br />
             <select id="<?php echo $this->get_field_id('my_text_color_alpha'); ?>" name="<?php echo $this->get_field_name('my_text_alpha'); ?>" >
              <option value=''<?php if ($my_text_alpha == "" ) {echo "selected='selected'";}?> >100%</option>
	          <option value='90'<?php if ($my_text_alpha == "90" ) {echo "selected='selected'";}?>>90%</option>
               <option value='80'<?php if ($my_text_alpha == "80" ) {echo "selected='selected'";}?>>80%</option>
                <option value='70'<?php if ($my_text_alpha == "70" ) {echo "selected='selected'";}?>>70%</option>
                 <option value='60'<?php if ($my_text_alpha == "60" ) {echo "selected='selected'";}?>>60%</option>
                  <option value='50'<?php if ($my_text_alpha == "50" ) {echo "selected='selected'";}?>>50%</option>
	</select><br />

</p>

	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	extract( $args );
	     $id =$instance['id'];
        $before_content = $instance['before_content'];
        $after_content = $instance['after_content'];
		$left_right = apply_filters('widget_title', empty($instance['left_right']) ? __('') : $instance['left_right']);
		$first_mod = apply_filters('widget_title', empty($instance['first_mod']) ? __('') : $instance['first_mod']);
		$my_images  = apply_filters('widget_title', empty($instance['my_images']) ? __('') : $instance['my_images']);
		$my_images_up  = apply_filters('widget_title', empty($instance['my_images_up']) ? __('') : $instance['my_images_up']);
		$my_images_lr  = apply_filters('widget_title', empty($instance['my_images_lr']) ? __('') : $instance['my_images_lr']);	
        $my_text1  = apply_filters('widget_title', empty($instance['my_text1']) ? __('') : $instance['my_text1']);
		$title  = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
	    $my_text4  = apply_filters('widget_title', empty($instance['my_text4']) ? __('') : $instance['my_text4']);
		$my_url  = apply_filters('widget_title', empty($instance['my_url']) ? __('') : $instance['my_url']);
		$my_text_up  = apply_filters('widget_title', empty($instance['my_text_up']) ? __('') : $instance['my_text_up']);
		$my_text_lr  = apply_filters('widget_title', empty($instance['my_text_lr']) ? __('') : $instance['my_text_lr']);	
        $my_b_images  = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
        $my_b_images_ad  = apply_filters('widget_title', empty($instance['my_b_images_ad']) ? __('') : $instance['my_b_images_ad']);
		$my_text_align  = apply_filters('widget_title', empty($instance['my_text_align']) ? __('') : $instance['my_text_align']);
  $my_text_color  = apply_filters('widget_title', empty($instance['my_text_color']) ? __('') : $instance['my_text_color']);
  $my_text_alpha  = apply_filters('widget_title', empty($instance['my_text_alpha']) ? __('') : $instance['my_text_alpha']);
    $my_mp4 = apply_filters('widget_title', empty($instance['my_mp4']) ? __('') : $instance['my_mp4']);
  if($my_text_color){$my_text_colors='dack_text_mod';};
  if($my_text_alpha){$my_text_alphas='class="alpha'.$my_text_alpha.'"';};

 if ($left_right == "1" ) { $float_l="right"; $float_r="left";}else{$float_l="left"; $float_r="right";}
 if ($left_right == "1" ) { $tfloat_l="left"; $tfloat_r="right";}else{$tfloat_l="right"; $tfloat_r="left";}
 if($my_images_up|| $my_images_lr){
	 if($my_images_up){$up_xy=' top:'.$my_images_up.';';}
	 if($my_images_lr){$lr= $float_l.':'.$my_images_lr.';';} 
	 $myimages_xy='style="'.$up_xy.$lr.' "'; 
	 }
	 if($my_text_up|| $my_text_lr||$my_text_align ){
		  if($my_text_align ){$my_text_aligns=' text-align:center;';}
	 if($my_text_up){$tup_xy=' top:'.$my_text_up.';';}
	 if($my_text_lr){$tlr= $tfloat_l.':'.$my_text_lr.';';}
	 
	 $mytext_xy='style="'.$tup_xy.$tlr.$my_text_aligns.' "';
	 
	 } 
	
 ?>



 <div  id="left_right_mod" class="swiper-slide <?php if ($first_mod == "1" ) {echo "swiper-slide-active";}elseif($first_mod == "2"){echo " lastslide";}?>  left_right" > 
                 
                  <div class="swiper-slide_in">
                  <?php if($my_images){ ?>
                   <a <?php if($my_url) {echo'href="'.$my_url.'"';} ?>  class="left_pic" <?php if ($left_right == "1" ) {echo "id='right_posib'";}else{echo "id='left_posib'";};  echo $myimages_xy;?>>
                   <img src="<?php echo $my_images ; ?>" />
                   </a>
                   <?php } ?>
                   
                   <div class="right_text <?php echo $my_text_colors; ?>"<?php if ($left_right == "1" ) {echo "id='left_posib'";}else{echo "id='right_posib'";}; echo $mytext_xy;?> >
                        <div <?php echo $my_text_alphas ?> id="alpha">
                      <?php if( $my_text1) {?> <b class="title_lr_mod"><?php echo  $my_text1; ?></b><?php } ?>
                      <?php if( $title) {?>  <h3><a href="#"><?php echo  $title; ?></a></h3><?php } ?>
                      <?php if( $my_text3) {?> <p> <?php echo html_entity_decode($my_text3); ?></p><?php } ?>
                      </div>
                      <?php if( $my_text4) {?>  <a href="<?php echo  $my_url; ?>" class="btn buy"><b><?php echo  $my_text4; ?></b><div class="btn_bag"></div></a><?php } ?>
                   </div>
                   </div> 
             <div class="index_mod_bag " style=" background-image:url(<?php if($my_b_images){echo $my_b_images ;}?>)">
          
             </div> 
             </div>

 
        <?php
	}
}
register_widget('left_right');
?>