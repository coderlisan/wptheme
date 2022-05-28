<?php
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup() {
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('custom-header');
  add_theme_support('custom-background');
  add_theme_support('post-formats', ['video', 'audio', 'gallery']);
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  register_nav_menus(['main_menu' => 'Main Menu', 'footer_1' => 'Foooter 1', 'footer_2' => 'Foooter 2']);

  register_post_type('clients', [
    'public' => true,
    'labels' => ['name' => 'Clients','all_items' => 'All Clients','add_new' => 'Add new Clients','add_new_item' => 'Add new Clients','featured_image' => 'Clients Image','set_featured_image' => 'Set Clients Image'],
    'supports' => ['title', 'thumbnail', 'editor'],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-aside',
  ]);
}

add_action('wp_enqueue_scripts', 'css_js_connect');
function css_js_connect() {
  wp_enqueue_style('C01', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('C02', get_template_directory_uri() . '/assets/css/all.css');
  wp_enqueue_style('C00', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('J02', get_template_directory_uri() . '/assets/js/vendors/popper.min.js');
  wp_enqueue_script('J03', get_template_directory_uri() . '/assets/js/vendors/bootstrap.min.js');
  wp_enqueue_script('J04', get_template_directory_uri() . '/assets/js/vendors/bootstrap-slider.min.js');
  wp_enqueue_script('J05', get_template_directory_uri() . '/assets/js/vendors/jquery.easing.min.js');
  wp_enqueue_script('J06', get_template_directory_uri() . '/assets/js/vendors/owl.carousel.min.js');
  wp_enqueue_script('J07', get_template_directory_uri() . '/assets/js/vendors/countdown.min.js');
  wp_enqueue_script('J08', get_template_directory_uri() . '/assets/js/vendors/jquery.waypoints.min.js');
  wp_enqueue_script('J09', get_template_directory_uri() . '/assets/js/vendors/jquery.rcounterup.js');
  wp_enqueue_script('J10', get_template_directory_uri() . '/assets/js/vendors/magnific-popup.min.js');
  wp_enqueue_script('J11', get_template_directory_uri() . '/assets/js/vendors/validator.min.js');
  wp_enqueue_script('J12', get_template_directory_uri() . '/assets/js/vendors/hs.megamenu.js');
  wp_enqueue_script('J00', get_template_directory_uri() . '/assets/js/app.js');
  wp_enqueue_script('J13', get_template_directory_uri() . '/assets/js/custom.js');
}

// require_once "assets/lib/opt/redux-core/framework.php";
// require_once "assets/lib/opt/sample/config.php";
// require_once "assets/lib/tgm/example.php";
require_once "assets/lib/cmb/config.php";
require_once "assets/lib/cmb/init.php";

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item) {
  $classes[] = 'nav-item hs-has-sub-menu custom-nav-item';
  return $classes;
}

// Footer left widget start
add_action('widgets_init', 'footer_left');
function footer_left() {
  register_sidebar(['name' => 'Footer left', 'id' => 'ft_lf']);
}

class footer_left extends WP_Widget {
  public function __construct() {
    parent::__construct('ls_ft', 'Footer Title');
    add_action('widgets_init', function () {
      register_widget('footer_left');
    });
  }

  public function widget($args, $instance) {
    $title = isset($instance['title']) ? $instance['title'] : '';
    $fb = isset($instance['fb']) ? $instance['fb'] : '';
    $yt = isset($instance['yt']) ? $instance['yt'] : '';
    $lk = isset($instance['lk']) ? $instance['lk'] : '';
    $bh = isset($instance['bh']) ? $instance['bh'] : '';
    $pk = isset($instance['pk']) ? $instance['pk'] : '';
    echo $args['before_widget']; ?>

    <a href="#" class="navbar-brand mb-2"><img src="<?= $instance['pk'] ?>" width="180" /></a>
    <br />
    <p><?= $instance['title'] ?></p>
    <ul class="list-inline social-list-default background-color social-hover-2 mt-2">
      <li class="list-inline-item"><a class="twitter" href="<?= $instance['fb'] ?>"><i class="fab fa-twitter"></i></a></li>
      <li class="list-inline-item"><a class="youtube" href="<?= $instance['yt'] ?>"><i class="fab fa-youtube"></i></a></li>
      <li class="list-inline-item"><a class="linkedin" href="<?= $instance['lk'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
      <li class="list-inline-item"><a class="dribbble" href="<?= $instance['bh'] ?>"><i class="fab fa-dribbble"></i></a></li>
    </ul>

  <?php echo $args['after_widget'];
  }

  public function form($instance) {
    $title = isset($instance['title']) ? $instance['title'] : '';
    $fb = isset($instance['fb']) ? $instance['fb'] : '';
    $yt = isset($instance['yt']) ? $instance['yt'] : '';
    $lk = isset($instance['lk']) ? $instance['lk'] : '';
    $bh = isset($instance['bh']) ? $instance['bh'] : '';
    $pk = isset($instance['pk']) ? $instance['pk'] : '';
  ?>
    <p><label>Logo url</label><input type="text" name="<?= $this->get_field_name('pk') ?>" id="<?= $this->get_field_id('pk') ?>" class="widefat" value="<?= $pk ?>"></p>
    <p><label>Name</label><input type="text" name="<?= $this->get_field_name('title') ?>" id="<?= $this->get_field_id('title') ?>" class="widefat" value="<?= $title ?>"></p>
    <p><label>Facebook Link</label><input type="text" name="<?= $this->get_field_name('fb') ?>" id="<?= $this->get_field_id('fb') ?>" class="widefat" value="<?= $fb ?>"></p>
    <p><label>Youtube Link</label><input type="text" name="<?= $this->get_field_name('yt') ?>" id="<?= $this->get_field_id('yt') ?>" class="widefat" value="<?= $yt ?>"></p>
    <p><label>LinkedIn Link</label><input type="text" name="<?= $this->get_field_name('lk') ?>" id="<?= $this->get_field_id('lk') ?>" class="widefat" value="<?= $lk ?>"></p>
    <p><label>Behance Link</label><input type="text" name="<?= $this->get_field_name('bh') ?>" id="<?= $this->get_field_id('bh') ?>" class="widefat" value="<?= $bh ?>"></p>
  <?php }
	
  public function update($new_ins, $old_ins) {
    $instance = [];
    $instance['title'] = isset($new_ins['title']) ? strip_tags($new_ins['title']) : '';
    $instance['fb'] = isset($new_ins['fb']) ? strip_tags($new_ins['fb']) : '';
    $instance['lk'] = isset($new_ins['lk']) ? strip_tags($new_ins['lk']) : '';
    $instance['yt'] = isset($new_ins['yt']) ? strip_tags($new_ins['yt']) : '';
    $instance['bh'] = isset($new_ins['bh']) ? strip_tags($new_ins['bh']) : '';
    $instance['pk'] = isset($new_ins['pk']) ? strip_tags($new_ins['pk']) : '';
    return $instance;
  }
}
$footer_left = new footer_left();

// Footer left widget ends
add_action('widgets_init', 'header_logo');
function header_logo() {
  register_sidebar(['name' => 'Header Logo', 'id' => 'hd_lg']);
}

class header_logo extends WP_Widget {
  public function __construct() {
    parent::__construct('ls_hd', 'Header Logo');
    add_action('widgets_init', function () {
      register_widget('header_logo');
    });
  }

  public function widget($args, $instance) {
    $pk = isset($instance['pk']) ? $instance['pk'] : '';
    echo $args['before_widget']; ?>

    <img class="hd_logo" width="180" src="<?= $instance['pk'] ?>" />
  <?php echo $args['after_widget'];
  }

  public function form($instance) {
    $pk = isset($instance['pk']) ? $instance['pk'] : '';
  ?>
    <p>
      <label>Header Logo URL</label>
      <input type="text" name="<?= $this->get_field_name('pk') ?>" id="<?= $this->get_field_id('pk') ?>" class="widefat" value="<?= $pk ?>">
    </p>
<?php }
  public function update($new_ins, $old_ins) {
    $instance = [];
    $instance['pk'] = isset($new_ins['pk']) ? strip_tags($new_ins['pk']) : '';
    return $instance;
  }
}
$header_logo = new header_logo();

// Remove a class from menu-item 1
function clear_nav_menu_item_class($classes, $item, $args) {
    return array();
}
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);

