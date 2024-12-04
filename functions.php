<?php

if (!defined('ABSPATH')) {
   exit;
}

/**
 * Autoload
 */
include get_template_directory() . '/vendor/autoload.php';

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
