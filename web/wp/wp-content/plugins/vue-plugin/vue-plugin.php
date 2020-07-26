<?php
/*
Plugin Name: Vue Plugin
Description: Intègre Vue.js dans Wordpress
Version: 1.0.0
Author: Yann Briand
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', array(), '2.6.11');
wp_enqueue_script('app', plugin_dir_url(__FILE__) . 'app.js', array(), '1.0.0', true);