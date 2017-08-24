<?php

include_once("seo_box.php");
function DeleteHtml($str) 
{ 
$str = trim($str); //清除字符串两边的空格
$str = preg_replace("/\t/","",$str); //使用正则表达式替换内容，如：空格，换行，并将替换为空。
$str = preg_replace("/\r\n/","",$str); 
$str = preg_replace("/\r/","",$str); 
$str = preg_replace("/\n/","",$str); 
$str = preg_replace("/ /","",$str);
return trim($str); //返回字符串
}

register_nav_menus(
array(
'header-menu' => __( '菜单导航' ),
'tag-menu2' => __( '多重筛选菜单' ),
'footer-menu' => __( '底部菜单' ),
'link-menu2' => __( '友情链接' ),
)
);

if ( function_exists( 'add_theme_support' ) ) {add_theme_support( 'post-thumbnails' );}
if ( function_exists( 'add_image_size' ) ) {
   

	add_image_size( 'case', 287, 191,true );
	add_image_size( 'fang', 287, 287,true );
	add_image_size( 'fang_s', 50, 50,true );
	add_image_size( 'news', 400, 266,true );
    add_image_size( 'case_full', 287, 320,true );
	add_image_size( 'first_li', 402, 273,true );
	
	add_image_size( 'gallery_lightbox', 150, 150,true ); 
	add_image_size( 'product-thumb', 624, 400,true );
	
	
	add_image_size( 'gallery-other-thumbb', 610,400); 
    add_image_size( 'gallery-full-thumbb', 930,500,true );
	

}
 function themepark_thumbnails($thumbnail_size){
	  $id =get_the_ID(); 
	  if(get_option('mytheme_'.$thumbnail_size.'_thumbnails')){$case_thumbnails=get_option('mytheme_'.$thumbnail_size.'_thumbnails');}else{$case_thumbnails= get_bloginfo('template_url').'/thumbnails/'.$thumbnail_size.'.jpg';} 
		 
		  $tit= get_the_title();

		 if (has_post_thumbnail()) { the_post_thumbnail($thumbnail_size ,array('alt'=>$tit, 'title'=> $tit ));}else{
			 echo '<img alt="'.$tit.'" title="'.$tit.'" src="'.$case_thumbnails.'" />';
			 }
	  
	 
	 }

function add_category_seo_format(){  
  
		
   wp_enqueue_media();
 $categorys = get_categories(array('hide_empty' => 0));	
		
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		 $catce=get_option('catce_'.$category_id);
		 if($catce==='modle1'){
		 $options_cat.=' <option value="catce_'.$category_id.'">'.$category_name.'_侧边栏</option>';}
		 }
		 $pages = get_pages();
		foreach( $pages AS $page ) { 
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		  if(get_post_meta($page_id, "cebian",true)==='modle1'){ 
		  
		   $options_page.=' <option value="cebian_'.$page_id.'">'.$page_name.'_侧边栏</option>';
		  }
		  
		  } 
		  
		  
		  
   echo '
   <h3>侧边栏选择</h3>
   <div class="form-field">  
            <select name="catce" id="catce">
	        
			 <option value="">默认的侧边栏目</option>
			 <option value="modle1">创建一个新的侧边栏</option>
			 '.$options_cat. $options_page.'
			 </select>
          </div>   
		  
		  <h3>多重筛选菜单选择</h3>
   <div class="form-field">  
            <select name="navm" id="navm">
	        
			 <option value="">默认菜单</option>
			 <option value="noshow">不显示</option>
			
			 </select>
			 <p>可单独选择某个分类不显示多重筛选</p>
          </div>    
   
   
	<h3>分类目录顶部广告条（不设置即不会显示）</h3>
	
	<div class="form-field">  
            <label for="images">广告图片</label>  
            <input name="images" id="images" type="text" value="" size="40">  
			 <a  class="upload_button button" href="#">上传</a>
            <p>上传图片（选择一栏模板时，上传1280像素的图片，两栏模板是上传816像素的图片，高度不限）</p>  
          </div>   
		  
		  <div class="form-field">  
            <label for="images_m">广告图片(手机)</label>  
            <input name="images_m" id="images_m" type="text" value="" size="40">  
			 <a  class="upload_button button" href="#">上传</a>
            <p>上传图片（最大宽度500像素）</p>  
          </div>   
		  
