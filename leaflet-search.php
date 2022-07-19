<?php
/**
 * Plugin Name: Leaflet Search Extension for Leaflet Map
 * Author: BW
 * Version: 1.0.0
 */


function leaflet_search_loader() {
  wp_enqueue_script('leaflet_search', plugin_dir_url(__FILE__) . 'leaflet-search.min.js', Array('wp_leaflet_map'), '1.0', true);
  wp_enqueue_style('leaflet_search_styles', plugin_dir_url(__FILE__) . 'leaflet-search.min.css');
}
add_action('leaflet_map_loaded', 'leaflet_search_loader');

