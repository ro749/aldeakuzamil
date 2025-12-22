<?php

return [
    'tables' => [
        'Torre' => App\Tables\Torre::class,
        'TorreAdmin' => App\Tables\TorreAdmin::class,
    ],
    'forms' => [
        'UnitEdit' => App\Forms\UnitEdit::class,
    ],
    'models' => [
        'Unit' => App\Models\Unit::class,
        'User' => App\Models\User::class,
    ],
    'controllers' => [
        'Controller' => App\Http\Controllers\Controller::class,
    ],
    'views' => [
        'disponibilidad' => 'disponibilidad',
        'financial-proyection' => 'financial-proyection',
        'head' => 'head',
        'header' => 'header',
        'simple-login' => 'simple-login',
        'welcome' => 'welcome',
    ],
    'image_map_pro' => App\ImageMapPro\SingleImageMapPro::class,
];
