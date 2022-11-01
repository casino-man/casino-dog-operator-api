<?php

// config for Wainwright/CasinoDogOperatorApi
return [

    'access' => [
      'key' => '95d8963ba96693cb2b184ad92eeb7304',
      'secret' => '020e56bfae5',
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
    'api_url' => 'https://777.dog', /* api_url is the base url to contact, it should not end with slash */
    'endpoints' => [
      'create_session' => 'https://777.dog/api/createSession',
      'toggle_respin' => 'https://777.dog/api/control/toggle_respin',
      'gameslist' => 'https://777.dog/api/gameslist/all',
      'access_ping' => 'https://777.dog/api/accessPing',
    ],
];

