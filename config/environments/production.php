<?php

use Roots\WPConfig\Config;

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

// Debug / Log
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_LOG', true);
