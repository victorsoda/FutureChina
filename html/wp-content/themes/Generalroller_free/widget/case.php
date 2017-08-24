<?php 

class case_index extends WP_Widget {

	function case_index()
	{
		$widget_ops = array('classname'=>'case_index','description' => get_bloginfo('template_url').'/images/xuanxiang/3.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="case_index",$name='案例/产品模块【内容排版区模块】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
	
		 $left_right=esc_attr($instance['left_right']);
		 $first_mod = esc_attr($instance['first_mod']);
		 $my_images = esc_attr($instance['my_images']);
		 $my_b_images = esc_attr($instance['my_b_images']);
		 $my_b_images_ad = esc_attr($instance['my_b_images_ad']);
		 $my_images_up = esc_attr($instance['my_images_up']);
		 $my_images_lr = esc_attr($instance['my_images_lr']);
		 
		  $my_text_up = esc_attr($instance['my_text_up']);
		 $my_text_lr = esc_attr($instance['my_text_lr']);
		 $title = esc_attr($instance['title']);
		 $my_text3 = esc_attr($instance['my_text3']);
			 $my_images_buig = esc_attr($instance['my_images_buig']);
	 $nnmber = esc_attr($instance['nnmber']);
		 $my_text_color= esc_attr($instance['my_text_color']);
	     $my_text_alpha=esc_attr($instance['my_text_alpha']);
	 $w_cat = esc_attr($instance['w_cat']);
	 $zhiding = esc_attr($instance['zhiding']);
	  $titleseo= esc_attr($instance['titleseo']);
			 $titleseo2= esc_attr($instance['titleseo2']);
			 	 $titleseo3= esc_attr($instance['titleseo3']);
	?>
<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>模块属性设置</strong></p>



<p>
<label  for="<?php echo $this->get_field_id('w_cat'); ?>">请选择:</label><br />
             <select id="<?php echo $this->get_field_id('w_cat'); ?>" name="<?php echo $this->get_field_name('w_cat'); ?>" >
              <option value=''>请选择</option>
<?php 
		 $categorys = get_categories();
		$sigk_cat2= $w_cat;
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if ( $sigk_cat2 == $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">这个模块是调用一个分类的文章而形成的一个列表，必须选择上面的分类，并且分类下至少需要有3篇以上的文章才能形成列表滑块</em>
</p>

<p><label for="<?php echo $this->get_field_id('nnmber'); ?>"><?php esc_attr_e('显示数量(默认9):'); ?> <input class="widefat" id="<?php echo $this->get_field_id('nnmber'); ?>" name="<?php echo $this->get_field_name('nnmber'); ?>" type="text" value="<?php echo $nnmber; ?>" /></label></p>
<p style="display:block; width:100%; border-bottom:1px #333333 solid; padding:5px; margin:5px;"><strong>标题设置</strong></p>

 <p>
 <label  for="<?php echo $this->get_field_id('title'); ?>">文字模块-标题:</label>
 <input type="text" size="40" value="<?php echo $title ; ?>" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>"/>
 </p>
<p>
 <label  for="<?php echo $this->get_field_id('my_text3'); ?>">文字模块-副标题:</label> 
<input type="text" size="40" value="<?php echo $my_text3 ; ?>" name="<?php echo $this->get_field_name('my_text3'); ?>" id="<?php echo $this->get_field_id('my_text3'); ?>"/>
</p>

<p>   
    <label  for="<?php echo $this->get_field_id('my_images_buig'); ?>">图片横竖选择：</label><br />
             <select id="<?php echo $this->get_field_id('my_images_buig'); ?>" name="<?php echo $this->get_field_name('my_images_buig'); ?>" >
              <option value=''<?php if ($my_images_buig == "" ) {echo "selected='selected'";}?> >横向（287, 191）</option>
	          <option value='1'<?php if ($my_images_buig == "1" ) {echo "selected='selected'";}?>>竖向（287, 320）</option>
	</select><br />

</p>

<p>   
    <label  for="<?php echo $this->get_field_id('zhiding'); ?>">文章排序:</label><br />
             <select id="<?php echo $this->get_field_id('zhiding'); ?>" name="<?php echo $this->get_field_name('zhiding'); ?>" >
              <option value=''<?php if ($zhiding == "" ) {echo "selected='selected'";}?> >显示最新文章</option>
	          <option value='1'<?php if ($zhiding == "1" ) {echo "selected='selected'";}?>>只显示置顶的文章(至少4篇置顶)</option>
              <option value='2'<?php if ($zhiding == "2" ) {echo "selected='selected'";}?>>显示随机文章</option>
		
	</select>





</p>


<p>
  <label  for="<?php echo $this->get_field_id('my_b_images'); ?>">背景图片:</label><br />
 <input type="text" size="40" value="<?php echo $my_b_images ; ?>" name="<?php echo $this->get_field_name('my_b_images'); ?>" id="<?php echo $this->get_field_id('my_b_images'); ?>"/>
 
 <a id="ashu_upload" class="left_right_upload_button button" href="#">上传</a>
 
 <em style="padding:3px; background:#FCF3E4; border:solid 1px #F0D8BF; display:block;">（尺寸宽度为1920，高度取决于你的的内容，建议上传可以无限重复的背景图片）</em>
 
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

</p>



<p>

    <label  for="<?php echo $this->get_field_id('titleseo3'); ?>">文章标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo3'); ?>" name="<?php echo $this->get_field_name('titleseo3'); ?>" >
              <option value=''<?php if ($titleseo3 == "" ) {echo "selected='selected'";}?> > div标签（默认）</option>
                 <option value='div'<?php if ($titleseo3 == "h2" ) {echo "selected='selected'";}?> >H2标签</option>
                <option value='strong'<?php if ($titleseo3 == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
              
             
             
           
                 
	          
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
		$left_right = apply_filters('widget_title', empty($instance['left_right']) ? __('') : $instance['left_right']);
		$first_mod = apply_filters('widget_title', empty($instance['first_mod']) ? __('') : $instance['first_mod']);
		$my_images  = apply_filters('widget_title', empty($instance['my_images']) ? __('') : $instance['my_images']);
		$my_images_up  = apply_filters('widget_title', empty($instance['my_images_up']) ? __('') : $instance['my_images_up']);
		$my_images_lr  = apply_filters('widget_title', empty($instance['my_images_lr']) ? __('') : $instance['my_images_lr']);	
        $title  = apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$my_text3  = apply_filters('widget_title', empty($instance['my_text3']) ? __('') : $instance['my_text3']);
		$my_text_up  = apply_filters('widget_title', empty($instance['my_text_up']) ? __('') : $instance['my_text_up']);
        $my_b_images  = apply_filters('widget_title', empty($instance['my_b_images']) ? __('') : $instance['my_b_images']);
        $my_b_images_ad  = apply_filters('widget_title', empty($instance['my_b_images_ad']) ? __('') : $instance['my_b_images_ad']);
	    $my_text_color  = apply_filters('widget_title', empty($instance['my_text_color']) ? __('') : $instance['my_text_color']);
        $my_text_alpha  = apply_filters('widget_title', empty($instance['my_text_alpha']) ? __('') : $instance['my_text_alpha']);
	    $w_cat = apply_filters('widget_title', empty($instance['w_cat']) ? __('') : $instance['w_cat']);
			 $my_images_buig = apply_filters('widget_title', empty($instance['my_images_buig']) ? __('') : $instance['my_images_buig']);
			 	    $zhiding  = apply_filters('widget_title', empty($instance['zhiding']) ? __('') : $instance['zhiding']);
					  $titleseo=  apply_filters('widget_title', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
					    $titleseo3=  apply_filters('widget_title', empty($instance['titleseo3']) ? __('0') : $instance['titleseo3']);
		$titleseo2=  apply_filters('widget_title', empty($instance['titleseo2']) ? __('0') : $instance['titleseo2']); 
	if($my_text_color){$my_text_colors='dack_text_mod';};
	if($my_text_alpha){$my_text_alphas='class="alpha'.$my_text_alpha.'"';};
	$nnmber = apply_filters('widget_title', empty($instance['nnmber']) ? __('4') : $instance['nnmber']);
	if( $zhiding =="1" ){ $post__in = get_option('sticky_posts');}
if( $zhiding =="2" ){ $oder="rand";}else{ $oder="ASC";}
	 $args = array( 'cat' => $w_cat , 'showposts' => $nnmber , 'post__in' =>$post__in ,'orderby' => $oder);     $query = new WP_Query( $args );  
	
      $mytheme_detects=get_option('mytheme_detects');
	    if($my_images_buig){$my_images_buigs='case_full';}else{$my_images_buigs='case';}
			$stickys= get_option('mytheme_stickys');
			
			if($my_b_images){
			
			$my_b_imagess='background: center url('.$my_b_images.');';
			$modle_style='style="'.$my_hights.$my_b_imagess.'"';
			
			}
		 $word_t51=get_option('mytheme_word_t51'); 	
		  $word_t55=get_option('mytheme_word_t55'); 	
 ?>


<div id="<?php echo 'caseshows_'.$w_cat; ?>" class="caseshow" <?php echo $modle_style ?>>
    
        
        
         <?php if($my_text3||$title){ ?>
<div class="about_ttile_line">
 <div class="about_title">
    <?php if($titleseo){echo '<'.$titleseo.'  class="mantitle">';}else{echo '<div  class="mantitle">';} ?>
	<?php echo $title ; ?>
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
    
     <?php if($titleseo2){echo '<'.$titleseo2.'  class="sectitle">';}else{echo '<h2  class="sectitle">';} ?>
   <?php echo $my_text3 ; ?>
   <?php if($titleseo2){echo '</'.$titleseo2.'>';}else{echo '</h2>';} ?>
     <div class="about_title_line_in line_left"></div>
      <div class="about_title_line_in line_right"></div>
 </div>

</div>
 <?php } ?>
        
        
       <div class="caseshow_in">

           <ul>
                
                     
                     <?php  while ( $query->have_posts() ) :$query->the_post();  
					 $tit= get_the_title();
		             $id =get_the_ID(); 
	                 $content= get_the_content();
					 $linkss=get_post_meta($id,"hoturl", true); 
		             if($linkss !=""){ $links1=  $linkss;}else{$links1=  get_permalink();}; 
					  $price = get_post_meta($id, 'shop_price', true);
          	        $original_price=get_post_meta($id,"original_price", true);
						
					if(get_post_meta($id ,"links_p", true)){ $contact_btn_url=get_post_meta($id ,"links_p", true);}else{$contact_btn_url=get_option('mytheme_btn_url');}
					
					  ?>     
                     
                            
                              <li>
                    <a href="<?php echo $links1 ; ?>" target="_blank"  class="case_pic">   <?php  if( is_sticky()&&!$stickys){echo '<div id="tuijian_loop" class="tuijian_loop"></div>';} ?>
							<?php  
							themepark_thumbnails($my_images_buigs); ?>
							
							 
                            </a>
                     <div>
                       <?php if($titleseo3){echo '<'.$titleseo3.'  class="posts_title">';}else{echo '<div  class="posts_title">';} ?>
                        <a href="<?php echo $links1 ; ?>"target="_blank"><?php  echo mb_strimwidth(strip_tags(apply_filters('the_title', $tit)),  0,50,"...",'utf-8'); ?></a>
                         <?php if($titleseo3){echo '</'.$titleseo3.'>';}else{echo '</div>';} ?>
                     
                     <?php if($price){ ?>
                      <div class="black_price_out">
                       <b class="black_price">￥<?php echo $price  ?></b>
                       <?php if($original_price){ ?><span class="black_price_yj">￥<?php echo $original_price  ?></span><?php } ?>
                     
                    
                     </div>
                     
                     <?php } ?> <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerp',get_the_excerpt($id))),0,120,"...",'utf-8'); ?></p>
					 
                     <a id="casebtn" target="_blank" href="<?php echo $links1 ; ?>"><?php if($word_t55!=""){echo $word_t55;}else{echo '查看详细说明';}  ?></a>
					<?php if( $contact_btn_url){ ?> <a class="contact_btn"  target="_blank"  href="<?php echo $contact_btn_url; ?>"><?php if($word_t15!=""){echo $word_t15;}else{echo '联系咨询';}  ?></a><?php } ?>
                     
                     
                     
                     </div>
                </li>
                            
                            
                            
                      <?php endwhile; ?>
                     
                    </ul>
                    </div>
               </div> 
              
<script> $(window).scroll(function () {$(".donghuaopen <?php echo '#caseshows_'.$w_cat; ?>").caseshow();}); </script>      
                 
        <?php
 
	}
}
register_widget('case_index');
?>