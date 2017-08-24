<?php
if (function_exists('register_sidebar')) {
   	register_sidebar(array(
    		'name' => '【pc】首页动画排版区',
    		'id'   => 'sidebar-widgets',
    		'description'   => '默认首页的动画模块，主要进行大图区域的动画模块编辑，只能放入动画排版区模块',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
		
		register_sidebar(array(
    		'name' => '【PC】首页内容排版区',
    		'id'   => 'index_content',
    		'description'   => '默认首页的内容排版模块，只能放入内容排版区模块',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
		
		
		
	
	
		register_sidebar(array(
    		'name' => '默认侧边栏',
    		'id'   => 'sidebar-widgets4',
    		'description'   => '默认两栏内页的侧边栏',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
		
	
    }
function unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Pages');
	unregister_widget('WP_Widget_Calendar');
	unregister_widget('WP_Widget_Archives');
	unregister_widget('WP_Widget_Links');
	unregister_widget('WP_Widget_Meta');
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Categories');
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
	unregister_widget('WP_Widget_RSS');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Text'); 
	unregister_widget('WP_Nav_Menu_Widget'); 
	
}
include_once("widget/left_right.php"); 

include_once("widget/case.php");
include_once("widget/news.php");
include_once("widget/html.php");
include_once("widget/fourq.php");
include_once("widget/nav_menu.php");
add_action('widgets_init', 'unregister_default_wp_widgets', 1);
register_nav_menus(
array(

'move-menu' => __( '移动版菜单（需要在自定义选择独立定制）' ),
)
);



class header_menu extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = ' ';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		
		if($item->url!='#' ){$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes.'>';
		$item_output .= $args->link_before . $args->link_after;
		 if(! empty( $item->description )){$item_output .= '<img src=' .'"' . $item->description .'"'.'alt="'.  apply_filters( 'the_title', $item->title, $item->ID ) . '"/>';}
		if($item->attr_title !="1"){
		 $item_output .=  '<span><div>'. apply_filters( 'the_title', $item->title, $item->ID ).'</div>';
		 if(! empty( $item->attr_title )){  $item_output .=  '<p>'.  esc_attr( $item->attr_title ).'</p></span>';}}
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


 function wptuts_add_color_picker( $hook ) {
        if( is_admin() ) { 
		    wp_enqueue_media();
            wp_enqueue_style( 'wp-color-picker' ); 
            wp_enqueue_script( 'custom-script-handle', get_template_directory_uri().'/js/custom-script.js', array( 'wp-color-picker' ), false, true ); 
			

        }

    }
add_action( 'admin_enqueue_scripts', 'wptuts_add_color_picker' );
add_action( 'category_edit_form_fields', 'wptuts_add_color_picker' );
add_action('edited_category','wptuts_add_color_picker');  

 function menu_image_edit_nav_menu_walker_filter() {
			wp_enqueue_media();
			wp_enqueue_script( 'menu-image-admin', get_template_directory_uri() ."/js/widget_upload.js" );
	}

function first_img_as_thumbnail() {
$current_tag = single_tag_title('', false);
$tags = get_tags();
foreach($tags as $tag) {
if($tag->name == $current_tag) return $tag->term_id; 
}
}
function firstimgasthumbnail() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches[1][0];
if(empty($first_img)){ 
$first_img = get_bloginfo('template_url').'/images/demo/vedio.gif';
}
$attachment_id = get_attachment_id_from_src(  $first_img );
return $attachment_id ;

} 
?>
