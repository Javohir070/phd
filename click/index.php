<?php


require(__DIR__ . '/vendor/autoload.php');

use click\applications\Application;
use click\models\Payments;

Application::session('JKhkjANmjHAJjbnKAhA', ['/prepare', '/complete'], function(){



    $payments = new Payments([
        'db' => [
            'dsn' => 'mysql:host=127.0.0.1;dbname=mttpsixo_psixolog_portal',
            'username' => 'mttpsixo_psixolog',
            'password' => 'Psixolog123!@'
        ]
    ]);

    $application = new Application([
        'type' => 'json',
        'model' => $payments,
        'configs' => [
            'click' => [
                'merchant_id' => '14180',
                'service_id' => '19675',
                'user_id' => '22539',
                'secret_key' => '876lBbwnU2OkMo'
            ]
        ]
    ]);
    $application->run();
});