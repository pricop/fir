<?php

define('FIR', true);

// Database Settings
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_NAME', 'fir');
define('DB_PASS', '');
define('DB_PREFIX', '');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATION', 'utf8mb4_unicode_ci');

// External Paths
define('URL_PATH', 'https://192.168.1.100/fir');

// Internal Paths
define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'theme');
define('STORAGE_PATH', 'storage');
define('UPLOADS_PATH', 'uploads');

// Miscellaneous
define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH) . '/');