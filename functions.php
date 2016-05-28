<?php
/**
 **********************************************
 * functions.php
 **********************************************
 *
 * The theme functions.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if( !isset( $content_width ) ) {
  $content_width = 600;
}

// Theme Dependencies ~ best not remove these!
require_once locate_template('includes/class-tgm-plugin-activation.php');
require_once ( 'includes/wp_bootstrap_navwalker.php' );

// Admin Customisations
require_once( 'config/admin.php' );

// Theme Specific Customisations
require_once( 'config/enqueue.php' );
require_once( 'config/menus.php' );
require_once( 'config/widgets.php' );
require_once( 'config/comments.php' );
require_once( 'config/support.php' );
require_once( 'config/breadcrumbs.php' );
require_once( 'config/pagination.php' );
require_once( 'config/woocommerce.php' );

// Theme Recommended & Required Plugins
require_once( 'config/required_plugins.php' );

// Theme custom post types
// require_once( '' );
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-item nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
?>
