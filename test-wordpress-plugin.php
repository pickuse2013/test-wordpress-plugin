<?php

/**
 * Plugin Name: Test Wordpress Plugin
 */

add_action('init', 'wpse9870_init_external');
function wpse9870_init_external()
{
    global $wp_rewrite;
    $plugin_url = plugins_url('my-api.php', __FILE__);
    $plugin_url = substr($plugin_url, strlen(home_url()) + 1);
    // The pattern is prefixed with '^'
    // The substitution is prefixed with the "home root", at least a '/'
    // This is equivalent to appending it to `non_wp_rules`
    $wp_rewrite->add_external_rule('my-api.php$', $plugin_url);
}