<div class="form-field">  
            <label for="images_url">图片链接</label>  
            <input name="images_url" id="images_url" type="text" value="" size="40">  
            <p>填写你要链接的位置，不填写即不链接</p>  
          </div>   
 		  
	
	<h3>分类目录SEO选项(pc端)</h3>
	<div class="form-field">  
            <label for="cat_title">标题替换</label>  
            <input name="cat_title" id="cat_title" type="text" value="" size="40">  
            <p>填写这个选项，将会替换默认调用的标题</p>  
          </div>     
         <div class="form-field">  
            <label for="cat_keword">关键词</label>  
            <input name="cat_keword" id="cat_keword" type="text" value="" size="40">  
            <p>使用英文输入法的逗号分隔，一般不超过80个字符</p>  
          </div>
		   <div class="form-field">  
            <label for="cat_description">描述</label>   
			<textarea id="cat_description" cols="40" rows="5" name="cat_description"></textarea>
            <p>一般不超过200个字符</p>  
          </div>
		  
		  <h3>分类目录SEO选项(移动端)</h3>
		  <p>移动端搜索引擎收录和pc有所不同，一般来说会较pc端短，你可以在这里重设移动端的seo选项，这样移动端的搜索更加兼容</p>  
		  <div class="form-field">  
            <label for="cat_title_p">标题替换</label>  
            <input name="cat_title_p" id="cat_title_p" type="text" value="" size="40">  
            <p>填写这个选项，将会替换默认调用的标题</p>  
          </div>     
         <div class="form-field">  
            <label for="cat_keword_p">关键词</label>  
            <input name="cat_keword_p" id="cat_keword_p" type="text" value="" size="40">  
            <p>使用英文输入法的逗号分隔，一般不超过80个字符</p>  
          </div>
		   <div class="form-field">  
            <label for="cat_description_p">描述</label>   
			<textarea id="cat_description_p" cols="40" rows="5" name="cat_description_p"></textarea>
            <p>一般不超过200个字符</p>  
          </div>
		  
		  ';            
            
}  
add_action('category_add_form_fields','add_category_seo_format',10,2);  
  
  
function edit_category_seo_format($tag){  
      wp_enqueue_media();
	
		if(get_option('images_'.$tag->term_id)){$img='<img src="'.get_option('images_'.$tag->term_id).'" />';}
			if(get_option('images_m_'.$tag->term_id)){$img_m='<img src="'.get_option('images_m_'.$tag->term_id).'" />';}
   $categorys = get_categories(array('hide_empty' => 0));	
		 $catces=get_option('catce_'.$tag->term_id);
		
		foreach( $categorys AS $category ) { 
		 $catces=get_option('catce_'.$tag->term_id);
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		 $catce=get_option('catce_'.$category_id);
		 if($catce==='modle1'){
			 if($catces=='catce_'.$category_id){$selected="selected='selected'";}else{$selected='';}
		 $options_cat .=' <option value="catce_'.$category_id.'"'.$selected.'>'.$category_name.'_侧边栏</option>';}
		 }
		 
		$pages = get_pages();
		foreach( $pages AS $page ) { 
		 $catces=get_option('catce_'.$tag->term_id);
		 $page_id=$page->ID;
		  $page_name=$page->post_title;
		  if(get_post_meta($page_id, "cebian",true)==='modle1'){ 
	              if($catces=='cebian_'.$page_id){$selected="selected='selected'";}else{$selected='';}
		   $options_page .=' <option value="cebian_'.$page_id.'"'.$selected.'>'.$page_name.'_侧边栏</option>';
		   
		  }
		  
		  } 
		  
		 
		
		 if( $nav_menu=='noshow'){$menus_selecteds="selected='selected'";}elseif($nav_menu==''){$menus_selectedss="selected='selected'";}
		 
		 if($catces==='modle1'){$selecteds="selected='selected'" ;$yesgo='(已经创建,选择其他将会删除)';}else if(!$catces){$selectedss="selected='selected'" ;}
		 
		  $eite_url= get_bloginfo('url').'/wp-admin/customize.php?url='.get_category_link($_GET['tag_ID']);
    echo '
	
	
	<tr class="form-field">  
          <th scope="row"><label for="images">侧边栏选择'.$catces.'</label></th>  
            <td> 
		 <select name="catce" id="catce">
	        <option value=""'.$selectedss.'>默认的侧边栏目</option>
			
			 <option value="modle1"'.$selecteds.'>创建一个新的侧边栏'.$yesgo.'</option>
			 '.$options_cat.$options_page.'
			 </select>
			 <br />
  <a class="button" target="_blank" href="'.$eite_url.'">编辑当前选择的侧边栏</a>
            </td>  
        </tr>   
	
	
	
	
		
	<tr class="form-field">  
          <th scope="row"><label for="navm">多重筛选菜单选择</label></th>  
            <td> 
		 <select name="navm" id="navm">
	        <option value=""'.$menus_selectedss.'>默认的菜单</option>
			
			 <option value="noshow"'.$menus_selecteds.'>不显示多重筛选</option>
		
			 </select>
			 <br />
  <p>可单独选择某个分类不显示多重筛选</p>
            </td>  
        </tr>  
	
	
	
	
	<tr class="form-field">  
            <th scope="row"><label for="images">广告图片</label></th>  
			
            <td> 
			'.$img.' 
                <input style="width:50%" name="images" id="images" type="text" value="'.get_option('images_'.$tag->term_id).'" size="20" />
              <a  class="upload_button button" href="#">上传</a>
            <p>上传图片（选择一栏模板时，上传1280像素的图片，两栏模板是上传816像素的图片，高度不限）</p> 
            </td>  
        </tr>   
		
		
		<tr class="form-field">  
            <th scope="row"><label for="images_m">广告图片(手机)</label></th>  
			
            <td> 
			'.$img_m.' 
                <input style="width:50%" name="images_m" id="images_m" type="text" value="'.get_option('images_m_'.$tag->term_id).'" size="20" />
              <a  class="upload_button button" href="#">上传</a>
            <p>上传图片（最大宽度500像素）</p> 
            </td>  
        </tr>   
		
		<tr class="form-field">  
            <th scope="row"><label for="images_url">广告图片链接</label></th>  
            <td>  
                <input name="images_url" id="images_url" type="text" value="'.get_option('images_url_'.$tag->term_id).'" size="40"/><br>  
            
            <p>填写你要链接的位置，不填写即不链接</p>  
            </td>  
        </tr>    
	
	
	<tr class="form-field">  
            <th scope="row"><label for="cat_title">标题替换</label></th>  
            <td>  
                <input name="cat_title" id="cat_title" type="text" value="'.get_option('cat_title_'.$tag->term_id).'" size="40"/><br>  
              
            </td>  
        </tr>    
    <tr class="form-field">  
            <th scope="row"><label for="cat_keword">关键词</label></th>  
            <td>  
                <input name="cat_keword" id="cat_keword" type="text" value="'.get_option('cat_keword_'.$tag->term_id).'" size="40"/><br>  
               
            </td>  
        </tr>
		  <tr class="form-field">  
            <th scope="row"><label for="cat_description">描述</label></th>  
            <td>  
                
                 
              <textarea id="cat_description" cols="40" rows="5" name="cat_description"> '.get_option('cat_description_'.$tag->term_id).'</textarea>
            </td>  
        </tr>
		
		<tr class="form-field">  
            <th scope="row"><label for="cat_title_p">标题替换（移动版）</label></th>  
            <td>  
                <input name="cat_title_p" id="cat_title_p" type="text" value="'. get_option('cat_title_p_'.$tag->term_id).'" size="40"/><br>  
               
            </td>  
        </tr>  
          
    <tr class="form-field">  
            <th scope="row"><label for="cat_keword_p">关键词（移动版）</label></th>  
            <td>  
                <input name="cat_keword_p" id="cat_keword_p" type="text" value="'.get_option('cat_keword_p_'.$tag->term_id).'" size="40"/><br>  
               
            </td>  
        </tr>
		  <tr class="form-field">  
            <th scope="row"><label for="cat_description_p">描述（移动版）</label></th>  
            <td>  
                 <textarea id="cat_description_p" cols="40" rows="5" name="cat_description_p"> '.get_option('cat_description_p_'.$tag->term_id).'</textarea>
                
            </td>  
        </tr>
		';     
          
          
}  
add_action('category_edit_form_fields','edit_category_seo_format',10,2);  
  
  
function taxonomy_metadate_seo_format($term_id){  
    if(isset($_POST['cat_title']) || isset($_POST['cat_keword'])|| isset($_POST['cat_description'])||isset($_POST['cat_title_p']) || isset($_POST['cat_keword_p'])|| isset($_POST['cat_description_p'])|| isset($_POST['navm'])){  
      
        if(!current_user_can('manage_categories')){  
            return $term_id;  
        }
		
		$catce ='catce_'.$term_id;
		$catce_value =$_POST['catce']; 
		$nav_menu ='navm_'.$term_id;
		$nav_menu_value =$_POST['navm']; 
		
		
		$images ='images_'.$term_id;
		$images_m ='images_m_'.$term_id;
		$images_value =$_POST['images'];
		$images_m_value =$_POST['images_m'];
        $images_url ='images_url_'.$term_id; 
		$images_url_value =$_POST['images_url'];
        $cat_title = 'cat_title_'.$term_id; 
        $title_value = $_POST['cat_title'];
        $cat_keword = 'cat_keword_'.$term_id;  
        $keword_value = $_POST['cat_keword'];   
        $cat_description = 'cat_description_'.$term_id;  
        $description_value = $_POST['cat_description'];  
		
		$cat_title_p = 'cat_title_p_'.$term_id; 
        $title_value_p = $_POST['cat_title_p'];
        $cat_keword_p = 'cat_keword_p_'.$term_id;  
        $keword_value_p = $_POST['cat_keword_p'];   
        $cat_description_p = 'cat_description_p_'.$term_id;  
        $description_value_p = $_POST['cat_description_p'];         
      
	   update_option( $nav_menu, $nav_menu_value );  
	  update_option( $catce, $catce_value );  
	    update_option( $images, $images_value );   
		    update_option( $images_m, $images_m_value);  
		  update_option( $images_url, $images_url_value );  
        update_option( $cat_title, $title_value );   
        update_option( $cat_keword, $keword_value );  
		 update_option( $cat_description, $description_value );  
		  update_option( $cat_title_p, $title_value_p );   
        update_option( $cat_keword_p, $keword_value_p );  
		 update_option( $cat_description_p, $description_value_p );  
    }  
}  
  
