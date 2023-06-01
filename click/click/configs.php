<?php

//  ██████╗██╗     ██╗ ██████╗██╗   ██╗    ██╗    ██╗██████████╗
// ██╔════╝██║     ██║██╔════╝██║ ██╔═╝    ██║    ██║      ██╔═╝
// ██║     ██║     ██║██║     ████╔═╝      ██║    ██║    ██╔═╝
// ██║     ██║     ██║██║     ██║ ██╗      ██║    ██║  ██══╝
// ╚██████╗███████╗██║╚██████╗██║   ██╗ ██╗█████████║██████████╗
//  ╚═════╝╚══════╝╚═╝ ╚═════╝╚═╝   ╚═╝ ╚═╝╚════════╝╚═════════╝

return [
    'provider' => [
        'endpoint' => 'https://api.click.uz/v2/merchant/',
        'click' => [
            'merchant_id' => '14180',
            'service_id' => '19675',
            'user_id' => '22539',
            'secret_key' => '876lBbwnU2OkMo'
        ],
    ],
    'db' => [
        // basic configs
        'dsn' => 'mysql:host=localhost;dbname=mttpsixo_psixolog_portal',
        'username' => 'mttpsixo_psixolog',
        'password' => 'Psixolog123!@'
    ]
];