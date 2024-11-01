<?php
/**
 * Plugin Name: WP Search Exclude Categories and Tags
 * Plugin URI: https://eastsidecode.com
 * Description: Excludes Categories and Tag pages from search engines
 * Version: 1.0
 * Author: Louis Fico
 * Author URI: http://eastsidecode.com
 * License: GPL12
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// add no index meta tag for categories

add_action('wp_head', function() {
    if (is_category() || is_tag()) {
        echo '<meta name="robots" content="noindex">';
    }
});

