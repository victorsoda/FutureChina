<?php 

class fourq extends WP_Widget {

	function fourq()
	{
		$widget_ops = array('classname'=>'fourq','description' =>get_bloginfo('template_url').'/images/xuanxiang/66.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="fourq",$name='关于我们模块',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	     $modle_id = esc_attr($instance['modle_id']);
	     $my_text1 = esc_attr($instance['my_text1']);
		 $my_text3 = esc_attr($instance['my_text3']);
		 $title = esc_attr($instance['title']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		 $my_text_url= esc_attr($instance['my_text_url']);
		 $my_btn1= esc_attr($instance['my_btn1']);
		 $my_btn2= esc_attr($instance['my_btn2']);
		$my_text_url2= esc_attr($instance['my_text_url2']);
		  $titleseo= esc_attr($instance['titleseo']);
			 $titleseo2= esc_attr($instance['titleseo2']);
	?>



<p>
 <label  for="<?php echo $this->get_field_id('my_text1'); ?>">模块id:</label>
 <input type="text" size="40" value="<?php echo $my_text1 ; ?>" name="<?php echo $this->get_field_name('my_text1'); ?>" id="<?php echo $this->get_field_id('my_text1'); ?>"/>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">(若使用多次这个模块请填写id，以便动画能够正常显示，如第一次使用填写1，第二次使用填写2，若在一个页面只是用一次那么就不需要填写了)</em>
 </p>
 
<p>
 <label  for="<?php echo $this->get_field_id('my_text1'); ?>">标题:</label>
 <input type="text" size="40" value="<?php echo $my_text1 ; ?>" name="<?php echo $this->get_field_name('my_text1'); ?>" id="<?php echo $this->get_field_id('my_text1'); ?>"/>

 </p>
 
 <p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">标题2:</label>
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>

 </p>

 
 
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">文字段落:</label>
<textarea style="width:98%;" id="<?php echo $this->get_field_id('my_text3'); ?>" name="<?php echo $this->get_field_name('my_text3'); ?>"cols="52" rows="4" ><?php echo stripslashes($my_text3); ?></textarea>  
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;"><?php esc_attr_e('使用代码 <br />进行分行,也支持html代码');?></em>
</p>


<p>
 <label  for="<?php echo $this->get_field_id('my_btn1'); ?>">按钮1:</label>
 <input type="text" size="40" value="<?php echo $my_btn1 ; ?>" name="<?php echo $this->get_field_name('my_btn1'); ?>" id="<?php echo $this->get_field_id('my_btn1'); ?>"/>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('my_text_url'); ?>">按钮链接1:</label>
 <input type="text" size="40" value="<?php echo $my_text_url ; ?>" name="<?php echo $this->get_field_name('my_text_url'); ?>" id="<?php echo $this->get_field_id('my_text_url'); ?>"/>
</p>

   

<p>
 <label  for="<?php echo $this->get_field_id('my_btn2'); ?>">按钮2:</label>
 <input type="text" size="40" value="<?php echo $my_btn2; ?>" name="<?php echo $this->get_field_name('my_btn2'); ?>" id="<?php echo $this->get_field_id('my_btn2'); ?>"/>
</p>

<p>
 <label  for="<?php echo $this->get_field_id('my_text_url2'); ?>">按钮链接2:</label>
 <input type="text" size="40" value="<?php echo $my_text_url2 ; ?>" name="<?php echo $this->get_field_name('my_text_url2'); ?>" id="<?php echo $this->get_field_id('my_text_url2'); ?>"/>
</p>







<p>
  <label  for="<?php echo $this->get_field_id('my_b_images'); ?>">背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images ; ?>" name="<?php echo $this->get_field_name('my_b_images'); ?>" id="<?php echo $this->get_field_id('my_b_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">（尺寸宽度为1920，高度取决于你的图片和文字大小，若选择了表单模式高度为640px,建议上传可以无限重复的背景图片）</em>
 
</p> 

<b>seo标签设置</b><br />
   
    <label  for="<?php echo $this->get_field_id('titleseo'); ?>">模块标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo'); ?>" name="<?php echo $this->get_field_name('titleseo'); ?>" >
              <option value=''<?php if ($titleseo == "" ) {echo "selected='selected'";}?> > div标签</option>
              <option value='h2'<?php if ($titleseo == "h2" ) {echo "selected='selected'";}?> > 	H2标签</option>
                <option value='strong'<?php if ($titleseo == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
	          
	</select>

</p>

<p>

    <label  for="<?php echo $this->get_field_id('titleseo2'); ?>">模块副标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo2'); ?>" name="<?php echo $this->get_field_name('titleseo2'); ?>" >
              <option value=''<?php if ($titleseo2 == "" ) {echo "selected='selected'";}?> > H2标签（默认）</option>
                <option value='strong'<?php if ($titleseo2 == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
                 <option value='div'<?php if ($titleseo2 == "div" ) {echo "selected='selected'";}?> > div标签</option>
             
             
           
                 
	          
	</select>
<em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">由于这款主题的模块可以显示在不同的区域，因此不同的区域的seo标签是可以自定义的，以此增强你的权重递归性，如果不明白如何使用，可以<a href=" http://www.themepark.com.cn/wordpresswzseobqdgxjy.html" target="_blank">点击查看分析文章</a>【付费版可选多达6个SEO标签，升级可解锁】</em>
</p>
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
	  
		$my_text1  = apply_filters('widget_title', empty($instance['my_text1']) ? __('') : $instance['my_text1']);
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
        $title = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
	    $my_b_images = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
	    $my_text_url= apply_filters('widget_title', empty($instance['my_text_url']) ? __('') : $instance['my_text_url']);
		 $my_text_url2= apply_filters('widget_title', empty($instance['my_text_url2']) ? __('') : $instance['my_text_url2']);
	    $my_btn1= apply_filters('widget_title', empty($instance['my_btn1']) ? __('') : $instance['my_btn1']);
		$my_btn2= apply_filters('widget_title', empty($instance['my_btn2']) ? __('') : $instance['my_btn2']);
	    $titleseo=  apply_filters('widget_title', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
		$titleseo2=  apply_filters('widget_title', empty($instance['titleseo2']) ? __('0') : $instance['titleseo2']);
		$modle_id = apply_filters('widget_title', empty($instance['modle_id']) ? __('0') : $instance['modle_id']);
		
		if($my_b_images) {$my_images='style="background:url('.$my_b_images.')"';} 
		
				
		?>
        
<div id="about_us<?php echo $modle_id; ?>" class="about" <?php echo $my_images; ?> >
  <?php if($my_text1||$title){ ?>
<div class="about_ttile_line">
 <div class="about_title">
    <?php if($titleseo){echo '<'.$titleseo.'  class="mantitle">';}else{echo '<div  class="mantitle">';} ?>
	<?php echo $my_text1 ; ?>
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
    
     <?php if($titleseo2){echo '<'.$titleseo2.'  class="sectitle">';}else{echo '<h2  class="sectitle">';} ?>
   <?php echo $title ; ?>
   <?php if($titleseo2){echo '</'.$titleseo2.'>';}else{echo '</h2>';} ?>
     <div class="about_title_line_in line_left"></div>
      <div class="about_title_line_in line_right"></div>
 </div>

</div>
 <?php } ?>
 
 <div class="about_p"><?php echo html_entity_decode($my_text3); ?></div>


<div class="about_vedio">

</div>
<?php if($my_btn1||$my_btn2){ ?>
<div class="about_btn">
 <?php if($my_btn1){ ?> <a href="<?php echo  $my_text_url; ?>"><?php echo $my_btn1; ?></a><?php } ?>
 <?php if($my_btn2){ ?> <a href="<?php echo  $my_text_url2; ?>"><?php echo $my_btn2; ?></a><?php } ?>
</div>
 <?php } ?>
 
 </div>
 
<script> $(window).scroll(function () {$(".donghuaopen #about_us<?php echo $modle_id; ?>").about();}); </script>      
  
 
        <?php
	}
}
register_widget('fourq');
?>