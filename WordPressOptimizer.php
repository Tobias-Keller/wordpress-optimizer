<?php
declare(strict_types=1);

/**
 * Plugin Name:     WordPress Optimizer
 * Plugin URI:      TODO
 * Description:     optimize some basic WordPress Options, to be faster and secure
 * Version:         1.0
 * Requires PHP:    7.0
 * Author:          Tobias Keller
 * Author URI:      https://tobier.de
 * License:         MIT
 * Text Domain:     wordpress-optimizer
 * Domain Path:     /languages
 */

require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');
require_once(plugin_dir_path(__FILE__) . 'lib/wp-package-updater/class-wp-package-updater.php');

use TK_WORDPRESS_OPTIMIZER\Tk_WordPress_API;
use TK_WORDPRESS_OPTIMIZER\Tk_WordPress_Settings;
use TK_WORDPRESS_OPTIMIZER\TK_WordPress_Feeds;
use TK_WORDPRESS_OPTIMIZER\Tk_WordPress_Remove_Useless_Stuff;

class WordPressOptimizer
{
    protected $tkWpOptimizerPath = '';
    protected $tkWpOptimizerUrl = '';

    public function init()
    {
        defined('ABSPATH') || die();
        $this->tkWpOptimizerPath = plugin_dir_path(__FILE__);
        $this->tkWpOptimizerUrl = plugin_dir_url(__FILE__);
        $this->loadUpdateServer();
        $this->loadOptimizations();
    }

    private function loadUpdateServer()
    {
        new WP_Package_Updater(
            'https://plugins.tobier.de',
            wp_normalize_path(__FILE__),
            wp_normalize_path($this->tkWpOptimizerPath)
        );
    }

    private function loadOptimizations()
    {
        new Tk_WordPress_API();
        new TK_WordPress_Feeds();
        new Tk_WordPress_Remove_Useless_Stuff();
        new Tk_WordPress_Settings($this->tkWpOptimizerUrl);
    }
}

$tkWordPressOptimizer = new WordPressOptimizer();
$tkWordPressOptimizer->init();
