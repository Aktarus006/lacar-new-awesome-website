<?php

return [
    // Login credentials
    'username' => env('GATEKEEPER_USERNAME', 'lacar'),
    'password' => env('GATEKEEPER_PASSWORD', 'test'),

    // The key as which the littlegatekeeper session is stored
    'sessionKey' => 'littlegatekeeper.loggedin',

    // The route to which the middleware redirects if a user isn't authenticated
    'authRoute' => 'login',
];