// Remove a class from menu-item 2
function wpdocs_channel_nav_class( $classes, $item, $args ) {
    if ( 'network-menu' === $args->theme_location ) $classes[] = "network-menu-item";
    else $classes[] = "menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-9 nav-item custom-nav-item";
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_channel_nav_class' , 10, 4 );

// Domain Prices Custom Post Type
function cpt_domain_price() {
	$labels = array(
		'name'                  => _x( 'Domain Prices', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Domain Price', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Domain Price', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'TLD', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Domain Price', 'text_domain' ),
		'description'           => __( 'Domain name and price', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_dom_name', $args );
}
add_action( 'init', 'cpt_domain_price', 0 );

// Domain Offers Custom Post Type
function cpt_domain_offers() {
	$labels = array(
		'name'                  => _x( 'Domain Offer', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Domain Offer', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Domain Offer', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Domain name', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Domain Offer', 'text_domain' ),
		'description'           => __( 'Domain offer price', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type_offers', $args );
}
add_action( 'init', 'cpt_domain_offers', 0 );

// our_teams Custom Post Type
function our_teams() {
	$labels = array(
		'name'                  => _x( 'Our Teams', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Our Teams', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Our Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Our Team', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Our Teams', 'text_domain' ),
		'description'           => __( 'Our Teams Posts', 'text_domain' ),
		'labels'                => $labels,
		'orderby' => 'date',
		'order' => 'DESC',
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'our_teams_cpt', $args );
}
add_action( 'init', 'our_teams', 0 );