add_action('created_category','taxonomy_metadate_seo_format',10,1);  
add_action('edited_category','taxonomy_metadate_seo_format',10,1);  
function theme_keyworeds(){
	global $wp_query;
	 $id =get_the_ID(); 
	
   $term_id = get_query_var('cat'); 
   $cat_keword=get_option('cat_keword_'.$term_id);
   $cat_keword_p=get_option('cat_keword_p_'.$term_id);
    if(is_front_page() || is_home()) { 
	
		  $theme_keword= get_option('mytheme_keywords');
		
		 }
		 
	  elseif( is_page()||is_single()) {
			
			 if(get_post_meta($id, "关键字",true)){  $theme_keword= get_post_meta($id, "关键字",true);}elseif($theme_kewordss){$theme_keword=$theme_kewordss;}else{  $theme_keword= get_option('mytheme_keywords');}
				 
	} 	
	elseif(is_category()){
		
			 if($cat_keword){  $theme_keword= $cat_keword;}else{  $theme_keword= get_option('mytheme_keywords');}
				 	
	} else{$theme_keword= get_option('mytheme_keywords');} 
	echo $theme_keword;
	}
	
function theme_description(){
   global $wp_query;
    $id =get_the_ID(); 
  
   $term_id = get_query_var('cat');
   $cat_description=get_option('cat_description_'.$term_id);
   $cat_description_p=get_option('cat_description_p_'.$term_id);
      if(is_front_page() || is_home()) { 
$theme_description= get_option('mytheme_description');}
		
		 
		 
	  elseif( is_page()||is_single()) {
		  
		 $excerps=mb_strimwidth(strip_tags(apply_filters('the_excerp', get_post($id)->post_content)),0,200,"。",'utf-8');
	
	  $excerpk=DeleteHtml($excerps) ;
	  $excerp= preg_replace('/\[.*?\]/', '', $excerpk);
	
			
			 if(get_post_meta($id, "描述",true)){  $theme_description= get_post_meta($id, "描述",true);}elseif($excerp){$theme_description=$excerp;}else{  $theme_description= get_option('mytheme_description');}
				 
	} 	
	elseif(is_category()){
	
			 if($cat_description){  $theme_description= $cat_description;}else{  $theme_description= get_option('mytheme_description');}
				 	
	} else{$theme_description= get_option('mytheme_description');} 
	echo $theme_description;
}	

