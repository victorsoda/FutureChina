<?php 
$new_meta_boxes_shop2 =
array(

    "shop_open" => array(
        "name" => "shop_open",
        "std" => "",
        "title" => "启用商品功能"),
		
    "shop_price" => array(
        "name" => "shop_price",
        "std" => "",
        "title" => "价格"),
		
    "original_price" => array(
        "name" => "original_price",
        "std" => "",
        "title" => "原价"),
		

		
);
function new_meta_boxes_shop2() {
    global $post, $new_meta_boxes_shop2;
  
        $meta_box_value  = get_post_meta($post->ID,"shop_open", true);
	    $meta_box_value2 = get_post_meta($post->ID,"shop_price", true);
		$meta_box_value3 = get_post_meta($post->ID,"original_price", true);
		$meta_box_value4 = get_post_meta($post->ID,"postage", true);
		$meta_box_value5 = get_post_meta($post->ID,"shop_way", true);
		
		$meta_box_value6 = get_post_meta($post->ID,"shop_download_pay", true);
		$meta_box_value7 = get_post_meta($post->ID,"shop_download", true);
		$meta_box_value8 = get_post_meta($post->ID,"shop_info", true);
		
		$meta_box_value9 = get_post_meta($post->ID,"time_piker_1", true);
		
		$meta_box_value0 = get_post_meta($post->ID,"time_piker_2", true);
  
        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];
			
			
			
	 echo' <div style=" width:width:100%;padding:10px 0; display:block;overflow: hidden;">
	 
	 <input type="hidden" name="shop_open_noncename" id="shop_open_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />

<input type="hidden" name="shop_price_noncename" id="shop_price_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
<input type="hidden" name="original_price_noncename" id="original_price_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
<input type="hidden" name="shop_way_noncename" id="shop_way_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
 <input type="hidden" name="postage_noncename" id="postage_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
  <input type="hidden" name="shop_download_pay_noncename" id="shop_download_pay_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
   <input type="hidden" name="shop_download_noncename" id="shop_download_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
    <input type="hidden" name="shop_info_noncename" id="shop_info_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
	
	    <input type="hidden" name="time_piker_1_noncename" id="time_piker_1_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
		    <input type="hidden" name="time_piker_2_noncename" id="time_piker_2_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />
 '  	
      
		?>
        
       <p><strong>【提示】：</strong>这个选项是你在没有安装购物盒子的情况下，给与你填写商品价格的选项，你可以通过插件“超级留言板”进行线下的交易活动</p>
          <label>购物盒子残留选项：</label>
   	 <input   type="checkbox" style="border:1px #ccc solid" name="shop_open" id="shop_open" <?php if($meta_box_value=='yes'){echo 'checked="checked"';} ?> value="yes" />
       <em>【若这个选项是打钩的，请取消打钩，否则会出现一些函数缺失（购物盒子没有安装，某些函数是缺失的）】</em>
   
  
     
      <div style=" width:100%;padding:10px 0; display:block;overflow: hidden;">
        <label>商品价格：</label>
        <input type="text" style="border:1px #ccc solid" name="shop_price" id="shop_price"  value="<?php echo  $meta_box_value2 ; ?>" />
        <em>【如果你填写了下面的商品原价，那么这个价格将会是折扣后的价格】</em>
     
     
     </div>
     
        <div style=" width:100%;padding:10px 0; display:block;overflow: hidden;">
         <label>商品原价：</label>
        <input type="text" style="border:1px #ccc solid" name="original_price" id="original_price"  value="<?php echo  $meta_box_value3 ; ?>" />
        <em>【商品原价必须大于商品价格，填写这个选项之后，商品启用折扣模式】</em>
     </div>
     
     
      </div>
   
     
     
 <?php $postage_p1   = get_option('postage_p1');
$postage_p_n1  = get_option('postage_p_n1');
$postage_p2   = get_option('postage_p2');
$postage_p_n2  = get_option('postage_p_n2');
$postage_shunfeng   = get_option('postage_shunfeng');
$postage_yuantong   = get_option('postage_yuantong');
$postage_yunda   = get_option('postage_yunda');
$postage_zhongtong   = get_option('postage_zhongtong');
$postage_debangwuliu  = get_option('postage_debangwuliu');
$postage_ems  = get_option('postage_ems');
	 ?>    

 
   
   
   

      <?php 
	    
    }

function create_meta_box_shop2() {
    global $theme_name;
  
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes-shop', '商品化文章选项(非购物盒子)', 'new_meta_boxes_shop2', 'post', 'normal', 'high' );
    }
}

function save_postdata_shop2( $post_id ) {
    global $post, $new_meta_boxes_shop2;
  
    foreach($new_meta_boxes_shop2 as $meta_box) {
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
add_action('admin_menu', 'create_meta_box_shop2');
add_action('save_post', 'save_postdata_shop2');


?>
