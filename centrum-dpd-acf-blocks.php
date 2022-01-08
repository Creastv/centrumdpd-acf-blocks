<?php
/*
* Plugin Name: Centrum DPD ACF Blocks
* Description: Gutenberg custom blocks using ACF plugin.
* Plugin URI: https://creastv.pl/
* Version: 1.0
* Author: ITHolding
* Author URI: https://creastv.pl/
* License: GPLv2 or later
* Text Domain: inb
*/


function inb_admin_style() {
  wp_enqueue_style('acf-admin-styles', plugin_dir_url( __FILE__ ) . 'css/acf-admin.css');
}
add_action('admin_head', 'inb_admin_style');

function inb_custome_blocks_cat( $block_categories, $editor_context ) {
    if ( ! empty( $editor_context->post ) ) {
        array_push(
            $block_categories,
            array(
                'slug'  => 'inb-category',
                'title' => __( 'Centrum DPD - Custome blocks ', 'inb' ),
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="37.989" height="37.988" viewBox="0 0 37.989 37.988"><path id="Shape_5_copy_4" data-name="Shape 5 copy 4" d="M107.977,422.9h12.049V396.96h25.94V384.911H107.977" transform="translate(-107.977 -384.911)" fill="#00aa13"/></svg>',
            )
        );
    }
    return $block_categories;
}

require_once plugin_dir_path( __FILE__ ) . '/acf-register-block.php';

define( 'MY_PLUGIN_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
add_filter('acf/settings/save_json', 'inb_acf_json_save_point');
 
function inb_acf_json_save_point( $path ) {
    // Update path
    $path = MY_PLUGIN_DIR_PATH. '/acf-json';
    // Return path
    return $path;
}
 
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
   // Remove original path
   unset( $paths[0] );// Append our new path
   $paths[] = MY_PLUGIN_DIR_PATH. '/acf-json';   return $paths;
}


/**
 * This function adds the "async" and "defer" parameters to Javascript resources.
 */
function inb_add_async_defer_attributes( $tag, $handle ) {
	if( strpos( $handle, "async" ) ):
		$tag = str_replace(' src', ' async="async" src', $tag);
	endif;

	if( strpos( $handle, "defer" ) ):
		$tag = str_replace(' src', ' defer="defer" src', $tag);
	endif;

	return $tag;
}
add_filter('script_loader_tag', 'inb_add_async_defer_attributes', 10, 2);