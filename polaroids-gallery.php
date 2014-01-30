<?php
/**
 * Scattered Polaroids WordPress Gallery
 *
 * A flat-style Polaroid gallery where the items are scattered randomly in a container.
 * When a specific item is selected,it will move to the middle while the other Polaroids will
 * make space for it by moving to the sides. Optionally, an item can have a backface
 * which will be shown by flipping the Polaroid when clicking on the current navigation dot again.
 *
 * @package   Polaroids_Gallery
 * @author    tarex <tareqcse08@gmail.com>
 * @license   GPL-2.0+
 * @link      http://tarex.github.io
 * @copyright 2014 tarex.github.io
 *
 * @wordpress-plugin
 * Plugin Name:       Scattered Polaroids WordPress Gallery
 * Plugin URI:        http://tarex.github.io
 * Description:       working on it .
 * Version:           0.0.1
 * Author:            tarex
 * Author URI:        http://tarex.github.io
 * Text Domain:       polaroids gallery
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/tarex/<repo>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}




define('PLUG', plugin_dir_path( __FILE__ ) );



require_once( plugin_dir_path( __FILE__ ) . 'public/class-polaroids-gallery.php' );





require_once( PLUG . '/includes/Cuztom/cuztom.php' );

$slider  = new Cuztom_Post_Type( 'slider', array(
    "label" => 'Portfiols',
    "menu_position" => 82,
   // "menu_icon" => get_stylesheet_directory_uri() . "/assets/img/icon-clip.png",
    'has_archive' => true,
    'supports' => array( 'thumbnail', )
) );

$slider->add_taxonomy( 'group');









/*

function group_column_header($columns)  
{  


	unset($columns['description']);
	unset($columns['slug']);

    $columns['shortcode'] = __('Shortcode', 'my_plugin');  

    return $columns;  
}  
add_filter('manage_edit-group_columns', 'group_column_header', 10, 1);

function group_column_value($empty = '', $custom_column, $term_id)   
{  

   $term = get_term( $term_id ,'group'  );
	switch ($custom_column) {
		case 'shortcode':
				echo '[slider -'.$term_id.' ]';
			break;

	}
}  
add_filter('manage_group_custom_column', 'group_column_value', 10, 3);

*/





// function group_column_value($column)   
// {  	
// 	// global $post;
// 	// print_r($post);

//     switch ( $column ) {

//         case 'shortcode' :
//           //  $terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
//  			//_e( 'Unable to get author(s)', 'your_text_domain' );
//         		echo 'awesome';
//             break;



//     }


//    // return esc_html(get_term_meta($term_id, $custom_column, true));       
// }  
// add_action( 'manage_group_posts_custom_column' , 'group_column_value', 10, 2 );







// function slider_column_header($columns)  
// {  
// 	unset($columns['date']);
// 	$columns['title'] = __('Title', 'my_plugin');  
//     //$columns['preview'] = __('Preview', 'my_plugin');  
//     $columns['date'] = __('Date', 'my_plugin');  
//    // $columns['end-date'] = __('End Date', 'my_plugin');  
//     return $columns;  
// }  
// add_filter('manage_edit-slider_columns', 'slider_column_header', 10, 1);


// function slider_column_value($column,$post_id)   
// {  	
// 	// global $post;
// 	// print_r($post);

//     switch ( $column ) {

//         case 'preview' :
//           //  $terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
//  			_e( 'Unable to get author(s)', 'your_text_domain' );
//             break;



//     }


//    // return esc_html(get_term_meta($term_id, $custom_column, true));       
// }  
// add_action( 'manage_slider_posts_custom_column' , 'slider_column_value', 10, 2 );






register_activation_hook( __FILE__, array( 'Polaroids_Gallery', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Polaroids_Gallery', 'deactivate' ) );







add_action( 'plugins_loaded', array( 'Polaroids_Gallery', 'get_instance' ) );







if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/settings-api.php' );


}
