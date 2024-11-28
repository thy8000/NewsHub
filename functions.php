<?php

if (!defined('ABSPATH')) {
   exit;
}

/**
 * Functions
 */
require_once implode(DIRECTORY_SEPARATOR, [get_template_directory(), 'utils', 'debug.php']);

/**
 * Classes
 */
new NewsHub\Core\EnqueueScripts();
new NewsHub\Core\TemplateHierarchy();
new NewsHub\Core\ThemeSupport();
new NewsHub\Core\WPHead();
