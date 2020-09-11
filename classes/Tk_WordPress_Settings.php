<?php
declare(strict_types=1);

namespace TK_WORDPRESS_OPTIMIZER;

class Tk_WordPress_Settings
{
    private $pluginUrl;

    public function __construct(string $pluginUrl)
    {
        $this->pluginUrl = $pluginUrl;
        if (!defined('WP_POST_REVISIONS')) {
            define('WP_POST_REVISIONS', 10);
        }
        if (!defined('AUTOSAVE_INTERVAL')) {
            define('AUTOSAVE_INTERVAL', 120);
        }
        if (!defined('EMPTY_TRASH_DAYS')) {
            define('EMPTY_TRASH_DAYS', 15);
        }
        if (!defined('FS_CHMOD_FILE')) {
            define('FS_CHMOD_FILE', 0644);
        }
        if (!defined('FS_CHMOD_DIR')) {
            define('FS_CHMOD_DIR', 0755);
        }
        if (!defined('DISALLOW_FILE_EDIT')) {
            define('DISALLOW_FILE_EDIT', true);
        }
        if (!defined('WP_MEMORY_LIMIT')) {
            define('WP_MEMORY_LIMIT', '128M');
        }
        if (!defined('WP_MAX_MEMORY_LIMIT')) {
            define('WP_MAX_MEMORY_LIMIT', '128M');
        }
        add_action('admin_enqueue_scripts', [$this, 'hideWeakPassword']);
    }

    public function hideWeakPassword()
    {
        wp_enqueue_style('tk_admin_style', $this->pluginUrl . 'assets/css/adminCSS.css');
    }
}
