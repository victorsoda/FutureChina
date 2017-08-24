<?php 
$seo_box =
array(

   

	"title" => array(
        "name" => "title",
        "std" => "",
        "title" => "文章标题"),
		
		
	"关键字" => array(
        "name" => "关键字",
        "std" => "",
        "title" => "关键字"),
		
			
	"描述" => array(
        "name" => "描述",
        "std" => "",
        "title" => "描述"),
		
		


);
function new_seo_box() {
    global $post, $seo_box;
  
       
	      $meta_box_value = get_post_meta($post->ID,"title", true);
		   $meta_box_value2 = get_post_meta($post->ID,"关键字", true);
		   $meta_box_value3 = get_post_meta($post->ID,"描述", true);
	
        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];
			

	  echo '<input type="hidden" name="title_noncename" id="title_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
	  echo '<input type="hidden" name="关键字_noncename" id="关键字_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
	  	  echo '<input type="hidden" name="描述_noncename" id="描述_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
	
	      	
	  ?>
  <label for="page_fix_bag"><strong>文章标题替换：</strong>
        <input  style="border:1px #ccc solid; width:99%;"  name="title" id="title" value="<?php echo $meta_box_value; ?>" />
  </label><br />

  
    <label for="page_fix_bag"><strong>关键词替换（不填写自动调用文章标签）：</strong>
        <input  style="border:1px #ccc solid; width:99%;"  name="关键字" id="关键字" value="<?php echo $meta_box_value2; ?>" />
  </label><em>以英文输入法的逗号分隔，一般不超过100个字</em><br /><br />

  
  <label for="page_fix_bag"><strong>描述替换（不填写自动调用文章第一段前200字）：</strong>
       <textarea style="width:98%;" name="描述" cols="86" rows="3" id="描述"><?php echo $meta_box_value3 ; ?></textarea>   
  </label>
    <em>一般不超过200个字</em>
      <?php   
  
 }

function create_meta_box_seo() {
    global $theme_name;
  
    if ( function_exists('add_meta_box') ) {
      
		 add_meta_box( 'new_seo_box', 'seo选项', 'new_seo_box', 'page', 'side', 'high' );
		  add_meta_box( 'new_seo_box', 'seo选项', 'new_seo_box', 'post', 'side', 'high' );
		
    }
}

function save_postdata_seo( $post_id ) {
    global $post, $seo_box;
  
    foreach($seo_box as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
  
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
  
        $data = $_POST[$meta_box['name']];
  
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box_seo');
add_action('save_post', 'save_postdata_seo');

?>
