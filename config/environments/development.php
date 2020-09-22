<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

/**
 * WP Rocket Config
 */
Config::define('WP_ROCKET_EMAIL', env('WP_ROCKET_EMAIL'));
Config::define('WP_ROCKET_KEY', env('WP_ROCKET_KEY'));

Config::define('YOUR_OAUTH_ACCESS_TOKEN', env('YOUR_OAUTH_ACCESS_TOKEN'));
Config::define('YOUR_OAUTH_ACCESS_TOKEN_SECRET', env('YOUR_OAUTH_ACCESS_TOKEN_SECRET'));
Config::define('YOUR_CONSUMER_KEY', env('YOUR_CONSUMER_KEY'));
Config::define('YOUR_CONSUMER_SECRET', env('YOUR_CONSUMER_SECRET'));

/**
 * Custom Project Config
 */
Config::define('LAPOSTA_APIKEY', env('LAPOSTA_APIKEY'));

Config::define('CLIENT_ID', env('CLIENT_ID'));

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('SCRIPT_DEBUG', true);

ini_set('display_errors', 1);

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);
