<?php

return [
    'plugin' => [
        'name' => 'User Export PDF',
        'description' => 'Export uživatelské karty do PDF',
    ],
    'permission' => [
        'tab' => 'Export uživatelů do PDF',
        'export' => 'Export do PDF',
    ],
    'list' => [
        'export' => [
            'column' => 'Akce',
            'button' => 'Exportovat',
        ],
    ],
];