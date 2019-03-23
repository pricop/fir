<?php

define('FIR', true);

// Database Settings
define('DB_HOST', 'localhost');
define('DB_USER', 'YOURDBUSER');
define('DB_NAME', 'YOURDBNAME');
define('DB_PASS', '');
define('DB_PREFIX', '');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATION', 'utf8mb4_unicode_ci');

// External Paths
define('URL_PATH', 'https://localhost/your-project');

// Internal Paths
define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'theme');
define('STORAGE_PATH', 'storage');
define('UPLOADS_PATH', 'uploads');

// Miscellaneous
define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH) . '/');