<?php 
if(get_option('mytheme_cache_open')=="cache_open"){
//给 wp_nav_menu 加上对象缓存，加快效率
add_filter( 'pre_wp_nav_menu', 'wpjam_get_nav_menu_cache', 10, 2 );
function wpjam_get_nav_menu_cache( $nav_menu, $args ) {
    $cache_key      = wpjam_get_nav_menu_cache_key($args);
    $cached_menu    = get_transient( $cache_key );
    if ( ! empty( $cached_menu ) )
        return $cached_menu;

    return $nav_menu;
}

add_filter( 'wp_nav_menu', 'wpjam_set_nav_menu_cache', 10, 2 );
function wpjam_set_nav_menu_cache( $nav_menu, $args ) {
    $cache_key      = wpjam_get_nav_menu_cache_key($args);
    set_transient( $cache_key, $nav_menu, 86400 );
    
    return $nav_menu;
}

function wpjam_get_nav_menu_cache_key($args){
    $timestamp = get_transient('nav-menu-cache-timestamp');
    if($time === false){
        $timestamp = time();
        set_transient( 'nav-menu-cache-timestamp', $time, 86400 );
    }
    return apply_filters( 'nav_menu_cache_key' , 'nav-menu-' . md5( serialize( $args ).serialize(get_queried_object()) ) . $timestamp );
}

// 更新菜单，清理缓存
add_action( 'wp_update_nav_menu', 'wpjam_delete_nav_menu_cache' );
function wpjam_delete_nav_menu_cache( $menu_id, $menu_data){
    set_transient( 'nav-menu-cache-timestamp', time(), 86400 );
}
 }
 

function magichorizon_memcache_sidebar($memcache_sidebar_id){

			dynamic_sidebar($memcache_sidebar_id);
			
		
 }
	  
 ?>