<?php

/*
 * You can place your custom package configuration in here.
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Trade Service Defaults
    |--------------------------------------------------------------------------
    |
    | Configure the trade service 
    |
    */


    /*
    |--------------------------------------------------------------------------
    | Migration map
    |--------------------------------------------------------------------------
    |
    | Configure the trade service 
    |
    */

	'migration' =>[
         __DIR__ . '../src/database/migrations/_create_services_table.php',
         __DIR__ . '../src/database/migrations/_create_service_accocunts_table.php',
    ],

    /*
    |--------------------------------------------------------------------------
    | Service Registration 
    |--------------------------------------------------------------------------
    |
    | Shape of ['service' => 'TD Ameritrade', 'code' => 'tda'] 
    |
    | * Call php artisan financial:migrate to update the services table
    | to apply changes
    */
	'services' => [
		'tda' => [
            'service' => 'TD Ameritrade',
            'auth' => G2\FinancialAdapter\TdAmeritrade\TdAmeritradePass::class,
            'client' => G2\FinancialAdapter\TdaSdk\Tdameritrade::class,
            'adapter' => G2\FinancialAdapter\TdAmeritrade\TdAmeritradeAdapter::class,
        ]
	]
];