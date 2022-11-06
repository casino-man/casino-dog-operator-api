<?php

// config for Wainwright/CasinoDogOperatorApi
return [

    'access' => [
      'key' => '25ec095c710439e79f7eb254b93d0403',
      'secret' => '551189d27',
  ],
    'test_settings' => [
        'start_balance' => 22500, // enter starting balance (integer in cents)
    ],

    /* Firewall is used within RestrictIpAddressMiddleware */
    'firewall' => [
        'https_only' => false, // redirect requests in http to https
        'restrict_callback' => false,
        'restrict_all_routes' => false, // restrict full app on ip
        'allowed_ip' => [
          '85.148.48.255',
          '127.0.0.1'
        ],
      ],

    // You can customize endpoints as you like, and split/scale however you feel fit. 
    // Please do note if you change a single endpoint to go to different host that the "casino-dog-operator-api:connect-to-api" will not update custom endpoints
    'api_url' => 'https://casinoman.app', /* api_url is the base url to contact, it should not end with slash */
    'endpoints' => [
      'create_session' => 'https://casinoman.app/api/createSession',
      'toggle_respin' => 'https://casinoman.app/api/control/toggle_respin',
      'gameslist' => 'https://casinoman.app/api/gameslist/all',
      'access_ping' => 'https://casinoman.app/api/accessPing',
    ],
];

