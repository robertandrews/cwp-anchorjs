<?php
/*
Plugin Name:    Context AnchorJS
Description:    Turn elements into nice anchor links with AnchorJS.
Text-Domain:    cxt-anchorjs
Version:        1.0
Author:         Robert Andrews
Author URI:     http://www.robertandrews.co.uk
License:        GPL v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Add the files.
 * - Add AnchorJS library.
 * - Add custom JS instructing AnchorJS which elements to use.
 * NB. Post sections are given ids by cxt-post-segmenter
 */
function enqueue_anchor_files() {
    wp_enqueue_script( 'AnchorJS', 'https://cdn.jsdelivr.net/npm/anchor-js/anchor.min.js', array(), null, true ); // Footer before </body>
    wp_enqueue_script( 'AnchorJSSettings', plugin_dir_url( __FILE__ ).'settings.js', array(), null, true ); // Footer before </body>
}
add_action( 'wp_enqueue_scripts', 'enqueue_anchor_files' );
?>