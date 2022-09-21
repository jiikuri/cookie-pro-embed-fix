<?php

/** 
 * Plugin Name: Cookie Pro Embed Fix
 * Description: Show a message on the empty video slot
 * Version: 1.0.0
 * Author: Kalle Halonen
 */

add_action('wp_enqueue_scripts', 'cookieProEmbedFix');
function cookieProEmbedFix() {
    wp_enqueue_script('app', plugin_dir_url(__FILE__) . 'app.js');
}
