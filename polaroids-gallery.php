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
    'supports' => array('title','thumbnail', )
) );

$slider->add_taxonomy( 'group');

$slider->add_meta_box( 
   'pslider',
   'Options', 
    array(
        array(
            'name'          => 'bighead',
            'label'         => 'Page Heading',
            'description'   => 'Add a large Concise Heading',
            'type'          => 'text'
         ),
         array(
            'name'          => 'bigdescription',
            'label'         => 'Page Description',
            'description'   => 'Add a large Concise sub Heading',
            'type'          => 'textarea'
         ),





      )
   );








function slider_shortcode( $atts ) {
	ob_start();
	 
		extract($atts);

?>
<section id="photostack-1" class="photostack photostack-start">
				<div>
					<figure>
						<a href="http://goo.gl/Qw3ND4" class="photostack-img"><img src="http://placehold.it/250x250" alt="img01"/></a>
						<figcaption>
							<h2 class="photostack-title">Serenity Beach</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/fhwlSP" class="photostack-img"><img src="http://placehold.it/250x250" alt="img02"/></a>
						<figcaption>
							<h2 class="photostack-title">Happy Days</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Jmvr4u" class="photostack-img"><img src="http://placehold.it/250x250" alt="img03"/></a>
						<figcaption>
							<h2 class="photostack-title">Beautywood</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/49lN3k" class="photostack-img"><img src="http://placehold.it/250x250" alt="img04"/></a>
						<figcaption>
							<h2 class="photostack-title">Heaven of time</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/NJ1Dhf" class="photostack-img"><img src="http://placehold.it/250x250" alt="img05"/></a>
						<figcaption>
							<h2 class="photostack-title">Speed Racer</h2>
						</figcaption>
					</figure>
					<figure>
						<a href="http://goo.gl/Ms7VDl" class="photostack-img"><img src="http://placehold.it/250x250" alt="img06"/></a>
						<figcaption>
							<h2 class="photostack-title">Forever this</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img07"/></a>
						<figcaption>
							<h2 class="photostack-title">Lovely Green</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img08"/></a>
						<figcaption>
							<h2 class="photostack-title">Wonderful</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img09"/></a>
						<figcaption>
							<h2 class="photostack-title">Love Addict</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img10"/></a>
						<figcaption>
							<h2 class="photostack-title">Friendship</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img11"/></a>
						<figcaption>
							<h2 class="photostack-title">White Nights</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img12"/></a>
						<figcaption>
							<h2 class="photostack-title">Serendipity</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img13"/></a>
						<figcaption>
							<h2 class="photostack-title">Pure Soul</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img14"/></a>
						<figcaption>
							<h2 class="photostack-title">Winds of Peace</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img15"/></a>
						<figcaption>
							<h2 class="photostack-title">Shades of blue</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img16"/></a>
						<figcaption>
							<h2 class="photostack-title">Lightness</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img10"/></a>
						<figcaption>
							<h2 class="photostack-title">Friendship</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img11"/></a>
						<figcaption>
							<h2 class="photostack-title">White Nights</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img12"/></a>
						<figcaption>
							<h2 class="photostack-title">Serendipity</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img13"/></a>
						<figcaption>
							<h2 class="photostack-title">Pure Soul</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img14"/></a>
						<figcaption>
							<h2 class="photostack-title">Winds of Peace</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img15"/></a>
						<figcaption>
							<h2 class="photostack-title">Shades of blue</h2>
						</figcaption>
					</figure>
					<figure data-dummy>
						<a href="#" class="photostack-img"><img src="http://placehold.it/250x250" alt="img16"/></a>
						<figcaption>
							<h2 class="photostack-title">Lightness</h2>
						</figcaption>
					</figure>
				</div>
			</section>

<?php

	echo $id;


	 return ob_get_clean();


}
add_shortcode( 'tpslider','slider_shortcode' );





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
