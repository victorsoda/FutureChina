<?php 

class nav_menu extends WP_Widget {

	function nav_menu()
	{
		$widget_ops = array('classname'=>'nav_menu','description' => get_bloginfo('template_url').'/images/xuanxiang/11.gif');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget($id_base="nav_menu",$name='自定义菜单，发送一个菜单到界面上篇【侧边栏】',$widget_ops,$control_ops);  

	}

	function form($instance) { 
	
	    	
		
		 $id =esc_attr($instance['id']);
		
		  $title = esc_attr($instance['title']);
		   $title2 = esc_attr($instance['title2']);
	
	 $nav_menu = esc_attr($instance['nav_menu']);
	  $titleseo= esc_attr($instance['titleseo']);
			 $titleseo2= esc_attr($instance['titleseo2']);
	?>

<br />




<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_attr_e('标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>

<p><label for="<?php echo $this->get_field_id('title2'); ?>"><?php esc_attr_e('副标题:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title2'); ?>" name="<?php echo $this->get_field_name('title2'); ?>" type="text" value="<?php echo $title2; ?>" /></label></p>


<p>   
<?php 	$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) ); ?>
   <label for="<?php echo $this->get_field_id('nav_menu'); ?>">选择一个产品菜单（支持多层菜单）</label>
			<select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
				<option value="0"><?php _e( '&mdash; Select &mdash;' ) ?></option>
		<?php
			foreach ( $menus as $menu ) {
				echo '<option value="' . $menu->term_id . '"'
					. selected( $nav_menu, $menu->term_id, false )
					. '>'. esc_html( $menu->name ) . '</option>';
			}
		?>
			</select>

</p>

<b>seo标签设置</b><br />
   
    <label  for="<?php echo $this->get_field_id('titleseo'); ?>">模块标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo'); ?>" name="<?php echo $this->get_field_name('titleseo'); ?>" >
              <option value=''<?php if ($titleseo == "" ) {echo "selected='selected'";}?> > div标签</option>
              <option value='h2'<?php if ($titleseo == "h2" ) {echo "selected='selected'";}?> > 	H2标签</option>
              <option value='h3'<?php if ($titleseo == "h3" ) {echo "selected='selected'";}?> > H3标签</option>
               <option value='h4'<?php if ($titleseo == "h4" ) {echo "selected='selected'";}?> > H4标签</option>
                  <option value='h5'<?php if ($titleseo == "h5" ) {echo "selected='selected'";}?> > H5标签</option>
                <option value='strong'<?php if ($titleseo == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
	          
	</select>

</p>

<p>

    <label  for="<?php echo $this->get_field_id('titleseo2'); ?>">模块副标题seo标签</label><br />
             <select id="<?php echo $this->get_field_id('titleseo2'); ?>" name="<?php echo $this->get_field_name('titleseo2'); ?>" >
              <option value=''<?php if ($titleseo2 == "" ) {echo "selected='selected'";}?> > H2标签（默认）</option>
              <option value='h3'<?php if ($titleseo2 == "h3" ) {echo "selected='selected'";}?> > H3标签</option>
                <option value='h4'<?php if ($titleseo2 == "h4" ) {echo "selected='selected'";}?> > H4标签</option>
                  <option value='h5'<?php if ($titleseo2 == "h5" ) {echo "selected='selected'";}?> > H5标签</option>
                <option value='strong'<?php if ($titleseo2 == "strong" ) {echo "selected='selected'";}?> > strong标签</option>
                 <option value='div'<?php if ($titleseo2 == "div" ) {echo "selected='selected'";}?> > div标签</option>
             
             
           
                 
	          
	</select>

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
		$title= apply_filters('widget_title', empty($instance['title']) ? __('') : $instance['title']);
		$title2= apply_filters('widget_title', empty($instance['title2']) ? __('') : $instance['title2']);

		
	$nav_menu = apply_filters('widget_title', empty($instance['nav_menu']) ? __('') : $instance['nav_menu']);
	  $titleseo=  apply_filters('widget_title', empty($instance['titleseo']) ? __('0') : $instance['titleseo']);
				
		$titleseo2=  apply_filters('widget_title', empty($instance['titleseo2']) ? __('0') : $instance['titleseo2']); 
		 
		?>
   <div class="nav_menu_widgetss box">     
  <?php if($title2||$title){ ?>
<div class="about_ttile_line">
 <div class="about_title">
    <?php if($titleseo){echo '<'.$titleseo.'  class="mantitle">';}else{echo '<div  class="mantitle">';} ?>
	<?php echo $title ; ?>
	<?php if($titleseo){echo '</'.$titleseo.'>';}else{echo '</div>';} ?>
    
     <?php if($titleseo2){echo '<'.$titleseo2.'  class="sectitle">';}else{echo '<h2  class="sectitle">';} ?>
   <?php echo $title2 ; ?>
   <?php if($titleseo2){echo '</'.$titleseo2.'>';}else{echo '</h2>';} ?>
     <div class="about_title_line_in line_left"></div>
      <div class="about_title_line_in line_right"></div>
 </div>

</div>
 <?php } ?>

 
   <?php  ob_start(); wp_nav_menu(array( 'walker' => new header_menu(),'container' => false,'menu' => $nav_menu ,'items_wrap' => '<ul id="menu_widgetss" class="menu_widgetss">%3$s</ul>' ) ); ?>
</div>

 
        <?php
	}
}
register_widget('nav_menu');
?>