if(!is_user_logged_in()){
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    { 

   wp_deregister_style( 'amethyst-dashicons-style' ); 
   wp_deregister_style( 'dashicons' ); 
 wp_deregister_script('thickbox');}



if ( !function_exists( 'disable_embeds_init' ) ) :
function disable_embeds_init(){
global $wp;
$wp->public_query_vars = array_diff($wp->public_query_vars, array('embed'));
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('embed_oembed_discover', '__return_false');
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin');

}
add_action('init', 'disable_embeds_init', 9999);

endif;
}

function qhbtn_themepark(){
$id =get_the_ID(); 
$qhbtn=get_post_meta($id,"qhbtn", true); 
 
	  if($qhbtn){$qhbtns=$qhbtn;}else{$qhbtns=get_option('mytheme_qhbtn');}
	  
	   $qhbtn_themepark= preg_split("/[\s,]+/",$qhbtns); 
	  $qhbtn_themeparks.='
	  <div id="qhbtn_themepark_top"></div>
	  <div class="qhbtn_themepark_out">
	  <div class="qhbtn_themepark">';
	  
			 $ii=0;
			 for($i=$ii;$i<count($qhbtn_themepark);$i++) {
				 if($i=="0"){$nows='nows';}else{$nows='';}
				 $qhbtn_themeparks.='<a class="qh_btns_'.$i.' '.$nows.'" rel=".qh_themepark_'.$i.'">'.$qhbtn_themepark[$i].'</a>';
				 
			 } 
			
			 
			 $qhbtn_themeparks.='</div></div>';	
	  
	  
	  
return  $qhbtn_themeparks;
  };
add_shortcode('qhbtn', 'qhbtn_themepark');
?>