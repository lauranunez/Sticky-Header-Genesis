//* Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'custom_load_scripts' );
function custom_load_scripts() {

	wp_enqueue_script( 'shrinking-header', get_bloginfo( 'stylesheet_directory' ) . '/js/shrinking-header.js', array( 'jquery' ), '1.0.0', true );

}
