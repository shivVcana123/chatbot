<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', '/change/status', '/chatbot/message/*', 'botman', 'chatbot/*'],  // Add all necessary paths with wildcards
    'allowed_methods' => ['*'],  // Allow all methods (POST, GET, etc.)
    'allowed_origins' => ['*'],  // Allow any origin
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],  // Allow all headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,  // If you don't use cookies, set it to false
];
