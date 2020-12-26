<?php

/**
 * Plugin Name:       User delete profile linke
 * Plugin URI:        https://mario-flores.com
 * Description:       Supply a link for users to delete their profile
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Mario Flores
 * Author URI:        https://mario-flores.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mf_user_delete
 * Domain Path:       /languages
 */

add_shortcode('mf_delete_user', 'mf_delete_user');

function mf_delete_user()
{
    if (is_user_logged_in()) {
        global $wp;
        $confirm = $_POST['user_delete'];
        if (empty($confirm)) {
            ob_start();
            include(plugin_dir_path(__FILE__) . 'views/confirm_form.php');
            return  ob_get_clean();
        } else {
            wp_delete_user(get_current_user_id()); 
            ob_start();
            include(plugin_dir_path(__FILE__) . 'views/success.php');
            return  ob_get_clean();
        }
    } else {
        ob_start();
        include(plugin_dir_path(__FILE__) . 'views/not_logged_in.php');
        return  ob_get_clean();
    }
}
