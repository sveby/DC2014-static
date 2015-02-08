<?php
 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
 
if ( function_exists('register_sidebar') ) {
    #register default sidebar:
    register_sidebar("Right sidebar");
    
    #register titlepage left column:
    $args = array(
	'name'          => __( 'Left column titlepage', 'theme_text_domain' ),
	'id'            => 'titlepage_left',
	'description'   => 'Sidebar titlepage left stuff',
        'class'         => '',
	'before_widget' => '',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="b bn f52">',
	'after_title'   => '</div>
	                <div class="dg f13">' );
    register_sidebar($args);
    
    $args = array(
	'name'          => __( 'Right column titlepage', 'theme_text_domain' ),
	'id'            => 'titlepage_right',
	'description'   => 'Sidebar titlepage right stuff',
        'class'         => '',
	'before_widget' => '<div class="dg f13">',
	'after_widget'  => '</div>',
	'before_title'  => '<div class="news_c b f16">',
	'after_title'   => '</div>
	                <div class="news_sub dg f12">' );
    register_sidebar($args);
}
    
?>
