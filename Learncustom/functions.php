<?php  
// Register for Menus in wp admin
register_nav_menus(
array('primary_menu' => 'Top Menu')
);

register_nav_menus(
      array(
        'primary' => esc_html__( 'Primary menu', 'Top Menu' ),
      )
    );


// Register for custom feature in wp admin
add_theme_support('post-thumbnails');

// Register for custom header in wp admin
add_theme_support('custom-header');

add_post_type_support('page','excerpt');

// Changing excerpt length
function new_excerpt_length($length) {
return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
 
// Changing excerpt more
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


 add_theme_support('custom-background');

    register_sidebar( 
    	array(
        'name'=>'Sidebar Location',
        'id'=>'sidebar',
        
    ) );
 
    register_sidebar( 
    	array(
        'name'=>'Client Testimonials',
        'id'=>'testimonials',
        
    ) );

    register_sidebar( 
        array(
        'name'=>'Categories List',
        'id'=>'categories',
        
    ) );

    register_sidebar(
        array(
            'name'=>'Home Page Testimonials',
            'id'=>'hometestimonials'
        )
    );
register_sidebar(array(
'name'=> 'Practices Page',
'id'=>'practice_sidebar'

)

);

       register_sidebar( array(
        'name'          => __( 'footer 1', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'theme_name' ),
        'id'            => 'sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


     register_sidebar( array(
        'name'          => __( 'Copyright', 'theme_name' ),
        'id'            => 'copyrightfooter',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
   

    register_sidebar( array(
        'name'          => __( 'Home Page banner', 'theme_name' ),
        'id'            => 'home_page',
        'before_widget' => '<p class="detail">',
        'after_widget'  => '</p>',
        'before_title'  => '<h1 class="detail">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Page Text', 'theme_name' ),
        'id'            => 'home_page_text',
        'before_widget' => '<p class="detail">',
        'after_widget'  => '</p>',
        'before_title'  => '<h1 class="detail">',
        'after_title'   => '</h1>',
    ) );


     // *****Import Custom CSS File First Method*****

//     wp_enqueue_style ('theme-style', get_template_directory_uri().'/style.css');
// wp_enqueue_style ('my-style', get_template_directory_uri().'/css/mainstyle.css', array('theme-style'));


// *****Import Custom CSS File Second Method*****

// function child_enqueue_styles() {

//     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style ( 'custom', get_template_directory_uri () . '/css/mainstyle.css', array( 'style' ) );
//     wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
//  }
// add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');

function cpt_practices_function() {
         $supports = array(
         'title', // post title
         'editor', // post content
         'author', // post author
         'thumbnail', // featured images
         'excerpt', // post excerpt
         'custom-fields', // custom fields
         'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
        );
    $labels = array(
        'name'               => _x( 'Practices', 'post type general name', 'textdomain'),
        'singular_name'      => _x( 'My Practices', 'post type singular name', 'textdomain'),
        'add_new'            => _x( 'Add New', 'textdomain'),
        'add_new_item'       => __( 'Add New Practices', 'textdomain'),
        'edit_item'          => __( 'Edit Practices', 'textdomain'),
        'new_item'           => __( 'New Practices', 'textdomain'),
        'all_items'          => __( 'All Practices', 'textdomain'),
        'view_item'          => __( 'View Practices', 'textdomain'),
        'search_items'       => __( 'Search Practices', 'textdomain'),
        'not_found'          => __( 'No My Practice found', 'textdomain'),
        'not_found_in_trash' => __( 'No My Practices found in the Trash','textdomain'),
        'parent_item_colon'  => '',
        'menu_name'          => 'Practices'
    );
    $args = array(
        'labels' => $labels,
        'supports' => $supports,
        'taxonomies' => array( 'post_tag' ),
        'description'   => 'Holds our Practices and Practices specific data',
        'public'        => true,
        'menu_position' => 5,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'practices'),
        'has_archive'   => true,

        // For Latest Editor
        // 'show_in_rest'       => true
    );
    register_post_type( 'mypractices', $args );
    
    register_taxonomy("categories", array("mypractices"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Category", "rewrite" => array( 'slug' => 'mypractices', 'with_front'=> false )));
}
add_action( 'init', 'cpt_practices_function' );



// ***** Custom Post Type for neNews *****


add_action( 'init', 'create_custom_post_type' );
 
function create_custom_post_type() {

 
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);

 $labels = array(
'name' => _x('Layers', 'plural'),
'singular_name' => _x('Layers', 'singular'),
'menu_name' => _x('Layers', 'admin menu'),
'name_admin_bar' => _x('Layers', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New Layers'),
'new_item' => __('New Layers'),
'edit_item' => __('Edit Layers'),
'view_item' => __('View Layers'),
'all_items' => __('All Layers'),
'search_items' => __('Search Layers'),
'not_found' => __('No Layers found.'),
);

$args = array(
  'labels' => $labels,
  'supports' => $supports,
  'taxonomies' => array( 'post_tag' ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'layers'),
 );
 
register_post_type( 'layers',$args);
}


function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('Locations', 'layers', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Categories' ),
      'all_items' => __( 'All Categories' ),
      'parent_item' => __( 'Parent Categories' ),
      'parent_item_colon' => __( 'Parent Categories:' ),
      'edit_item' => __( 'Edit Categories' ),
      'update_item' => __( 'Update Categories' ),
      'add_new_item' => __( 'Add New Categories' ),
      'new_item_name' => __( 'New Categories Name' ),
      'menu_name' => __( 'Categories' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'categories', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );

// add_shortcode('practice_cat', 'getcat');
// function getcat(){
//   // $practicescat = get_terms('categories');
//   // print_r($practicescat);   
// }

// Get Custom Post Type Categories List

add_shortcode('practice_cat', 'getcat');
function getcat(){

  wp_list_categories(array(
    'taxonomy' => 'categories',
    'title_li' => '',
    'post_type' => 'mypractices'
));

// End   
}


// The shortcode function for Get Select Multiple Value by ACF
add_shortcode('demo_test', 'test');
function test(){

  ob_start();
  $method = get_field( 'tests' );
  
  if( $method ):  
    echo '<ul class="collection-method-wrapper">';
    foreach($method as $method_item){
    echo '<li><i class="fa fa-check-circle-o"></i>'.$method_item.'</li>';
    }
    echo '</ul>';
    
endif; 
    return ob_get_clean();
}

// The shortcode function for Get Select Multiple Value by ACF
add_shortcode('choice', 'test_choice');
function test_choice(){

  ob_start();
  $method = get_field( 'collection_method' );
  
  if( $method ):  
    echo '<ul class="collection-method-wrapper">';
    foreach($method as $method_item){
    echo '<li><i class="fa fa-check-circle-o"></i>'.$method_item.'</li>';
    }
    echo '</ul>';
    
endif; 
    return ob_get_clean();
}


// The shortcode function for Get Select Multiple Value by ACF
add_shortcode('redio', 'test_radio');
function test_radio(){
 ob_start(); ?>
 
  <?php
$color = get_field('color');
?>
<p>Color: <span class="color-<?php echo esc_attr($color['value']); ?>"><?php echo esc_html($color); ?></span></p>
    
<?php 
    return ob_get_clean(); 
}





