<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
        'Ventas' => App\Tables\Ventas::class,
    ],
    'forms' => [
        'RegisterSale' => App\Forms\RegisterSale::class,
        'UnitEdit' => App\Forms\UnitEdit::class,
        'VentaEdit' => App\Forms\VentaEdit::class,
    ],
    'models' => [
        'Sale' => App\Models\Sale::class,
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'controllers' => [
        'AdminController' => App\Http\Controllers\AdminController::class,
        'Controller' => App\Http\Controllers\Controller::class,
    ],
    'views' => [
        'disponibilidad' => 'disponibilidad',
        'financial-proyection' => 'financial-proyection',
        'head' => 'head',
        'header' => 'header',
        'sales-table' => 'sales-table',
        'simple-login' => 'simple-login',
        'welcome' => 'welcome',
    ],
    'image_map_pro' => App\ImageMapPro\SingleImageMapPro::class,
];
